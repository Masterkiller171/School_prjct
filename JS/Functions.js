//When user clicks on edit an input field will appear
function showin(){
jQuery(document).ready(function(){
    jQuery("#show").live("click", function(event) {        
         jQuery("#content").toggle("show");
    });
});  
}

//Function for checking if only one check is checked
function checkbut(){
    $('.subject-list').on('change', 
            function() {
		    $('.subject-list').not(this).prop('checked', false);  
		});
}


