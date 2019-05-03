<?php include(APPPATH."views/inc/header.php"); ?>
<form id="add_client_music_form" method="POST" enctype="multipart/form-data">
            	<div class="modal-header">
		    		<div class="modal-title">
		    			
		    		</div>
		    	</div>
                <div class="modal-body">
                	<div class="form-check form-check-switchery form-check-inline">
						<label class="form-check-label">
							<input type="radio" id="music_file_link" name="addon-radio" class="form-check-input-styled-danger" checked data-fouc> &nbsp; TRAILER
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label class="form-check-label">
							POWER UNIT &nbsp;
                            <input type="radio" id="upload_music_file" name="addon-radio" class="form-check-input-styled-danger" data-fouc>
						</label>
					</div>
                    <div class="row" style="margin-top: 10px;" id="file_link">
                        <div class="col-md-12">
                        	<div class="row" style="text-align: center;">
                        		<div class="col-md-12">
                        			<h4>SELECT WHEEL POSITIONS YOU WORKED ON</h4>
                        		</div>
                        	</div>
                        	<li class="media">
                        		<div class="align-self-center ml-3">
		                            <input type="radio" id="" name="addon" class="form-check-input-styled-danger" checked data-fouc>
								</div>
					            <div class="media-body">
					              	<img src="http://localhost/wheel-tire/assets/images/placeholders/front.png" class="" width="300" height="150" alt="">
			              		</div>
				            	<div class="align-self-center ml-3">
		                            <input type="radio" id="" name="addon" class="form-check-input-styled-danger" checked data-fouc>
								</div>
							</li>
							<li class="media">
                        		<div class="align-self-center ml-3">
		                            <input type="radio" id="" name="addon1" class="form-check-input-styled-danger" checked data-fouc>
								</div>
					            <div class="media-body">
					              	<img src="http://localhost/wheel-tire/assets/images/placeholders/Capture.png" class="" width="300" height="150" alt="">
			              		</div>
				            	<div class="align-self-center ml-3">
		                            <input type="radio" id="" name="addon1" class="form-check-input-styled-danger" checked data-fouc>
								</div>
							</li>
                        </div>
                    </div>
                    <div class="row" id="music_upload" style="margin: 50px 0 40px 0; display: none;">
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-6 offset-md-3" style="margin-top: 40px; ">
                        	<h6>HOW MANY FOOT POUNDS DID YOU TIGHTED LUNG NUTS TO?</h6>
                    	</div>
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-2 offset-md-5">
                    		<input type="text" name="" id="" class="form-control">
                    	</div>
                    	<div class="col-md-3" style="text-align: left;">
                			<span style="font-family:arial black; color: gray; font-size: 20px;">lbs.</span>
                		</div>
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-3 offset-md-5">
                    		<input type="text" name="" id="" class="form-control" placeholder="Unit Number">
                    	</div>
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-3 offset-md-5">
                    		<input type="text" name="" id="" class="form-control" placeholder="Unit Name">
                    	</div>
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-3 offset-md-5">
                    		<select class="custom-select">
                                <option value="opt1"><span>Manager</span></option>
                                <option value="opt2">Worker</option>
                                <option value="opt3">Salesman</option>
                            </select>												
                    	</div>
                    </div>
                    <div class="row" style="text-align: center;">
                    	<div class="col-md-3 offset-md-5">
                    		<input type="text" name="" id="" class="form-control" placeholder="Comments">
                    	</div>
                    </div>
                    <div class="row" style="text-align: center; padding-top: 20px;">
                    	<div class="col-md-3 offset-md-5">
                    		<button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Submit</span>
                		</button>
                    	</div>
                    </div>
                    </div>
                </div>
            </form>
<?php include(APPPATH."views/inc/footer.php"); ?>