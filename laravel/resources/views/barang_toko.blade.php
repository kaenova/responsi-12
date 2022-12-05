<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <title>Sematkan barang dan toko</title>
</head>

<body>
  <form action="/admin/sematkan_barang_toko">
    @csrf
    <label for="id_toko">
      Id Toko
      <input type="number" name="id_toko" id="id_toko">
    </label>
    <label for="id_barang">
      Id Barang
      <input type="number" name="id_barang" id="id_barang">
    </label>
    <button type="submit">Submit</button>
  </form>
</body>

</html>