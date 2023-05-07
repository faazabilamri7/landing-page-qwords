<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwords.com</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <style>
        .hero {
            background-image: url({{ $gambar }});
            background-size: cover;
            height: 90vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{ $logo }}" alt="Logo">         </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- Hero section -->
    <section class="hero">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <h1 class="text-black mb-4 display-2 text-border">Selamat Datang di Qwords.com</h1>
                    <p class="text-white mb-4 lead">Kami menyediakan hosting terbaik untuk kebutuhan bisnis Anda. Dapatkan
                        performa website terbaik dengan harga yang terjangkau.</p>
                    <a href="#" class="btn btn-lg btn-warning">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features section -->
    <section class="py-5 bg-warning" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h5 class="card-title">Performa Tinggi</h5>
                            <p class="card-text">Server kami terhubung ke internet dengan kecepatan tinggi dan
                                dilengkapi dengan teknologi terbaru untuk performa terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h5 class="card-title">Dukungan 24/7</h5>
                            <p class="card-text">Kami menyediakan layanan dukungan teknis 24/7 untuk memastikan website
                                Anda selalu online dan berjalan dengan lancar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h5 class="card-title">Harga Terjangkau</h5>
                            <p class="card-text">Kami menyediakan harga terjangkau untuk hosting website Anda tanpa
                                mengurangi performa dan kualitas layanan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing section -->
    <section class="py-5" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Pilih Paket Hosting yang Sesuai dengan Kebutuhan Anda</h2 <p class="mb-4">Kami
                    menyediakan berbagai paket hosting untuk memenuhi kebutuhan bisnis Anda. Pilih paket yang sesuai
                    dengan kebutuhan website Anda.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Paket Basic</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 50.000 <small class="text-muted">/
                                    bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Website</li>
                                <li>1 Database</li>
                                <li>5 GB Storage</li>
                                <li>Layanan Dukungan</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-warning">Pilih Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Paket Medium</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 100.000 <small class="text-muted">/
                                    bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>5 Website</li>
                                <li>5 Database</li>
                                <li>50 GB Storage</li>
                                <li>Layanan Dukungan</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-warning">Pilih Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Paket Premium</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 200.000 <small class="text-muted">/
                                    bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Tak Terbatas Website</li>
                                <li>Tak Terbatas Database</li>
                                <li>Tak Terbatas Storage</li>
                                <li>Layanan Dukungan</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-warning">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section -->
    <section class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Apa Kata Mereka?</h2>
                    <p class="mb-4">Ini adalah pengalaman klien kami dengan layanan hosting kami.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p>"Saya sangat senang dengan layanan hosting dari Qwords. Sangat mudah untuk
                                digunakan dan support yang diberikan sangat baik."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-avatar">
                                    <img src="{{ $user }}" height="150px" width="150px" alt="User avatar">
                                </div>
                                <div class="user-info">
                                    <h6 class="mb-0">Bambang</h6>
                                    <small class="text-muted">CEO, Company X</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p>"Saya sangat terkesan dengan performa website saya setelah beralih ke layanan hosting
                                dari Qwords."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-avatar">
                                    <img src="{{ $user }}" height="150px" width="150px" alt="User avatar">
                                </div>
                                <div class="user-info">
                                    <h6 class="mb-0">Andi</h6>
                                    <small class="text-muted">Owner, Company Y</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p>"Pelayanan pelanggan yang diberikan sangat baik dan cepat tanggap."</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user-avatar">
                                    <img src="{{ $user }}" height="150px" width="150px" alt="User avatar">
                                </div>
                                <div class="user-info">
                                    <h6 class="mb-0">Budi</h6>
                                    <small class="text-muted">Marketing Director, Company Z</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section -->
    <section class="py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Hubungi Kami</h2>
                    <p class="mb-4">Silakan hubungi kami jika Anda memiliki pertanyaan tentang layanan kami atau jika
                        Anda ingin berlangganan paket hosting.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Kirim</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Informasi Kontak</h3>
                    <p class="mb-2">Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 - Indonesia                     </p>
                    <p class="mb-2">support@qwords.com</p>
                    <p>(021)39708800</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer section -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-white mb-0">&copy; 2023 Qwords.com</p>
                </div>
                <div class="col-md-6">
                    <p class="text-white mb-0 text-right"> <i class="fas fa-heart"></i>
                            Faaza Bil Amri</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>