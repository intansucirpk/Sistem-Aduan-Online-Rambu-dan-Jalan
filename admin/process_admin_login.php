<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username di database
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        // Verifikasi password
        if (hash('sha256', $password) === $admin['password']) {
            // Simpan session login
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin['username'];
            header('Location: admin_dashboard.php');
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location='admin_login.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location='admin_login.php';</script>";
    }
} else {
    header('Location: admin_login.php');
}
?>
