<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <section class="position-absolute top-50 start-50 translate-middle">
        <div class="text-center">
            <h1> SMK Coding</h1>
            <h3 >Pendaftaran Siswa Baru</h3>
            <a class="btn btn-primary" href="form-daftar.php">Daftar Baru</a>
            <a class="btn btn-outline-primary" href="list-siswa.php">Pendaftar</a>
            <?php if (isset($_GET['status'])) : ?>
                <p class="text-success">
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                    ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>