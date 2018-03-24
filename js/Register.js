jQuery(document).ready(function () {
    jQuery("#pass2").focusout(function(e){		
        e.preventDefault();
        var matched,
            password = jQuery("#pass1").val(),
            confirm = jQuery("#pass2").val();

        matched = (password == confirm) ? true : false;
		if (password != ''){
           if(matched) { 
			  jQuery("#message").html("Passwords Match");
			  jQuery("#message").css({"background-color": "#DFF2BF", "color": "#4F8A10","padding": "3px","padding": "5px" ,"border-radius": "4px" });
			  jQuery("#message").addClass("glyphicon glyphicon-ok");		  
			  return false; 
            }else { 
				jQuery("#message").html("Passwords don't match..."); 
				jQuery("#message").css({"background-color": "#FFBABA", "color": "#D8000C","padding": "3px", "padding": "5px" ,"border-radius": "4px" });
				jQuery("#message").addClass("glyphicon glyphicon-remove");
				return false;
           }
		} else {
			
		}
});
});