<?php include(APPPATH."views/inc/header.php"); ?>

<style type="text/css">
	
</style>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<div style="list-style: none; background-color: #40a6ff" class="media">
							<div class="media-body" style="padding-left: 5px;">
								<p><h2 style="color: white;">WHEEL / TIRE INSTALLATION REPORT</h2></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 40px; padding-left: 20px;">
					<div class="col-md-12">
						<p style="color: #4d52ff">Latest Reports</p>
					</div>
				</div>
				<div class="datatable-scroll">
					<table class="table" id="main-datatable">
					    <thead style="background-color: #ecedec57">
					      <tr>
					        <th style="text-align: center;"><i style="margin-right: 8px;"></i>DATE</th>
					        <th><i style="margin-right: 8px;"></i>UNIT NUMBER</th>
					        <th><i style="margin-right: 8px;"></i>LOCATION</th>
					        <th><i style="margin-right: 8px;"></i>TECHNITIAN</th>
					        <th><i style="margin-right: 8px;"></i>TORQUE AMOUNT</th>
					        <th><i style="margin-right: 8px;"></i>2ND SIGNATURE</th>
					        <th class="text-center">COMMENT</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr id="table_row">
					        <td><a href="javascript:;" class="btn btn-success btn-sm legitRipple" data-toggle="modal" data-target="#modal_tyre" style="margin-right: 10px; background-color: #4ec88a">View</a><span>2019 Mar 30 (22:31:16)</span></td>
					        <td style="text-align: center;"><span>53467</span></td>
					        <td style="text-align: center;"><span>Carson, CA</span></td>
					        <td style="text-align: center;">John Smith</td>
					        <td style="text-align: center;">650 lbs</td>
					        <td style="text-align: center;">Bon Jones</td>
					        <td class="text-center"><i class="icon-checkmark3 mr-3 icon-2x" style="color: #526fff;"></i></td>
					      </tr>
					      <tr id="table_row">
					        <td><a href="javascript:;" class="btn btn-success btn-sm legitRipple" data-toggle="modal" data-target="#modal_photo" style="margin-right: 10px; background-color: #4ec88a">View</a><span>2019 Mar 30 (22:31:16)</span></td>
					        <td style="text-align: center;"><span>53467</span></td>
					        <td style="text-align: center;"><span>Carson, CA</span></td>
					        <td style="text-align: center;">John Smith</td>
					        <td style="text-align: center;">650 lbs</td>
					        <td style="text-align: center;">Bon Jones</td>
					        <td class="text-center"></td>
					      </tr>
					    </tbody>
				  	</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- -------------MODAL------------- -->
<div id="modal_tyre" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>

<?php include(APPPATH."views/inc/footer.php"); ?>

<script type="text/javascript">

    $('#upload_music_file').click(function(){
            if($("#file_link").css("display","block")){
                $("#file_link").css("display","none");
                $("#music_upload").css("display","block");
            }
        });
        $('#music_file_link').click(function(){
            if($("#file_link").css("display","none")){
                $("#file_link").css("display","block");
                $("#music_upload").css("display","none");
            }
        });

	$("#main-datatable").DataTable({
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 6 ]
	}],
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
	language: {
		search: '<span>Filter:</span> _INPUT_',
		searchPlaceholder: 'Type to filter...',
		lengthMenu: '<span>Show:</span> _MENU_',
		paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
	}
});

</script>


