<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <x-sidebar></x-sidebar>
    
    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Navbar -->
      <x-navbar></x-navbar>

      <!-- Grid Layout -->
      <div class="grid grid-cols-2 gap-6">
        <!-- Blog Section -->
        <div class="bg-white p-6 rounded-lg shadow flex flex-col h-full">
          <div class="overflow-y-auto flex-1 max-h-[50rem]">
            <x-blog></x-blog>
            <x-blog></x-blog>
          </div>
        </div>

        <!-- Profile Section -->
        <div class="bg-white p-6 rounded-lg shadow flex flex-col h-full">
          <div class="bg-gray-200 rounded-lg shadow-lg p-4 flex-1 max-h-[50rem] overflow-y-auto">
            <!-- Profile Section -->
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                <span class="text-sm font-semibold">Profile</span>
              </div>
              <div class="ml-4">
                <h2 class="text-lg font-bold">Account One</h2>
              </div>
            </div>

            <!-- Thumbnail -->
            <div class="bg-white border border-gray-300 rounded-lg h-32 flex items-center justify-center mb-4">
              <span class="font-bold text-gray-500">Thumbnail</span>
            </div>

            <!-- Text Content -->
            <div class="text-gray-700 text-sm mb-4">
              <p>
                This is the first tweet in the thread. You can write longer text here
                to simulate how tweets are presented. This is the first tweet in the
                thread. You can write longer text here to simulate how tweets are
                presented. This is the first tweet in the thread.
              </p>
              <p>
                Add more content here to test scrolling. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
              </p>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4">
              <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400">
                Revisi
              </button>
              <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Accept
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
