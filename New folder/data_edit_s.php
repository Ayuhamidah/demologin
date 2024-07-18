<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$id_shoes             = $_POST['id_shoes'];
$name           = $_POST['name'];
$rating         = $_POST['rating'];
$tags           = $_POST['tags'];
$price          = $_POST['price'];
$sizes          = $_POST['sizes'];
$colors         = $_POST['colors'];
$description    = $_POST['description'];
$image          = $_POST['image'];

//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if($name=="" || $rating=="" || $tags=="" || $price=="" || $sizes=="" || $colors=="" || $description=="" || $image=="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="data_edit.php?id_shoes=<?echo $id_shoes; ?>";
    </script>
    <?php
}
//input ke tabel db
else
{ //query simpan ke db
    $sql="UPDATE tb_shoes SET name='$name', rating='$rating', tags='$tags', price='$price', sizes='$sizes', colors='$colors', description='$description', image='$image' WHERE id_shoes='$id_shoes'";
    
    if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="index.php";
        </script>
        <?php
    }
}?> <!--tutup php--->