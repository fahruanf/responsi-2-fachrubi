<?php
require 'koneksi.php';
$input = file_get_contents('php://input');
$data = json_decode($input,true);
//terima data dari mobile
$nama=trim($data['nama']);
$stok=trim($data['stok']);
http_response_code(201);
if($nama!='' and $stok!=''){
 $query = mysqli_query($koneksi,"insert into barang(nama,stok) values('$nama','$stok')");
 $pesan = true;
}else{
 $pesan = false;
}
echo json_encode($pesan);
echo mysqli_error($koneksi);