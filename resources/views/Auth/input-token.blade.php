@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{ route('token.verify') }}">
    @csrf
    <!-- Input tersembunyi untuk email -->
    <input type="hidden" name="email" value="{{ old('email', session('email')) }}">
    
    <!-- Input untuk OTP -->
    <div class="form-group">
        <label for="token">Masukkan OTP</label>
        <input type="text" name="token" class="form-control" placeholder="Masukkan OTP" value="{{ old('token') }}">
    </div>

    <button type="submit" class="btn btn-primary">Verifikasi</button>
</form>
