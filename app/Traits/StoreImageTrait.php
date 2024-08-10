<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\Request;

trait StoreImageTrait
{
    public function verifyAndStoreImage(Request $request, $fieldname = 'project_pictures', $project_id = null)
    {

        $request->validate([
            $fieldname => 'required',
            $fieldname . '.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf',
        ]);

        if ($request->hasfile($fieldname)) {
            $imgData = []; // Initialize an empty array to store the image names

            foreach ($request->file($fieldname) as $key => $file) {
                $name = $file->getClientOriginalName();
                $mainPathName = '/img/projects/';

                // Check if it is the first image
                if ($key === 0) {
                    $innerFolder = 'main'; // Inner folder name
                    $file->move(public_path() . $mainPathName . $project_id . '/' . $innerFolder, $name);
                } else {
                    $file->move(public_path() . $mainPathName . $project_id, $name);
                }
                // $file->move(public_path() . $mainPathName . $project_id, $name);
                $imgData[] = $name;
            }

            $fileModal = new Image();
            $fileModal->project_pictures = json_encode($imgData);
            $fileModal->project_id = $project_id;

            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded!');
        }

        return $project_id;

    }

}
