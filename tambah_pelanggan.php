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
        <h3>Tambah Pelanggan</h3>
        <form action="proses_tambah_pelanggan.php" method="post">
            nama :
            <input type="text" name="nama" value="" class="form-control">
            alamat :
            <textarea name="alamat" class="form-control" rows="4"></textarea>
            telp :
            <input type="text" name="telp" value="" class="form-control">
            username :
            <input type="text" name="username" value="" class="form-control">
            password :
            <input type="password" name="password" value="" class="form-control">
            <input type="submit" name="simpan" value="Tambah Pelanggan" class="btn btn-primary">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </body>
</html>