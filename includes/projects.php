<?php
$projects = [
    [
        'title' => 'E-commerce Platform',
        'description' => 'A full-featured e-commerce platform built with Laravel and React',
        'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=800&q=80',
        'tech' => ['Laravel', 'React', 'MySQL', 'Tailwind CSS'],
        'liveUrl' => '#',
        'githubUrl' => '#'
    ],
    [
        'title' => 'CMS System',
        'description' => 'Custom content management system with advanced features',
        'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80',
        'tech' => ['Node.js', 'Express', 'MongoDB', 'React'],
        'liveUrl' => '#',
        'githubUrl' => '#'
    ],
    [
        'title' => 'Task Management App',
        'description' => 'Real-time task management application for teams',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'tech' => ['Python', 'Django', 'PostgreSQL', 'Vue.js'],
        'liveUrl' => '#',
        'githubUrl' => '#'
    ]
];
?>

<section id="projects" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <img 
                        src="<?= $project['image'] ?>" 
                        alt="<?= $project['title'] ?>"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2"><?= $project['title'] ?></h3>
                        <p class="text-gray-600 mb-4"><?= $project['description'] ?></p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['tech'] as $tech): ?>
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                                    <?= $tech ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <div class="flex space-x-4">
                            <a 
                                href="<?= $project['liveUrl'] ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center space-x-2 text-blue-600 hover:text-blue-700"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                <span>Live Demo</span>
                            </a>
                            <a 
                                href="<?= $project['githubUrl'] ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center space-x-2 text-gray-600 hover:text-gray-700"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.137 20.167 22 16.42 22 12c0-5.523-4.477-10-10-10z"></path>
                                </svg>
                                <span>Source Code</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>