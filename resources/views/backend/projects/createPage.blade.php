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
            <div class="md:mt-5 md:mt-0 md:col-span-6">
                <div>
                    <div class="mt-10">
                        <div class="mx-auto" style="width: 50%;">
                            <form action="{{ route('post_projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="bg-red-700 px-4 py-5 sm:px-6 sm:flex text-white font-bold">
                                        Project creating form
                                    </div>
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

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

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-6">
                                                <label for="title" class="block text-sm font-medium text-gray-700">Project title</label>
                                                <input type="text" name="title" id="title" value="{{ old('title') }}" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror" placeholder="Project title">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('title') }}</div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label for="code_name" class="block text-sm font-medium text-gray-700">Project code</label>
                                            <div class="mt-1">
                                                <textarea id="code_name" name="code_name" rows="1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('code_name') border-red-500 @enderror" placeholder="Enter code here ...">{{ old('code_name') }}</textarea>
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('code_name') }}</div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="description" class="block text-sm font-medium text-gray-700">Project description</label>
                                            <div class="mt-1">
                                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('description') }}</textarea>
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('description') }}</div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="collaborators" class="block text-sm font-medium text-gray-700">Collaborators</label>
                                                <input type="text" name="collaborators" id="collaborators" value="{{ old('collaborators') }}" autocomplete="collaborators" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('collaborators') border-red-500 @enderror" placeholder="Collaborators">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('collaborators') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="year" class="block text-sm font-medium text-gray-700">Project year</label>
                                                <input type="text" name="year" id="year" value="{{ old('year') }}" autocomplete="year" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('year') border-red-500 @enderror" placeholder="2022">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('year') }}</div>
                                            </div>
                                        </div>
                                        

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="budget" class="block text-sm font-medium text-gray-700">Project budget</label>
                                                <input type="text" name="budget" id="budget" value="{{ old('budget') }}" autocomplete="budget" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('budget') border-red-500 @enderror" placeholder="Budget">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('budget') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="story_num" class="block text-sm font-medium text-gray-700">No of stories</label>
                                                <input type="text" name="story_num" id="story_num" value="{{ old('story_num') }}" autocomplete="story_num" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('story_num') border-red-500 @enderror" placeholder="3B+G+16-35">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('story_num') }}</div>
                                            </div>
                                        </div>
                                        

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="site_area" class="block text-sm font-medium text-gray-700">Site Area</label>
                                                <input type="text" name="site_area" id="site_area" value="{{ old('site_area') }}" autocomplete="site_area" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area') border-red-500 @enderror" placeholder="20005">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('site_area') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="floor_area" class="block text-sm font-medium text-gray-700">Total Area</label>
                                                <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area') }}" autocomplete="floor_area" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="30000">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('floor_area') }}</div>
                                            </div>
                                        </div>
                                        
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="engineers[]" class="block text-sm font-medium text-gray-700">Engineer/s</label>
                                                <input type="text" name="engineers[]" id="engineers[]" value="{{ old('engineers[]') }}" autocomplete="engineers" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('engineers.*') border-red-500 @enderror" placeholder="Engineer 1, Engineer 2">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('engineers.*') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="client" class="block text-sm font-medium text-gray-700">Client</label>
                                                <input type="text" name="client" id="client" value="{{ old('client') }}" autocomplete="client" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="Addis Ababa city administration">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('client') }}</div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500" style="margin-top: .4rem !important;">
                                            Separate using commas if more than one
                                        </p>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                                <input type="text" name="location" id="location" value="{{ old('location') }}" autocomplete="location" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="Bole, Addis Ababa">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('location') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                {{-- <input type="text" name="status" id="status" value="{{ old('status') }}" autocomplete="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('status') border-red-500 @enderror"> --}}

                                                <select id="status" name="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 h-10 w-full py-0 pl-2 pr-7 border-gray-300 bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                    <option>Planning</option>
                                                    <option>Ongoing</option>
                                                    <option>Under Construction</option>
                                                    <option>Finished</option>
                                                </select>

                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('status') }}</div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="types[]" class="block text-sm font-medium text-gray-700">Project scope</label>
                                                <input type="text" name="types[]" id="types[]" value="{{ old('types[]') }}" autocomplete="types" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('types.*') border-red-500 @enderror" placeholder="Architectural + Interior Design">
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('types.*') }}</div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">

                                                <label for="featured" class="block text-sm font-medium text-gray-700">Featured?</label>

                                                <select id="featured" name="featured" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 h-10 w-full py-0 pl-2 pr-7 border-gray-300 bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>

                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('featured.*') }}</div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Project photo
                                            </label>
                                            {{-- <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                </div>
                                            </div> --}}

                                        {{-- <div class="bg-gray-500 h-screen w-screen sm:px-8 md:px-16 sm:py-8"> --}}
                                            <div class="form-group">
                                                <label for="project_pictures[]">Upload Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" class="form-control" name="project_pictures[]" placeholder="project_images" multiple>
                                                        {{-- <label for="property_imgURLs[]" class="custom-file-label">Choose File</label> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-gray-500" style="margin-top: .4rem !important;">
                                                Cover photo (2800*1867), Rest of the pictures (1000*667) Respectively
                                            </p>
                                            
                                            {{-- <main class="container mx-auto max-w-screen-lg h-full pt-5 pb-6 mt-1">
                                                <!-- FILE UPLOAD MODAL -->
                                                <article aria-label="File Upload Modal" class="relative h-full flex flex-col rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                                    <!-- OVERLAY -->
                                                    <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                                    </div>

                                                    <!-- SCROLL AREA -->
                                                    <section class="h-full overflow-auto p-1 w-full h-full flex flex-col">
                                                        <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                                            <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                                                <header class="border-dashed rounded-md border-2 border-gray-300 py-12 flex flex-col justify-center items-center w-full">
                                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                    <div class="flex text-sm text-gray-600">
                                                                        <label for="project_pictures[]" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                            <input id="hidden-input" name="project_pictures[]" type="file" multiple class="hidden" />
                                                                            <button id="button">Upload a file</button>
                                                                        </label>
                                                                        <p class="pl-1">or drag and drop</p>
                                                                    </div>
                                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                                </header>
                                                            </li>
                                                        </ul>
                                                    </section>

                                                    <!-- STICKY FOOTER -->
                                                    <footer class="flex justify-end px-8 pb-8 pt-4 mt-3">
                                                        <button id="cancel" class="ml-3 rounded-sm bg-gray-100 px-6 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">Cancel images</button>
                                                    </footer>
                                                </article>
                                            </main>

                                            <!-- USING TWO SIMILAR TEMPLATES FOR SIMPLICITY IN JS CODE -->
                                            <template id="file-template">
                                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                    <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                                        <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                                        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                            <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                                            <div class="flex">
                                                                <span class="p-1 text-blue-800">
                                                                    <i>
                                                                        <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                            <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                                        </svg>
                                                                    </i>
                                                                </span>
                                                                <p class="p-1 size text-xs text-gray-700"></p>
                                                                <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                                    <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </section>
                                                    </article>
                                                </li>
                                            </template>

                                            <template id="image-template">
                                                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                    <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                                        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                                        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                            <h1 class="flex-1"></h1>
                                                            <div class="flex">
                                                            <span class="p-1">
                                                                <i>
                                                                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                                </svg>
                                                                </i>
                                                            </span>

                                                            <p class="p-1 size text-xs"></p>
                                                            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                </svg>
                                                            </button>
                                                            </div>
                                                        </section>
                                                    </article>
                                                </li>
                                            </template> --}}
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="postedBy" id="postedBy" value="{{ Auth::user()->id }}">
                                    
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="transition duration-500 ease-in-out bg-red-700 border-transparent font-bold text-base align-middle normal-case rounded-md text-white hover:text-white hover:bg-red-700 active:bg-red-700 focus:border-red-500 focus:ring focus:ring-red-500 w-full h-12">
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
