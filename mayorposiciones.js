 // Navigate to next page on swipe left
        $( this ).on("swiperight", function(e) {
		$.mobile.changePage( "mayorfixture.html", { 
		transition: "slide" });
		});
		
		$( this ).on("swipeleft", function(e) {
		$.mobile.changePage( "mayorgoleadores.html", { 
		transition: "slide" });
		});