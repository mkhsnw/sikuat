<x-header></x-header>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-xl p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Create New Article</h2>
            
            <form action="/articles/store" method="POST" enctype="multipart/form-data">
                <!-- Article Title -->
                <div class="mb-6">
                    <x-bladewind::input label='Judul' required="true"></x-bladewind::input>
                </div>

                <!-- Content -->
                <div class="mb-6">
                    <x-bladewind::textarea required="true" label="Content" rows="6" />
                </div>

                <!-- Thumbnail -->
                <div class="mb-6">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail</label>
                    <x-bladewind::filepicker name="logo" placeholder="Upload File Bosku"/>
                </div>


                <!-- Submit Button -->
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
                </div>
            </form>
        </div>
    </div>
</body>
<x-footer></x-footer>
