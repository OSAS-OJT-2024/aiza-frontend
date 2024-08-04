@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-white dark:bg-gray-900 text-black dark:text-white flex flex-col">

    @include('layouts.header')

    <style>
        .custom-dashed-border {
            border-style: dashed;
            border-width: 1px;
            border-spacing: 6px;
            border-color: gray;
            transition: transform 0.3s ease-in-out;
        }

        .custom-dashed-border:hover {
            transform: scale(1.05);
        }

        .gradient-background {
            background: linear-gradient(to right, #DD941F, #A43B21);
        }

        /* Animation for search bar icon */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .search-icon {
            animation: pulse 1.5s infinite;
        }

        /* Status specific styles */
        .status-pending {
            background-color: #FFFF00; /* Light Yellow */
            color: #A43B21;
            padding: 0.3rem 0.6rem;
            border-radius: 1rem; /* Increase border-radius for more rounded appearance */
            display: inline-block;
        }

        .status-returned {
            background-color: #F6B8B8; /* Light Red */
            color: #A43B21;
            padding: 0.3rem 0.6rem;
            border-radius: 1rem;
            display: inline-block;
        }

        .status-approved {
            background-color: #A1E6A1; /* Light Green */
            color: #1C6C1C;
            padding: 0.3rem 0.6rem;
            border-radius: 1rem;
            display: inline-block;
        }
    </style>

    <!-- Main Content Container -->
    <div class="flex-grow flex items-start justify-center px-4 md:px-0 mt-12">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">

            <!-- Organization Details Section -->
            @if(isset($results))
                <div class="text-center mb-5">
                    <h3 class="text-2xl font-bold text-orange-700 dark:text-orange-300 mb-5 flex items-center justify-center">
                        <svg class="w-8 h-8 mr-2 text-orange-700 dark:text-orange-300 search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a4 4 0 1 0-8 0 4 4 0 0 0 8 0zm2 0a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-4 4h7m-3.5 3.5L21 21" />
                        </svg>
                        Please see Results:
                    </h3>
                </div>

                <div class="dark:border-gray-600 rounded-lg p-4 mb-4 duration-300 ease-in-out max-w-xl mx-auto">

                    <div class="gradient-background text-center py-2 px-4 rounded-lg mb-4">
                        <p class="text-xl font-bold text-white dark:text-white">
                            <strong>APPLICATION #: </strong> {{ $applicationNumber }}
                        </p>
                    </div>

                    <div class="border custom-dashed-border rounded-lg p-4 mb-4 max-w-xl mx-auto">
                        <!-- Organization Name -->
                        <div class="mb-4">
                            <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Organization Name:</strong></p>
                            <p class="text-2xl font-bold text-orange-700 dark:text-orange-300">{{ $results['organization_name'] }}</p>
                        </div>
                        
                        <!-- Request Type -->
                        <div class="mb-4">
                            <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Request Type:</strong></p>
                            <p class="text-xl font-semibold text-gray-900 dark:text-gray-200">{{ $results['request_type'] }}</p>
                        </div>
                        
                        <!-- Status -->
                        <div class="mb-4">
                            <p class="text-lg font-medium text-gray-900 dark:text-gray-200"><strong>Status:</strong></p>
                            <p class="text-xl font-semibold">
                                <span class="{{ 
                                    $results['status'] === 'PENDING' ? 'status-pending' : 
                                    ($results['status'] === 'RETURNED' ? 'status-returned' : 
                                    ($results['status'] === 'APPROVED' ? 'status-approved' : '')) }}">
                                    {{ ucfirst(strtolower($results['status'])) }}
                                </span>
                            </p>
                        </div>
                        
                        <!-- Timestamp -->
                        <div>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400"><strong>As of:</strong></p>
                            <p class="text-md text-gray-700 dark:text-gray-300">{{ $results['timestamp'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <a href="{{ route('reaccreditation.confirmation', [
                        'applicationNumber' => $applicationNumber,
                        'organization_name' => $results['organization_name'],
                        'request_type' => $results['request_type'],
                        'status' => $results['status'],
                        'timestamp' => $results['timestamp']
                    ]) }}" class="text-white bg-gradient-to-r from-[#A43B21] to-[#DD941F] hover:bg-gradient-to-r hover:from-[#DD941F] hover:to-[#A43B21] focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-full text-sm px-6 py-4 shadow-md">
                        Yes, this is correct!
                    </a>
                    <div class="mt-4">
                        <a href="{{ route('search.application') }}" class="text-orange-600 dark:text-orange-400 underline hover:text-orange-700 dark:hover:text-orange-500 transition duration-300">
                            This is not my request, retry
                        </a>
                    </div>
                </div>

            @endif

        </div>
    </div>
</div>
@endsection
