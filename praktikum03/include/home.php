<?php
  $mahasiswa = [
    ["id" => 1,"nama" => "Adam", "nim" => "0110220153", "uts" => 90, "uas" => 85, "tugas" => 100],
    ["id" => 2,"nama" => "Salsa", "nim" => "0110220154", "uts" => 85, "uas" => 90, "tugas" => 95],
    ["id" => 3,"nama" => "Raihan", "nim" => "0110220155", "uts" => 87, "uas" => 86, "tugas" => 95],
    ["id" => 4,"nama" => "Zandini", "nim" => "0110220156", "uts" => 89, "uas" => 90, "tugas" => 100],
    ["id" => 5,"nama" => "Bila", "nim" => "0110220157", "uts" => 90, "uas" => 95, "tugas" => 95],
    ["id" => 6,"nama" => "Dini", "nim" => "0110220158", "uts" => 85, "uas" => 89, "tugas" => 95],
    ["id" => 7,"nama" => "Luthfi", "nim" => "0110220159", "uts" => 87, "uas" => 88, "tugas" => 90],
    ["id" => 8,"nama" => "Rayen", "nim" => "0110220152", "uts" => 90, "uas" => 93, "tugas" => 92],
    ["id" => 9,"nama" => "Samsul", "nim" => "0110220151", "uts" => 80, "uas" => 95, "tugas" => 88],
    ["id" => 10,"nama" => "Iful", "nim" => "0110220150", "uts" => 83, "uas" => 80, "tugas" => 90],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Daftar Nilai</title>

  <?php
    include 'atas.php'
  ?>
</head>
<body>
  <table class="table table-striped table-dark">
    <thead>
      <th>ID</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Tugas</th>
    </thead>

    <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs["id"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["nim"] ?></td>
          <td><?= $mhs["uts"] ?></td>
          <td><?= $mhs["uas"] ?></td>
          <td><?= $mhs["tugas"] ?></td>
        </tr>
      <?php endforeach;  ?>
      
    </tbody>
  </table>
</body>
<?php
    include 'bawah.php'
?>
</html>
