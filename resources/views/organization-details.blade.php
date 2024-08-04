@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-gray-900 text-black dark:text-white flex flex-col">

    @include('layouts.header')

    <!-- Reaccreditation Label -->
    <div class="bg-orange-700 dark:bg-orange-900 w-full mt-2">
        <h2 class="text-center text-lg md:text-3xl font-bold text-white py-4">RE-ACCREDITATION APPLICATION</h2>
    </div>

    <!-- Main Content Container -->
    <div class="flex-grow flex items-start justify-center px-4 md:px-0 mt-12">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">
            
            <!-- Progressive Step Bar -->
            @include('layouts.progress-bar', ['step' => 1])

            <!-- STEP Label -->
            <div class="bg-orange-600 text-white text-center text-xl font-bold rounded-t-lg p-4 mb-6">STEP 1: ORGANIZATION DETAILS</div>

            <!-- Organization Details Section -->
            <h3 class="text-center text-2xl font-bold text-orange-700 dark:text-orange-300 mb-6">Results:</h3>

            <<div class="border border-dashed border-4 border-gray-300 dark:border-gray-600 rounded-lg p-4 mb-4 transition-transform transform hover:scale-105 duration-300 ease-in-out >
    <p class="text-xl font-bold text-orange-700 dark:text-orange-300 mb-2"><strong>Organization ID:</strong> 00001</p>
    <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Organization Name:</strong> Society of Information Technology Students</p>
</div>



            <div class="text-center mt-6">
                <button class="bg-orange-600 dark:bg-orange-500 text-white p-2 md:p-4 rounded-md hover:bg-orange-700 dark:hover:bg-orange-600 transition duration-300 transform hover:scale-105">Yes, this is correct!</button>
                <a href="/" class="text-orange-600 dark:text-orange-400 underline ml-4 hover:text-orange-700 dark:hover:text-orange-500 transition duration-300">This is not my request, retry</a>
            </div>
        </div>
    </div>
</div>
@endsection
