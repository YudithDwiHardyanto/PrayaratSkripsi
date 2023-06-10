<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/app.css" />
  <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/fontawesome.css">
  <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.css">
  <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="/font/font.css">
    <title>Login</title>
  </head>
  <body style="background-image: url('/images/background.jpg')">
    <div class="" style="width: 80%; height: 100vh; margin: auto; display: flex; align-items: center; justify-content: center; ">
      <div class="shadow-lg p-3 mb-5 bg-body rounded" style="width: 300px; background-image: url('/images/background1.jpeg'); padding: 10px;" class="shadow p-3 mb-5 bg-body rounded-5">
      <div class="">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger" role="alert">{{ session('loginError') }}</div>
        @endif
      </div>  
      <form action="/Login" method="post">
        @csrf
            <div class="mt-3">
              <div class="mb-3">
                <h2 class="fw-bold">Sign In</h2>
              </div>
              <div class="mb-3">
                <input name="email" type="text" class="form-control" id="" placeholder="Email" />
              </div>
              <div class="mb-3">
                <input name="password" type="password" class="form-control" id="" placeholder="Password" />
              </div>
              <div class="d-grid gap-2 ">
                <button class="btn btn-primary" type="submit">Login</button>
                <span>Belum memiliki akun?  <a href="/Register">  Registrasi</a>
              </div>
            </div>
        </form>  
      
      </div>
    </div>
  </body>
</html>
