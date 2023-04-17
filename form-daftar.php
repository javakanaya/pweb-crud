<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="position-absolute top-50 start-50 translate-middle">

        <h3 class="text-center">Formulir Pendaftaran Siswa Baru</h3>


        <form class="container" action="proses-pendaftaran.php" method="POST">

            <fieldset>

                <p>
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                </p>
                <p>
                    <label class="form-label" for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat"></textarea>
                </p>
                <p>
                    <label class="form-check-label" for="jenis_kelamin">Jenis Kelamin:</label>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label class="form-label" for="agama">Agama:</label>
                    <select class="form-select" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                    </select>
                </p>
                <p>
                    <label class="form-label" for="sekolah_asal">Sekolah Asal:</label>
                    <input class="form-control" type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
                </p>
                <p>
                    <input class="btn btn-primary" type="submit" value="Daftar" name="daftar" />
                </p>

            </fieldset>

        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>