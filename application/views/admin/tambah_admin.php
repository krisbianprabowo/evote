<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Tambah Admin
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
						<a href="<?php echo site_url()?>admin/tambah_admin" class="m-nav__link">
							<span class="m-nav__link-text">
								Tambah Admin
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
							Tambah Pengguna Admin
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/proses_tambahadmin', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']); ?>
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
							Username
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_jurusan" name="username" placeholder="Masukan Username" v>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama 
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_jurusan" name="nama" placeholder="Masukan Nama" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Password
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="Password" class="form-control m-input" id="jumlah_kelas" name="password" placeholder="Masukan Password">
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


