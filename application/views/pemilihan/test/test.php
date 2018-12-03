<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->

	<!-- END: Subheader -->
	<div class="m-content">
		<?php echo form_open_multipart('pilihkandidat/proses_voting', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']);?>
			<div class="row">
				<?php $info = $this->session->flashdata('info'); 
				if (!empty($info)){?>
					<?php $this->load->view('admin/pesan_notifikasi') ?>
					<div style="height: 3rem"></div>
				<?php }?>
			</div>
			<div class=row>
				<div class="col-xl-2"></div>
				<?php foreach($kandidat as $k){?>

				<!-- <input type="hidden" name="id_kandidat" value="<?php echo $k->id_kandidat?>">	 -->
				<div class="col-xl-4">
					<div class="m-portlet" style="margin-top:1.2rem">
						<div class="m-portlet__head">							
							<h1 class="m-portlet__head-text text-dark font-weight-bold" style="font-size:3.5rem;padding-top: 1.5rem">
								<center>
								<div class="circle" style="font-family: times"><?php echo $k->id_kandidat?></div>
								</center>
							</h1>
						</div>
						<div class="m-portlet__body text-center">
							<img src="<?php echo $k->foto?>" style="width:250px;height: 320px">
							<div class="text-dark font-weight-bold h2 mt-3"><?php echo $k->nama?></div>
						</div>
						<div class="m-portlet__foot m-portlet__foot text-center">
							<div class="m-form__actions m-form__actions">
									<a href="#konfirmasi<?php echo $k->id_kandidat?>" data-toggle="modal"><button type='button' class='btn btn-success text-white' style="border-radius: 360px"><i class="la la-check-circle" style="font-size:3.5rem"></i></button></a>
									<!-- <a href="<?php echo site_url('pilihkandidat/proses_voting/'.$k->id_kandidat)?>" class="btn btn-success text-white" style="border-radius: 360px">
										<i class="la la-check-circle" style="font-size:3.5rem" ></i>
									</a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Button trigger modal -->
				<div id="konfirmasi<?php echo $k->id_kandidat?>" class="modal fade" role="dialog">
				    <div class="modal-dialog">      
				        <?php echo form_open_multipart('pilihkandidat/proses_voting', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']);?>
				         	<div class="modal-content">
				                <div class="modal-header">
				                	<div class=" h4">Konfirmasi Pemilihan</div>
				                	<button type="button" class="close" data-dismiss="modal">&times;</button>
					             	
				            	</div>
				            	<div class="modal-body">
				       	    		<input type="hidden" name="id_kandidat" value="<?php echo $k->id_kandidat?>">
				              		<span class="h6" style="font-size: 1.2rem">Apakah anda yakin untuk memilih kandidat nomor <strong><?php echo $k->id_kandidat?> ?</strong></span>
				            	</div>
				            	<div class="modal-footer">
				             		<button type="submit" name="delete" class="btn btn-success"  style="border-radius: 360px"> Ya</button>
				              		<button type="button" class="btn btn-default" data-dismiss="modal"  style="border-radius: 360px"><span class="glyphicon glyphicon-remove-circle"></span> Kembali</button>
				            	</div>
				            </div>
				        <?php echo form_close()?>
				    </div>
				</div>

				<?php }?>
				<div class="col-xl-2"></div>

			</div>		
		<?php echo form_close()?>
			<!--end::Portlet-->				
	</div>
</div>
<!-- end:: Body -->

