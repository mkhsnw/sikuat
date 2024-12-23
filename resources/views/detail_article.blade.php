<x-header></x-header>
<div class="max-w-4xl mx-auto px-4 py-8">
  <!-- Article Header -->
  <article class="bg-white shadow-lg rounded-xl overflow-hidden">
      <!-- Featured Image -->
      <div class="relative h-96 md:h-[500px] w-full">
          <img 
              src="{{ asset('storage/' . ($artikel->thumbnail ?? 'default-thumbnail.jpg')) }}" 
              alt="{{ $artikel->judul }}"
              class="absolute inset-0 w-full h-full object-cover"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
      </div>

      <!-- Article Content -->
      <div class="p-6 md:p-12">
          <!-- Category and Title -->
          <div class="mb-6">
              <span class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs uppercase tracking-wide mb-4">
                  {{ $artikel->nama_kategori }}
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
                  <p class="font-semibold text-gray-800">{{ $artikel->author_name ?? 'Author Name' }}</p>
                  <p class="text-sm text-gray-600">{{ $artikel->author_title ?? 'Author Title' }}</p>
              </div>
              <div class="ml-auto text-sm text-gray-500">
                  {{ $artikel->read_time ?? 'Read Time' }}
              </div>
          </div>

          <!-- Article Body -->
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
              {!! nl2br(e($artikel->isi)) !!}
          </div>
      </div>
  </article>
</div>