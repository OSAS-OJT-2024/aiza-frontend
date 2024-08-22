@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-black dark:text-white flex flex-col">
    @include('layouts.header')
    <!-- Reaccreditation Label-->
    <div class="bg-orange-700 dark:bg-orange-900 w-full mt-2">
        <h2 class="text-center text-lg md:text-3xl font-bold text-white py-4">RE-ACCREDITATION APPLICATION</h2>
    </div>

    <!-- Main Container -->
    <div class="flex-grow flex items-start justify-center px-4 md:px-0 mt-12">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">

            <!-- Progressive-Step Bar step 1 -->
            @include('layouts.progress-bar', ['step' => 2])
        
                <!-- STEP Label -->
                <div class="bg-orange-600 text-white text-center text-xl font-bold rounded-t-lg p-4 mb-6">STEP 1: ORGANIZATION DETAILS</div>

                <!-- Form -->
                <form class="max-w-xl mx-auto mt-4 flex items-center">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Search organization ID..." required />
                    </div>
                    <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-3 dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:ring-orange-700 ml-2">
                        Search
                    </button>
                </form>

                <!-- Important Note -->
                <p class="block text-center text-sm font-regular text-gray-700 dark:text-gray-300 mt-6 mb-4">
                    <span class="font-bold text-yellow-600 dark:text-yellow-500">Important Note:</span> Please enter the correct Organization ID to ensure accurate access to your organization's details.
                </p>
            
        </div>
    </div>
</div>
@endsection
