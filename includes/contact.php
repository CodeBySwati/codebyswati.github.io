<?php
$status = $_GET['status'] ?? '';
$statusMessage = '';

if ($status === 'success') {
    $statusMessage = '<div class="p-4 mb-6 bg-green-100 text-green-700 rounded-lg">Message sent successfully!</div>';
} else if ($status === 'error') {
    $statusMessage = '<div class="p-4 mb-6 bg-red-100 text-red-700 rounded-lg">There was an error sending your message. Please try again.</div>';
}
?>

<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Get in Touch</h2>
        <?= $statusMessage ?>
        <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <div>
                <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium">Email</h4>
                            <a href="mailto:swatisrivastava.office@gmail.com" class="text-gray-600 hover:text-blue-600">
                                swatisrivastava.office@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium">LinkedIn</h4>
                            <a href="https://www.linkedin.com/in/swati1992" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-600">
                                www.linkedin.com/in/swati1992
                            </a>
                        </div>
                    </div>
                    <!-- <div class="flex items-start space-x-4">
                        <div class="text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium">Phone</h4>
                            <a href="tel:+15551234567" class="text-gray-600 hover:text-blue-600">
                                +1 (555) 123-4567
                            </a>
                        </div>
                    </div> -->
                    <div class="flex items-start space-x-4">
                        <div class="text-blue-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium">Location</h4>
                            <p class="text-gray-600">Copenhagen, Denmark</p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="includes/process_contact.php" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                        Name
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        minlength="2"
                        maxlength="50"
                    />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    />
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                        Message
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        minlength="10"
                        maxlength="1000"
                    ></textarea>
                </div>
                <button
                    type="submit"
                    class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                >
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>