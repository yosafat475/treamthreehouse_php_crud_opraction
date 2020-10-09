<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=latihan","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);

    if(isset($_POST['search'])){
        $name=$_POST['search'];
        $search=$db->prepare("select*from siswa where nama=? or pekerjaan=?");
        $search->bindValue(1, $name,PDO::PARAM_STR);
        $search->bindValue(2, $name,PDO::PARAM_STR);
        $search->execute();

        $tampil_data=$search->fetchAll();

        $row=$search->rowCount();

        // var_dump($row);
    }else{

        $data=$db->query("select * from kelas"); //prepare statment
        
        $tampil_data=$daftar->fetchAll();  //execetue and get data as array

        // var_dump($tampil_data);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            
        
<h1>data siswa</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">jurusan</th>
            <th scope="col">kelas</th>
            <th scope="col">nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_daftar as $key):?>
            <tr>
                <td><?php echo $key['jurusan'];?></td>
                <td><?php echo $key['kelas'];?></td>
                <td><?php echo $key['nilai'];?></td>

<?php endforeach; ?>
    </tbody>
</table>
</div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
        <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Cari Data</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>