$(".tel1").not(":first").hide();
$(".dropdown-wrapper .tab").click(function() {
	$(".dropdown-wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
	$(".tel1").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");