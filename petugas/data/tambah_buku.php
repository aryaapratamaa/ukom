<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="Bootstrap/css/boostrap.min.css">
  </head>
  <body>
        <div class="container">
            <div class="card" style="margin-top: 4rem;">
                <div class="row m-4">

                    <div class="col-sm-7">
                        <h3>Form Tambah Buku</h3>
                        <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                        <input type="text" name="tahunterbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                             </div>
                             <div class="input-group mb-3">
                                <label for="formFileMultiple" class="form-label">Cover Buku</label>
                                <input class="form-control" name="Foto" type="file" id="formFileMultiple" multiple>
                            </div>

                             <div class="input-group mb-3">
                                <label for="formFileMultiple" class="form-label">Buku <span class="text-danger">*PDF</span></label>
                                <input class="form-control" name="Buku" type="file" id="formFileMultiple" multiple>
                             </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="../buku.php" class= "btn btn-danger m-2">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>