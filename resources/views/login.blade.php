<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #152d6b; ;">
  <div class="container" style="text-align: center;">
    <div class="card-box col-md-4">
      <form action="{{ route('postlogin') }}" method="POST">
        @csrf        
        <img src="img/tvri.png" alt="logo" class="img-login">
        <!-- Email input -->
        <div class="form-outline mb-3 text-start">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" />
            
        </div>
        <!-- Password input -->
        <div class="form-outline mb-3 text-start">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" />
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-start">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>
      
          <div class="col d-flex justify-content-end">
            <!-- Simple link -->
            <a href="/forget-password">Forgot password?</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-2 w-100">Masuk</button>
        <a href="/beranda" type="button" class="btn btn-outline-primary btn-block mb-4 w-100">Kembali</a>
      </form>
      
      <div class="daftar-akun mb-4">
          <p>Belum memiliki akun? <a href="/daftar">Daftar</a> </p> 
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>