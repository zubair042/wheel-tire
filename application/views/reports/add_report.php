<?php include(APPPATH."views/inc/header.php"); ?>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form id="trailer_powerunit" method="POST" enctype="multipart/form-data">
					<div class="form-group mb-3 mb-md-2" style="text-align: center; margin-top: 40px;">
						<div class="form-check form-check-inline form-check-right">
							<label class="form-check-label">
								<span class="font-weight-semibold">TRAILER</span>
								<div class=""><span class=""><input type="radio" id="trailer_radio" class="form-check-input-styled-danger" name="radio-inline-right" checked="" data-fouc=""></span></div>
							</label>
						</div>
						<div class="form-check form-check-inline form-check-right">
							<label class="form-check-label">
								<span class="font-weight-semibold">POWER UNIT</span>
								<div class=""><span class="checked"><input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" name="radio-inline-right" data-fouc=""></span></div>
							</label>
						</div>
					</div>
					<div class="row" style="margin-top: 40px;">
						<div class="col-md-6 offset-md-3" style="text-align: center;">
							<h5>SELECT WHEEL POSITION YOU WORKED ON</h5>
						</div>
					</div>
					<div class="row" id="trailer_html" style="display:none;margin-top: 10px;padding: 12px;">
						<div class="col-md-6 offset-md-3" style="background-color: #fafafa;">
							<li class="media">
								<div class="mr-3" style="margin-top: 47px;">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<span class="font-weight-bold text-primary" style="font-size: 15px;">LS</span>
											<input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" checked="" name="radio-inline1" data-fouc="">
										</label>
									</div>
								</div>

								<div class="media-body" style="text-align: center;">
								 	<img src="<?php echo base_url(); ?>assets/images/placeholders/fr1.png" class="" width="80%" height="120" alt="">
								</div>

								<div class="align-self-center ml-3">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled-danger" name="radio-inline1" data-fouc="">&nbsp;&nbsp; <span class="font-weight-bold text-primary" style="font-size: 15px;">RS</span>
										</label>
									</div>
								</div>
							</li>
							<li class="media">
								<div class="mr-3" style="margin-top: 47px;">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<span class="font-weight-bold text-primary" style="font-size: 15px;">LF</span>
											<input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" checked="" name="radio-inline" data-fouc="">
										</label>
									</div>
								</div>

								<div class="media-body" style="text-align: center;">
								 	<img src="http://localhost/wheel-tire/assets/images/placeholders/fr.png" class="" width="100%" height="120" alt="">
								</div>

								<div class="align-self-center ml-3">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled-danger" name="radio-inline" data-fouc="">&nbsp;&nbsp; <span class="font-weight-bold text-primary" style="font-size: 15px;">RF</span>
										</label>
									</div>
								</div>
							</li>
							<li class="media">
								<div class="mr-3" style="margin-top: 47px;">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<span class="font-weight-bold text-primary" style="font-size: 15px;">LR</span>
											<input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" name="radio-inline-r" data-fouc="" checked="">
										</label>
									</div>
								</div>

								<div class="media-body" style="text-align: center;">
									<img src="http://localhost/wheel-tire/assets/images/placeholders/fr.png" class="" width="100%" height="120" alt="">
								</div>

								<div class="align-self-center ml-3">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled-danger" name="radio-inline-r" data-fouc="">&nbsp;&nbsp; <span class="font-weight-bold text-primary" style="font-size: 15px;">RR</span>
										</label>
									</div>
								</div>
							</li>
								
						</div>
					</div>
					<div class="row" id="power_unit_html" style="margin-top: 10px;padding: 12px;">
							
						<div class="col-md-6 offset-md-3" style="background-color: #fafafa;">
							<li class="media">
								<div class="mr-3" style="margin-top: 47px;">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<span class="font-weight-bold text-primary" style="font-size: 15px;">LF</span>
											<input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" checked="" name="radio-inline" data-fouc="">
										</label>
									</div>
								</div>

								<div class="media-body" style="text-align: center;">
								 	<img src="http://localhost/wheel-tire/assets/images/placeholders/fr.png" class="" width="100%" height="120" alt="">
								</div>

								<div class="align-self-center ml-3">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled-danger" name="radio-inline" data-fouc="">&nbsp;&nbsp; <span class="font-weight-bold text-primary" style="font-size: 15px;">RF</span>
										</label>
									</div>
								</div>
							</li>
							<li class="media">
								<div class="mr-3" style="margin-top: 47px;">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<span class="font-weight-bold text-primary" style="font-size: 15px;">LR</span>
											<input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" name="radio-inline-r" data-fouc="" checked="">
										</label>
									</div>
								</div>

								<div class="media-body" style="text-align: center;">
									<img src="http://localhost/wheel-tire/assets/images/placeholders/fr.png" class="" width="100%" height="120" alt="">
								</div>

								<div class="align-self-center ml-3">
									<div class="form-check form-check-inline form-check-right">
										<label class="form-check-label">
											<input type="radio" class="form-check-input-styled-danger" name="radio-inline-r" data-fouc="">&nbsp;&nbsp; <span class="font-weight-bold text-primary" style="font-size: 15px;">RR</span>
										</label>
									</div>
								</div>
							</li>
								
						</div>
					</div>
				    <div class="row">
				    	<div class="col-md-12" style="text-align: center; margin-top: 40px; ">
				        	<h5>HOW MANY FOOT POUNDS DID YOU TIGHTED LUNG NUTS TO?</h5>
				    	</div>
				    </div>
				    <div class="row" style="padding: 15px">
				    	<div class="col-md-12">
				    		
					    <div class="row"">
					    	<div class="col-md-2 offset-md-5">
					    		<div class="input-group">
									<input type="text" name="" id="" class="form-control">
									<span class="input-group-append">
										<span class="input-group-text" style="font-family:arial black; color: gray; font-size: 20px;">lbs.</span>
									</span>
								</div>
					    	</div>
					    </div>
					    <div class="row" style="margin-top: 10px;">
					    	<div class="col-md-2 offset-md-5">
					    		<input type="text" name="" id="" class="form-control" placeholder="Unit Number">
					    	</div>
					    </div>
					    <div class="row" style="margin-top: 10px;">
					    	<div class="col-md-2 offset-md-5">
					    		<input type="text" name="" id="" class="form-control" placeholder="Your Name">
					    	</div>
					    </div>
					    <div class="row" style="margin-top: 10px;">
					    	<div class="col-md-2 offset-md-5">
					    		<select class="custom-select">
					                <option value="Manager"><span>Manager</span></option>
					                <option value="Worker">Worker</option>
					                <option value="Salesman">Salesman</option>
					            </select>												
					    	</div>
					    </div>
					    <div class="row" style="margin-top: 10px;">
					    	<div class="col-md-2 offset-md-5">
					    		<input type="text" name="" id="" class="form-control" placeholder="Comments">
					    	</div>
					    </div>
					    <div class="row" style="text-align: center;margin:30px 0;">
					    	<div class="col-md-12" style="text-align: center;">
					    		<button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Submit</span>
							</button>
					    	</div>
					    </div>
				    </div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>



<?php include(APPPATH."views/inc/footer.php"); ?>


<script type="text/javascript">
	$('.form-check-input-styled-danger').uniform({
            wrapperClass: 'border-danger-600 text-danger-800'
        });

	$('#trailer_radio').click(function(){
        if($("#trailer_html").css("display","block")){
            $("#trailer_html").css("display","none");
            $("#power_unit_html").css("display","block");
        }
    });
    $('#power_unit_radio').click(function(){
        if($("#trailer_html").css("display","none")){
            $("#trailer_html").css("display","block");
            $("#power_unit_html").css("display","none");
        }
    });
</script>