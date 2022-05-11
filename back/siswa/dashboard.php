<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success mb-3">
            Hallo, selamat datang <?= $_SESSION['nama'] ?>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <h2>Matematika</h2>
        <div class="row justify-content-between">
            <?php
            include '../../config/koneksi.php';
                $query=mysqli_query($koneksi,"SELECT * FROM materi WHERE nama_mapel='Matematika'");
                if (mysqli_num_rows($query) > 0) {
                    foreach($query as $data){
            ?>
               <div class="col-md-4">
                   <video src="../guru/materi/video/<?= $data['video'] ?>" controls width='320px' height='200px'></video>
               </div> 
            <?php
            }
         } else{
            ?>
                <div class="alert alert-danger">Tidak ada materi</div>
            <?php    
            }
            ?>
        </div>
    </div>