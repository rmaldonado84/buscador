$(document).ready( function () {
	$("#formBuscador").on("submit", function(event) {
		event.preventDefault();

		param = {
			keyword : $("#keyword").val()
		}

		var baseUrl = window.location.origin;
		$.post( baseUrl + "/search", param, function (data) {
			var json_response = JSON.parse(data);


			$("#json_response").val(JSON.stringify(json_response, null, 4)).change();
			var data = JSON.parse(data);
			//foreach(data as reg)
		});

	})		
});

function auto_grow(element) {
    element.style.height = (element.scrollHeight)+"px";
}