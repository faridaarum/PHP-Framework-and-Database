<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center mb-4">Tambah Data Obat</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class = 'col-8'>
                    <div class="card">
                        <div class="card-body">
                            <form action = "/insertdata" method = "POST">
                                @csrf 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode</label>
                                    <input type="text" class="form-control" name="kode">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Obat</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <input type="text" class="form-control"" name="deskripsi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tipe</label>
                                    <input type="text" class="form-control" name="tipe">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleInputPassword1">Harga Satuan</label>
                                    <input type="text" class="form-control" name="hargaSatuan">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>