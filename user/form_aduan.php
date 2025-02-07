<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Aduan - Dinas Perhubungan Bangkalan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin:0;
        }

        .navbar {
            background-color: #2E3192;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 18px;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }
        .navbar-brand img {
            width: 300px;
        }

        .hero {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFD700;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #004F71;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 1rem;
            color: #004F71;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #004F71;
            border: none;
        }

        .btn-primary:hover {
            background-color: #002F47;
        }

        .features {
            padding: 4rem 0;
        }

        .features h2 {
            color: #004F71;
            margin-bottom: 2rem;
            text-align: center;
        }

        footer {
            background-color: #0B0E23;
            padding: 2rem 0;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
            padding: 0 2rem;
        }
        .footer-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 300px;
        }
        .footer-left img {
            width: 80px;
            margin-bottom: 10px;
        }
        .footer-left p {
            font-size: 14px;
            line-height: 1.5;
            color: white;
        }
        .footer-middle {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .footer-middle iframe {
            width: 320px;
            height: 220px;
            border: none;
        }
        .footer-right {
            max-width: 300px;
            text-align: left;
        }
        .footer-right p {
            margin: 5px 0;
            font-size: 14px;
            display: flex;
            align-items: center;
            color: white;
        }
        .footer-right i {
            color: #FFD700;
            margin-right: 10px;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid white;
            font-size: 14px;
            margin-top: 10px;
            color: white;
        }

        .container2 {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* margin-top: 50px; */
        }

        h2 {
            color: #004F71;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .btn-primary2 {
            background-color: #004F71;
            border: none;
            color:white;
            margin-bottom: 1.5rem;
        }

        .btn-primary2:hover {
            background-color: #002F47;
        }
    </style>
</head>
<body>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="gambar/LOGODISHUB2.png" alt="Dishub Logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_aduan.php">Ajukan Aduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status_aduan.php">Lihat Status Aduan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FORM KELUHAN -->
    <div class="container2">
        <h2>Formulir Aduan Fasilitas Jalan dan Rambu</h2>
        <form action="process_aduan.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
        <div class="mb-3">
            <label for="jenis_aduan" class="form-label">Jenis Aduan</label>
            <select name="jenis_aduan" id="jenis_aduan" class="form-select" required>
                <option value="" disabled selected>Pilih Jenis Aduan</option>
                <optgroup label="Rambu Lalu Lintas">
                    <option value="Rambu lalu lintas rusak">Rambu lalu lintas rusak</option>
                    <option value="Rambu lalu lintas hilang">Rambu lalu lintas hilang</option>
                    <option value="Rambu tidak jelas atau tertutup pohon/banner">Rambu tidak jelas atau tertutup pohon/banner</option>
                </optgroup>
                <optgroup label="Marka Jalan">
                    <option value="Marka jalan pudar">Marka jalan pudar</option>
                    <option value="Marka jalan tidak terlihat">Marka jalan tidak terlihat</option>
                </optgroup>
                <optgroup label="Kondisi Jalan">
                    <option value="Jalan berlubang">Jalan berlubang</option>
                    <option value="jJalan rusak">Jalan rusak</option>
                    <option value="Jalan tergenang banjir saat hujan">Jalan tergenang banjir saat hujan</option>
                    <option value="Trotoar rusak/tidak layak">Trotoar rusak/tidak layak</option>
                </optgroup>
                <optgroup label="Lampu Penerangan Jalan Umum (PJU)">
                    <option value="Lampu PJU mati">Lampu PJU mati</option>
                    <option value="Lampu jalan berkedip atau tidak stabil">Lampu jalan berkedip atau tidak stabil</option>
                    <option value="Penerangan kurang">Penerangan kurang</option>
                </optgroup>
            </select>
        </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Aduan</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_aduan" class="form-label">Tanggal Aduan</label>
                <input type="date" name="tanggal_aduan" id="tanggal_aduan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lokasi_aduan" class="form-label">Lokasi Aduan</label>
                <input type="text" name="lokasi_aduan" id="lokasi_aduan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="file_pendukung" class="form-label">Upload File Pendukung (Opsional)</label>
                <input type="file" name="file_pendukung" id="file_pendukung" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary2 w-100">Kirim Aduan</button>
        </form>
    </div>

        <!-- Footer -->
        <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="gambar/logo-dishub.png" alt="Logo Dishub">

                <p>Website Resmi Dinas Perhubungan Kabupaten Bangkalan, Provinsi Jawa Timur</p>
            </div>
            <div class="footer-middle">
                <iframe src="https://maps.google.com/maps?q=Dinas%20Perhubungan%20Bangkalan&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
            <div class="footer-right">
                <p><i class="fas fa-map-marker-alt"></i> Jalan R.E. Marthadinata No.7, Wr 05, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116</p>
                <p><i class="fas fa-phone-alt"></i> 031 3094951</p>
                <p><i class="fas fa-envelope"></i> dishub@bangkalankab.go.id</p>
            </div>
        </div>
        <div class="footer-bottom">
            Copyright 2025 &copy; All rights reserved | Dinas Perhubungan Kabupaten Bangkalan
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

