<x-header></x-header>

<div class="bg-gray-50 min-h-screen font-sans">
  <div class="container mx-auto px-4 py-8 lg:max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- Left Sidebar: Recommended Articles -->
          <div class="lg:col-span-1 space-y-6">
              <div class="bg-white rounded-2xl shadow-lg p-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Recommended</h2>
                  <div class="space-y-4">
                      <article class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-xl hover:shadow-md transition-all">
                          <h3 class="font-semibold text-gray-800 mb-2">Social Media Trends</h3>
                          <p class="text-gray-600 text-sm mb-3">Latest insights in digital communication</p>
                          <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
                      </article>
                  </div>
              </div>
          </div>

          <!-- Main Thread Detail -->
          <div class="lg:col-span-2 space-y-6">
              <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                  <!-- Thread Header -->
                  <div class="p-6 border-b">
                      <h1 class="text-3xl font-bold text-gray-900">Thread Discussion</h1>
                  </div>
                 
                  <div class="p-6 border-b">
                    <div class="flex items-start space-x-4">
                        <img src="https://via.placeholder.com/100" 
                             alt="Profile" 
                             class="w-16 h-16 rounded-full ring-2 ring-blue-500/20">
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="font-bold text-gray-900 text-xl">{{ $users->nama_user}}</span>
                                <span class="text-gray-500 text-sm">@ {{ $users->username }}</span>
                                <span class="text-gray-400 text-sm ml-auto">
                                    {{ $thread->created_at->format('F d, Y \a\t H:i') }}
                                    |{{ $thread->created_at->diffForHumans() }}
                                    
                                </span>
                            </div>
                            
                            <!-- Thread Content -->
                            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                                <p class="text-gray-700 leading-relaxed text-base">
                                    {{ $thread->caption }}                 
                                </p>
                            </div>

                            <!-- Thread Interactions -->
                            <div class="flex items-center space-x-6 text-gray-500">
                                <!-- Comments -->
                                <button class="flex items-center space-x-2 hover:text-blue-500 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    <span>{{ count($komentars) }} Comments</span>
                                </button>

                                <!-- Shares -->
                                <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                    <span>18 Shares</span>
                                </button>

                                <!-- Likes -->
                                <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <span>256 Likes</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                
                  <!-- Main Thread Post -->
                  
                  <!-- Comments Section -->
                  <div class="p-6">
                      <h2 class="text-xl font-bold text-gray-800 mb-4">Comments ({{ count($komentars) }})</h2>
                      
                      <!-- Comment Input -->
                      <form action="{{ route('threads.comment.store', $thread->id) }}" method="POST" class="mb-6">
                          @csrf
                          <div class="flex items-start space-x-4">
                              <img src="https://via.placeholder.com/50" 
                                   alt="Your Profile" 
                                   class="w-12 h-12 rounded-full ring-2 ring-blue-500/20">
                              <div class="flex-1">
                                  <textarea 
                                      class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500/50 transition-all" 
                                      name="komentar"
                                      rows="3" 
                                      placeholder="Write a comment..."></textarea>
                                  <button type="submit" class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition-colors">
                                      Post Comment
                                  </button>
                              </div>
                          </div>
                      </form>

                      <!-- Comments List -->
                      <div class="space-y-4">
                          <!-- Comment 1 -->
                          @foreach ( $komentars as $komentar) 
                          <div class="flex items-start space-x-4 pb-4 border-b">
                            <img src="https://via.placeholder.com/50" 
                                 alt="Commenter Profile" 
                                 class="w-10 h-10 rounded-full ring-2 ring-blue-500/20">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="font-bold text-gray-900">{{ $komentar->user->nama_user }}</span>
                                    <span class="text-gray-500 text-sm">@ {{ $komentar->user->username  }}</span>
                                    <span class="text-gray-400 text-sm ml-auto">{{ $komentar->created_at->diffForHumans()  }}</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed">
                                    {{ $komentar->Komentar }}
                                </p>
                                <div class="flex items-center space-x-4 mt-2 text-gray-500 text-sm">
                                    <button class="hover:text-blue-500">Reply</button>
                                    <button class="hover:text-red-500 flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <span>12</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>

          <!-- Right Sidebar: Suggested Accounts -->
          <div class="hidden lg:block lg:col-span-1">
              <div class="bg-white rounded-2xl shadow-lg p-6">
                  <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">More from Author</h2>
                  <div class="space-y-4">
                      <div class="flex items-center space-x-4 pb-4 border-b">
                          <div class="flex-1">
                              <h3 class="font-semibold text-gray-900 line-clamp-2">
                                  Top 5 Digital Marketing Tools in 2024
                              </h3>
                              <p class="text-gray-500 text-sm">
                                  3 days ago
                              </p>
                          </div>
                      </div>
                      <div class="flex items-center space-x-4 pb-4 border-b">
                          <div class="flex-1">
                              <h3 class="font-semibold text-gray-900 line-clamp-2">
                                  Building a Strong Personal Brand Online
                              </h3>
                              <p class="text-gray-500 text-sm">
                                  1 week ago
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<x-footer></x-footer>