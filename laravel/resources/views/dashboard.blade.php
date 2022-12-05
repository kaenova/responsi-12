<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  @if (isset($message))
    {{ $message }}
  @endif
  <a href="/barang">Buat barang</a>
  <a href="/toko">Buat toko</a>
  <a href="/barang_toko">Sematkan barang dan toko</a>
  <a href="/logout">Logout</a>
</body>

</html>