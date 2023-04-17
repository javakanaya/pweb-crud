<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="container mt-5">

        <h3 class="text-center">Siswa yang sudah mendaftar</h3>
        <a class="btn btn-primary" href="form-daftar.php">+ Tambah Baru</a>

        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                    echo "<a class='btn btn-outline-primary' href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>  ";
                    echo "<a class='btn btn-danger' href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                    echo "<td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>