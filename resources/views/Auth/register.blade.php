<x-header>

</x-header>

<div class="bg-white min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        @if ($errors->any())
            <div class="bg-red-50 border border-red-400 text-red-800 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">
    <form action="{{ route('register') }}" method="POST">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Create an Account</h2>
            <p class="text-gray-500">Join our community today</p>
        </div>
        @csrf
        <div class="space-y-4 mt-4">
            <div>
                <x-bladewind::input 
                    type="text" 
                    name="username" 
                    label="Username" 
                    required="true"
                    class="w-full"
                    placeholder="Choose a unique username"
                ></x-bladewind::input>
            </div>

            <div>
                <x-bladewind::input 
                    type="text" 
                    name="nama_user" 
                    label="Full Name" 
                    required="true"
                    class="w-full"
                    placeholder="Enter your full name"
                ></x-bladewind::input>
            </div>

            <div>
                <x-bladewind::input 
                    type="email" 
                    name="email" 
                    label="Email" 
                    required="true"
                    class="w-full"
                    placeholder="your.email@example.com"
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
                    placeholder="Create a strong password"
                ></x-bladewind::input>
            </div>

            <div>
                <x-bladewind::input 
                    type="password" 
                    name="password_confirmation" 
                    label="Confirm Password" 
                    required="true" 
                    viewable="true" 
                    suffix="eye"
                    class="w-full"
                    placeholder="Confirm your password"
                ></x-bladewind::input>
            </div>

            <div>
                <x-bladewind::datepicker 
                    name="tanggal_lahir" 
                    label="Date of Birth"
                    class="w-full"
                    placeholder="Select your birth date"
                />
            </div>
        </div>

        <div>
            <button 
                type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300"
            >
                Register
            </button>
        </div>
    </form>
    <div class="mt-6 text-center">
        <p class="text-sm text-gray-600">
            Already have an account? 
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                Login
            </a>
        </p>
    </div>
</div>
</div>

</div>


<x-footer></x-footer>
