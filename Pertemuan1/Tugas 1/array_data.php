<?php
  $fruits = [
    [
        "nama" => "Apel",
        "warna" => "Merah",
        "stok" => 10,
        "harga" => 5000,
        "deskripsi" => "Buah yang segar dengan rasa manis"
    ],
    [
        "nama" => "Jeruk",
        "warna" => "Oranye",
        "stok" => 15,
        "harga" => 4000,
        "deskripsi" => "Buah yang kaya akan vitamin C"
    ],
    [
        "nama" => "Pisang",
        "warna" => "Kuning",
        "stok" => 20,
        "harga" => 3000,
        "deskripsi" => "Buah yang mengandung banyak kalium"
    ],
    [
        "nama" => "Anggur",
        "warna" => "Ungu",
        "stok" => 30,
        "harga" => 20000,
        "deskripsi" => "Buah yang memiliki bentuk bulat dan kecil"
    ],
    [
        "nama" => "Semangka",
        "warna" => "Merah",
        "stok" => 10,
        "harga" => 12000,
        "deskripsi" => "Buah yang memiliki kuli tebal dan bewarna hitam dan hijau"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($fruits as $id => $fruit): ?>
        <tr>
            <td><?php echo $id + 1; ?></td>
            <td><?php echo $fruit['nama']; ?></td>
            <td><?php echo $fruit['warna']; ?></td>
            <td><?php echo $fruit['stok']; ?></td>
            <td><?php echo $fruit['harga']; ?></td>
            <td><?php echo $fruit['deskripsi']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  </div>
</body>
</html>