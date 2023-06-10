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
  <title>Profile User</title>
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
    <div style="margin-top: 5px; width: 100%; height: 100vh; display: flex" class="shadow-sm bg-body ">
      <div class="shadow-sm bg-body p-4" style="width: 270px">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
          <li class="nav-item">
            <a class="text-dark nav-link " aria-current="page" href="/HomeUser"><i
                class="fas fa-tachometer-alt pe-2"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="text-dark nav-link fw-bold" aria-current="page" href="/ProfileAdmin"><i
                class="fas fa-user-alt pe-2"></i>Profile</a>
          </li>
        </ul>
      </div>
      <div class="ms-2 shadow-sm bg-body" style="width: 100%;">
        <div class="m-3">

          <div class="card mb-3 shadow-sm bg-body" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="/images/profile.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 ">
                <div class="card-body ">
                  <h5 class="card-title">Profile</h5>
                  <p class="card-text">Nama : {{ Auth()->User()->name }}</p>
                  <p class="card-text">Pekerjaan : {{ Auth()->User()->pekerjaan }}</p>
                  <p class="card-text">No Telepon : {{ Auth()->User()->notelp }}</p>
                  <p class="card-text">Email : {{ Auth()->User()->email }}</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>