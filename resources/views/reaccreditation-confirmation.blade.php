@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-white dark:bg-gray-900 text-black dark:text-white flex flex-col">
    
    <!-- header -->
    @include('layouts.header')

    <!-- Reaccreditation Label-->
    <div class="bg-orange-700 dark:bg-orange-900 w-full mt-2">
        <h2 class="text-center text-lg md:text-3xl font-bold text-white py-4">RE-ACCREDITATION APPLICATION</h2>
    </div>


    <!-- Main Container -->
    <div class="flex-grow flex items-start justify-center px-4 md:px-0 mt-12">

        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">

            <!-- Progressive-Step Bar step 4 -->
            @include('layouts.progress-bar', ['step' => 4])

            <!-- STEP Label -->
            <div class="bg-orange-600 text-white text-center text-xl font-bold rounded-t-lg p-4 mb-6">STEP 4: CONFIRMATION</div>
            
            <!-- Organization Details Section -->
            <div class="border custom-dashed-border rounded-lg p-4 mb-4 max-w-xl mx-auto">

                <!-- Organization Name -->
                <div class="mb-4">
                    <p class="text-lg text-gray-900 dark:text-gray-200"><strong>Organization Name:</strong></p>
                    <p class="text-2xl font-bold text-orange-700 dark:text-orange-300">{{ $organization_name }}</p>
                </div>

                <!-- Request Type -->
                <div class="mb-4">
                    <p class="text-lg text-gray-900 dark:text-gray-200"><strong>Request Type:</strong></p>
                    <p class="text-xl font-semibold text-gray-900 dark:text-gray-200">{{ $request_type }}</p>
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <p class="text-lg text-gray-900 dark:text-gray-200"><strong>Status:</strong></p>
                    <p class="text-xl font-semibold text-yellow-500 dark:text-yellow-400 bg-yellow-100 dark:bg-yellow-800 rounded-full px-2 py-1">{{ $status }}</p>
                </div>

                <!-- Timestamp -->
                <div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400"><strong>As of:</strong></p>
                    <p class="text-md text-gray-700 dark:text-gray-300">{{ $timestamp }}</p>
                </div>
            </div>
            
            <!-- Mock data for testing
            <div class="mt-6">
                <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Representative Name:</strong></p>
                <p class="text-2xl font-bold text-orange-700 dark:text-orange-300">John Doe</p>

                <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Representative Email:</strong></p>
                <p class="text-2xl font-bold text-orange-700 dark:text-orange-300">john.doe@example.com</p>

                <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Contact Number:</strong></p>
                <p class="text-2xl font-bold text-orange-700 dark:text-orange-300">+63 912 345 6789</p>
            </div> -->

        </div>
    </div>
</div>
@endsection
