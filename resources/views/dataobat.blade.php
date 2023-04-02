<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center mb-4">Data Obat</h1>
        <div class="container">
        <a href ="/tambahobat" class="btn btn-secondary">Tambah Obat</a>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Ubah</th>
                        <th scope="col">Hapus</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>
                                <a href ="/tampilkandata/{{$row->kode}}" class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <a href = "/delete/{{$row->kode}}" class="btn btn-danger">Hapus</a>
                            </td>
                            <th scope="row">{{$row->kode}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td>{{$row->tipe}}</td>
                            <td>{{$row->jumlah}}</td>
                            <td>{{$row->hargaSatuan}}</td>
                            <td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>