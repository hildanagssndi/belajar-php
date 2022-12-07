<?php
// 1. Buat Koneksi dengan mysql
$con = mysqli_connect("localhost", "root", "", "fakultas");

// 2. Cek koneksi mysql
if (mysqli_connect_errno()){
   echo "Koneksi Gagal". mysqli_connect_error();
   exit();
} else{
    echo "Koneksi berhasil";
}

// 3. Membaca data dari table mysql
$query = "SELECT * FROM  mahasiswa";

// 4. Menampilkan data, dengan menjalankan sql query

$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result){
    // tampilkan data satu persatu
    while ($row = mysqli_fetch_assoc($result)){
        echo "<br>".$row["nama"];
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);

  // 5. Tutup koneksi mysql
  mysqli_close($con);  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1> Data Mahasiswa</h1>
    <table border="1" style="width:100"> 
        <tr>
            <th>NIM</th>
            <th>nama</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>