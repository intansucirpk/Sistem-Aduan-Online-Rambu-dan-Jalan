<?php
include 'connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // Update status aduan
    $stmt = $conn->prepare("UPDATE aduan SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Status berhasil diperbarui!'); window.location='admin_dashboard.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan!'); window.location='admin_dashboard.php';</script>";
    }
} else {
    header('Location: admin_dashboard.php');
}
?>
