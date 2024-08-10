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

    <div class="mt-10 max-w-4xl mx-auto md:py-10 sm:px-6 lg:px-8">
        <div class="md:col-span-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:mt-0 md:col-span-6"></div>
                <div class="md:mt-0 md:col-span-6">
                    <form method="post" action="{{ route('webpages.update', $webpage->id) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="bg-red-700 px-4 py-5 sm:px-6 sm:flex text-white font-bold">
                                Webpage editting form
                            </div>
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6">
                                        <label for="title" class="block text-sm font-medium text-gray-700">Webpage page_name</label>
                                        <input type="text" name="page_name" id="page_name" value="{{ old('page_name', $webpage->page_name) }}" autocomplete="page_name" class="mt-1 focus:ring-red-700 focus:border-red-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('page_name') border-red-500 @enderror">
                                        <div class="alert-description text-sm text-red-700 text-danger mt-1">{{ $errors->first('page_name') }}</div>
                                    </div>
                                </div>

                            </div>
                            
                            <input type="hidden" name="postedBy" id="postedBy" value="{{ Auth::user()->id }}">
                            
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="transition duration-500 ease-in-out bg-red-700 border-transparent font-bold text-base align-middle normal-case rounded-md text-white hover:text-white hover:bg-purple-700 active:bg-purple-700 focus:border-purple-500 focus:ring focus:ring-purple-500 w-full h-12">
                                Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function addNewFAQ() {
        var faqContainer = document.querySelector('.faq-container');
        var faqPair = document.createElement('div');
        faqPair.classList.add('grid', 'grid-cols-2', 'gap-6', 'mt-1');

        // Add two input fields for the new FAQ pair
        for (var i = 0; i < 2; i++) {
            var inputDiv = document.createElement('div');
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'faq[]');
            input.setAttribute('placeholder', i === 0 ? 'Frequently Asked Question' : 'Your explanation to the Question');
            input.classList.add('mt-1', 'focus:ring-red-700', 'focus:border-red-700', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
            inputDiv.appendChild(input);
            faqPair.appendChild(inputDiv);
        }

        // Append the new FAQ pair to the faqContainer
        faqContainer.appendChild(faqPair);
    }

    function addNewService() {
        var serviceContainer = document.querySelector('.service-container');
        var servicePair = document.createElement('div');
        servicePair.classList.add('grid', 'grid-cols-3', 'gap-6', 'mt-1');

        // Image input
        var imageDiv = document.createElement('div');
        var imageInput = document.createElement('input');
        imageInput.setAttribute('type', 'file');
        imageInput.setAttribute('name', 'service_image[]');
        imageInput.classList.add('mt-1', 'focus:ring-red-700', 'focus:border-red-700', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
        imageDiv.appendChild(imageInput);
        servicePair.appendChild(imageDiv);
        
        // Loop to create two input fields
        for (var i = 0; i < 2; i++) {
            var inputDiv = document.createElement('div');
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'service[]');
            input.setAttribute('placeholder', i === 0 ? 'Service Title' : 'Service Description');
            input.classList.add('mt-1', 'focus:ring-red-700', 'focus:border-red-700', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
            inputDiv.appendChild(input);
            servicePair.appendChild(inputDiv);
        }


        // Append the new Service pair to the serviceContainer
        serviceContainer.appendChild(servicePair);
    }
</script>