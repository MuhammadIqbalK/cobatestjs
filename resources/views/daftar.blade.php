<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #152d6b; ;">
    <div class="container" style="text-align: center;">
        <div class="card-box col-md-4">
            <form action="/daftar" method="POST">
                @csrf
                <img src="img/tvri.png" alt="logo" class="img-login" >
                <!-- Name input -->
                <div class="form-outline mb-2 text-start">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"/>
                    @error('name')
                        <span class="invalid-feedback text-end" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Email input -->
                <div class="form-outline mb-2 text-start">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                    @error('email')
                        <span class="invalid-feedback text-end" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-2 text-start">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"/>
                    @error('password')
                        <span class="invalid-feedback text-end" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4 text-start">
                    <label class="form-label" for="password_confirmation">Konfirmasi Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-2 w-100">Daftar</button>
                <a href="/login" type="button" class="btn btn-outline-primary btn-block mb-4 w-100">Kembali</a>
            </form>
            <div class="daftar-akun mb-4">
                <p>Sudah memiliki akun? <a href="/login">Masuk</a> </p> 
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js" integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
</body>
</html>