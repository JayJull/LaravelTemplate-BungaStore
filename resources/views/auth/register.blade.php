<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <form action="/register" method="POST">
                    @csrf
                    <h2 class="h3 mb-3 fw-normal">Register Dulu!</h2>
                    <div class="form-floating">
                        <input type="text" value="{{ old('name') }}"
                            class="form-control @error('name')
                         is-invalid" @enderror
                            id="name"
                            name="name" placeholder="Name" required autofocus>
                        <label for="name">Username</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-1 mt-1">
                        <input type="email" value="{{ old('email') }}"
                            class="form-control @error('email')
                        is-invalid" @enderror
                            id="email"
                            name="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password"
                            class="form-control @error('password')
                        is-invalid" @enderror"
                            id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Login Now!</a></small>
                </form>
            </main>
        </div>
    </div>
</body>

</html>
