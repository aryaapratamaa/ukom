<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link rel="stylesheet" href="Bootstrap/css/boostrap.min.css">
  </head>
  <body>
    
        <div class="container">
            <div class="card" style="margin-top: 3rem;">
                <div class="row m-4">
                    <?php
                    include "../koneksi.php";
                    if (isset($_GET['bukuID'])) {
                        $bukuID = $_GET['bukuID'];
                    }
                    else {
                        die ("Data tidak tersedia");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$bukuID'");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col-sm-7">
                        <h3>Form Peminjaman Buku</h3>
                        <a href="../buku.php" class= "btn btn-danger m-2">Kembali</a>
                        <form action="t_pinjam.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="bukuID" class="form-control" required value="<?php echo $result['bukuID']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="userID" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                            <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_peminjaman" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                                        <input type="date" name="tgl_pengembalian" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status Peminjaman</label>
                                <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                     <option value="dipinjam">Pinjam</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>