<x-header></x-header>
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
	<div class="max-w-6xl w-full">
       @foreach ($artikel as $artikel)
			<article class="bg-white shadow-lg rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-xl group grid md:grid-cols-2 my-8">
                                <!-- Article Image -->
                                <div class="relative md:h-full">
                                    <img 
                                    src="{{ asset('storage/' . $artikel->thumbnail) }}"
                                    alt="Article Featured Image"
                                    class="w-full h-full object-cover absolute inset-0 group-hover:scale-105 transition-transform duration-300"
                                />
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                </div>

                                <!-- Article Content -->
                                <div class="p-6 md:p-8 flex flex-col justify-center">
                                                <div class="flex items-center mb-4">
                                                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-brand-accent text-white uppercase tracking-wider">
                                                                      {{ $artikel->kategori_artikel->nama_kategori }}  
                                                                </span>
                                                </div>

                                                <h2 class="text-2xl md:text-3xl font-bold text-brand-text mb-4 group-hover:text-brand-accent transition-colors">
                                                                {{ $artikel->judul }}
                                                </h2>

                                                <p class="text-brand-muted leading-relaxed mb-6">
                                                               {{ Str::limit($artikel->isi) }}
                                                </p>

                                                <a href="{{ route('detail_article', $artikel->id) }}" class="inline-flex items-center text-brand-accent font-semibold hover:underline group/link">
                                                                <span>Read full article</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                                </svg>
                                                </a>

                                                <div class="mt-6 pt-4 border-t border-gray-200 flex items-center justify-between">
                                                                <div class="flex items-center space-x-3">
                                                                                <img src="https://via.placeholder.com/48" alt="Author" class="w-10 h-10 rounded-full object-cover ring-2 ring-brand-accent/20">
                                                                                <div>
                                                                                                <span class="text-brand-text font-medium hover:text-brand-accent transition-colors">
                                                                                                                {{ $artikel->user->nama_user }}
                                                                                                </span>
                                                                                                <p class="text-xs text-brand-muted">Senior Tech Journalist</p>
                                                                                </div>
                                                                </div>
                                                                <span class="text-sm text-brand-muted">{{ $artikel->created_at->diffForHumans() }}</span>
                                                </div>
                                </div>
                </article>
                @endforeach
</div>
</div>

<x-footer></x-footer>