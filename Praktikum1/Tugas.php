<?php 
$mahasiswa1 = [
    'id'=>1,
    'nama'=>'rara',
    'nim'=>110122,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];
$mahasiswa2 = [
    'id'=>2,
    'nama'=>'rere',
    'nim'=>1101445,
    'uts'=>75,
    'uas'=>95,
    'tugas'=>80,
];
$mahasiswa3 = [
    'id'=>3,
    'nama'=>'fafa',
    'nim'=>110133,
    'uts'=>85,
    'uas'=>75,
    'tugas'=>90,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1t</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h3>Daftar Nilai Mahasiswa</h3>
        <table class="table table-stripped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id']; ?></td>
                <td><?= $nilai['nama']; ?></td></td>
                <td><?= $nilai['nim']; ?></td></td>
                <td><?= $nilai['uts']; ?></td></td>
                <td><?= $nilai['uas']; ?></td></td>
                <td><?= $nilai['tugas']; ?></td></td>
            </tr>
            <?php } ?>

        </table>
    </div>



</body>
</html>

