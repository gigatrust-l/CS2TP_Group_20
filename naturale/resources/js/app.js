import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    // If the toggle button isn't on the current page (like an admin panel), stop here.
    if (!themeToggleBtn) return;

    /**
     * 1. INITIAL SYNC
     * We check the current state (set by the <head> script) and update the UI/Icons.
     */
    const isDark = document.documentElement.classList.contains('dark');
    
    // Ensure the data-theme attribute matches the class for your CSS variables
    document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');

    // Sync icons: If dark, show sun; if light, show moon.
    if (isDark) {
        darkIcon.classList.add('hidden');
        lightIcon.classList.remove('hidden');
    } else {
        lightIcon.classList.add('hidden');
        darkIcon.classList.remove('hidden');
    }

    /**
     * 2. THE CLICK EVENT
     * Handles the user manually switching themes.
     */
    themeToggleBtn.addEventListener('click', function() {
        // Add the transition class so colors fade smoothly instead of snapping
        document.documentElement.classList.add('theme-transition');

        // Toggle the theme
        if (document.documentElement.classList.contains('dark')) {
            // SWITCHING TO LIGHT MODE
            document.documentElement.classList.remove('dark');
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('color-theme', 'light');

            // Update Icons
            darkIcon.classList.remove('hidden');
            lightIcon.classList.add('hidden');
        } else {
            // SWITCHING TO DARK MODE
            document.documentElement.classList.add('dark');
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('color-theme', 'dark');

            // Update Icons
            lightIcon.classList.remove('hidden');
            darkIcon.classList.add('hidden');
        }
    });
});