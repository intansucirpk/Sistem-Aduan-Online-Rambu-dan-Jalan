<?php
session_start();
include 'connect.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: admin_login.php');
    exit();
}

// Ambil semua data aduan
$result = $conn->query("SELECT * FROM aduan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 30px;
        }
        .dashboard-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .btn-custom {
            border-radius: 5px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="dashboard-card">
            <h2 class="mb-3">Dashboard Admin</h2>
            <p>Selamat datang, <strong><?= $_SESSION['admin_username']; ?></strong></p>

            <!-- Tabel Aduan -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jenis Aduan</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr class="text-center">
                                <td><?= $row['id']; ?></td>
                                <td><?= htmlspecialchars($row['nama']); ?></td>
                                <td><?= htmlspecialchars($row['jenis_aduan']); ?></td>
                                
                                <td><?= $row['tanggal_aduan']; ?></td>
                                <td><?= htmlspecialchars($row['lokasi_aduan']); ?></td>
                                <td>
                                    <span class="badge bg-<?= $row['status'] == 'Selesai' ? 'success' : ($row['status'] == 'Diproses' ? 'warning' : 'secondary'); ?>">
                                        <?= $row['status']; ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($row['file_pendukung']) { ?>
                                        <a href="../user/<?= $row['file_pendukung']; ?>" target="_blank" class="btn btn-info btn-sm btn-custom">Lihat Foto</a>

                                    <?php } else { ?>
                                        <span class="text-muted">Tidak ada</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="detail_aduan.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm btn-custom">Detail</a>
                                    <a href="update_status.php?id=<?= $row['id']; ?>&status=Diproses" class="btn btn-warning btn-sm btn-custom">Proses</a>
                                    <a href="update_status.php?id=<?= $row['id']; ?>&status=Selesai" class="btn btn-success btn-sm btn-custom">Selesai</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
