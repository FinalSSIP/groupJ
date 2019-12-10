//dropdown: bila di .menu ada li lalu ada ul lagi
$(".menu li > a").click(function(e) {
	// bila a di klik akan nge slide up dan nge slide down 
	$(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
})