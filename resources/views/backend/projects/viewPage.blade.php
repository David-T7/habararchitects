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
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">

                <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-full">
                    <div class="md:flex">
                        <div class="">
                            <div class="bg-white shadow overflow-hidden sm:rounded-r-lg">
                                <div class="px-4 py-5 sm:px-6 bg-red-700 text-white">
                                    <h3 class="text-lg leading-6 font-medium">Project Information</h3>
                                    <p class="mt-1 max-w-2xl text-sm">Extended details and overview.</p>
                                </div>
                                <div class="md:flex-shrink-0 image-slider">
                                
                                    @php $images = json_decode($project->images->project_pictures,true); @endphp
                                
                                    @if(is_array($images) && !empty($images))
                                        @foreach ($images as $index => $image)
                                            @if($index == 0)
                                                <img class="h-full w-full object-cover" src="{{ asset('/img/projects/'.$project->id.'/main/'.$image) }}" alt="Project Picture">
                                            @elseif($index != 0)
                                                <img class="h-full w-full object-cover" src="{{ asset('/img/projects/'.$project->id.'/'.$image) }}" alt="Project Picture">
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <div class="border-t border-gray-200">
                                    <dl>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Project Title</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $project->title ?? '' }}</dd>
                                        </div>
                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Project Code</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $project->code_name ?? '' }}</dd>
                                        </div>
                                        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Description</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6 break-all">{{ $project->description ?? '' }}</dd>
                                        </div>
                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Collaborators</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6 break-all">{{ $project->collaborators ?? '' }}</dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Client</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $project->client ?? '' }}</dd>
                                        </div>

                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Location</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6 break-all">{{ $project->location ?? '' }}</dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $project->status ?? '' }}</dd>
                                        </div>

                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Architect/s</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">
                                                @foreach ($project->architects ?? '' as $project_architect)
                                                    {{ $project_architect }}@if(!$loop->last),@endif
                                                @endforeach
                                            </dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Project Year</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $project->year ?? '' }}</dd>
                                        </div>
                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Site Area</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $project->site_area ?? '' }}</dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Total Area</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $project->floor_area ?? '' }}</dd>
                                        </div>
                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">No of Stories</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $project->story_num ?? '' }}</dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Project Scope</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">
                                                @foreach ($project->types ?? '' as $type)
                                                    {{ $type }}@if(!$loop->last),@endif
                                                @endforeach
                                            </dd>
                                        </div>
                                        <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Project Budget</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ number_format($project->budget ?? '', 2, '.', ',') }} {{ $project->currency }}</dd>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Posted by</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $project->user->name ?? '' }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div id="project1" class="container zoom-anim-dialog mfp-hide">
                                    <div class="row">
                                        <div class="col-lg-8"><img alt="" class="project-detail-img" src="/images/projects/project_1.jpg"></div>
                                        <div class="col-lg-4">
                                            <h3 class="project-detail-title">{{ $project->project_title ?? '' }}</h3>
                                            <p class="project-detail-text">{{ $project->project_description ?? '' }}</p>
                                            <ul class="project-detail-list text-dark">
                                                <li>
                                                    <span class="left">Clients:</span>
                                                    <span class="right">{{ $project->project_client ?? '' }}</span>
                                                </li>
                                                <li>
                                                    <span class="left">Completion:</span>
                                                    <span class="right">{{ $project->project_completion ?? '' }}</span>
                                                </li>
                                                <li>
                                                    <span class="left">Project Types:</span>
                                                    <span class="right">
                                                        @foreach ($project->types ?? '' as $type)
                                                            {{ $type }}@if(!$loop->last),@endif
                                                        @endforeach
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="left">Architects:</span>
                                                    <span class="right">
                                                        @foreach($project->architects ?? '' as $project_architect)
                                                            <span class="text-70">
                                                                {{ $project_architect }}@if(!$loop->last),@endif
                                                            </span>
                                                        @endforeach
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="left">Budget:</span>
                                                    <span class="right">{{ $project->project_budget ?? '' }}</span>
                                                </li>
                                            </ul>
                                            <div class="project-detail-meta">
                                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                                <div class="social-list pull-sm-right">
                                                <a href="" class="icon ion-social-twitter"></a>
                                                <a href="" class="icon ion-social-facebook"></a>
                                                <a href="" class="icon ion-social-instagram"></a>
                                                <a href="" class="icon ion-social-whatsapp"></a>
                                                <a href="" class="icon ion-social-pinterest"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            {{-- <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
                                <img class="w-32 h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="/sarah-dayan.jpg" alt="" width="384" height="512">
                                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                                    <blockquote>
                                        <p class="text-lg font-semibold">
                                            “Tailwind CSS is the only framework that I've seen scale
                                            on large teams. It’s easy to customize, adapts to any design,
                                            and the build size is tiny.”
                                        </p>
                                    </blockquote>
                                    <figcaption class="font-medium">
                                        <div class="text-cyan-600">
                                            Sarah Dayan
                                        </div>
                                        <div class="text-gray-500">
                                            Staff Engineer, Algolia
                                        </div>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>