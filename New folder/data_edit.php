<!DOCTYPE html>
<html>
<head>
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
                <a href="index.php" class="btn btn-danger"><i class="glyphicon glyphicon-file"></i> Lihat Data</a>
            </div>
        </div>
        <?php
        include 'koneksi.php';
        $id     = $_GET['id'];
        $result = mysqli_query($koneksi, "SELECT * FROM tb_shoes WHERE id_shoes='$id'");
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="panel-body">
            <form method="post" action="data_edit_s.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id</label>
                    <input class="form-control" name='id_shoes' value="<?php echo $row['id_shoes'];?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Sepatu</label>
                    <input class="form-control" name='name' value="<?php echo $row['name'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input class="form-control" name='rating' value="<?php echo $row['rating'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input class="form-control" name='tags' value="<?php echo $row['tags'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name='price' value="<?php echo $row['price'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input class="form-control" name='sizes' value="<?php echo $row['sizes'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input class="form-control" name='colors' value="<?php echo $row['colors'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input class="form-control" name='description' value="<?php echo $row['description'];?>"  required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" name='image' value="<?php echo $row['image'];?>"  required>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-default"><i class="fa fa-file-text"></i> Bersih</button>
            </form>
        </div>  
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>