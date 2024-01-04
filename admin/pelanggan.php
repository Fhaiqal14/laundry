<?php
include 'header.php'; ?>
<div class="container">
    <br>
    <br>
    <br>
    <div class="coll-md-5 coll-md-offset-3">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "ubah"){
                echo "<div class='alert alert-info'>Data Berhasil diubah</div>";
            } else if ($_GET['pesan'] == "tambah") {
                echo "<div class='alert alert-success'>Data Berhasil ditambahkan</div>";
            } else if ($_GET['pesan'] == "hapus") {
                echo "<div class='alert alert-danger'>Data Berhasil dihapus</div>";
            }
        }
        ?>
    <div class="panel">
        <div class="panel-heading">
            <h4><center>Data Pelanggan</center></h4>
        </div>
        <div class="panel-body">
            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br>
            <br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th><center>Nama</center></th>
                    <th><center>HP</center></th>
                    <th><center>Alamat</center></th>
                    <th width="15%"><center>OPSI</center></th>
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"select * from pelanggan");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['pelanggan_hp']; ?></td>
                        <td><?php echo $d['pelanggan_alamat']; ?></td>
                        <td>
                            <a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>