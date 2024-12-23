<x-header></x-header>
<div class="max-w-4xl mx-auto px-4 py-8">
  <!-- Article Header -->
  <article class="bg-white shadow-lg rounded-xl overflow-hidden">
      <!-- Featured Image -->
      <div class="relative h-96 md:h-[500px] w-full">
        <img 
        src="{{ asset('storage/' . $artikel->thumbnail) }}"
        alt="Article Featured Image"
        class="w-full h-full object-cover absolute inset-0 group-hover:scale-105 transition-transform duration-300"
    />
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
      </div>

      <!-- Article Content -->
      <div class="p-6 md:p-12">
          <!-- Category and Title -->
          <div class="mb-6">
              <span class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs uppercase tracking-wide mb-4">
                  {{ $artikel->kategori_artikel->nama_kategori }}
              </span>
              <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                 {{ $artikel->judul }}
              </h1>
          </div>

          <!-- Author and Read Time -->
          <div class="flex items-center space-x-4 mb-6 pb-6 border-b border-gray-200">
              <img 
                  src="https://via.placeholder.com/48" 
                  alt="Author Profile"
                  class="w-12 h-12 rounded-full object-cover"
              >
              <div>
                  <p class="font-semibold text-gray-800">{{ $artikel->user->nama_user }}</p>
                  @if($artikel->user->poin < 500)
                  <p class="text-sm text-gray-600">Bronze Member</p>
                  @elseif($artikel->user->poin >= 500 && $artikel->user->poin < 1000)
                  <p class="text-sm text-gray-600">Silver Member</p>
                  @else
                  <p class="text-sm text-gray-600"></p>
                  @endif
                 
              </div>
              <div class="ml-auto text-sm text-gray-500">
                  {{ $artikel->created_at->diffForHumans() }}
              </div>
          </div>

          <!-- Article Body -->
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
              <p>
                 {{ $artikel->isi }}
              </p>
          </div>

          <!-- Call to Action -->
          <div class="mt-8 flex items-center justify-between border-t border-gray-200 pt-6">
              <a 
                  href="#" 
                  class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors"
              >
                  Continue Reading
                  <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      class="h-5 w-5 ml-2" 
                      viewBox="0 0 20 20" 
                      fill="currentColor"
                  >
                      <path 
                          fill-rule="evenodd" 
                          d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" 
                          clip-rule="evenodd" 
                      />
                  </svg>
              </a>
              <div class="flex space-x-4">
                  <a href="#" class="text-gray-500 hover:text-blue-600">
                      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.148-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                      </svg>
                  </a>
                  <a href="#" class="text-gray-500 hover:text-blue-600">
                      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                      </svg>
                  </a>
                  <a href="#" class="text-gray-500 hover:text-blue-600">
                      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                      </svg>
                  </a>
              </div>
          </div>
      </div>
  </article>
</div>
<x-footer></x-footer>