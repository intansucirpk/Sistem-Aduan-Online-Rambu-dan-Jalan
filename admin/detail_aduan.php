<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM aduan WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $aduan = $result->fetch_assoc();
} else {
    header('Location: admin_dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: white;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <h2 class="mb-3 text-center">Detail Aduan</h2>

            <?php if ($aduan): ?>
                <form action="update_catatan.php" method="post">
                    <input type="hidden" name="id" value="<?= $aduan['id']; ?>">
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Nama Pengadu:</strong></label>
                        <p class="form-control"><?= htmlspecialchars($aduan['nama']); ?></p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Jenis Aduan:</strong></label>
                        <p class="form-control"><?= htmlspecialchars($aduan['jenis_aduan']); ?></p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Tanggal Aduan:</strong></label>
                        <p class="form-control"><?= $aduan['tanggal_aduan']; ?></p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Lokasi Aduan:</strong></label>
                        <p class="form-control"><?= $aduan['lokasi_aduan']; ?></p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><strong>Deskripsi:</strong></label>
                        <p class="form-control"><?= htmlspecialchars($aduan['deskripsi']); ?></p>
                    </div>

                    <div class="mb-3">
                        <label for="catatan_admin" class="form-label"><strong>Catatan Admin:</strong></label>
                        <textarea name="catatan_admin" id="catatan_admin" class="form-control" rows="4"><?= htmlspecialchars($aduan['catatan_admin']); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Catatan</button>
                </form>
            <?php else: ?>
                <p class="text-center text-danger">Aduan tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
