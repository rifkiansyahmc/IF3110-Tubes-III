<?php 

// shop functions


function createUser($username, $email, $nama_lengkap, $alamat, $provinsi, $kota, $kodepos, $telepon){
	$response["status"] = "ok";
	return json_encode($response);
}

function createBarang($nama_barang, $harga, $stok, $kategori, $deskripsi){
	$response["status"] = "ok";
	$response["detail"] = $nama_barang.$harga.$stok.$kategori.$deskripsi;
	return json_encode($response);
}

ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$server = new SoapServer("service.wsdl");
$server->addFunction("createUser");
$server->addFunction("createBarang");
$server->handle();


?>