<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjualan</title>
</head>
<body>
  <h1>Transaksi</h1>
  <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="nama_barang"></td>
            <td><input type="number" name="harga"></td>
            <td><input type="number" name="jumlah"></td>
            <td><input type="number" name="subtotal"></td>
          </tr>
          <tr>
            <td colspan="3" class="total">Total</td>
            <td><input type="number" name="total"></td>
          </tr>
        </tbody>
</html>
