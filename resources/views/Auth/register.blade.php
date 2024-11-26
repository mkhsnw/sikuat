<x-header>

</x-header>


@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="shadow-xl p-10 bg-white max-w-xl rounded mt-8 mx-auto mb-8">
    <form action="{{ route('register') }}" method="POST">
        <h2 class="text-3xl mb-4 font-bold text-center">Register</h2>
        @csrf
        <div class="mb-4 relative">
            <x-bladewind::input type="text" class="mt-2" name="username" label="Username" required="true"></x-bladewind::input>
        </div>
    
        <div>
            <x-bladewind::input type="text" class="mt-2" name="nama_user" label="Nama Lengkap" required="true"></x-bladewind::input>
        </div>
    
        <div>
            <x-bladewind::input type="email" class="mt-2" name="email" label="Email" required="true"></x-bladewind::input>
        </div>
    
        <div>
            <x-bladewind::input type="password" name="password" label="Password" required="true" viewable="true" suffix="eye"></x-bladewind::input>
        </div>
    
        <!-- Tambahkan field konfirmasi password -->
        <div>
            <x-bladewind::input type="password" name="password_confirmation" label="Confirm Password" required="true" viewable="true" suffix="eye"></x-bladewind::input>
        </div>
    
        <div>
            <x-bladewind::datepicker name="tanggal_lahir" label="Tanggal Lahir"/>
        </div>
    
        <button type="submit" class="py-1 px-3 bg-gray-300 mt-3 hover:bg-accent duration-200 ease-in-out rounded">Register</button>
    </form>
    

</div>


<x-footer></x-footer>
