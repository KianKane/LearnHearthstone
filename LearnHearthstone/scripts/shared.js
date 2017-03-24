$(document).ready(function()
{
	$(window).ready(UpdateHeight);
	$(window).resize(UpdateHeight);
	
	$("#menu_button").click(function()
	{
		$("#menu").stop().slideToggle(400);
	});
});

function UpdateHeight()
{
	var banner = $("#banner");
	var content = $("#content");
	var body = $("body");
	var banners = $(".banner");
	
	banner.css("height", banner.width() / 3.14);
	content.css("minHeight", body.height()- banner.height());
	banners.css("height", banners.width() / 4);
}