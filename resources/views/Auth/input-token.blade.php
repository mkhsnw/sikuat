<x-header></x-header>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8 mx-auto mt-6">
        @if (session('error'))
            <div class="bg-red-50 border border-red-500 text-red-900 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Verifikasi OTP</h2>
            <p class="text-gray-600 mt-2">Masukkan kode OTP yang telah dikirimkan</p>
        </div>

        <form method="POST" action="{{ route('token.verify') }}" class="space-y-6">
            @csrf
            <input type="hidden" name="email" value="{{ old('email', session('email')) }}">
            
            <div>
                <label for="token" class="block mb-2 text-sm font-medium text-gray-700 text-center">
                    Masukkan OTP
                </label>
                <x-bladewind::code
                    name="token"
                    error_message="Yoh! check your code"
                    on_verify="checkPinShowError"
                    class="w-full"
                    total_digits="5"
                />
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            >
                Verifikasi
            </button>
        </form>
    </div>
</body>