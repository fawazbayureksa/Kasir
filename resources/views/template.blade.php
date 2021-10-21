<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>

  
  <title>Kasir</title>
</head>

<body>
  
<main>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#">TOKO DIBA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mr-3">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/unit"><i class="fa fa-box-open"></i> Unit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category"><i class="fa fa-box"></i> kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/item"><i class="fa fa-boxes"></i> Item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/sales"><i class="fa fa-cash-register"></i> Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/item"><i class="fa fa-user"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">

    @yield('content')
    
  </div>
</main>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>