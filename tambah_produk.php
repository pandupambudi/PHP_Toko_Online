<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="post">
            nama produk :
            <input type="text" name="nama_produk" value="" class="form-control">
            deskripsi :
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
            harga :
            <input type="number" name="harga" value="" class="form-control">
            foto produk :
            <input type="file" name="foto_produk" value="" class="form-control">
            <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </body>
</html>