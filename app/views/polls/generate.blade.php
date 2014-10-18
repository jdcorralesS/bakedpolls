@extends('template.html')

@section('css')							
	@parent
	{{HTML::style('packages/js/jquery-ui/themes/base/jquery.ui.all.css')}}
	{{HTML::style('packages/js/highslide/highslide/highslide.css')}}
@stop

<style type="text/css">
	body{
		overflow: hidden;
	}
	#polls-generate { 
		height: 80%; 
		overflow-y: auto; 		
		overflow-x: hidden;
	}		
	.portlet-placeholder { 
		border: 1px dotted black; 
		line-height: 2.2em; 
		margin: 0 1em 1em 0; 
		height: 2.5em; 
		width: 90%;
	}
	.ui-draggable:hover,
	.ui-draggable > label:hover{
		cursor: move;
	}
	.highslide{
		cursor: pointer;
	}
</style>

@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="border-right: solid 1px black;">
				<form method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<legend>Form title</lcssend>
					</div>					
					<div id='polls-generate'>						
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="panel-group" id="accordion">					
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
					      	<h4 class="panel-title">
					        	<a data-toggle="collapse" data-parent="#accordion" href="#text_field">
					          		Campos de texto
					        	</a>
					      	</h4>
				    	</div>
				    	<div id="text_field" class="panel-collapse collapse in">
					      	<div class="panel-body">
					      		<form class="form-horizontal" role="form">
						      		<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Texto</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									    </div>
									</div>
						        	<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									    </div>
									</div>
									<div class="form-group">
									    <label for="inputPassword3" class="col-sm-2 control-label">			Password
									    </label>
									    <div class="col-sm-10">										    
									    	<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
										</div>
									</div>
								</form>
					      	</div>
				    	</div>
				  	</div>
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				          			Collapsible Group Item #2
				        		</a>
				      		</h4>
				    	</div>
					    <div id="collapseTwo" class="panel-collapse collapse">
						    <div class="panel-body">
						        <div class='highslide' url="http://bakedpolls.dev/" width="700" height="500">Hola mundo</div>
						    </div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
				    			<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				          			Collapsible Group Item #3
				        		</a>
				    		</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
					    	<div class="panel-body">
				    			
				    		</div>
						</div>
					</div>
				</div>				
				<div id="delete">
					<span class="glyphicon glyphicon-trash" style="font-size: 5em;"></span>					
				</div>				
			</div>		
		</div>
	</div>
@stop
@section('js')							
	@parent	
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.core.js')}}
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.widget.js')}}
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.mouse.js')}}
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.draggable.js')}}
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.droppable.js')}}
	{{HTML::script('packages/js/jquery-ui/ui/jquery.ui.sortable.js')}}
	{{HTML::script('packages/js/highslide/highslide/highslide-full.js')}}
	{{HTML::script('packages/js/highslide/highslide/highslide-with-gallery.js')}}	
	{{HTML::script('packages/js/polls/polls-drag-drop.js')}}
@stop
