<div class="flex flex-col md:flex-row items-center justify-between mb-10">
    <!-- Step 1 -->
    <div class="flex items-center mb-4 md:mb-0">
        <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full {{ $step >= 1 ? 'bg-orange-600 dark:bg-orange-500 text-white' : 'bg-gray-300 dark:bg-gray-600 text-gray-600' }} font-semibold">
            1
        </div>
        <span class="ml-2 text-sm md:text-lg font-semibold {{ $step >= 1 ? 'text-orange-600 dark:text-orange-400' : 'text-gray-600 dark:text-gray-400' }}">Organization Details</span>
    </div>
    <!-- Connector Line -->
    <div class="hidden md:flex flex-grow h-1 {{ $step > 1 ? 'bg-orange-600 dark:bg-orange-500' : 'bg-gray-300 dark:bg-gray-600' }} mx-2"></div>
    <!-- Step 2 -->
    <div class="flex items-center mb-4 md:mb-0">
        <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full {{ $step >= 2 ? 'bg-orange-600 dark:bg-orange-500 text-white' : 'bg-gray-300 dark:bg-gray-600 text-gray-600' }} font-semibold">
            2
        </div>
        <span class="ml-2 text-sm md:text-lg font-semibold {{ $step >= 2 ? 'text-orange-600 dark:text-orange-400' : 'text-gray-600 dark:text-gray-400' }}">Document Checklist</span>
    </div>
    <!-- Connector Line -->
    <div class="hidden md:flex flex-grow h-1 {{ $step > 2 ? 'bg-orange-600 dark:bg-orange-500' : 'bg-gray-300 dark:bg-gray-600' }} mx-2"></div>
    <!-- Step 3 -->
    <div class="flex items-center mb-4 md:mb-0">
        <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full {{ $step >= 3 ? 'bg-orange-600 dark:bg-orange-500 text-white' : 'bg-gray-300 dark:bg-gray-600 text-gray-600' }} font-semibold">
            3
        </div>
        <span class="ml-2 text-sm md:text-lg font-semibold {{ $step >= 3 ? 'text-orange-600 dark:text-orange-400' : 'text-gray-600 dark:text-gray-400' }}">Review Submission</span>
    </div>
    <!-- Connector Line -->
    <div class="hidden md:flex flex-grow h-1 {{ $step > 3 ? 'bg-orange-600 dark:bg-orange-500' : 'bg-gray-300 dark:bg-gray-600' }} mx-2"></div>
    <!-- Step 4 -->
    <div class="flex items-center mb-4 md:mb-0">
        <div class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full {{ $step >= 4 ? 'bg-orange-600 dark:bg-orange-500 text-white' : 'bg-gray-300 dark:bg-gray-600 text-gray-600' }} font-semibold">
            4
        </div>
        <span class="ml-2 text-sm md:text-lg font-semibold {{ $step >= 4 ? 'text-orange-600 dark:text-orange-400' : 'text-gray-600 dark:text-gray-400' }}">Confirmation</span>
    </div>
</div>
