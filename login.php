<html>

<head>
  <title>Login | Koperasi</title>
</head>
<style>
  .wrapper {
    width: 400px;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    margin: 10% auto;
    padding: 40px;
  }

  form input {
    width: 100%;
    height: 40px;
    border: 1px solid black;
    padding: 5px;
  }
</style>

<body>
  <div class="wrapper">
    <h1>Login Koperasi</h1>
    <form action="proses_login.php" method="POST">
      <p>
        <input type="text" placeholder="Masukkan nama anda" name="name">
      </p>
      <p>
        <input type="number" placeholder="Masukkan nomor anda" name="number">
      </p>
      <p>
        <input type="submit" value="Login Now">
      </p>
    </form>
  </div>
</body>

</html>