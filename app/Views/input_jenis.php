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
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?php echo site_url('home/simpanjenis') ?>">
                            <br>
                            <div class="form-group">
                                <label for="nama_jenis">Nama Jenis Usaha</label>
                                <input type="text" class="form-control" name="nama_jenis" placeholder="Nama Jenis Usaha">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" id="simpanButton">Simpan Data</button>
                                <a href="<?php echo site_url('input_umkm') ?>" class="btn btn-secondary">Input UMKM</a>
                                <a href="<?php echo site_url('viewjenis') ?>" class="btn btn-secondary">View Jenis</a>
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

    <script>
        // Tambahkan event listener untuk mengarahkan pengguna setelah mengedit
        document.getElementById('simpanButton').addEventListener('click', function() {
            window.location.href = "<?php echo site_url('input_jenis'); ?>";
        });
    </script>
</body>

</html>