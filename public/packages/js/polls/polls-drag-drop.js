$(document).ready(function(){
	
	$(".collapse .form-group").draggable({
			cursor: 'move',
			appendTo: "body",
			helper: "clone"
	});

	$( "#polls-generate" ).droppable({		
		activeClass: "ui-state-default",
		hoverClass: "ui-state-hover",	
		accept: ":not(.ui-sortable-helper)",	
		drop: function( event, ui ) {			
			$(this).append($(ui.draggable).clone());
		}
	}).sortable({		
		sort: function() {			
			connectWith : '#polls-generate .form-group',
			$( this ).removeClass( "ui-state-default" );
		}
	});

	$("#polls-generate").sortable();
})