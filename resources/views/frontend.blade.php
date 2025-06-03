<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frontend - Kevin079</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
    background-image: url(https://media.giphy.com/media/jTNG3RF6EwbkpD4LZx/giphy.gif?cid=ecf05e47lwonl28ufdjf3qjvf6i6r4uga6lltmvnjmoezbch&ep=v1_gifs_search&rid=giphy.gif&ct=g);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    }
    body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(42, 42, 85, 0.4);
    z-index: -1;
  }
    .profile-pic {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fafafa;
      margin-bottom: 15px;
    }
    .link-btn {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="text-center">
      <!-- Foto Profil -->
      <img src="{{ asset('img/profile-picture.jpg') }}" alt="Profile" class="profile-pic">
      <!-- Nama & Deskripsi -->
      <h3 class="mb-2" style="color: #fafafa">Kevin's Frontend Project</h3>
      <h6 class="mb-2" style="color:rgb(253, 250, 250)">5026231079 | PWEB C | Kevin Nathanael</h6>
    </div>

    <!-- Link Buttons -->
    <div class="w-100" style="max-width: 550px;">
      <a href="{{ url('pertama') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Pertemuan 1: HTML</h5></a>
      <a href="{{ url('pertemuan4') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Pertemuan 4: CSS Layouting</h5></a>
      <a href="{{ url('bootstrap1') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Bootstrap 1</h5></a>
      <a href="{{ url('bootstrap2') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Bootstrap 2</h5></a>
      <a href="{{ url('js1') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>JS 1</h5></a>
      <a href="{{ url('js2') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>JS 2</h5></a>
      <a href="{{ url('linktree') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Linktree</h5></a>
      <a href="{{ url('ets') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>ETS: Makeover</h5></a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
