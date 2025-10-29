<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Desa</title>
    
    {{-- Memanggil style.css kustom Anda --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    {{-- Style tambahan khusus untuk halaman login --}}
    <style>
        body {
            background-color: var(--admin-light, #f8f9fa); /* Latar abu-abu terang */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: var(--font-family); /* Gunakan font dari style.css */
        }
        .login-container {
            background-color: var(--light-color, #fff);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Lebar maksimum form */
        }
        .login-container h2 {
            text-align: center;
            color: var(--primary-color); /* Warna hijau utama */
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        /* Menggunakan style form-group dari style.css */
        .form-group input[type="email"],
        .form-group input[type="password"] {
            border: 1px solid #ccc; /* Pastikan ada border */
        }
        .form-group label {
            color: var(--text-color); /* Warna teks coklat tua */
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        .remember-me input {
            margin-right: 8px;
        }
        .remember-me label {
             font-size: 0.9rem;
             color: var(--text-color);
        }
        .login-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }
        .login-actions a {
            font-size: 0.9rem;
            color: var(--primary-color); /* Warna hijau */
            text-decoration: none;
        }
        .login-actions a:hover {
            text-decoration: underline;
        }
        /* Menggunakan style .btn-submit dari style.css */
        .login-button {
             background-color: var(--accent-color); /* Warna emas */
             color: var(--text-color); /* Teks coklat tua */
             padding: 10px 20px;
        }
        .session-status {
             padding: 15px;
             margin-bottom: 20px;
             border-radius: 5px;
             background-color: #d1e7dd; /* Hijau muda untuk status */
             color: #0f5132;
             font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>

        @if (session('status'))
            <div class="session-status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Ingat Saya</label>
            </div>

            <div class="login-actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Lupa Password?
                    </a>
                @endif

                <button type="submit" class="btn btn-submit login-button">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>
</html>