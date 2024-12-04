<x-header></x-header>
<div class="bg-brand-background min-h-screen font-sans">
  <div class="container mx-auto px-4 py-8 lg:max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- Left Sidebar: Recommended Articles -->
          <div class="lg:col-span-1 space-y-6">
              <div class="bg-white rounded-2xl shadow-lg p-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Recommended</h2>
                  <div class="space-y-4">
                    
                      <article class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-xl hover:shadow-md transition-all">
                          <h3 class="font-semibold text-gray-800 mb-2">Social Media Mastery</h3>
                          <p class="text-gray-600 text-sm mb-3">Unlock strategies to boost your online presence</p>
                          <a href="#" class="text-brand-blue font-medium hover:underline">Read More →</a>
                      </article>
                      <article class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-xl hover:shadow-md transition-all">
                          <h3 class="font-semibold text-gray-800 mb-2">Audience Growth</h3>
                          <p class="text-gray-600 text-sm mb-3">Proven techniques to expand your reach</p>
                          <a href="#" class="text-brand-blue font-medium hover:underline">Read More →</a>
                      </article>
                  </div>
              </div>
          </div>

          <!-- Main Thread -->
          <div class="lg:col-span-2 space-y-6">
              <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                  <div class="p-6 border-b">
                      <h1 class="text-3xl font-bold text-gray-900">Thread Discussion</h1>
                  </div>

                  @foreach ($thread as $thread)
    <div class="p-6 border-b hover:bg-gray-50 transition-colors">
        <div class="flex items-start space-x-4">
            <img src="https://via.placeholder.com/50" alt="Profile" class="w-12 h-12 rounded-full ring-2 ring-brand-blue/20">
            <div class="flex-1">
                <div class="flex items-center space-x-2 mb-2">
                    <span class="font-bold text-gray-900">{{ $thread->user->nama_user }}</span>
                    <span class="text-gray-500 text-sm">@ {{ $thread->user->username }}</span>
                    <span class="text-gray-400 text-sm ml-auto">{{ $thread->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-gray-700 leading-relaxed mb-4">
                    {{ $thread->caption }}
                </p>
                <!-- Bagian lainnya tetap -->
                <div class="flex items-center space-x-6 text-gray-500">
                    <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span>{{ $thread->comment }}</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <span>15</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span>{{ $thread->like }}</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach


                  <!-- Thread Post 2 -->
                  {{-- <div class="p-6 border-b hover:bg-gray-50 transition-colors">
                      <div class="flex items-start space-x-4">
                          <img src="https://via.placeholder.com/50" alt="Profile" class="w-12 h-12 rounded-full ring-2 ring-brand-blue/20">
                          <div class="flex-1">
                              <div class="flex items-center space-x-2 mb-2">
                                  <span class="font-bold text-gray-900">Jane Smith</span>
                                  <span class="text-gray-500 text-sm">@janesmith</span>
                                  <span class="text-gray-400 text-sm ml-auto">1h ago</span>
                              </div>
                              <p class="text-gray-700 leading-relaxed mb-4">
                                  Responding to the previous post with insights on emerging digital communication platforms and their potential impact.
                              </p>
                              <div class="flex items-center space-x-6 text-gray-500">
                                  <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                      </svg>
                                      <span>32</span>
                                  </button>
                                  <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                      </svg>
                                      <span>15</span>
                                  </button>
                                  <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                      </svg>
                                      <span>87</span>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div> --}}
              </div>
          </div>

          <!-- Right Sidebar: Suggested Accounts -->
          <div class="hidden lg:block lg:col-span-1">
              <div class="bg-white rounded-2xl shadow-lg p-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Suggested Accounts</h2>
                  <div class="space-y-4">
                      <div class="flex items-center space-x-4">
                          <img src="https://via.placeholder.com/50" alt="Profile" class="w-12 h-12 rounded-full ring-2 ring-brand-blue/20">
                          <div class="flex-1">
                              <h3 class="font-semibold text-gray-900">Tech Innovator</h3>
                              <p class="text-gray-500 text-sm">@techinnovator</p>
                          </div>
                          <button class="bg-brand-blue text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition-colors">
                              Follow
                          </button>
                      </div>
                      <div class="flex items-center space-x-4">
                          <img src="https://via.placeholder.com/50" alt="Profile" class="w-12 h-12 rounded-full ring-2 ring-brand-blue/20">
                          <div class="flex-1">
                              <h3 class="font-semibold text-gray-900">Digital Strategist</h3>
                              <p class="text-gray-500 text-sm">@digitalstrat</p>
                          </div>
                          <button class="bg-brand-blue text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition-colors">
                              Follow
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
  
<x-footer></x-footer>