/* The following script disables the submit button on a form after it is clicked once.  
This is done to prevent the user from accidently submitting multiple identical comments.*/

$(document).ready(function(){
	$("form").submit(function(){
		$(this).submit(function(){
			return false;
		});
	});
});