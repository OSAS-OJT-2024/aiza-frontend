@extends('layouts.main')

@section('content')

@include('layouts.header') <!-- Include the Header -->

<div class="container mx-auto mt-10">
    <div class="text-center mb-10">
        <h1 class="text-xl font-semibold text-red-600">Complete the Necessary Documents for Application of Recognition or Re-accreditation</h1>
    </div>
    <div class="flex justify-center space-x-8">
        <!-- Recognition Documents -->
        <div id="recognition-box" tabindex="0" class="hover-effect shadow-lg bg-white border border-transparent rounded-lg p-6 w-full md:w-1/2 relative cursor-pointer border-transition" onclick="selectBox('recognition')" title="Select to view recognition document requirements">
            <div class="sidebar absolute left-0 top-0 h-full bg-gray-200" style="width: 12px;"></div> <!-- Static vertical bar -->
            <div class="ml-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">RECOGNITION DOCUMENTS</h2>
                <ul class="text-gray-800">
                    <li>Accomplished Application Form</li>
                    <li>Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student Organizations</li>
                    <li>Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations</li>
                    <li>Information Sheet of Student Organization Officer</li>
                    <li>List of Organization Members</li>
                    <li>Student Organization Constitution and Bylaws</li>
                    <li>Mission and Vision Statement</li>
                    <li>Resolution</li>
                    <li>Student Organization Official Logo</li>
                    <li>Action and Financial Plan</li>
                </ul>
            </div>
        </div>

        <!-- Re-accreditation Documents -->
        <div id="reaccreditation-box" tabindex="0" class="hover-effect shadow-lg bg-white border border-transparent rounded-lg p-6 w-full md:w-1/2 relative cursor-pointer border-transition" onclick="selectBox('reaccreditation')" title="Select to view re-accreditation document requirements">
            <div class="sidebar absolute left-0 top-0 h-full bg-gray-200" style="width: 12px;"></div> <!-- Static vertical bar -->
            <div class="ml-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">RE-ACCREDITATION DOCUMENTS</h2>
                <ul class="text-gray-800">
                    <li>Accomplished Application Form</li>
                    <li>Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student Organizations</li>
                    <li>Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations</li>
                    <li>Accomplishment Report</li>
                    <li>Financial Report</li>
                    <li>Action Plan and Financial Plan</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-10">
        <a href="#" class="start-button bg-gradient-to-r from-yellow-400 to-red-500 text-white px-6 py-3 rounded-lg shadow-lg" onclick="updateStartButton()">Start</a>
    </div>
    <div class="flex justify-center mt-2">
        <a href="#" class="text-red-600">I already have an existing transaction</a>
    </div>
</div>

<script>
    let selectedBox = '';

    function selectBox(box) {
        // Reset all boxes
        document.getElementById('recognition-box').classList.remove('border-2', 'border-solid', 'border-red-500', 'shadow-2xl');
        document.getElementById('reaccreditation-box').classList.remove('border-2', 'border-solid', 'border-red-500', 'shadow-2xl');

        // Apply styles to the selected box
        if (box === 'recognition') {
            selectedBox = 'recognition';
            document.getElementById('recognition-box').classList.add('border-2', 'border-solid', 'border-red-500', 'shadow-2xl');
        } else if (box === 'reaccreditation') {
            selectedBox = 'reaccreditation';
            document.getElementById('reaccreditation-box').classList.add('border-2', 'border-solid', 'border-red-500', 'shadow-2xl');
        }
    }

    function updateStartButton() {
        if (selectedBox === 'recognition') {
            document.querySelector('.start-button').href = '/start-recognition';
        } else if (selectedBox === 'reaccreditation') {
            document.querySelector('.start-button').href = '/start-reaccreditation';
        }
    }
</script>

<style>
    .hover-effect:hover {
        border-color: rgba(64, 64, 64, 0.8); /* Dark gray dashed line on hover */
        border-style: dashed;
        border-width: 2px;
        transition: all 0.3s ease;
    }

    .border-transition {
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .bar-transition {
        transition: height 0.3s ease, background-color 0.3s ease;
    }

    .sidebar {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 12px;
        background-color: #e2e8f0; /* Light gray color */
    }
</style>

@endsection
