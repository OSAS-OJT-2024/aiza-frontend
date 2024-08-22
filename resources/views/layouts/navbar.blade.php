<!-- resources/views/layouts/navbar.blade.php -->

<nav style="background-color: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); width: 100%; border-bottom: 4px solid #dc2626;">
    <div class="container mx-auto p-2 flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/OSAS-Logo.png') }}" alt="OSAS Logo" class="h-12">
            <div class="text-left md:text-left">
                <h1 class="text-lg md:text-xl font-bold text-red-900">University of Southeastern Philippines</h1>
                <p class="text-orange-600 text-sm md:text-base">Student Organization Portal</p>
            </div>
        </div>
        <div class="text-center md:text-right mt-2 md:mt-0">
            <p class="text-orange-900 font-bold text-sm md:text-base">Office of Student Affairs and Services</p>
        </div>
    </div>
</nav>
