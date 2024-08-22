@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-white dark:bg-gray-900 text-black dark:text-white flex flex-col">
    
    <!-- header -->
    @include('layouts.header')

    <!-- Reaccreditation Label -->
    <div class="bg-orange-700 dark:bg-orange-900 w-full mt-2">
        <h2 class="text-center text-lg md:text-3xl font-bold text-white py-4">RE-ACCREDITATION APPLICATION</h2>
    </div>

    <!-- Main Container -->
    <div class="flex-grow flex items-start justify-center px-4 md:px-0 mt-12">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">

            <!-- Progressive-Step Bar step 4 -->
            @include('layouts.progress-bar', ['step' => 4])

            <!-- STEP Label -->
            <div class="text-white text-center text-xl font-bold p-4 mb-6" style="background: linear-gradient(to right, #DD941F, #A43B21); border-radius: 1.5rem;">STEP 4: CONFIRMATION</div>
            
            <!-- Organization Details Section -->
            <div class="border custom-dashed-border rounded-lg p-4 mb-4 max-w-xl mx-auto">

                <!-- Flex Container for Label and Value -->
                <div class="mb-4 flex items-center">
                    <p class="text-lg text-gray-900 dark:text-gray-200 font-semibold w-48"><strong>Organization Name:</strong></p>
                    <p class="text-xl font-bold text-[#A43B21] dark:text-[#A43B21] ml-2">{{ $organization_name }}</p>
                </div>

                <div class="mb-4 flex items-center">
                    <p class="text-lg text-gray-900 dark:text-gray-200 font-semibold w-48"><strong>Representative Name:</strong></p>
                    <p class="text-xl font-bold text-[#A43B21] dark:text-[#A43B21] ml-2">{{ $representative_name }}</p>
                </div>

                <div class="mb-4 flex items-center">
                    <p class="text-lg text-gray-900 dark:text-gray-200 font-semibold w-48"><strong>Representative Email:</strong></p>
                    <p class="text-xl font-bold text-[#A43B21] dark:text-[#A43B21] ml-2">{{ $representative_email }}</p>
                </div>

                <div class="mb-4 flex items-center">
                    <p class="text-lg text-gray-900 dark:text-gray-200 font-semibold w-48"><strong>Contact Number:</strong></p>
                    <p class="text-xl font-bold text-[#A43B21] dark:text-[#A43B21] ml-2">{{ $contact_number }}</p>
                </div>

                <div class="mb-4 flex items-center">
                    <p class="text-lg text-gray-900 dark:text-gray-200 font-semibold w-48"><strong>Status:</strong></p>
                    <p class="text-xl font-semibold rounded-full px-2 py-1 ml-2 {{ 
                                    $status === 'Pending' ? 'status-pending' : 
                                    ($status === 'Returned' ? 'status-returned' : 
                                    ($status === 'Approved' ? 'status-approved' : '')) }}">{{ $status }}</p>
                </div>

            </div>

            <!-- Application Number Section -->
            <div class="text-center mt-6">
                <p class="text-lg text-gray-900 dark:text-gray-200"><strong>YOUR APPLICATION NUMBER</strong></p>
                <p class="text-3xl font-bold text-[#A43B21] dark:text-[#A43B21]">{{ $applicationNumber }}</p>
                <p class="text-md text-gray-700 dark:text-gray-300">PLEASE BE SEATED. YOU WILL BE SERVED SHORTLY.</p>
                <div class="mt-6">
                    <form action="{{ route('search.application') }}" method="get">
                        <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Go Back
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
<!--  -->