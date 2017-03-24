var score = 0;
var index = 1;
var max_index = 5;
var finished = false;

$(document).ready(function()
{
	$(window).ready(UpdateChallengeBannerHeight);
	$(window).resize(UpdateChallengeBannerHeight);
	
	$(".challenge:nth-of-type(1)").show();
	$("#score").html(score);
	$("#index").html(index);
	$("#max_index").html(max_index);
	
	$(".option").click(function()
	{
		$(".challenge").slideUp(500);
		if (index < max_index)
		{
			index++;
			$(".challenge:nth-of-type(" + index + ")").slideDown(500);
		}
		else
		{
			$("#question_area").hide();
		}
		
		if ($(this).hasClass("correct"))
		{
			score++;
		}
		$("#score").html(score);
		$("#index").html(index);
	});
});

function UpdateChallengeBannerHeight()
{
	var banner = $(".challenge_banner");
	banner.css("height", banner.width() / 2.5);
}