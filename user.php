<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Sederhana - Universitas Brawijaya</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Mahasiswa</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        
        <label>Email:</label>
        <input type="email" name="email" required>
        
        <button type="submit" name="submit">Kirim Data</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Alamat path diperbarui ke dalam folder classes
        require_once 'classes/User.php';
        
        $user = new User($_POST['nama'], $_POST['email']);
        
        echo "<div class='result'>";
        echo $user->tampilkanData();
        echo "</div>";
    }
    ?>
</div>

</body>
</html>