<?php 
    include 'koneksi.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['login'] = true;
                header('location:beranda.php');
            }
        }
        else {
                echo "
                <script>2
                    alert('Username atau Password anda Salah, Coba Lagi');
                    window.location = 'login.php';
                </script>
                ";
            }
        }
?>