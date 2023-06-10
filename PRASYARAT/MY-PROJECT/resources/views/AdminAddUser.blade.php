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

  <title>Add User</title>
</head>

<body style="background-image: url('/images/background1.jpeg')">
  <div style="width: 80%; height: 100vh; margin: auto">
    <div style="margin: 0">
      <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-2 bg-body">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <span class="navbar-brand me-auto mb-2 mb-lg-0" href="#">Hello, {{ Auth()->User()->name }}</span>

            <form action="/Logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-link">
                <span class="me-2 text-dark">Logout</span><i class="text-dark fas fa-sign-out-alt"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div style="margin-top: 5px; width: 100%; display: flex" class="shadow-sm bg-body">
      <div class="shadow-sm bg-body p-4" style="width: 270px">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
          <li class="nav-item">
            <a class="text-dark nav-link" aria-current="page" href="/HomeAdmin"><i
                class="fas fa-tachometer-alt pe-2"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="text-dark nav-link" aria-current="page" href="/ProfileAdmin"><i
                class="fas fa-user-alt pe-2"></i>Profile</a>
          </li>
          <li class="nav-item">
            <a class="text-dark nav-link " href="/UsersAdmin"><i class="fas fa-users me-2"></i>Users</a>
          </li>
          <li class="nav-item">
            <a class=" text-dark nav-link fw-bold" href="/AdminManageUsers"><i class="fas fa-cogs me-2"></i>Manage
              Users</a>
          </li>
        </ul>
      </div>
      <div class="ms-2 shadow-sm bg-body p-5" style="width: 100%; height:100vh">
        <div class="d-block">
          <div style="width: 650px; height: 450px; padding: 10px;" class="shadow p-3 ms-5 bg-body rounded">
            <form action="/AdminAddUser" method="POST">
              @csrf
              <div class="mt-0">
                <div class="mb-3">
                  <h4 class="fw-bold">Tambah Data</h4>
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
                  <select name="level" class="form-select" aria-label="Default select example">
                    <option selected>Pilih role</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                  </select>
                </div>

                <div class="mb-3">
                  <input name="email" type="text" class="form-control" id="" placeholder="Email" />
                </div>
                <div class="mb-3">
                  <input name="password" type="password" class="form-control" id="" placeholder="Password" />
                </div>

                <div class="d-grid gap-2 ">
                  <button class="btn btn-primary" type="submit">Tambahkan</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>