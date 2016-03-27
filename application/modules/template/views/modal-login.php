<script src="public/js/login/login.js" ></script>

<div class="modal fade" id="ventana1" role="dialog">
			  				<div class="modal-dialog" role="document">
			    				<div class="modal-content">
			     		 			<div class="modal-header">
			        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        					<h4 style="color: blue;text-align: center" class="glyphicon glyphicon-lock" id="myModalLabel" > Login</h4>
			      					</div>
			      					<div class="modal-body">
			        					<form role="form" action="<?php echo base_url()?>login/Val_User" method='POST' id='frm1' >
			        					<div class="row">
			        						<div class="col-lg-10 col-lg-offset-1">
			        							<div class="form-group">
								              		<label for="user"><span class="glyphicon glyphicon-user"></span> Usuario ó Email</label>
								              	<input name="usrname" type="text" class="form-control" id="usrname" placeholder="Usuario o 	email">
								            	</div>	
			        						</div>
								         </div>
								         <div class="row">
			        						<div class="col-lg-10 col-lg-offset-1">
								            	<div class="form-group">
								              	<label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
								              	<input name="psw" type="text" class="form-control" id="psw" placeholder="Contraseña">
								            	</div>
								         	</div>
								         </div>
								         <div class="row">
			        						<div class="col-lg-10 col-lg-offset-1">
			        						<div class="checkbox">
								              <label><input type="checkbox" value="" checked>Remember me</label>
								            </div>
			        						</div>
		        						</div>
		        						<div class="row">
			        						<div class="col-lg-5 col-lg-offset-1">
			        						<button type="button" class="btn btn-default btn-success btn-block" id="btn1"  ><span class="glyphicon glyphicon-off"></span> Login</button>
			        						</div>
		        						</div>
								            
								            
								            <input type="hidden" id="url" value="<?php echo base_url() ; ?>" >
								            
								          </form>
			     		 			</div>

			     		 		</div>
			     		 	</div>
			     		 </div>