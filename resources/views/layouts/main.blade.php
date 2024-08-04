<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Other meta tags and title -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="mt-20">
        @yield('content')
    </div>

    <!-- Global Script for Dark Mode -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('dark-mode-toggle');
            const htmlElement = document.documentElement;
            const darkModeIcon = document.getElementById('dark-mode-icon');

            // Check and apply the saved theme from localStorage
            if (localStorage.getItem('theme') === 'dark') {
                htmlElement.classList.add('dark');
                if (darkModeIcon) {
                    darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                }
            } else {
                htmlElement.classList.remove('dark');
                if (darkModeIcon) {
                    darkModeIcon.classList.replace('fa-sun', 'fa-moon');
                }
            }

            if (toggleButton) {
                toggleButton.addEventListener('click', () => {
                    if (htmlElement.classList.contains('dark')) {
                        htmlElement.classList.remove('dark');
                        if (darkModeIcon) {
                            darkModeIcon.classList.replace('fa-sun', 'fa-moon');
                        }
                        localStorage.setItem('theme', 'light');
                    } else {
                        htmlElement.classList.add('dark');
                        if (darkModeIcon) {
                            darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                        }
                        localStorage.setItem('theme', 'dark');
                    }
                });
            }
        });
    </script>

    @vite('resources/js/app.js')
</body>
</html>
