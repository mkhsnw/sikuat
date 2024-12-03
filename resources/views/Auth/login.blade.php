<x-header>

</x-header>


@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="bg-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">
    <form action="{{ route('login') }}" method="POST">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
            <p class="text-gray-500">Login to your account</p>
        </div>
        @csrf
        <div class="space-y-4 mt-4">
            <div>
                <x-bladewind::input 
                    type="email" 
                    name="email" 
                    label="Email" 
                    required="true"
                    class="w-full"
                ></x-bladewind::input>
            </div>

            <div>
                <x-bladewind::input 
                    type="password" 
                    name="password" 
                    label="Password" 
                    required="true" 
                    viewable="true" 
                    suffix="eye"
                    class="w-full"
                ></x-bladewind::input>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input 
                        id="remember-me" 
                        name="remember-me" 
                        type="checkbox" 
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                    >
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                        Forgot password?
                    </a>
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <button 
                type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 mt-3"
            >
                Login
            </button>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Register
                    </a>
                </p>
            </div>
    </form>
</div>
</div>
</div>
