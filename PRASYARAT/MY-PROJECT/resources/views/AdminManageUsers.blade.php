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

  <title>Manage User</title>
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
            <span class="navbar-brand me-auto mb-2 mb-lg-0" href="#">Hello, {{ Auth()->User()->name }} </span>

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
            <a class="text-dark nav-link" href="/UsersAdmin"><i class="fas fa-users me-2"></i>Users</a>
          </li>
          <li class="nav-item">
            <a class=" text-dark nav-link fw-bold" href="/AdminManageUsers"><i class="fas fa-cogs me-2"></i>Manage
              Users</a>
          </li>
        </ul>
      </div>
      <div class="shadow-sm bg-body p-3" style="width: 100%; height:150vh">
        <div class="">
          @if(session()->has('success'))
          <div class="alert alert-success" role="alert">{{ session('success') }}</div>
          @endif
        </div>
        <div class="d-block">
          <div class="position-relative">
            <div class="position-absolute top-0 start-0">
              <h3 class="">Daftar Pengguna</h3>
            </div>
            <div class="position-absolute top-0 end-0"><a href="/AdminAddUser"><button type="button"
                  class="btn btn-primary ps-3 pe-3">Add
                  user</button></a></div>
          </div>
        </div>
        <div style="margin-top: 60px;" class=" bg-body rounded ">
          <table class="table table-hover shadow-sm">
            <thead>
              <tr class="table-active ">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Level</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            @foreach ($data as $item)
            @php
            $index = ($data->currentPage() - 1) * $data->perPage() + $loop->iteration;
            @endphp
            <tbody>
              <tr>
                <th scope="row">{{$index}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['notelp']}}</td>
                <td>{{$item['pekerjaan']}}</td>
                <td>{{$item['level']}}</td>
                <td>{{$item['email']}}</td>
                <td class="text-center"><a href="/AdminUpdateUser/{{ $item['id'] }}"><i
                      class="fas fa-pencil-alt text-primary"></i></a>
                </td>
                <td class="text-center">
                  <form action="/AdminManageUsers/{{ $item->id }}" method="POST" id="deleteForm{{ $item->id }}">
                    @method('DELETE')
                    @csrf
                    <a href="#" onclick="confirmDelete(event, '{{ $item->id }}')">
                      <i class="fas fa-trash text-danger"></i>
                    </a>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <div>
          <div class="d-flex justify-content-end">
            {{ $data->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function confirmDelete(event, id) {
      event.preventDefault();
      var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
      if (result) {
        document.getElementById('deleteForm' + id).submit();
      } else {
        // Jika pengguna menekan "No", tidak melakukan apa pun
      }
    }
  </script>
</body>

</html>