<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'project_pictures' => 'nullable|array',
            'project_pictures.*' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'replace_images' => 'nullable|array',
            'replace_images.*' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'project_pictures.*.image' => 'Every new photo must be an image (jpeg, png, gif or webp).',
            'replace_images.*.image' => 'Every replacement photo must be an image (jpeg, png, gif or webp).',
        ];
    }
}
