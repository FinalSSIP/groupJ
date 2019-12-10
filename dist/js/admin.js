//dropdown: bila di .menu ada li lalu ada ul lagi
$(".menu li > a").click(function(e) {
	// bila a di klik akan nge slide up dan nge slide down 
	$(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
})

//apabila dibuka di layar yang < 768
$(window).bind("load resize",function(){
	if ($(this).width() < 768)
	{
		$(".sidebar-collapse").addClass("collapse");
	}
	else 
	{
		$(".sidebar-collapse").removeClass("collapse");
		$(".sidebar-collapse").removeAttr("style");
	}
})
