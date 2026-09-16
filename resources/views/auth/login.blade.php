<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Login Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0">
</head>

<body style="background-color: #EEF3F8;" class="min-vh-100 d-flex flex-column justify-content-center align-items-center p-3">
    <div class="mb-4 text-center">
        <img src="{{ asset( 'assets/images/logo.png')}}" alt="Logo SMKN 4 Bogor" style="height: 100px; width: auto;">
    </div>

    <div class="card border-0 rounded-4 shadow-sm p-4" style="width: 100%; max-width: 400px; background-color: #ffff;">
        <div class="card-body p-0">
            <h5 class="text-center fw-semibold text-dark mb-4">Login Admin</h5>

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show small rounded-3 mb-3" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif

            <form action="{{ route('login.perform')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="email" class="form-control input-login border @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}" placeholder="masukkan email" required
                        autofocus>
                </div>
                <div class="mb-3">
                    <input type="password"
                        class="form-control input-login border @error('password') is-invalid @enderror" id="password"
                        name="password""
                            placeholder=" masukkan password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold fs-5 shadow">
                    Masuk
                </button>

                <div class="text-center mt-4 pt-2">
                    <a href="{{ route('home')}}" class="text-secondary text-decoration-none small opacity-75">
                        &lt; Kembali ke Beranda
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>