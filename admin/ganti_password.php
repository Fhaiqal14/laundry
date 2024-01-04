<?php
include 'header.php'; ?>

<div class="container">
    <br>
    <br>
    <br>
    <div class="coll-md-5 coll-md-offset-3">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "oke"){
                echo "<div class='alert alert-success'>Password berhasil diganti</div>";
            } else if ($_GET['pesan'] == "update") {
                echo "<div class='alert alert-success'>Password berhasil diganti</div>";
            }
        }
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4><center>Ganti Password</center></h4>
            </div>

            <div class="panel-body">
                <form method="post" action="ganti_password_aksi.php">
                    <div class="form-group">
                        <label>Masukkan Password Baru</label>
                        <input type="password" class="form-control" name="password_baru" placeholder="Masukkan Password Baru Anda" >
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>