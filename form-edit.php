<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>

    <section class="position-absolute top-50 start-50 translate-middle">
        <h3 class="text-center">Formulir Edit Siswa</h3>

        <form class="container" action="proses-edit.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <p>
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </p>
                <p>
                    <label class="form-label" for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                </p>
                <p>
                    <label class="form-check-label" for="jenis_kelamin">Jenis Kelamin:</label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                </p>
                <p>
                    <label class="form-label" for="agama">Agama:</label>
                    <?php $agama = $siswa['agama']; ?>
                    <select class="form-select" name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Katolik') ? "selected" : "" ?>>Katolik</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Konghucu') ? "selected" : "" ?>>Konghucu</option>
                    </select>
                </p>
                <p>
                    <label class="form-label" for="sekolah_asal">Sekolah Asal: </label>
                    <input class="form-control" type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                </p>
                <p>
                    <input class="btn btn-primary" type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>