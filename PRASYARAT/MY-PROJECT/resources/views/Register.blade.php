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
  <title>Register</title>
</head>

<body style="background-image: url('/images/background.jpg')">
  <div style="width: 80%; height: 100vh; margin: auto; display: flex; align-items: center; justify-content: center; ">
    <div style="width: 300px; height: 430px; background-image: url('/images/background1.jpeg'); padding: 10px;"
      class="shadow-lg p-3 mb-5 bg-body rounded">
      <form action="/Register" method="POST">
        @csrf
        <div class="mt-0">
          <div class="mb-3">
            <h2 class="fw-bold">Sign Up</h2>
          </div>
          <div class="mb-3">
            <input name="name" type="text" class="form-control" id="" placeholder="Username" />
          </div>
          <div class="mb-3">
            <input name="notelp" type="text" class="form-control" id="" placeholder="No telepon" />
          </div>
          <div class="mb-3">
            <select name="pekerjaan" class="form-select" aria-label="Default select example">
              <option selected>Pilih pekerjaan</option>
              <option value="Karyawan">Karyawan</option>
              <option value="Wirausaha">Wirausaha</option>
              <option value="Mahasiswa">Mahasiswa</option>
              <option value="Guru">Guru</option>
              <option value="Dokter">Dokter</option>
            </select>
          </div>
          <div class="mb-3">
            <input name="email" type="text" class="form-control" id="" placeholder="Email" />
          </div>
          <div class="mb-3">
            <input name="password" type="password" class="form-control" id="" placeholder="Password" />
          </div>

          <div class="d-grid gap-2 ">
            <button class="btn btn-primary" type="submit">Registrasi</button>
            <a href="/Login" class="text-center">Login</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>