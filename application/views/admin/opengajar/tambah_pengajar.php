<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Tambah Pengajar
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="<?php echo site_url()?>admin/dashboard" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="<?php echo site_url()?>admin/Penyetujuan Pembayaran" class="m-nav__link">
							<span class="m-nav__link-text">
								Kelola Pengajar
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="<?php echo site_url()?>admin/lihatbank" class="m-nav__link">
							<span class="m-nav__link-text">
								Tambah Pengajar
							</span>
						</a>
					</li>
				</ul>
			</div>
			 
		</div>
	</div>
	<!-- END: Subheader -->

	<div class="m-content">
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Tambah Data Pengajar
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/proses_tambahpengajar', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']); ?>
				<div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;">
							<img src="<?php echo asset_url()?>img/avatar/avatar-chef-2.png" id="output" style="border-radius:50% !important;width:auto ;max-width: 250px;max-height: 250px" ><br><br>
							<label class="font-weight-bold">Tambahkan Foto</label>
							<div class="row">
								<div class="col-lg-4">
								</div>
								<div class="col-lg-4">
									<input type="file" class="inputfile" accept="image/*" onchange="loadFile(event)" name="foto">
									<script>
									  var loadFile = function(event) {
									    var output = document.getElementById('output');
									    output.src = URL.createObjectURL(event.target.files[0]);
									  };
									</script>
								</div>
								<div class="col-lg-4"></div>
							</div>
						</div>
					</div>
					<input type="hidden" class="form-control m-input" id="nama_jurusan" name="id" placeholder="Masukan Nomor Rekening" >
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama 
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_jurusan" name="nama" placeholder="Masukan Nama Pengajar" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Jabatan
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="jumlah_kelas" name="jabatan" placeholder="Masukan Jabatan Pengajar" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Deskripsi
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<textarea class="form-control m-input" id="jumlah_kuota" name="deskripsi" placeholder="Deskripsikan Pengajar">
							</textarea>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Status
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<label class="custom-control custom-radio">
								<input type="radio" name="status" value="aktif" class="custom-control-input" checked="checked">
								<span class="custom-control-indicator"></span>
			                      <span class="custom-control-description">Aktif</span>
							</label>
							<label class="custom-control custom-radio">
								<input type="radio" name="status" value="tidak aktif" class="custom-control-input">
								<span class="custom-control-indicator"></span>
			                      <span class="custom-control-description">Tidak Aktif</span>
							</label>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							
						</label>
					</div>
				</div>
				
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-9 ml-lg-auto">
								<button type="submit" class="btn btn-accent">
									Kirim
								</button>
								<button type="reset" class="btn btn-secondary">
									Batal
								</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close()?>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>
</div>


