<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" value="{{ old('username') }}" required>
        </div>

        <div>
            <label for="nama_user">Nama User</label>
            <input type="text" name="nama_user" value="{{ old('nama_user') }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
