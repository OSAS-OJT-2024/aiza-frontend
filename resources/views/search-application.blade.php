@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-gray-900 text-black dark:text-white flex flex-col">

    @include('layouts.header')

    <style>
        .error-alert {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 100%;
            max-width: 400px;
        }

        .search-container {
            position: relative;
            padding-bottom: 2rem; /* Adjust this value as needed for spacing */
        }
    </style>

    <!-- Main Content Container -->
    <div class="flex-grow flex items-center justify-center px-4 md:px-0 mt-12 relative">
        <div class="text-center">
            <p class="text-lg md:text-xl font-bold">
                <span style="color: #A43B21;">Please Input your</span> 
                <span style="color: #DD941F;">Application number</span>
            </p>

            <div class="mt-6 search-container">
                <!-- Form Section -->
                <form action="{{ route('search.application.result') }}" method="GET" class="max-w-lg mx-auto mt-6 flex items-center">
                    <label for="application_number" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="application_number" name="application_number" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-[#D19D90] rounded-none rounded-l-lg bg-gray-50 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500 shadow-md" placeholder="0000-0000-0000" required />
                    </div>
                    <button type="submit" class="text-white bg-gradient-to-r from-[#A43B21] to-[#DD941F] hover:bg-gradient-to-r hover:from-[#DD941F] hover:to-[#A43B21] focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-none rounded-r-lg text-sm px-6 py-4 shadow-md">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>

                <!-- Error Alert -->
                @if(session('error'))
                    <div id="error-alert" class="error-alert flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>{{ session('error') }}</div>
                    </div>


                    <script>
                        // Automatically hide the error alert 
                        setTimeout(function() {
                            document.getElementById('error-alert').style.display = 'none';
                        }, 2000); 
                    </script>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
