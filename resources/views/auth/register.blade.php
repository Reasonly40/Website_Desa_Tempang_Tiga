<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Admin Desa</title>
    
    {{-- Memanggil style.css kustom Anda --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    {{-- Style tambahan (sama seperti login.blade.php) --}}
    <style>
        body {
            background-color: var(--admin-light, #f8f9fa);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: var(--font-family);
            padding: 20px 0; /* Tambahkan padding untuk layar kecil */
        }
        .login-container {
            background-color: var(--light-color, #fff);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="text"] { /* Tambahkan untuk 'name' */
            border: 1px solid #ccc;
        }
        .form-group label {
            color: var(--text-color);
        }
        .login-actions {
            display: flex;
            justify-content: flex-end; /* Arahkan tombol ke kanan */
            align-items: center;
            margin-top: 25px;
        }
        .login-button {
             background-color: var(--accent-color);
             color: var(--text-color);
             padding: 10px 20px;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }
        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Register Akun</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nama --}}
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Konfirmasi Password --}}
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="login-actions">
                <button type="submit" class="btn btn-submit login-button">
                    Register
                </button>
            </div>
        </form>

        {{-- Link untuk Login jika sudah punya akun --}}
        <div class="login-link">
            <p>
                Sudah punya akun? 
                <a href="{{ route('login') }}">
                    Login di sini
                </a>
            </p>
        </div>
    </div>
</body>
</html>
