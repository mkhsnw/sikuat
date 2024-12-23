<x-header></x-header>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white rounded-2xl shadow-lg p-8 max-w-4xl w-full">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">Edit Profile</h2>
    
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
      @csrf <!-- Token keamanan -->
      <!-- Left Section: Form Inputs -->
      <div class="space-y-6">
        <!-- Username -->
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
          <x-bladewind::input name="username" placeholder="Enter your Username" value="{{ old('username', $users->username) }}"></x-bladewind::input>
        </div>
        
        <!-- Full Name (Nama User) -->
        <div>
          <label for="nama_user" class="block text-sm font-medium text-gray-700 mb-1">Nama User</label>
          <x-bladewind::input name="nama_user" placeholder="Enter your full name" value="{{ old('nama_user', $users->nama_user) }}"></x-bladewind::input>
        </div>
    
        <!-- Submit Button -->
        <div>
          <x-bladewind::button onclick="showModal('no-cancel')">Save Changes</x-bladewind::button>
        </div>
      </div>
      
      <!-- Right Section: Profile Picture -->
      <div class="flex flex-col items-center space-y-4">
        <div class="relative w-40 h-40">
          <img 
            src="" 
            alt="Profile Picture" 
            class="w-full h-full rounded-full object-cover shadow-lg"
          />
          <label for="profilePicture" class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 5a2 2 0 012-2h4.586a2 2 0 011.414.586l1.828 1.828a2 2 0 001.414.586H16a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V5z" />
              <path d="M10 12a2 2 0 110-4 2 2 0 010 4z" />
            </svg>
          </label>
          <input 
            type="file" 
            id="profilePicture" 
            name="foto" 
            class="hidden"
            accept="image/*"
          />
        </div>
        <p class="text-sm text-gray-500 text-center">Upload a new profile picture</p>
      </div>
    </form>
    
  </div>
</div>


<x-footer></x-footer>