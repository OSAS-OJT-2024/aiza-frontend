@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-black dark:text-white flex flex-col">
    <!-- Header Container -->
    <div class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-5xl mx-auto py-4 px-6 flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('images/OSAS-Logo.png') }}" alt="USeP Logo" class="h-12 md:h-16">
                <div class="ml-4 text-center md:text-left">
                    <h1 class="text-xl md:text-2xl font-bold text-orange-700 dark:text-orange-300">University of Southeastern Philippines</h1>
                    <p class="text-xs md:text-sm text-gray-600 dark:text-gray-300">Student Organization Portal</p>
                </div>
            </div>
            <div class="text-center md:text-right mt-4 md:mt-0">
                <p class="text-xs md:text-sm text-gray-600 dark:text-gray-300">Office of Student <br> Affair and Services</p>
            </div>
        </div>
        <div class="bg-orange-700 dark:bg-orange-900">
            <h2 class="text-center text-lg md:text-3xl font-bold text-white py-2">APPLICATION FOR RE-ACCREDITATION</h2>
        </div>
    </div>

    <!-- Dark Mode Toggle Button -->
    <div class="flex justify-end p-4">
        <button id="dark-mode-toggle" class="p-2 bg-gray-200 dark:bg-gray-800 text-black dark:text-white rounded-md">
            <i id="dark-mode-icon" class="fas fa-moon"></i>
        </button>
    </div>

    <!-- Main Content Container -->
    <div class="flex-grow flex items-center justify-center px-4 md:px-0">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 md:p-12 w-full max-w-full md:max-w-5xl">
            <!-- Progressive Step Bar -->
            <div class="flex flex-col md:flex-row items-center justify-between mb-10">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-orange-600 dark:bg-orange-500 text-white font-semibold">1</div>
                    <span class="ml-2 text-sm md:text-lg font-semibold text-orange-600 dark:text-orange-400">Organization Details</span>
                </div>
                <div class="hidden md:flex flex-grow h-1 bg-orange-600 dark:bg-orange-500 mx-2"></div>
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-300 dark:bg-gray-600 text-gray-600 dark:text-gray-400 font-semibold">2</div>
                    <span class="ml-2 text-sm md:text-lg font-semibold text-gray-600 dark:text-gray-400">Document Checklist</span>
                </div>
                <div class="hidden md:flex flex-grow h-1 bg-gray-300 dark:bg-gray-600 mx-2"></div>
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-300 dark:bg-gray-600 text-gray-600 dark:text-gray-400 font-semibold">3</div>
                    <span class="ml-2 text-sm md:text-lg font-semibold text-gray-600 dark:text-gray-400">Review Submission</span>
                </div>
                <div class="hidden md:flex flex-grow h-1 bg-gray-300 dark:bg-gray-600 mx-2"></div>
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-300 dark:bg-gray-600 text-gray-600 dark:text-gray-400 font-semibold">4</div>
                    <span class="ml-2 text-sm md:text-lg font-semibold text-gray-600 dark:text-gray-400">Confirmation</span>
                </div>
            </div>

            <!-- Form Section -->
            <div class="bg-orange-600 text-white text-center text-xl font-bold rounded-t-lg p-4 mb-6">Organization Details</div>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="organization-id" id="organization-id" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " />
                        <label for="organization-id" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Organization ID</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="organization-name" id="organization-name" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " />
                        <label for="organization-name" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Organization Name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="representative-name" id="representative-name" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " />
                        <label for="representative-name" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Representative Name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="contact-number" id="contact-number" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " />
                        <label for="contact-number" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Contact Number</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group md:col-span-2">
                        <input type="email" name="organization-email" id="organization-email" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " />
                        <label for="organization-email" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Organization Email</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group md:col-span-2">
                        <textarea name="organization-description" id="organization-description" rows="4" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" "></textarea>
                        <label for="organization-description" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2.5 bg-white dark:bg-gray-800 px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">Organization Description</label>
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button class="bg-orange-600 dark:bg-orange-500 text-white p-4 rounded-md hover:bg-orange-700 dark:hover:bg-orange-600 transition duration-300">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Dark Mode Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const htmlElement = document.documentElement;
    const darkModeIcon = document.getElementById('dark-mode-icon');

    // Check and apply the saved theme from localStorage
    if (localStorage.getItem('theme') === 'dark') {
      htmlElement.classList.add('dark');
      darkModeIcon.classList.replace('fa-moon', 'fa-sun');
    } else {
      htmlElement.classList.remove('dark');
      darkModeIcon.classList.replace('fa-sun', 'fa-moon');
    }

    if (toggleButton) {
      toggleButton.addEventListener('click', () => {
        if (htmlElement.classList.contains('dark')) {
          htmlElement.classList.remove('dark');
          darkModeIcon.classList.replace('fa-sun', 'fa-moon');
          localStorage.setItem('theme', 'light');
        } else {
          htmlElement.classList.add('dark');
          darkModeIcon.classList.replace('fa-moon', 'fa-sun');
          localStorage.setItem('theme', 'dark');
        }
      });
    }
  });
</script>
@endsection
