<?php require_once "config.php"; ?>

<html>
<head>

<script src="js/rest_ajax.js"></script>

<script>
	function send(){
		data = {"test" : "lalala"};
		callback = function(response){
			alert(JSON.stringify(response));
		}
	
		sendRestAjax("GET", "barang/23", data, callback);
	}
</script>
</head>

<body>
	<button type="button" onclick="send()">test</button>
</body>
</html>