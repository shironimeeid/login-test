<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Di sini Anda akan memeriksa otentikasi, misalnya dari database
    // Contoh sederhana: jika username=admin dan password=password, maka login berhasil
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
?>
