<?php
$navItems = [
    ['href' => '#home', 'text' => 'Home'],
    ['href' => '#about', 'text' => 'About'],
    ['href' => '#skills', 'text' => 'Skills'],
    ['href' => '#projects', 'text' => 'Projects'],
    ['href' => '#contact', 'text' => 'Contact']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swati's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</head>
<body>
    <header class="fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#home" class="text-2xl font-bold text-gray-800">Swati<span class="text-blue-600">Srivastava</span></a>
                
                <nav class="hidden md:flex space-x-8">
                    <?php foreach ($navItems as $item): ?>
                        <a href="<?= $item['href'] ?>" class="text-gray-600 hover:text-blue-600 transition-colors">
                            <?= $item['text'] ?>
                        </a>
                    <?php endforeach; ?>
                </nav>

                <div class="hidden md:flex space-x-4">
                    <a href="https://github.com/CodeBySwati" target="_blank" class="text-gray-600 hover:text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.137 20.167 22 16.42 22 12c0-5.523-4.477-10-10-10z"></path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/swati1992" target="_blank" class="text-gray-600 hover:text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                </div>

                <button class="md:hidden" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden absolute top-full left-0 right-0 bg-white border-t">
            <div class="flex flex-col p-4 space-y-4">
                <?php foreach ($navItems as $item): ?>
                    <a href="<?= $item['href'] ?>" class="text-gray-600 hover:text-blue-600 transition-colors" onclick="toggleMenu()">
                        <?= $item['text'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </header>