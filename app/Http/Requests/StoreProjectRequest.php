<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('projects_access');
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'code_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'collaborators' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'budget' => 'nullable|numeric',
            'story_num' => 'nullable|string|max:255',
            'site_area' => 'nullable|string|max:255',
            'floor_area' => 'nullable|string|max:255',
            'engineers' => 'nullable|array',
            'engineers.*' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'types' => 'nullable|array',
            'types.*' => 'nullable|string|max:255',
            'featured' => 'required|boolean',
            'postedBy' => 'required|integer',
            'project_pictures' => 'required|array',
            'project_pictures.*' => 'image|max:10240',
        ];
    }
}
