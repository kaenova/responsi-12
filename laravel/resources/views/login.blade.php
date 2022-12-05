<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  @if (isset($error)) 
  {{ $error }}
  @endif

  <form action="/admin/login">
  @csrf
    <label for="username">
      Username
      <input type="text" name="username" id="username">
    </label>
    <label for="password">
      Password
      <input type="password" name="password" id="password">
    </label>
    <button type="submit">Submit</button>
  </form>

  <a href="/register">Buat akun</a>

</body>

</html>