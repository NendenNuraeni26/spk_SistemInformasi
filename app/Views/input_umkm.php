<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data UMKM</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Form Data UMKM</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mx-auto"> <!-- Tambahkan class mx-auto di sini -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Form Data UMKM</h5>
                        <form method="POST" action="<?= site_url('home/simpanumkm'); ?>">
                            <div class="form-group">
                                <label for="nama_umkm">Nama UMKM:</label>
                                <input type="text" class="form-control" id="nama_umkm" name="nama_umkm" placeholder="Masukkan Nama UMKM">
                            </div>

                            <div class="form-group">
                                <label for="nama_pimpinan">Nama Pimpinan:</label>
                                <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" placeholder="Masukkan Nama Pimpinan">
                            </div>

                            <div class="form-group">
                                <label for="jalan">Jalan:</label>
                                <input type="text" class="form-control" id="jalan" name="jalan" placeholder="Masukkan Nama Jalan">
                            </div>

                            <div class="form-group">
                                <label for="desa">Desa:</label>
                                <input type="text" class="form-control" id="desa" name="desa" placeholder="Masukkan Nama Desa">
                            </div>

                            <div class="form-group">
                                <label for="kecamatan">Kecamatan:</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholde="Masukkan Kecamatan">
                            </div>

                            <div class="form-group">
                                <label for="jenis_usaha">Jenis Usaha:</label>
                                <select class="form-control" id="jenis_usaha" name="jenis_usaha">
                                    <option value="">Pilih Jenis Usaha</option>
                                    <?php foreach ($jenisusahaData as $jenis) : ?>
                                        <option value="<?= $jenis['NamaJenis'] ?>" <?= $jenis['NamaJenis'] ?>>
                                            <?= $jenis['NamaJenis'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery if needed -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>