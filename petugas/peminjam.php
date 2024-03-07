<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;"> 
  <div class="col">
      <h2>Data Peminjaman</h2>
                 <a href="data/pinjam_buku.php" class="btn btn-success mt-3">Tambah Peminjaman</a>
            <table class="table my-2">
                <thead class="table table-success">
                    <tr>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                while ($d = mysqli_fetch_array($data)) {
                
                ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $d['peminjamanID'];?></th>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['status_peminjaman'];?></td>
                    <td>
                    <a href="data/detail_peminjaman.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-primary text-white">Detail</a>
                    <a href="data/delete_peminjaman.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-danger text-white">Delete</a>
                        </td>
                    </tr>
                
                </tbody>
                <?php
                }
                ?>
                </table>
    </div>
  </div>
</div>


<?php
include 'layout/footer.php';
?>