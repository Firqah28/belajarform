<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">>
    <!-- Style CSS -->
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            font-family: 'Arial'; 
            font-weight: 500; 
        }
        .container {
            margin-top: 50px;
        }
        .file {
            visibility: hidden;
            position: absolute;
        }
    </style>
    <!-- Link JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Tambah Data Guru
            </div>
            <div class="card-body">
                <form method="post" action="proses_tambah.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nip">NIP :</label>
                        <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. HP :</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required>
                    </div>
                    <div class="form-group">
                        <label for="mata_pelajaran">Mata Pelajaran :</label>
                        <input type="text" name="pelajaran" class="form-control" id="pelajaran" placeholder="Mata Pelajaran Guru" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
