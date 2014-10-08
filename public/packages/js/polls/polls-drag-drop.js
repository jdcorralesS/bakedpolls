$(document).ready(function(){
	
	var removeIntent = false; 

	$(".collapse .form-group").draggable({
		connectToSortable: "#polls-generate",		
        helper: "clone"        
	});	

	$( "#polls-generate" ).sortable({
        revert: true,
        placeholder: "portlet-placeholder ui-corner-all",                
        over: function () {
            removeIntent = false;
        },
        out: function () {
            removeIntent = true;
        },
        beforeStop: function (event, ui) {
            if(removeIntent == true){
                //ui.item.remove();   
            }
        }
    });

    $('#delete').droppable({
        over: function(event, ui) {                      
            if($(ui.draggable).hasClass("ui-sortable-helper")){
            	$(ui.draggable).remove();
            }
        }
    });

    
})