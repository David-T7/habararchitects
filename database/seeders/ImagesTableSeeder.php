<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use App\Models\Project;

class ImagesTableSeeder extends Seeder
{
    /**
     * One images row per project, listing the photos in public/img/projects/{id}:
     * the main/ picture first (the views read it as $images[0]), then the rest.
     * Photos are not in git (/public/img/ is ignored), so a project without a
     * folder gets placeholder names: its images show broken, but pages still render.
     *
     * @return void
     */
    public function run()
    {
        foreach (Project::pluck('id') as $id) {
            $folder = public_path("img/projects/$id");
            $main = File::isDirectory("$folder/main") ? File::files("$folder/main") : [];
            $rest = File::isDirectory($folder) ? File::files($folder) : [];

            $pictures = collect([...$main, ...$rest])->map(fn ($file) => $file->getFilename())->values()->all();
            if (count($pictures) < 2) {
                $pictures = [...$pictures, ...array_slice(['1.jpg', '2.jpg'], count($pictures))];
            }

            // project_id is not mass-assignable on Image, so write the row directly.
            Image::forceCreate([
                'project_id' => $id,
                'project_pictures' => json_encode($pictures),
            ]);
        }
    }
}
