$("#btnStart").click(function(e) {
		console.log('teste');
			// body...
});
$("#btnStop").click(function(e) {
		console.log('teste');
			// body...
});
$("#btnUnlock").click(function(e) {
		var tablink;
		chrome.tabs.getSelected(null,function(tab) {
		    tablink = tab.url;
		});
		console.log(tablink);
			// body...
});