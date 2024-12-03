<x-header></x-header>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-xl p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Create New Thread</h2>
            
            <form action="/threads/store" method="POST">
                <!-- Thread Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Thread Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3" 
                        placeholder="Enter thread title"
                        required
                    >
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea 
                        id="description" 
                        name="description" 
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3" 
                        placeholder="Describe your thread"
                        rows="6"
                        required
                    ></textarea>
                </div>

                <!-- Category -->
                <div class="mb-6">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                    <select 
                        id="category" 
                        name="category" 
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3"
                        required
                    >
                        <option value="">Select a category</option>
                        <option value="python">Python</option>
                        <option value="web-development">Web Development</option>
                        <option value="data-science">Data Science</option>
                        <option value="machine-learning">Machine Learning</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button 
                        type="submit" 
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition"
                    >
                        Create Thread
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<x-footer></x-footer>
