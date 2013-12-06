<?php

require_once "RestHandler.php";

class ShopRestHandler extends RestHandler{
	function handle_post($urlpart, $data){
		$response["status"] = "error";
		$response["desc"] = "unknown resource ".@$urlpart[0];
		
		switch(@$urlpart[0]){
			case 'cart':
				// post cart/<id_barang>
			break;
			case 'buy':
				// post buy
			break;
			case 'login':
				// post login
			break;
			case 'logout':
				// post login
			break;
		}
		
		echo json_encode($response);
	}
	
	function handle_put($urlpart, $data){
		$response["status"] = "error";
		$response["desc"] = "unknown resource ".@$urlpart[0];
		
		switch(@$urlpart[0]){
			case 'barang':
				// put barang/<id>
			break;
			case 'user':
				if (@$urlpart[2] == "card"){
					// put user/<username>/card
				}else{
					// put user/<username>
				}
			break;
		}
		
		echo json_encode($response);
	}
	
	function handle_get($urlpart, $data){
		$response["status"] = "error";
		$response["desc"] = "unknown resource ".@$urlpart[0];
		
		switch(@$urlpart[0]){
			case 'barang':
				// get barang/<id>
			break;
			case 'kategori':
				// get kategori/<kategori>
			break;
			case 'search':
				// get search/<query>
			break;
			case 'populer':
				// get populer
			break;
			case 'user':
				if (@$urlpart[2] == "card"){
					// get user/<username>/card
				}else{
					// get user/<username>
				}
			break;
		}
		
		echo json_encode($response);
	}
	
	function handle_delete($urlpart, $data){
		$response["status"] = "error";
		$response["desc"] = "unknown resource ".@$urlpart[0];
		
		switch(@$urlpart[0]){
			case 'barang':
				// delete barang/<id>
			break;
		}
		
		echo json_encode($response);
	}
	
	function handle_default($urlpart, $data){echo '{"status": "error", "desc": "action not supported"}';}
}

$handler = new ShopRestHandler();
$handler->handle();

?>