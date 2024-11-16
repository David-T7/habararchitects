<x-app-layout>
    <x-slot name="header">

        <a href="{{route('post_projects.index') }}" class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: inline;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
        </a>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle" style="display: inline;">
            {{ __('Back to projects') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto md:py-10 sm:px-6 lg:px-8">
            <div class="md:mt-5 md:mt-0 md:col-span-6 sm:col-span-12">
                <div>
                    <div class="mt-10">
                        <div class="mx-auto" style="width: 50%; @media (min-width: 1000px) {width: 90%;}">
                            <form method="post" action="{{ route('post_projects.update', $project->id) }}">
                                @csrf
                                @method('PUT')
                                
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="bg-red-700 px-4 py-5 sm:px-6 sm:flex text-white font-bold">
                                        Project editting form
                                    </div>
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        {{-- <h1 class="font-bold mb-2 py-3 px-3 rounded bg-purple-300 text-white">Creating</h1> --}}

                                        @if($errors->any())
                                            <div class="alert flex flex-row items-center bg-red-200 p-2 pl-5 rounded border-b-2 border-red-300">
                                                <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                                    <span class="text-red-500">
                                                        <svg fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                            class="h-6 w-6">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="alert-content ml-4">
                                                    <div class="alert-title font-semibold text-lg text-red-800">
                                                        Error
                                                    </div>
                                                    <div class="alert-description text-sm text-red-600">
                                                        <ul class="list-group">
                                                            @foreach ($errors->all() as $error)
                                                                <li class="list-group-item text-danger">{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @php $images = json_decode($project->images->project_pictures,true); @endphp
                                        <img class="h-full w-full object-cover" src="/img/projects/{{ $project->id }}/main/{{ $images[0] }}" alt="Project Picture">

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-6">
                                                <label for="title" class="block text-sm font-medium text-gray-700">Project title</label>
                                                <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('title') }}</div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="code_name" class="block text-sm font-medium text-gray-700">Project code</label>
                                            <div class="mt-1">
                                                <textarea id="code_name" name="code_name" rows="1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('code_name') border-red-500 @enderror" placeholder="Enter code name here ...">{{ old('code_name', $project->code_name) }}</textarea>
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('code_name') }}</div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="description" class="block text-sm font-medium text-gray-700">Project description</label>
                                            <div class="mt-1">
                                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('description', $project->description) }}</textarea>
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('description') }}</div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="collaborators" class="block text-sm font-medium text-gray-700">Project collaborators</label>
                                                <div class="mt-1">
                                                    <input type="text" name="collaborators" id="collaborators" value="{{ old('collaborators', $project->collaborators) }}" autocomplete="collaborators" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('collaborators') border-red-500 @enderror">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('collaborators') }}</div>
                                                </div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="year" class="block text-sm font-medium text-gray-700">Project year</label>
                                                <input type="text" name="year" id="year" value="{{ old('year', $project->year) }}" autocomplete="year" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('year') border-red-500 @enderror" placeholder="30000">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('year') }}</div>
                                            </div>
                                        </div>
                                        
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="budget" class="block text-sm font-medium text-gray-700">Project budget</label>
                                                <div class="mt-1">
                                                    <input type="text" name="budget" id="budget" value="{{ old('budget', $project->budget) }}" autocomplete="budget" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('budget') border-red-500 @enderror">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('budget') }}</div>
                                                </div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="story_num" class="block text-sm font-medium text-gray-700">No of stories</label>
                                                <input type="text" name="story_num" id="story_num" value="{{ old('story_num', $project->story_num) }}" autocomplete="story_num" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('story_num') border-red-500 @enderror" placeholder="30000">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('story_num') }}</div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="site_area" class="block text-sm font-medium text-gray-700">Site Area</label>
                                                <input type="text" name="site_area" id="site_area" value="{{ old('site_area.0', $project->site_area) }}" autocomplete="site_area" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area.*') border-red-500 @enderror" placeholder="25000">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('site_area.*') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="floor_area" class="block text-sm font-medium text-gray-700">Total Area</label>
                                                <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area', $project->floor_area) }}" autocomplete="floor_area" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="30000">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('floor_area') }}</div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="engineers[]" class="block text-sm font-medium text-gray-700">Engineer/s</label>
                                                <input type="text" name="engineers[]" id="engineers[]" value="{{ old('engineers.0', $project->engineers[0] ?? '') }}" autocomplete="engineers" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('engineers.*') border-red-500 @enderror" placeholder="Engineer 1, Engineer 2">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('engineers.*') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="client" class="block text-sm font-medium text-gray-700">Client</label>
                                                <input type="text" name="client" id="client" value="{{ old('client', $project->client) }}" autocomplete="client" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="Addis Ababa city administration">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('client') }}</div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500" style="margin-top: .4rem !important;">
                                            Separate using commas if more than one
                                        </p>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                                <input type="text" name="location" id="location" value="{{ old('location', $project->location) }}" autocomplete="location" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('location') border-red-500 @enderror" placeholder="Bole, Addis Ababa">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('location') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                {{-- <input type="text" name="status" id="status" value="{{ old('status') }}" autocomplete="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('engineers.*') border-red-500 @enderror"> --}}

                                                <select id="status" name="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 h-10 w-full py-0 pl-2 pr-7 border-gray-300 bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                    <option @if (old('status', $project->status) == "Planning") {{ 'selected' }} @endif>Planning</option>
                                                    <option @if (old('status', $project->status) == "Ongoing") {{ 'selected' }} @endif>Ongoing</option>
                                                    <option @if (old('status', $project->status) == "Under Construction") {{ 'selected' }} @endif>Under Construction</option>
                                                    <option @if (old('status', $project->status) == "Finished") {{ 'selected' }} @endif>Finished</option>
                                                </select>

                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('engineers.*') }}</div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="types[]" class="block text-sm font-medium text-gray-700">Project scope</label>
                                                <input type="text" name="types[]" id="types[]" value="{{ old('types.0', $project->types[0]) }}" autocomplete="types" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('types.*') border-red-500 @enderror" placeholder="Architectural + Interior Design">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('types.*') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="featured" class="block text-sm font-medium text-gray-700">Featured?</label>

                                                <select id="featured" name="featured" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 h-10 w-full py-0 pl-2 pr-7 border-gray-300 bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                    <option value="1" @if (old('featured', $project->featured) == "1") {{ 'selected' }} @endif>Yes</option>
                                                    <option value="0" @if (old('featured', $project->featured) == "0") {{ 'selected' }} @endif>No</option>
                                                </select>

                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('featured.*') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="postedBy" id="postedBy" value="{{ Auth::user()->id }}">
                                    
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="transition duration-500 ease-in-out bg-red-600 border-transparent font-bold text-base align-middle normal-case rounded-md text-white hover:text-white hover:bg-purple-700 active:bg-purple-700 focus:border-purple-500 focus:ring focus:ring-purple-500 w-full h-12">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>