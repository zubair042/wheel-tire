<?php include(APPPATH."views/inc/header.php"); ?>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form id="add_client_music_form" method="POST" enctype="multipart/form-data">
					<div class="form-group mb-3 mb-md-2" style="text-align: center; margin-top: 20px;">
						<div class="form-check form-check-inline form-check-right">
							<label class="form-check-label">
								TRAILER
								<div class=""><span class=""><input type="radio" id="trailer_radio" class="form-check-input-styled-danger" name="radio-inline-right" checked="" data-fouc=""></span></div>
							</label>
						</div>
						<div class="form-check form-check-inline form-check-right">
							<label class="form-check-label">
								POWER UNIT
								<div class=""><span class="checked"><input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" name="radio-inline-right" data-fouc=""></span></div>
							</label>
						</div>
					</div>
					<div class="row" id="trailer_html" style="display: none;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="power_unit_html">
						<div class="col-md-12">
							<table align="center">
							  <!-- <tr>
							    <th>SELECT WHEEL POSITIONS YOU WORKED ON</th>
							  </tr>
							  <tr>
							    <td><input type="radio" id="power_unit_radio" class="form-check-input-styled-danger" name="radio-inline-right" data-fouc=""></td>
							    <td>Maria Anders</td>
							    <td>Germany</td>
							  </tr>
							  <tr>
							    <td>Centro comercial Moctezuma</td>
							    <td>Francisco Chang</td>
							    <td>Mexico</td>
							  </tr>
							  <tr>
							    <td>Ernst Handel</td>
							    <td>Roland Mendel</td>
							    <td>Austria</td>
							  </tr>
							  <tr>
							    <td>Island Trading</td>
							    <td>Helen Bennett</td>
							    <td>UK</td>
							  </tr>
							  <tr>
							    <td>Laughing Bacchus Winecellars</td>
							    <td>Yoshi Tannamuri</td>
							    <td>Canada</td>
							  </tr>
							  <tr>
							    <td>Magazzini Alimentari Riuniti</td>
							    <td>Giovanni Rovelli</td>
							    <td>Italy</td>
							  </tr> -->
							</table>
						</div>
					</div>
				    <div class="row" style="">
				    	<div class="col-md-12" style="text-align: center; margin-top: 40px; ">
				        	<h6>HOW MANY FOOT POUNDS DID YOU TIGHTED LUNG NUTS TO?</h6>
				    	</div>
				    </div>
				    <div class="row"">
				    	<div class="col-md-2 offset-md-5">
				    		<input type="text" name="" id="" class="form-control">
				    	</div>
				    	<div class="col-md-3" style="text-align: left;">
							<span style="font-family:arial black; color: gray; font-size: 20px;">lbs.</span>
						</div>
				    </div>
				    <div class="row" style="text-align: center;">
				    	<div class="col-md-4 offset-md-4">
				    		<input type="text" name="" id="" class="form-control" placeholder="Unit Number">
				    	</div>
				    </div>
				    <div class="row" style="text-align: center;">
				    	<div class="col-md-4 offset-md-4">
				    		<input type="text" name="" id="" class="form-control" placeholder="Your Name">
				    	</div>
				    </div>
				    <div class="row" style="text-align: center;">
				    	<div class="col-md-4 offset-md-4">
				    		<select class="custom-select">
				                <option value="Manager"><span>Manager</span></option>
				                <option value="Worker">Worker</option>
				                <option value="Salesman">Salesman</option>
				            </select>												
				    	</div>
				    </div>
				    <div class="row" style="text-align: center;">
				    	<div class="col-md-4 offset-md-4">
				    		<input type="text" name="" id="" class="form-control" placeholder="Comments">
				    	</div>
				    </div>
				    <div class="row" style="text-align: center; padding-top: 20px; padding-bottom: 20px;">
				    	<div class="col-md-12" style="text-align: center;">
				    		<button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Submit</span>
						</button>
				    	</div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>

<?php include(APPPATH."views/inc/footer.php"); ?>


<script type="text/javascript">
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