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

//Event for onkeyup 
jQuery(document).ready(function(){
    $('body').on('keyup','#Hint', Hints);
});

//Using AJAX to get a live feed of suggestions on search up
function Hints(e){
    var str = e.val();
    
    if(str.length === 0){
        e.html('');
        return;
    }
    else{
        $.get( "Hints.php?q="+str, function( data ) {
            e.html(data);
        });
    }
}