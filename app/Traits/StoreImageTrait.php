<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Project photos live in public/img/projects/{id}: the first (cover) picture in main/,
 * the rest beside it. The project's images row keeps their names, in display order, as JSON.
 */
trait StoreImageTrait
{
    /**
     * Current picture names of a project, cover first.
     */
    public function projectImageNames(int $project_id): array
    {
        $record = Image::where('project_id', $project_id)->first();

        return $record ? (json_decode($record->project_pictures, true) ?: []) : [];
    }

    /**
     * Replace, remove and add pictures of a project, then save the new list.
     *
     * @param  UploadedFile[]  $add      new pictures, appended at the end
     * @param  UploadedFile[]  $replace  new pictures keyed by the position they replace
     * @param  int[]           $remove   positions to delete
     */
    public function syncProjectImages(int $project_id, array $add = [], array $replace = [], array $remove = []): array
    {
        $record = Image::where('project_id', $project_id)->first() ?? new Image();
        $names = $record->exists ? (json_decode($record->project_pictures, true) ?: []) : [];

        // Replacements keep the picture's position, so positions in $remove stay valid.
        foreach ($replace as $index => $file) {
            if (isset($names[$index])) {
                File::delete($this->projectImagePath($project_id, $names[$index], $index === 0));
                $names[$index] = $this->moveProjectImage($project_id, $file, $names);
            }
        }

        foreach (array_unique($remove) as $index) {
            if (isset($names[$index])) {
                File::delete($this->projectImagePath($project_id, $names[$index], $index === 0));
                unset($names[$index]);
            }
        }

        $names = array_values($names);

        foreach ($add as $file) {
            $names[] = $this->moveProjectImage($project_id, $file, $names);
        }

        // New files land beside main/; move whichever picture is now first into main/.
        foreach ($names as $index => $name) {
            $target = $this->projectImagePath($project_id, $name, $index === 0);
            $other = $this->projectImagePath($project_id, $name, $index !== 0);

            if (! File::exists($target) && File::exists($other)) {
                File::ensureDirectoryExists(dirname($target));
                File::move($other, $target);
            }
        }

        $record->project_id = $project_id;
        $record->project_pictures = json_encode($names);
        $record->save();

        return $names;
    }

    protected function projectImagePath(int $project_id, string $name, bool $isCover): string
    {
        return public_path('img/projects/'.$project_id.($isCover ? '/main/' : '/').$name);
    }

    /**
     * Move an upload into the project folder under a name not used by any of its pictures.
     */
    protected function moveProjectImage(int $project_id, UploadedFile $file, array $taken): string
    {
        $base = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) ?: 'image';
        $extension = strtolower($file->getClientOriginalExtension() ?: $file->guessExtension());

        $name = $base.'.'.$extension;
        for ($i = 1; in_array($name, $taken)
            || File::exists($this->projectImagePath($project_id, $name, true))
            || File::exists($this->projectImagePath($project_id, $name, false)); $i++) {
            $name = $base.'-'.$i.'.'.$extension;
        }

        $file->move(public_path('img/projects/'.$project_id), $name);

        return $name;
    }
}
