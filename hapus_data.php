<?php 
 
    $dbhost = "localhost"; 
    $dbuser = "root"; 
    $dbpass = ""; 
    $dbname = "db_seminar"; 
 
    //Membuat koneksi    
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){ 
echo "Koneksi gagal: ".mysqli_connect_error(); 
} 
//query menghapus data 
$sql = "DELETE FROM Peserta where nama='Sakinah'"; 
$hapus = mysqli_query($conn, $sql); 
if(!$hapus){ 
echo "Data Gagal dihapus <br/>"; 
} else{ 
echo "Data Berhasil dihapus <br/>"; 
} 
mysqli_close($conn); 
?> 