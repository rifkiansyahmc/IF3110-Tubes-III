var REST_URL = "http://localhost/wbd3/service/rest/";

function sendRestAjax(method, resource, data, callback){
	target = REST_URL + resource;
	var request = new XMLHttpRequest();
	
	request.onload = function(){
		if (callback !== null){
			var response;
			try{
				response = JSON.parse(this.responseText);
			}catch(err){
				response = {"status" : "error", "desc" : "Parse Error", "raw" : this.responseText};
			}
			
			callback(response);
		}			
	}
	
	if (method == "GET"){
		request.open(method, target + jsonToUriEncoded(data), true);
		request.send();
	}else{
		request.open(method, target, true);
		request.send(JSON.stringify(data));
	}
}

function jsonToUriEncoded(obj) {
	// tidak bisa untuk json dengan nested object / array

	var parts = [];
	for (var key in obj) {
		if (obj.hasOwnProperty(key)) {
			parts.push(encodeURIComponent(key) + '=' + encodeURIComponent(obj[key]));
		}
	}
	return "?" + parts.join('&');
}