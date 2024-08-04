import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.getElementById('dark-mode-toggle');
  const htmlElement = document.documentElement;
  const darkModeIcon = document.getElementById('dark-mode-icon');

  // Debugging: Check if elements are detected
  console.log('Toggle Button:', toggleButton);
  console.log('Dark Mode Icon:', darkModeIcon);

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
