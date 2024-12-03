<x-header></x-header>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Profile Section -->
            <div class="lg:col-span-1 bg-white rounded-2xl shadow-xl p-6">
                <div class="text-center">
                    <img 
                        src="/api/placeholder/200/200" 
                        alt="Profile" 
                        class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-blue-100"
                    >
                    <h2 class="text-2xl font-bold text-gray-800">John Doe</h2>
                    <p class="text-gray-500 mt-2">Software Developer</p>
                    
                    <div class="mt-6 grid grid-cols-3 gap-4">
                        <div>
                            <span class="block text-2xl font-bold text-blue-600">24</span>
                            <span class="text-sm text-gray-500">Challenges</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-green-600">15</span>
                            <span class="text-sm text-gray-500">Completed</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-yellow-600">9</span>
                            <span class="text-sm text-gray-500">Pending</span>
                        </div>
                    </div>

                    <button class="mt-6 w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Edit Profile
                    </button>
                </div>
            </div>

            <!-- Today's Challenges -->
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Today's Challenges</h2>
                    <span class="text-sm text-gray-500">5 of 8 completed</span>
                </div>

                <div class="space-y-4">
                    <div class="bg-blue-50 p-4 rounded-xl flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800">Blog and Social Posts</h3>
                            <p class="text-sm text-gray-500">Number 10 • 4 hours</p>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2 text-sm text-gray-600">Deadline Today</span>
                            <span class="text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3a1 1 0 001 1h2a1 1 0 100-2h-1V7z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-xl flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800">New Campaign Review</h3>
                            <p class="text-sm text-gray-500">Grace Aroma • 7 days</p>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2 text-sm text-gray-600">New Feedback</span>
                            <span class="text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- More challenges... -->
                </div>
            </div>

            <!-- Challenge History -->
            <div class="lg:col-span-3 bg-white rounded-2xl shadow-xl p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Challenge History</h2>
                    <select class="form-select border rounded-lg px-2 py-1 text-sm">
                        <option>Last 30 Days</option>
                        <option>Last 90 Days</option>
                        <option>This Year</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-green-50 p-4 rounded-xl">
                        <h3 class="font-bold text-green-800">Completed</h3>
                        <p class="text-3xl font-bold text-green-600 mt-2">15</p>
                    </div>
                    <div class="bg-yellow-50 p-4 rounded-xl">
                        <h3 class="font-bold text-yellow-800">In Progress</h3>
                        <p class="text-3xl font-bold text-yellow-600 mt-2">9</p>
                    </div>
                    <div class="bg-red-50 p-4 rounded-xl">
                        <h3 class="font-bold text-red-800">Overdue</h3>
                        <p class="text-3xl font-bold text-red-600 mt-2">2</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-xl">
                        <h3 class="font-bold text-blue-800">Total Challenges</h3>
                        <p class="text-3xl font-bold text-blue-600 mt-2">24</p>
                    </div>
                </div>

                <div class="mt-6">
                    <canvas id="challengeChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Challenge History Chart
        const ctx = document.getElementById('challengeChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Challenges Completed',
                    data: [5, 8, 6, 7],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

<x-footer></x-footer>
