$(document).ready(function()
{
	$("#beginner_guides_banner").click(function()
	{
		$("#beginner_guides").stop().slideToggle("slow");
		$("#beginner_guides_banner .arrow_up").stop().fadeToggle("fast");
		$("#beginner_guides_banner .arrow_down").stop().fadeToggle("fast");
	});
	
	$("#intermediate_guides_banner").click(function()
	{
		$("#intermediate_guides").stop().slideToggle("slow");
		$("#intermediate_guides_banner .arrow_up").stop().fadeToggle("fast");
		$("#intermediate_guides_banner .arrow_down").stop().fadeToggle("fast");
	});
});