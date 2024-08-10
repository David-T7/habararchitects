<x-app-layout>
    <x-slot name="header">
        <a href="{{route('webpages.index') }}" class="me-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: inline;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
        </a>
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle" style="display: inline;">
            {{ __('Back to webpages') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section submit="">
            <x-slot name="title">
                {{ __('Webpage Information') }}
            </x-slot>

            <x-slot name="description">
                {{ __('View your webpage\'s information.') }}
            </x-slot>

            <x-slot name="form">
                <!-- Webpage Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="page_name" value="{{ __('Name') }}" />
                    <x-input id="page_name" type="text" class="mt-1 block w-full" value="{{ old('page_name', $webpage->page_name) }}" required autocomplete="$webpage->page_name" />
                    <x-input-error for="page_name" class="mt-2" />
                </div>
            </x-slot>
        </x-form-section>                                    
    </div>
</x-app-layout>