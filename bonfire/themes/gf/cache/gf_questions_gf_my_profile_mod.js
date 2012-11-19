$('#messages_date').datepicker({ dateFormat: 'yy-mm-dd'});

var bodyCharacterLimit = 500;
var subjectCharacterLimit = 150;

$('input#save').addClass("disabled");
$("input#save").attr('disabled','disabled');
$('#bodyRemainingCharacters').html(bodyCharacterLimit);  
$('#subjectRemainingCharacters').html(subjectCharacterLimit); 

	$('#msg_subject').bind('keyup', function(){  
        var charactersUsed = $(this).val().length;  
          
        if  (charactersUsed > 5) {
            $("input#save").removeClass("disabled"); 
            $("input#save").removeAttr('disabled','disabled'); 
        }
        if(charactersUsed > subjectCharacterLimit){  
            charactersUsed = subjectCharacterLimit;  
            $(this).val($(this).val().substr(0, subjectCharacterLimit));  
            $(this).scrollTop($(this)[0].scrollHeight);  
        }  
          
        var charactersRemaining = subjectCharacterLimit - charactersUsed;  
          
        $('#subjectRemainingCharacters').html(charactersRemaining);  
    });

      
    $('#msg_body').bind('keyup', function(){  
        var charactersUsed = $(this).val().length; 

        if  (charactersUsed > 5) {
            $("input#save").removeClass("disabled"); 
            $("input#save").removeAttr('disabled','disabled'); 
        }
        
        if(charactersUsed > bodyCharacterLimit){  
            charactersUsed = bodyCharacterLimit;  
            $(this).val($(this).val().substr(0, bodyCharacterLimit));  
            $(this).scrollTop($(this)[0].scrollHeight);  
        }  
          
        var charactersRemaining = bodyCharacterLimit - charactersUsed;  
         
        $('#bodyRemainingCharacters').html(charactersRemaining);  
    });

    // TimeAgo plugin 
    jQuery("abbr.timeago").timeago();

/*if( !('crop_comment' in CKEDITOR.instances)) {
	CKEDITOR.replace( 'crop_comment' );
}*/

	// AJAX CALL FOR SELECT BOX
    $("#variety").attr('disabled','disabled');
    // Add the disable state of the button
    $("input#crop_sumbit").addClass("disabled");
    $("input#crop_sumbit").attr('disabled','disabled');

	$("select#crop_crops").change( function() {		
		// Remove the disable state of the button
		$("input#crop_sumbit").removeClass("disabled"); 
		$("input#crop_sumbit").removeAttr('disabled','disabled');
		$("#variety").attr('disabled','disabled');
		//$("#result").html("<img src='../images/ajax-loader.gif' width='' height='' />");
		$.ajax({
			type: "POST",
			data: "data=" + $("select#crop_crops").val(),
			url:  "get_crop_var_list",
			success: function(msg){
				if (msg != ''){
					if ($("select#crop_crops").val() == 0) {
						// Add the disable state of the button
						$("input#crop_sumbit").addClass("disabled");
						$("input#crop_sumbit").attr('disabled','disabled');
						$("#variety").val(0);
						$("#variety").attr('disabled','disabled');
						$("#result").html('');
					}
					else {
						$("#variety").removeAttr('disabled');
						$("#variety").html(msg);
					}
				}
				else{
					$("#result").html('<em>No item result</em>');
				}
			}
		});
	});
$('#croffer_release_date').datepicker({ dateFormat: 'd M, yy'});
// $('#croffer_release_date').datepicker({ dateFormat: 'dd-mm-yy'});

//Disable the image input
$("#croffer_image").addClass("disabled").attr('disabled','disabled');
// Disable the submit button
$("input#save").addClass("disabled");
$("input#save").attr('disabled','disabled');
// If selected status changed, then enable te button
$("select#croffer_crop_id").change( function() {
	$("input#save").removeClass("disabled"); 
	$("input#save").removeAttr('disabled','disabled');
	// In case of 0 select, disable the button again
	if ($("select#croffer_crop_id").val() == 0) {
		$("input#save").addClass("disabled");
		$("input#save").attr('disabled','disabled');
	}
});	
// TimeAgo plugin 
    jQuery("abbr.timeago").timeago();

// Toggle form answer
$('#form-answer').hide(0);
$("#btn-answer").click(function () {
	$('#btn-answer').hide(0);
	// $("#form-answer").toggle("slow");
	$("#form-answer").show(0);

	$("#btn-answer-cancel").click(function () {
		$("#form-answer").hide(0);
		$('#btn-answer').show(0);
		// $("#form-answer").toggle("slow");
		
	});
}); 


