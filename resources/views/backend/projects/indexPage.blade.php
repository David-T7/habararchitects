<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle" style="display: inline;">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12 px-5 md:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('create_success'))
                <div class="text-center py-4 lg:px-4 mb-5" style="margin-top: -30px;">
                    <div class="py-3 px-8 items-center text-green-400 leading-none rounded-md flex lg:inline-flex" role="alert">
                        <svg id="check" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" class="mr-3">
                            <path id="Path_18" data-name="Path 18" d="M12.5,0A12.5,12.5,0,1,0,25,12.5,12.514,12.514,0,0,0,12.5,0Z" fill="#32c48d"/>
                            <path id="Path_19" data-name="Path 19" d="M140.993,162.014a.733.733,0,0,0-1.034.05l-4.467,4.919-2.158-2.194a.732.732,0,0,0-1.044,1.027l2.7,2.746a.731.731,0,0,0,.522.219h.014a.733.733,0,0,0,.528-.24l4.988-5.493A.733.733,0,0,0,140.993,162.014Z" transform="translate(-124.155 -152.802)" fill="#fff"/>
                        </svg>
                        <span class="font-semibold ms-4 text-left flex-auto break-all text-justify">{{ session('create_success') }}</span>
                    </div>
                </div>
            @elseif (session('update_success'))
                <div class="text-center py-4 lg:px-4 mb-5" style="margin-top: -30px;">
                    <div class="py-3 px-8 items-center text-green-400 leading-none rounded-md flex lg:inline-flex" role="alert">
                        <svg id="check" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" class="mr-3">
                            <path id="Path_18" data-name="Path 18" d="M12.5,0A12.5,12.5,0,1,0,25,12.5,12.514,12.514,0,0,0,12.5,0Z" fill="#32c48d"/>
                            <path id="Path_19" data-name="Path 19" d="M140.993,162.014a.733.733,0,0,0-1.034.05l-4.467,4.919-2.158-2.194a.732.732,0,0,0-1.044,1.027l2.7,2.746a.731.731,0,0,0,.522.219h.014a.733.733,0,0,0,.528-.24l4.988-5.493A.733.733,0,0,0,140.993,162.014Z" transform="translate(-124.155 -152.802)" fill="#fff"/>
                        </svg>
                        <span class="font-semibold ms-4 text-left flex-auto break-all text-justify">{{ session('update_success') }}</span>
                    </div>
                </div>
            @elseif (session('delete_success'))
                <div class="text-center py-4 lg:px-4 mb-5" style="margin-top: -30px;">
                    <div class="py-3 px-8 items-center text-red-600 leading-none rounded-md flex lg:inline-flex" role="alert">
                        <svg id="check" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" class="mr-3">
                            <path id="Path_18" data-name="Path 18" d="M12.5,0A12.5,12.5,0,1,0,25,12.5,12.514,12.514,0,0,0,12.5,0Z" fill="#ff0000"/>
                            <path id="Path_19" data-name="Path 19" d="M140.993,162.014a.733.733,0,0,0-1.034.05l-4.467,4.919-2.158-2.194a.732.732,0,0,0-1.044,1.027l2.7,2.746a.731.731,0,0,0,.522.219h.014a.733.733,0,0,0,.528-.24l4.988-5.493A.733.733,0,0,0,140.993,162.014Z" transform="translate(-124.155 -152.802)" fill="#fff"/>
                        </svg>
                        <span class="font-semibold ms-4 text-left flex-auto break-all text-justify">{{ session('delete_success') }}</span>
                    </div>
                </div>
            @endif
            
            <div class="block mb-8">
                <a href="{{ route('post_projects.create') }}" class="transition duration-500 ease-in-out bg-gray-800 hover:bg-gray-700 text-white hover:text-white font-bold px-4 py-3 rounded items-center">
                    <svg class="group-hover:text-light-blue-600 text-light-blue-500 inline-block" width="12" height="23" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    Add New Project
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 mb-6 lg:grid-cols-3 gap-x-3 gap-y-6 mt-10">
                @foreach ($projects as $project)
                    <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 relative min-w-full">

                        @if ($project->images != null)
                            @php $images = json_decode($project->images->project_pictures,true); @endphp
                            <img class="object-cover w-full h-64" src="{{ asset('/img/projects/'.$project->id.'/main/'.$images[0]) }}" alt="Project Picture">
                        @endif

                        <div class="p-6">
                            <div>
                                <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Project #{{ $project->id }}</span>
                                <a href="{{ route('post_projects.show', $project->id) }}" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">{{ $project->title }}</a>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ \Illuminate\Support\Str::limit($project->description, 148, $end='...') }}</p>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        
                                        <img class="object-cover h-10 rounded-full" 
                                        @if ($project->user->profile_photo_path)
                                            src="/storage/{{ $project->user->profile_photo_path ?? '' }}"
                                        @else
                                            src="{{ $project->user->profile_photo_url }}"
                                        @endif
                                        alt="Posted By" style="max-height: 40px; max-width: 40px;">

                                        <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">
                                            {{ $project->user->name }}
                                        </a>
                                    </div>
                                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ Carbon\Carbon::parse($project['created_at'] ?? '2021-04-29 16:00:00')->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center bg-gray-900 grid grid-cols-2 bottom-0 w-full">
                            <a href="{{ route('post_projects.show', $project->id) }}" class="bg-indigo-500 text-white hover:text-gray-300 px-10 py-3 text-center">View</a>
                            <a href="{{ route('post_projects.edit', $project->id) }}" class="bg-yellow-600 text-white hover:text-gray-300 px-10 py-3 text-center">Edit</a>
                        </div>
                        @can('user_access')
                            <div class="flex items-center bg-gray-900 grid grid-cols-3 bottom-0 w-full">
                                <a href="{{ route('post_projects.show', $project->id) }}" class="bg-blue-600 text-white hover:text-gray-300 px-10 py-3">View</a>
                                <a href="{{ route('post_projects.edit', $project->id) }}" class="bg-red-600 text-white hover:text-gray-300 px-10 py-3">Edit</a>
                                <form class="inline-block px-10 py-3 bg-red-600" action="{{ route('post_projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="hover:text-gray-300 text-white bg-transparent" value="Delete">
                                </form>
                            </div>
                        @endcan
                    </div>
                @endforeach
            </div>
            
            @if (!$projects->isEmpty())
                <div class="transition duration-500 ease-in-out shadow-0 hover:shadow-lg flex rounded-lg">
                    <a href="{{ route('post_projects.create') }}" class="transition duration-500 ease-in-out w-full font-bold text-base flex items-center justify-center rounded-lg border-2 border-dashed border-indigo-200 py-4 text-indigo-500">
                        <svg class="mr-2" width="12" height="20" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                        </svg>
                        Add New Project
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
