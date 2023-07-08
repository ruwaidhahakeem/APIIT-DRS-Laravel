<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col sm:flex-row my-2  ">
        {{-- room 1 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2 flex-row ">
            <div>
                <card class="w-72 rounded-lg border shadow-md flex flex-col p-5  bg-white">

                    <!-- Top Section -->
                    <div class="flex flex-col items-center">

                        <!-- Quota Name and Details -->
                        <p class="mt-1 text-3xl font-light text-gray-700"> Room 1 </p>

                        <!-- Button -->

                        <a href="http://google.com">
                            <button
                                class="mt-5 rounded py-2 px-4 bg-teal-500 text-white hover:bg-teal-700 hover:text-gray-50 text-sm">
                                Book
                            </button>
                        </a>

                    </div>
            </div>
            </card>
        </div>

        {{-- room 2 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2 flex-row">
            <div>
                <card class="w-72 rounded-lg border shadow-md flex flex-col p-5  bg-white">

                    <!-- Top Section -->
                    <div class="flex flex-col items-center">

                        <!-- Quota Name and Details -->
                        <p class="mt-1 text-3xl font-light text-gray-700"> Room 2 </p>

                        <!-- Button -->
                        <button
                            class="mt-5 rounded py-2 px-4 bg-teal-500 text-white hover:bg-teal-700 hover:text-gray-50 text-sm">
                            Book
                        </button>
                    </div>
            </div>
            </card>
        </div>

        {{-- room 3 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2 flex-row">
            <div>
                <card class="w-72 rounded-lg border shadow-md flex flex-col p-5  bg-white">

                    <!-- Top Section -->
                    <div class="flex flex-col items-center">

                        <!-- Quota Name and Details -->
                        <p class="mt-1 text-3xl font-light text-gray-700"> Room 3 </p>

                        <!-- Button -->
                        <button
                            class="mt-5 rounded py-2 px-4 bg-teal-500 text-white hover:bg-teal-700 hover:text-gray-50 text-sm">
                            Book
                        </button>
                    </div>
            </div>
            </card>
        </div>
    </div>


    </div>
</x-app-layout>
