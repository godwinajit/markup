jQuery(function($) {
	
	var $form = $('#donate-form');
	
	$("#step2-submit").click(function(e){
		e.preventDefault();
		if ($form.valid()) {
		$.ajax({
	          type: "POST",
	          url: '../app/src/getSafeSaveURL.php',
	          data : $("#donate-form").serialize(),
	          success: function(data){
	        	  $('#donate-form').attr('action', data);
	          },
	          error: function(jqxhr) {
	            $("#register_area").text(jqxhr.responseText); // @text = response error, it is will be errors: 324, 500, 404 or anythings else
	          }
	    });
		}
	});
	
	/*$("#step3-submit").click(function(e){
		e.preventDefault();
		$.ajax({
	          type: "POST",
	          url: '../app/safeSave/setSessionData.php',
	          data : $("#donate-form").serialize(),
	          success: function(data){
	        	  $('#donate-form').submit();
	          },
	          error: function(jqxhr) {
	            $("#register_area").text(jqxhr.responseText); // @text = response error, it is will be errors: 324, 500, 404 or anythings else
	          }
	    });
		
	});*/
	
	
});
