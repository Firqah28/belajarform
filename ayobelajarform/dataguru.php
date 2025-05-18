<!DOCTYPE html>
<html lang="en">
    <?php include 'template/header.php'; ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Data Guru</title>
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
            .foto {
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }
        </style>
        <!-- Link JS -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center mb-5">List Data Guru</h2>
            <?php  
                //Firqah
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "insert"){
                        echo "<script>alert('Guru Berhasil di Tambah')</script>";
                    } elseif ($_GET['pesan'] == "update") {
                        echo "<script>alert('Guru Berhasil di Update')</script>";
                    } elseif ($_GET['pesan'] == "delete") {
                        echo "<script>alert('Guru Berhasil di Hapus')</script>";
                    }
                }
            ?>
            <br>
            <a href="tambah_guru.php" class="btn btn-primary mb-4">Tambah Guru</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    // 230210500005
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM guru");
                    while($d = mysqli_fetch_array($data)){ ?>
                        <tr>
                            <th scope="row"><?php echo $d['id']; ?></th>
                            <td><?php echo $d['nip']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['tempat_lahir']; ?></td>
                            <td><?php echo $d['tanggal_lahir']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['no_hp']; ?></td>
                            <td><?php echo $d['pelajaran']; ?></td>
                            <td>
                                <a href="update_guru.php?id=<?php echo $d['id']; ?>" class="btn btn-warning text-white mb-2">Edit</a>
                                <a href="delete_guru.php?id=<?php echo $d['id']; ?>" class="btn btn-danger mb-2">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
    <?php include 'template/footer.php'; ?>
</html>
