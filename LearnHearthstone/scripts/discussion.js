/* The following script disables the submit button on a form after it is clicked once.  
This is done to prevent the user from accidentally submitting multiple identical comments.
This script is also responsible for performing client side validation on the alias and comment text. */

$(document).ready(function()
{
	// This function returns true if the input string is null or consists solely of white space.
	function isWhitespace(text)
	{
		return !text || text.trim().length < 1;
	}
	
	$("#postComment").submit(function()
	{
		var isValid = !isWhitespace($("#aliasText").val()) && !isWhitespace($("#commentText").val());
		if (isValid)
		{
			$(this).submit(function(){
				return false; // Prevent the submit button from being pressed multiple times.
			});
			return true;
		}
		else
		{
			alert("Looks like you forgot to enter a comment and/or an alias!");
			return false;
		}
	});
});