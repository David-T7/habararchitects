<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle" style="display: inline;">
            {{ __('Webpages') }}
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
                <a href="#" class="transition duration-500 ease-in-out bg-gray-800 hover:bg-gray-700 text-white hover:text-white font-bold px-4 py-3 rounded items-center">
                    <svg class="group-hover:text-light-blue-600 text-light-blue-500 inline-block" width="12" height="23" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                    </svg>
                    Add New Webpage
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                @foreach ($webpages as $webpage)
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 min-w-full">

                        <div class="px-6 py-4">
                            <a href="{{ route('webpages.show', $webpage->id) }}" style="display: inline-block;">
                                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $webpage->page_name }}</h1>
                            </a>

                            <a href="{{ route('webpages.edit', $webpage->id) }}">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="20" style="display: inline; float: right; margin-top: 3px;" stroke-width="10" xmlns="http://www.w3.org/2000/svg">
                                    <title/>
                                    <g data-name="Layer 51" id="Layer_51">
                                        <path d="M28.19,3.08a3.8,3.8,0,0,0-5.23,0L21.5,4.55h0L3.86,22.19a4.18,4.18,0,0,0-.61,5.15l-1,.95a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l1-1a4.18,4.18,0,0,0,5.15-.61L27.45,10.51h0L28.92,9a3.71,3.71,0,0,0,0-5.23ZM8.4,26.73a2.28,2.28,0,0,1-3.13,0,2.24,2.24,0,0,1-.64-1.57,2.22,2.22,0,0,1,.64-1.56L22.2,6.67,25.33,9.8ZM27.5,7.62l-.76.76L23.62,5.26l.76-.76a1.68,1.68,0,0,1,1.2-.5,1.7,1.7,0,0,1,1.2.5l.72.72a1.7,1.7,0,0,1,.5,1.2A1.68,1.68,0,0,1,27.5,7.62Z"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
