<?php
$skills = [
    ['name' => 'PHP', 'level' => 90],
    ['name' => 'Laravel', 'level' => 85],
    ['name' => 'CodeIgniter', 'level' => 80],
    ['name' => 'Node.js', 'level' => 85],
    ['name' => 'React', 'level' => 90],
    ['name' => 'JavaScript', 'level' => 95],
    ['name' => 'MySQL', 'level' => 85],
    ['name' => 'Python', 'level' => 75],
    ['name' => 'HTML/CSS', 'level' => 95],
    ['name' => 'WordPress', 'level' => 80],
];
?>

<section id="skills" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Technical Skills</h2>
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <?php foreach ($skills as $skill): ?>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="font-medium"><?= $skill['name'] ?></span>
                        <span class="text-blue-600"><?= $skill['level'] ?>%</span>
                    </div>
                    <div class="h-2 bg-gray-200 rounded-full">
                        <div 
                            class="h-full bg-blue-600 rounded-full transition-all duration-500"
                            style="width: <?= $skill['level'] ?>%"
                        ></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>