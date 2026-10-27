<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            @can('projects_access')
                <!-- Projects -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="px-6 py-5 flex flex-wrap items-center justify-between gap-4 border-b border-gray-200">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Projects</h3>
                            <p class="text-sm text-gray-500">{{ $projectCount }} {{ \Illuminate\Support\Str::plural('project', $projectCount) }} in total</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ route('post_projects.index') }}" class="px-4 py-2 rounded-md border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                                Manage all projects
                            </a>
                            <a href="{{ route('post_projects.create') }}" class="px-4 py-2 rounded-md bg-gray-800 text-sm font-semibold text-white hover:bg-gray-700">
                                + Add New Project
                            </a>
                        </div>
                    </div>

                    @if ($recentProjects->isEmpty())
                        <p class="px-6 py-8 text-center text-gray-500">No projects yet. Click "Add New Project" to create the first one.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Location</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($recentProjects as $project)
                                        <tr onclick="window.location='{{ route('post_projects.show', $project->id) }}'" class="cursor-pointer hover:bg-gray-50 transition" title="Open project">
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $project->id }}</td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                <a href="{{ route('post_projects.show', $project->id) }}" class="hover:text-indigo-600 hover:underline">{{ $project->title }}</a>
                                                @if ($project->featured)
                                                    <span class="ms-2 px-2 py-0.5 rounded-full bg-yellow-100 text-yellow-800 text-xs">Featured</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $project->location }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $project->status }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $project->year }}</td>
                                            <td class="px-6 py-4 text-sm text-right whitespace-nowrap cursor-default" onclick="event.stopPropagation()">
                                                <a href="{{ route('post_projects.show', $project->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                                <a href="{{ route('post_projects.edit', $project->id) }}" class="ms-4 text-yellow-600 hover:text-yellow-800">Edit</a>
                                                <form action="{{ route('post_projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ms-4 text-red-600 hover:text-red-800">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            @endcan

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
