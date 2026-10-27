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
            
            @php $filtering = collect(request()->only(['q', 'status', 'year', 'featured']))->filter(fn ($value) => filled($value))->isNotEmpty(); @endphp
            <form method="GET" action="{{ route('post_projects.index') }}" class="bg-white rounded-lg shadow-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-3 items-end">
                    <div class="lg:col-span-2">
                        <label for="q" class="block text-xs font-medium text-gray-500 uppercase">Search</label>
                        <div class="mt-1 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z" />
                            </svg>
                            <input type="search" name="q" id="q" value="{{ request('q') }}" placeholder="Title, code, client, location…" class="pl-9 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>

                    <div>
                        <label for="status" class="block text-xs font-medium text-gray-500 uppercase">Status</label>
                        <select name="status" id="status" onchange="this.form.submit()" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">All statuses</option>
                            @foreach ($filterOptions['statuses'] as $status)
                                <option value="{{ $status }}" @selected(strtolower(request('status', '')) === strtolower($status))>{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="year" class="block text-xs font-medium text-gray-500 uppercase">Year</label>
                        <select name="year" id="year" onchange="this.form.submit()" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">All years</option>
                            @foreach ($filterOptions['years'] as $year)
                                <option value="{{ $year }}" @selected(request('year') == $year)>{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="featured" class="block text-xs font-medium text-gray-500 uppercase">Featured</label>
                        <select name="featured" id="featured" onchange="this.form.submit()" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">All projects</option>
                            <option value="1" @selected(request('featured') === '1')>Featured only</option>
                            <option value="0" @selected(request('featured') === '0')>Not featured</option>
                        </select>
                    </div>

                    <div>
                        <label for="sort" class="block text-xs font-medium text-gray-500 uppercase">Sort by</label>
                        <select name="sort" id="sort" onchange="this.form.submit()" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="newest" @selected(request('sort', 'newest') === 'newest')>Newest first</option>
                            <option value="oldest" @selected(request('sort') === 'oldest')>Oldest first</option>
                            <option value="title" @selected(request('sort') === 'title')>Title A–Z</option>
                            <option value="year" @selected(request('sort') === 'year')>Project year</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3 flex flex-wrap items-center justify-between gap-3">
                    <p class="text-sm text-gray-500">
                        Showing <span class="font-semibold text-gray-700">{{ $projects->count() }}</span> of {{ $totalProjects }} {{ \Illuminate\Support\Str::plural('project', $totalProjects) }}
                    </p>
                    <div class="flex gap-2">
                        @if ($filtering || request()->filled('sort'))
                            <a href="{{ route('post_projects.index') }}" class="px-4 py-2 rounded-md border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-50">Clear</a>
                        @endif
                        <button type="submit" class="px-4 py-2 rounded-md bg-gray-800 text-sm font-semibold text-white hover:bg-gray-700">Search</button>
                    </div>
                </div>
            </form>

            @if ($projects->isEmpty() && $filtering)
                <div class="mt-10 bg-white rounded-lg shadow-md px-6 py-12 text-center">
                    <p class="text-gray-700 font-semibold">No projects match your search.</p>
                    <p class="mt-1 text-sm text-gray-500">Try different words or <a href="{{ route('post_projects.index') }}" class="text-indigo-600 hover:text-indigo-900">clear the filters</a>.</p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 mb-6 lg:grid-cols-3 gap-x-3 gap-y-6 mt-10">
                @foreach ($projects as $project)
                    <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 relative min-w-full flex flex-col">

                        @php $imageUrls = $project->imageUrls(); @endphp
                        @if (!empty($imageUrls))
                            <button type="button" x-data @click="$dispatch('open-lightbox', { urls: @js($imageUrls), index: 0 })" title="View photos" class="relative block w-full cursor-zoom-in">
                                <img class="object-cover w-full h-64 hover:opacity-90 transition" src="{{ $imageUrls[0] }}" alt="Project Picture">
                                <span class="absolute bottom-2 right-2 px-2 py-0.5 rounded-full bg-black/60 text-white text-xs">{{ count($imageUrls) }} {{ \Illuminate\Support\Str::plural('photo', count($imageUrls)) }}</span>
                            </button>
                        @endif

                        <div class="p-6 flex-1">
                            <div>
                                <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Project #{{ $project->id }}</span>
                                <a href="{{ route('post_projects.show', $project->id) }}" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">{{ $project->title }}</a>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ \Illuminate\Support\Str::limit($project->description, 148, $end='...') }}</p>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="flex items-center justify-between">
                                    @if ($project->user)
                                        <div class="flex items-center">

                                            <img class="object-cover h-10 rounded-full"
                                            @if ($project->user->profile_photo_path)
                                                src="/storage/{{ $project->user->profile_photo_path }}"
                                            @else
                                                src="{{ $project->user->profile_photo_url }}"
                                            @endif
                                            alt="Posted By" style="max-height: 40px; max-width: 40px;">

                                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $project->user->name }}
                                            </a>
                                        </div>
                                    @else
                                        <div></div>
                                    @endif
                                    <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ Carbon\Carbon::parse($project['created_at'] ?? '2021-04-29 16:00:00')->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-900 grid grid-cols-3 w-full mt-auto">
                            <a href="{{ route('post_projects.show', $project->id) }}" class="bg-indigo-500 text-white hover:text-gray-300 py-3 text-center">View</a>
                            <a href="{{ route('post_projects.edit', $project->id) }}" class="bg-yellow-600 text-white hover:text-gray-300 py-3 text-center">Edit</a>
                            <form class="bg-red-600" action="{{ route('post_projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full py-3 text-white hover:text-gray-300 bg-transparent">Delete</button>
                            </form>
                        </div>
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
    <x-image-lightbox />
</x-app-layout>
