$(".navigation").on("show.bs.collapse", function(e) {
	console.log("open")
	$( ".light" ).addClass( "active" );
	$( ".expand" ).addClass( "active" );
});
$(".navigation").on("hide.bs.collapse", function(e) {
	console.log("close")
	$( ".light" ).removeClass( "active" );
	$( ".expand" ).removeClass( "active" );
});
feather.replace()