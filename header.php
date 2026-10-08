<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kesenian Jaranan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #290000; color: white; }
        .bg-jaranan { background-color: #1a1512 !important; }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('logo.jpg') no-repeat center center/cover;
            padding: 100px 20px;
            text-align: center;
        }
        .text-emas { color: #ffeaa7; }
        .card-produk {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            transition: 0.3s;
        }
        .card-produk:hover { transform: translateY(-5px); }
        .card-produk img { height: 220px; object-fit: cover; }
        .wa-btn { background-color: #25d366; color: white; font-weight: bold; }
        .wa-btn:hover { background-color: #20ba5a; color: white; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2 text-emas" href="#">
      <img src="logo.jpg" alt="Logo" width="40" height="40" class="rounded-circle border">
      <strong>Produk Kesenian</strong>
    </a>
    <button class="navbar-collapse navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#favorit">Favorit</a></li>
        <li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
      </ul>
      <div class="d-flex">
        <input class="form-control rounded-pill" type="search" id="inputCari" placeholder="Cari produk..." aria-label="Search">
      </div>
    </div>
  </div>
</nav>