<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">STT NF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li>
                    <ul>
                            <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                                </nav>
                    </ul>
                </li>

            </div>
        </div>
    </nav>



<?php
require_once 'class_mahasiswa1.php';

    $mahasiswa1 = new Mahasiswa ("0110221187", "Satria Bagus");
    $mahasiswa1->program_studi = "Teknik Informatika";
    $mahasiswa1->angkatan=2010;
    $mahasiswa1->ipk=3.8;

    $mahasiswa2 = new Mahasiswa ("0110221188", "Akum Samsidi");
    $mahasiswa2->program_studi = "Sistem Informasi";
    $mahasiswa2->angkatan=2011;
    $mahasiswa2->ipk=3.9;

    $mahasiswa3 = new Mahasiswa ("0110221189", "Butet Kuncoro");
    $mahasiswa3->program_studi = "Teknik Informatika";
    $mahasiswa3->angkatan=2012;
    $mahasiswa3->ipk=4.0;

    $mahasiswa4 = new Mahasiswa ("0110221190", "Muhammad Rifki");
    $mahasiswa4->program_studi = "Sistem Informasi";
    $mahasiswa4->angkatan=2013;
    $mahasiswa4->ipk=3.5;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];

?>

<div class="container">
    <div class="align-items-center" style="padding: 60px">
    <table id="example" class="display" style="border: 1px solid black;"  >
        <thead>
            <tr class="bg-primary">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Program Studi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->program_studi.'</td>'.
                '<td>'.$mahasiswa->angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                $counter++;
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>