<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa</title>
</head> 
<body>
<form action ="/mahasiswa/proses" method="post">
<input type="hidden" name="_token" value ="<?php echo csrf_token() ;?>">
 Nama: <input type="text" name ="nama">  <br>
 Alamat :<input type="text" name="alamat"> <br>
<input type ="submit" value ="simpan">
</form>
</body>
</html>        