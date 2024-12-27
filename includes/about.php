<?php
$services = [
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>',
        'title' => 'Frontend Development',
        'description' => 'Creating responsive and interactive user interfaces using modern frameworks'
    ],
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>',
        'title' => 'Backend Development',
        'description' => 'Building robust server-side applications and APIs'
    ],
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>',
        'title' => 'Database Design',
        'description' => 'Designing and optimizing database structures'
    ],
    [
        'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>',
        'title' => 'UI/UX Design',
        'description' => 'Creating intuitive and beautiful user experiences'
    ]
];
?>

<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">About Me</h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-gray-600 leading-relaxed mb-6">
                    With over 9 years of experience in web development, I've had the privilege of working
                    on diverse projects across various industries. My expertise spans both front-end and
                    back-end development, allowing me to create comprehensive web solutions from concept
                    to deployment.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    I'm passionate about creating efficient, scalable, and maintainable code while
                    staying up-to-date with the latest technologies and best practices in web development.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <?php foreach ($services as $service): ?>
                    <div class="p-6 bg-gray-50 rounded-lg hover:shadow-md transition-shadow">
                        <div class="mb-4 text-blue-600">
                            <?= $service['icon'] ?>
                        </div>
                        <h3 class="text-lg font-semibold mb-2"><?= $service['title'] ?></h3>
                        <p class="text-gray-600 text-sm"><?= $service['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>