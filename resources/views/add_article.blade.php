<x-header></x-header>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-xl p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Create New Article</h2>
            
            <form action="/articles/store" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Article Title -->
    <div class="mb-6">
        <x-bladewind::input label='Judul' name="judul" required="true"></x-bladewind::input>
    </div>

    <!-- Content -->
    <div class="mb-6">
        <x-bladewind::textarea name="isi" required="true" label="Content" rows="6" />
    </div>

    <!-- Category -->
    <div class="mb-6">
        <label for="id_kategori_artikel" class="block text-sm font-medium text-gray-700 mb-2">Kategori Artikel</label>
        <select name="id_kategori_artikel" id="id_kategori_artikel" class="block w-full rounded-lg border-gray-300">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <!-- Thumbnail -->
    <div class="mb-6">
        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>
        <x-bladewind::filepicker name="thumbnail" placeholder="Upload File Bosku"/>
    </div>

    <!-- Submit Button -->
    <div class="text-right">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Submit Artikel
        </button>
    </div>
</form>
        </div>
        {{-- <!-- Submit Button -->
        <div class="text-right">
            <x-bladewind::button onclick="showModal('success')">
              Success Modal
          </x-bladewind::button>

          <x-bladewind::modal
type="success"
title="User Deleted"
name="success">
Article Berhasil Ditambahkan
</x-bladewind::modal>
          </div> --}}
    </div>
</body>
<x-footer></x-footer>
