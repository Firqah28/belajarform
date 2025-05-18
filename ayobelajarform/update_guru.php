<!DOCTYPE html>
<html lang="en">
    <?php include 'template/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php 
            // Firqah
            include 'koneksi.php'; 
            $id = $_GET['id']; 
            $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE id='$id'"); 
            while ($d = mysqli_fetch_array($data)) { 
        ?>
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Edit Data Guru
            </div>
            <div class="card-body">
                <form method="post" action="proses_edit.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nip">NIP :</label>
                        <input type="text" name="nip" class="form-control" value="<?php echo $d['nip'] ?>" id="tempat_lahir" placeholder="NIP Guru" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d['nama'] ?>" placeholder="Nama Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $d['tempat_lahir'] ?>" id="tempat_lahir" placeholder="Tempat Lahir Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir'] ?>" id="tanggal_lahir" placeholder="Tanggal Lahir Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat'] ?>" id="alamat" placeholder="Alamat Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No.Hp :</label>
                        <input type="text" name="no_hp" class="form-control" value="<?php echo $d['no_hp'] ?>" id="tgl_lahir" placeholder="Nomor Hp Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="pelajaran">Mata Pelajaran :</label><br>
                        <input type="text" name="pelajaran" class="form-control" id="pelajaran" value="<?php echo $d['pelajaran'] ?>" placeholder="Mata Pelajaran Guru" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
    <script>
        // Muhammad Rifky
        $(document).on("click", ".browse", function () {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("preview").src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>
    <?php include 'template/footer.php'; ?>
</html>
