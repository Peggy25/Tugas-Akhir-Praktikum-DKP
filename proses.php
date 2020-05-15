<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   
  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Untitled Document</title>  
<style type="text/css">  
.putih {  
 color: #FFF;  
}  
</style>  
</head>  
  
<body>  
  
<?php   
$nama_barang = $_POST['nama_barang'];  
$harga = $_POST['harga'];  
$jumlah = $_POST['jumlah'];  
$status = $_POST['status'];  
$kota = $_POST['kota'];  
  
function subtotal($harga,$jumlah ){
  return $harga * $jumlah;
}
    
$subtotal = $harga * $jumlah ;  
  
switch ($status){  
 case "Pelanggan":  
  $diskon = $subtotal * 0.1;  
 break;  
 case "Bukan pelanggan":  
  $diskon = 0;
 break;  
 }  
  
if($kota == "Jakarta" ){  
 $ongkos = 20000;  
 }  
else if($kota == "Bandung" ){  
 $ongkos = 10000;  
 }  
else if($kota == "Surabaya" ){  
 $ongkos = 30000;  
 }  
$total = $subtotal - $diskon + $ongkos;  
?>  
  
  
<div align="center">  
  <table width="297" border="1">  
    <tr>  
      <td colspan="2" bgcolor="red"><div align="center" class="putih"><strong>HASIL   
  
PERHITUNGAN</strong></div></td>  
    </tr>  
    <tr>  
      <td width="116" bgcolor="red">Nama Barang</td>  
      <td width="165" bgcolor="red">&nbsp;<?php echo "$nama_barang"; ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Harga</td>  
      <td bgcolor="red">&nbsp;<?php echo "Rp. ".number_format($harga); ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Quantity</td>  
      <td bgcolor="red">&nbsp;<?php echo "$jumlah"; ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Subtotal</td>  
      <td bgcolor="red">&nbsp;<?php echo "Rp. ".number_format($subtotal); ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Status</td>  
      <td bgcolor="red">&nbsp;<?php echo "$status"; ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Diskon</td>  
      <td bgcolor="red">&nbsp;<?php echo "Rp. ".number_format($diskon); ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red">Ongkos Kirim</td>  
      <td bgcolor="red">&nbsp;<?php echo "Rp. ".number_format($ongkos)?> <?php echo "(   
  
$kota )";  ?></td>  
    </tr>  
    <tr>  
      <td bgcolor="red" class="putih"><strong>Total</strong></td>  
      <td bgcolor="red">&nbsp;<?php echo "Rp. ".number_format($total); ?></td>  
    </tr>  
  </table>  
</div> 
<center>Mau mencoba lagi?</center>
       <center><form action="index.html" method="post"></center>
       <center><input type="submit" value="OK"/?></center>

</body>  
</html> 