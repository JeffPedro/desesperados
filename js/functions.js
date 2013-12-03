$(document).ready(function(e) {
	$('#login')
	.click(function(e){
	    e.preventDefault();
	    $(this).closest('form')
	        .submit();
	});
});
