<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data UMKM</title>
</head>

<body>
    <h2 class="card-title text-center">Form Edit Data UMKM</h2>
    <form method="POST" action="<?= site_url('home/editumkm/' . $row['No']); ?>">
        <br>
        <div class="form-group">
            <input type="hidden" class="form-control" name="No" value="<?= $row['No']; ?>">
            <label>Nama UMKM:</label>
            <input type="text" class="form-control" name="nama_umkm" value="<?= $row['NamaUsaha']; ?>" placeholder="Masukkan Nama UMKM">
        </div>

        <div class="form-group">
            <label>Nama Pimpinan:</label>
            <input type="text" class="form-control" name="nama_pimpinan" value="<?= $row['NamaPimpinan']; ?>" placeholder="Masukkan Nama Pimpinan">
        </div>

        <div class="form-group">
            <label>Jalan:</label>
            <input type="text" class="form-control" name="jalan" value="<?= $row['Jalan']; ?>" placeholder="Masukkan Nama Jalan">
        </div>

        <div class="form-group">
            <label>Desa:</label>
            <input type="text" class="form-control" name="desa" value="<?= $row['Desa']; ?>" placeholder="Masukkan Nama Desa">
        </div>

        <div class="form-group">
            <label>Kecamatan:</label>
            <input type="text" class="form-control" name="kecamatan" value="<?= $row['Kecamatan']; ?>" placeholder="Masukkan Nama Kecamatan">
        </div>

        <div class="form-group">
            <label>Jenis Usaha:</label>
            <select class="form-control" name="jenis_usaha">
                <option value="">Pilih Jenis Usaha</option>
                <?php foreach ($jenisusahaData as $jenis) : ?>
                    <option value="<?= $jenis['NoJenisUsaha'] ?>" <?php if ($jenis['NoJenisUsaha'] == $row['NoJenisUsaha']) echo 'selected'; ?>>
                        <?= $jenis['NamaJenis'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</body>

</html>