<x-header></x-header>
<div class="flex max-w-7xl mx-auto p-6 space-x-8">
    <!-- Left Sidebar (Recommended Articles) -->
    <div class="w-64 bg-white p-6 rounded-lg shadow-md border border-gray-200">
      <h2 class="text-xl font-semibold mb-6 text-gray-900">Recommended Articles</h2>
      <div class="space-y-6">
        <div class="p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg shadow-sm border border-gray-200 mb-4">
          <p class="text-gray-800">How to improve your social media presence</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Read more</a>
        </div>
        <div class="p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg shadow-sm border border-gray-200 mb-4">
          <p class="text-gray-800">Best practices for online engagement</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Read more</a>
        </div>
        <div class="p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg shadow-sm border border-gray-200 mb-4">
          <p class="text-gray-800">Top strategies to grow your audience</p>
          <a href="#" class="text-blue-500 font-semibold hover:underline">Read more</a>
        </div>
      </div>
    </div>
  
    <!-- Main Thread -->
    <div class="flex-1 bg-white p-6 rounded-lg shadow-md border border-gray-200 space-y-6">
      <!-- Tweet 1 -->
      <div class="flex items-start space-x-4 pb-6 border-b border-gray-200">
        <img src="profile1.jpg" alt="Profile Image" class="w-10 h-10 rounded-full border border-gray-300">
        <div class="flex-1">
          <div class="flex items-center space-x-2">
            <span class="font-semibold text-gray-900">User Name</span>
            <span class="text-gray-500">@username</span>
          </div>
          <p class="mt-1 text-gray-800 leading-relaxed">This is the first tweet in the thread. You can write longer text here to simulate how tweets are presented.</p>
          <div class="flex space-x-6 text-gray-500 mt-3">
            <span class="cursor-pointer hover:text-blue-500">Reply</span>
            <span class="cursor-pointer hover:text-blue-500">Retweet</span>
            <span class="cursor-pointer hover:text-blue-500">Like</span>
          </div>
        </div>
      </div>
  
      <!-- Thread Line -->
      {{-- <div class="flex justify-center">
        <div class="w-1 bg-gray-300 rounded-full"></div>
      </div> --}}
  
      <!-- Tweet 2 -->
      <div class="flex items-start space-x-4 pb-6 border-b border-gray-200">
        <img src="profile1.jpg" alt="Profile Image" class="w-10 h-10 rounded-full border border-gray-300">
        <div class="flex-1">
          <div class="flex items-center space-x-2">
            <span class="font-semibold text-gray-900">User Name</span>
            <span class="text-gray-500">@username</span>
          </div>
          <p class="mt-1 text-gray-800 leading-relaxed">This is the first tweet in the thread. You can write longer text here to simulate how tweets are presented.</p>
          <div class="flex space-x-6 text-gray-500 mt-3">
            <span class="cursor-pointer hover:text-blue-500">Reply</span>
            <span class="cursor-pointer hover:text-blue-500">Retweet</span>
            <span class="cursor-pointer hover:text-blue-500">Like</span>
          </div>
        </div>
      </div>


    </div>
  
    <!-- Right Sidebar (Suggested Accounts) -->
    <div class="w-80 bg-white p-6 rounded-lg shadow-md border border-gray-200">
      <h2 class="text-xl font-semibold mb-6 text-gray-900">Suggested Accounts</h2>
      <div class="space-y-6">
        <!-- Account 1 -->
        <div class="flex items-center space-x-4 mb-4">
          <img src="suggested1.jpg" alt="Profile Image" class="w-10 h-10 rounded-full border border-gray-300">
          <div>
            <div class="font-semibold text-gray-900">Influencer One</div>
            <div class="text-gray-500">@influencerone</div>
          </div>
          <button class="ml-auto text-sm text-blue-500 font-semibold hover:underline">Follow</button>
        </div>
        <!-- Account 2 -->
        <div class="flex items-center space-x-4">
          <img src="suggested2.jpg" alt="Profile Image" class="w-10 h-10 rounded-full border border-gray-300">
          <div>
            <div class="font-semibold text-gray-900">Influencer Two</div>
            <div class="text-gray-500">@influencertwo</div>
          </div>
          <button class="ml-auto text-sm text-blue-500 font-semibold hover:underline">Follow</button>
        </div>
      </div>
    </div>
  </div>
  
<x-footer></x-footer>