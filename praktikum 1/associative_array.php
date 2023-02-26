<?php
$profilArray = [
    "nama" => "Daffa",
    "kelas" => "TI11"
] ;
echo $profilArray ["nama"] . "<br>";
echo $profilArray ["kelas"] ;

echo "<br>";

$profilMultiarray = [
    [
        "nama" => "Daffa" ,
        "Semester" => 2
    ], [
        "nama" => "Budi",
        "Semester" => 4
    ] ,[
        "nama" => "ojan" ,
        "Semester" => 5
    ]
] ;

foreach($profilMultiarray as $profil) {
    echo $profil['nama'] . "<br>";
    echo $profil['Semester'] . "<br>" ;
} 
?>