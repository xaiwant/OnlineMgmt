jQuery(document).ready(function () {

$( ".alert" ).after( $( "#register" ) );
$( ".alert" ).after( $( "#login" ) );
$( ".alert" ).after( $( "#fpassword" ) );	
	
	
    jQuery("#pass2").focusout(function(e){		
        e.preventDefault();
        var matched,
            password = jQuery("#pass1").val(),
            confirm = jQuery("#pass2").val();

        matched = (password == confirm) ? true : false;
		if (password != ''){
           if(matched) { 
			  jQuery("#message").html("Passwords Match");
			  jQuery("#message").css({"background-color": "#DFF2BF", "color": "#4F8A10","padding": "3px","padding": "10px" ,"border-radius": "4px" });
			  jQuery("#message").addClass("glyphicon glyphicon-ok");		  
			  return false; 
            }else { 
				jQuery("#message").html("Passwords don't match..."); 
				jQuery("#message").css({"background-color": "#FFBABA", "color": "#D8000C","padding": "3px", "padding": "10px" ,"border-radius": "4px" });
				jQuery("#message").addClass("glyphicon glyphicon-remove");
				return false;
           }
		} else {
			
		}
});

jQuery("#profile-image").click(function() { // bCheck is a input type button
    var fileName = jQuery("#profile-image").val();

    if(fileName) { // returns true if the string is not empty
        alert(fileName + " was selected");
    } else { // no file was selected
        alert("no file selected");
    }
});
});

function menu_bootstrap() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(document).ready(function(){
    //$("#pids").hide();
        $("#p_visit").click(function(){
        if ($('input[name=p_visit]:checked').val() == "yes" ) {
			console.log('show');
            $("#pids").show();	
        }else {
            //$("#p_doc_names").slideUp("fast"); 
            $("#pids").hide();
			console.log('hide');
        }
     });
});

