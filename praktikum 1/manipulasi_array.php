<?php
$arraybuah = ["jeruk", "mangga", "pisang", "apel"];

/// mengurutkan nilai suatu array
sort($arraybuah) ;

// menghapus nilai array yang paling akhir
array_pop($arraybuah);

// menghapus isi keseluruhan isi variabel
// bisa juga menghapus spesifik nilai array tertentu
unset($arraybuah [1]) ;

array_push($arraybuah, "durian");

// menghapus nilai array yang paling awal
array_shift($arraybuah) ;

// menambahkan nilai array dipaling depan
array_unshift($arraybuah, "semangka");

// mengubah spesifik nilai array tertentu
$arraybuah[0]= "manggis" ;

foreach($arraybuah as $buah){
    echo $buah . "<br>";
}