<script>
    // 1. Initial Theme Check (Keep this exactly as you have it)
    (function() {
        const savedTheme = localStorage.getItem('color-theme');
        const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme === 'dark' || (!savedTheme && systemDark)) {
            document.documentElement.classList.add('dark');
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.setAttribute('data-theme', 'light');
        }
    })();

    // 2. Multi-Button Click Handler (FIXED)
    document.addEventListener('DOMContentLoaded', () => {
        // We look for the CLASS .theme-toggle-btn instead of an ID
        const themeToggleButtons = document.querySelectorAll('.theme-toggle-btn');
        
        themeToggleButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');

                const isDark = document.documentElement.classList.contains('dark');
                const theme = isDark ? 'dark' : 'light';

                localStorage.setItem('color-theme', theme);
                document.documentElement.setAttribute('data-theme', theme);
            });
        });
    });
</script>