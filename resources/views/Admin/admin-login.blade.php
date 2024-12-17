<x-header>

</x-header>


@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="bg-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">
    <form action="{{ route('admin.login.submit') }}" method="POST">
        <div class="text-center">
            @if (session('error'))
                <x-bladewind::alert type='error'>{{session('error')}}</x-bladewind::alert>
            @endif
            <p class="text-gray-500">Login to Your Admin Account</p>
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
        </div>

        <div class="space-y-4">
            <button 
                type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 mt-3"
            >
                Login
            </button>
            
    </form>
</div>
</div>
</div>
