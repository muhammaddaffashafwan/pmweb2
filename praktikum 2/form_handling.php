<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<style>
    body{
        background-color: Aqua;
    }
   
</style>
<body >
    <h1>Form Pendaftaran Mahasiswa STTNF</h1>
    <form action="belajar_POST.php" method="POST">
        <!-- tipex text -->
        <label for="">Nama Mahasiswa</label> <br>
        <input type="text" name="nama"> <br> <br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">
            <label for="">Laki-laki</label> <br>
        <input type="radio" name="jenis_kelamin" value="perempuan">
            <label for="">Perempuan</label> <br> <br>
        <!-- tipe checkbox -->
        <label for="">Mata Kuliah</label> <br>
        <input type="checkbox" name="mata_kuliah" value="Basis Data">
            <label for="">Basis Data</label> <br>
        <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris">
            <label for="">Bahasa Inggris</label> <br><br>
        <!-- tipe number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"> <br><br>
        <!-- select -->
        <label for="">prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select> <br> <br>
        <!-- button -->
        <button type="submit">Kirim</button> 
        <button type="button">Contoh</button>
        <button trpe="reset">Reset</button>
    </form>
</body>
</html>