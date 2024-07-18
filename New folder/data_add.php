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
        <div class="panel-body">
            <form method="post" action="data_add_s.php" enctype="multipart/form-data">
            <!-- <div class="form-group">
                    <label>Id</label>
                    <input class="form-control" name='id' placeholder="Ini contoh input text dengan placeholder" required>
                </div>-->
                <div class="form-group">
                    <label>Nama Sepatu</label>
                    <input class="form-control" name='name'  required>
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input class="form-control" name='rating' required>
                </div>
                 <div class="form-group">
                    <label>Tags</label>
                    <input class="form-control" name='tags'  required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name='price'  required>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input class="form-control" name='sizes'  required>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input class="form-control" name='colors'  required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input class="form-control" name='description'  required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" name='image'  required>
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
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

</body>
</html>