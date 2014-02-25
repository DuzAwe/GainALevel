$( "#add1" ).click(function() {
			$(".set-squat fieldset").append('<div class="row x"><div class="large-4 columns"><div class="row collapse"><div class="small-12 columns"><input type="text" placeholder="Weight" /></div></div></div><div class="large-4 columns"><div class="row collapse"><div class="small-12 columns"><input type="text" placeholder="Reps" /></div></div></div><div class="large-4 columns"><div class="row collapse"><div class="small-8 columns"><input type="text" placeholder="Sets" /></div><div class="small-4 columns"><a href="#"><span class="postfix radius">Remove Set</span></a></div></div></div></div>');
	    
		});
	
		$(".row").on("click", ".set .x a", function() {
       		event.preventDefault();
	   		$(this).parent().parent().parent().parent().remove(); 
		});

$( "#add2" ).click(function() {
			$(".set-bench fieldset").append('<div class="row x"><div class="large-4 columns"><div class="row collapse"><div class="small-12 columns"><input type="text" placeholder="Weight" /></div></div></div><div class="large-4 columns"><div class="row collapse"><div class="small-12 columns"><input type="text" placeholder="Reps" /></div></div></div><div class="large-4 columns"><div class="row collapse"><div class="small-8 columns"><input type="text" placeholder="Sets" /></div><div class="small-4 columns"><a href="#"><span class="postfix radius">Remove Set</span></a></div></div></div></div>');
	    
		});
	
		$(".row").on("click", ".set .x a", function() {
       		event.preventDefault();
	   		$(this).parent().parent().parent().parent().remove(); 
		});