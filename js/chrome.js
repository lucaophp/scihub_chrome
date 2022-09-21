document.write('');

$( window ).unbind();
$.ajax({
  url: "http://localhost:8000",
  context: document.body,
  success: function(data) {
        if(data != "Error"){
			window.location = data+window.location;
		}
    },
  error: function(data) {
       window.location = "https://sci-hub.se/"+window.location;
  }

})


