$(document).ready(function(){
	
	var removeIntent = false; 
    var content;        

	$(".collapse .form-group").draggable({
		connectToSortable: "#polls-generate",		        
        helper: "clone"
	});	

	$( "#polls-generate" ).sortable({
        revert: true,
        placeholder: "portlet-placeholder ui-corner-all",        
        deactivate: function(event, ui){            
            var url;
            var Class = $(ui.item).find('.form-control').attr('class');

            url = 'http://bakedpolls.dev/generate_options/'+Class;

            $(ui.item).find('.form-control').addClass("highslide");
            $(ui.item).find('.form-control').attr('url', url);          
            $(ui.item).find('.form-control').attr('width', 700);            
            $(ui.item).find('.form-control').attr('height', 500);            
            $(ui.item).find('.form-control').attr('opacity', 0.5);

            $(".collapse .form-group .form-control").removeClass('highslide');
        }        
    });

    $('#delete').droppable({
        over: function(event, ui) {                      
            if($(ui.draggable).hasClass("ui-sortable-helper")){                
                content = $(ui.draggable).html();
                removeIntent = true;
                $(ui.draggable).html('<div class="glyphicon glyphicon-recycle" style="font-size: 3em; margin-right: -100em; padding-right: -45em; position: initial;"></div>');               
            }
        },
        out: function( event, ui ) {
            if($(ui.draggable).hasClass("ui-sortable-helper")){
                removeIntent = false;
                $(ui.draggable).html(content);            
            }
        },
        deactivate: function( event, ui ) {
            if($(ui.draggable).hasClass("ui-sortable-helper")){
                if(removeIntent === true){
                    $(ui.draggable).remove();                    
                }
            }  
        }
    });

    $(".highslide").live('click',function(){        

        var width           = $(this).attr('width');
        var height          = $(this).attr('height');
        var opacity         = $(this).attr('opacity');
        var preserveContent = $(this).attr('preserveContent');
        var url             = $(this).attr('url');

        if(!width){
            width = ($(window).width() - ($(window).width()*0.05));
        }

        if(!height){
            height = ($(window).height() - ($(window).width()*0.05));
        }

        if (!opacity){
            opacity = 0;
        }

        if (preserveContent !== "true") {
            preserveContent = false;
        }       

        hs.showCredits =  false;        
        hs.htmlExpand(this, {
            graphicsDir      : 'packages/js/highslide/highslide/graphics/',            
            outlineType      : 'rounded-white',                       
            wrapperClassName : 'draggable-header',
            preserveContent  : preserveContent,
            objectType       : 'iframe',            
            align            : 'center',
            width            : width,
            height           : height,
            dimmingOpacity   : opacity,
            src              : url
        });       
    });    
})