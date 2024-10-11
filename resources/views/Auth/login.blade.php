<x-header>

</x-header>


        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="shadow-xl p-10 bg-white max-w-xl rounded mt-8 mx-auto mb-8 items-center">
            <form action="{{ route('register') }}" method="POST">
                <h2 class="text-3xl mb-4 font-bold text-center">Login</h2>
                    @csrf
                    <div class="mb-4 relative">
                        <x-bladewind::input type="email" class="mt-2" name="username" label="Email" required="true"></x-bladewind::input>
                    </div>
            
                    <div>
                        <x-bladewind::input type="password" class="mt-2" name="username" label="Password" required="true"></x-bladewind::input>
                    </div>

                    <button type="submit" class="py-1 px-3 bg-gray-300 mt-3 hover:bg-accent duration-200 ease-in-out rounded">Login</button>
                </form>
            </div>

            <x-footer>

            </x-footer>
