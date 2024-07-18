
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
<style>
.mainmenubtn {
    background-color: skyblue;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.mainmenubtn:hover {
    background-color: blue;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: skyblue;
    min-width: 200px;
}
.dropdown-child a {
    color: blue;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<div class="dropdown">
  <button class="mainmenubtn">Main Menu</button>
  <div class="dropdown-child">
    <a href="http://wwww.yourdomain.com/page1.html">Profile</a>
    <a href="http://wwww.yourdomain.com/page2.html">Setting</a>

  </div>
</div>

<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome back buddy.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN E-COMMERCE</title>
    <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
        <br><br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="alert alert-warning">
                    <a href="data_add.php" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Rating</th>
                                <th>Tags</th>
                                <th>Harga</th>
                                <th>Ukuran</th>
                                <th>Warna</th>
                                <th>Deskripsi</th>
                               <!-- <th>Gambar</th>-->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no=0;
                            $result = mysqli_query($koneksi, "SELECT * FROM tb_shoes ORDER BY id_shoes ASC");
                            while($row = mysqli_fetch_assoc($result)) {
                                $no++
                                ?>
                                <tr class="">
                                    <td><?php echo $row['id_shoes'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['rating'];?></td>
                                    <td><?php echo $row['tags'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><?php echo $row['sizes'];?></td>
                                    <td><?php echo $row['colors'];?></td>
                                    <td><?php echo $row['description'];?></td>
                                 <!-- <td><?php echo $row['image'];?></td>-->
                                    <td>
                                        <a href="data_edit.php?id=<?php echo $row['id_shoes'];?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-check"></i> Edit</a>
                                        <a href="javascript:;" data-id="<?php echo $row['id_shoes'] ?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>

    <!-- modal konfirmasi-->
    <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>
</html>