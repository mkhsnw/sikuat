<x-header></x-header>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex flex-col">
    <div class="container mx-auto px-4 py-8 flex-grow">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Profile Section -->
            <div class="lg:col-span-1 bg-white rounded-2xl shadow-xl p-6">
                <div class="text-center">
                    <img 
                        src="/api/placeholder/200/200" 
                        alt="Profile" 
                        class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-blue-100"
                    >
                    <h2 class="text-2xl font-bold text-gray-800">{{ $users->username }}</h2>
                    @if($users->poin < 500)
                    <p class="text-gray-500 mt-2">Bronze Member</p>
                    @elseif($users->poin >= 500 && $users->poin < 1000)
                    <p class="text-gray-500 mt-2">Silver Member</p>
                    @else
                    <p class="text-gray-500 mt-2">Gold Member</p>
                    @endif

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

                    <button class="mt-6 w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition" onclick="window.location.href='{{route('profile.edit')}}'">
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

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="challenge-list">
                    <!-- Example Challenge Card -->
                    <div class="bg-blue-50 p-4 rounded-xl flex flex-col justify-between challenge-card">
                        <div>
                            <h3 class="font-bold text-gray-800">Blog and Social Posts</h3>
                            <p class="text-sm text-gray-500">Number 10 • 4 hours</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="mr-2 text-sm text-gray-600">Deadline Today</span>
                            <span class="text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3a1 1 0 001 1h2a1 1 0 100-2h-1V7z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <button class="mt-4 py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 transition" onclick="completeChallenge(this)">Complete</button>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-xl flex flex-col justify-between challenge-card">
                        <div>
                            <h3 class="font-bold text-gray-800">Blog and Social Posts</h3>
                            <p class="text-sm text-gray-500">Number 10 • 4 hours</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="mr-2 text-sm text-gray-600">Deadline Today</span>
                            <span class="text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3a1 1 0 001 1h2a1 1 0 100-2h-1V7z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <button class="mt-4 py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 transition" onclick="completeChallenge(this)">Complete</button>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-xl flex flex-col justify-between challenge-card">
                        <div>
                            <h3 class="font-bold text-gray-800">Blog and Social Posts</h3>
                            <p class="text-sm text-gray-500">Number 10 • 4 hours</p>
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="mr-2 text-sm text-gray-600">Deadline Today</span>
                            <span class="text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3a1 1 0 001 1h2a1 1 0 100-2h-1V7z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <button class="mt-4 py-2 px-4 bg-green-600 text-white rounded-lg hover:bg-green-700 transition" onclick="completeChallenge(this)">Complete</button>
                    </div>
                    <!-- Add more challenges dynamically here -->
                </div>
            </div>
        </div>

        <!-- My Threads Section -->
        <div class="mt-10 bg-white rounded-2xl shadow-xl p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">My Threads</h2>
                <div class="flex items-center space-x-2">
                    <select class="form-select border rounded-lg px-2 py-1 text-sm">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Closed</option>
                    </select>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-700 transition" onclick="window.location.href='{{route('threads.create')}}'">
                        New Thread
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($mythreads as $thread) 
                <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-green-600 text-sm">{{ $thread->caption }}</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">{{ $thread->like }} Komentar</span>
                        <button onclick="window.location.href='{{ route('detail_thread', $thread->id) }}'" class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
                <!-- Example Thread Card -->
               

                {{-- <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-green-800">Python Enthusiasts</h3>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Discussions about advanced Python techniques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">12 Members</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-green-800">Python Enthusiasts</h3>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Discussions about advanced Python techniques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">12 Members</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-green-800">Python Enthusiasts</h3>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Discussions about advanced Python techniques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">12 Members</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-green-800">Python Enthusiasts</h3>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Discussions about advanced Python techniques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">12 Members</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-green-50 p-4 rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-green-800">Python Enthusiasts</h3>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Discussions about advanced Python techniques</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">12 Members</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div> --}}
                <!-- Add more threads dynamically here -->
            </div>
        </div>
        @if ($users->poin >= 1000)
            <!-- My Articles Section -->
        <div class="mt-10 bg-white rounded-2xl shadow-xl p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">My Articles</h2>
                <div class="flex items-center space-x-2">
                    <select class="form-select border rounded-lg px-2 py-1 text-sm">
                        <option>All Status</option>
                        <option>Published</option>
                        <option>Draft</option>
                    </select>
                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-700 transition" onclick="window.location.href='{{route('articles.create')}}'">
                        New Article
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <!-- Example Article Card -->
                <div class="bg-blue-50 p-4 rounded-xl flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-gray-800">Mastering Python Basics</h3>
                        <p class="text-sm text-gray-500">Published • 2 weeks ago</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-green-600 text-sm">245 Views</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.379-8.379-2.828-2.828z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-blue-50 p-4 rounded-xl flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-gray-800">Mastering Python Basics</h3>
                        <p class="text-sm text-gray-500">Published • 2 weeks ago</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-green-600 text-sm">245 Views</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.379-8.379-2.828-2.828z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-blue-50 p-4 rounded-xl flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-gray-800">Mastering Python Basics</h3>
                        <p class="text-sm text-gray-500">Published • 2 weeks ago</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-green-600 text-sm">245 Views</span>
                        <button class="text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.379-8.379-2.828-2.828z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Add more articles dynamically here -->
            </div>
        </div>
        @endif
        
    </div>
    <x-footer></x-footer>

    <script>
        function completeChallenge(button) {
            const challengeCard = button.closest('.challenge-card');
            challengeCard.remove();
        }
    </script>
</body>
