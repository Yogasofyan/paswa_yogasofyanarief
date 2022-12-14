<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelompok</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kelompok</h6>        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="kelompok_pro_edit.php">
                    <?php 
                    include_once("connection.php");
                    $id = $_GET['id'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_kelompok WHERE id= '$id' ");
                    
                    while ($res = mysqli_fetch_array($result_data)) {
                        $nama_kelompok = $res['nama_kelompok'];
                    }
                    ?>
                    <input type="hidden" name="id" class="form-control" required value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <td>Nama Kelompok</td>  
                        <td>&nbsp;&nbsp;&nbsp;</td>                        
                        <td><input type="text" name="nama_kelompok" class="form-control" required value="<?php echo $nama_kelompok; ?>"></td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="kelompok.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>