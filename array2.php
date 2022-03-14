<?php 
$mahasiswa = ["riko dwi setiawan", "21520018", "teknik informatika", "riko.aa.aa.aa@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs ):
        ?>
        <li>
            <?php echo $mhs; ?>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>