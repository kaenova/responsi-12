<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat toko</title>
</head>

<body>
    <form action="/admin/buat_toko">
        @csrf
        <label for="nama">
            Nama
            <input type="text" name="nama" id="nama">
        </label>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
