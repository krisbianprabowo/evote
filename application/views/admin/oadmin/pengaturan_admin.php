<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					PENGATURAN ADMIN
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
						<a href="<?php echo site_url('admin/pengaturan'.$pengaturan->id)?>" class="m-nav__link">
							<span class="m-nav__link-text">
								Pengaturan Admin
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
							Pengaturan
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/proses_pengaturan', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']); 
			if (isset($pengaturan)){?>
				<div class="m-portlet__body">
					<div class="row">
						<?php $this->load->view('admin/pesan_notifikasi') ?>
					</div>
					<div class="form-group m-form__group row">
						<div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;">
							<img src="<?php echo $pengaturan->avatar?>" style="border-radius:50% !important;width:auto ;max-width: 250px;max-height: 250px"><br><br>
							<label class="font-weight-bold">Perbaharui Foto</label>
							<div class="row">
								<div class="col-lg-4">
								</div>
								<div class="col-lg-4">
									<input type="file" name="foto" class="inputfile">
								</div>
								<div class="col-lg-4"></div>
							</div>
						</div>
					</div>
					<input type="hidden" class="form-control m-input" id="nama_jurusan" name="id" value="<?php echo $pengaturan->id ?>">
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Username
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_jurusan" name="username" placeholder="Masukan Username" value="<?php echo $pengaturan->username ?>">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama 
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_jurusan" name="nama" placeholder="Masukan Nama" value="<?php echo $pengaturan->nama ?>">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Ubah Password
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="Password" class="form-control m-input" id="jumlah_kelas" name="password_baru" placeholder="Masukan Password Baru">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Masukan Password Lama (Sebagai Konfirmasi)
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="Password" class="form-control m-input" id="jumlah_kelas" name="password_lama" placeholder="Masukan Password Lama" >
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
				<?php }else { ?>
					<div class="m-portlet__body">
						<div class="row">
							<div class="col-lg-1">
								
							</div>
							<div class="col-lg-10 col-sm-12 text-center">
								<div class="m-alet m-alert--outline m-alert--outline-2x alert alert-danger" role="alert">
									<h2>Halaman Tidak Dapat Ditemukan, <br>
									Silahkan Reload Kembali Atau Buat Halaman Baru</h2>
								</div> 
							</div>
							<div class="col-lg-1">
							</div>
						</div>
					</div>
				<?php } ?>
			<?php echo form_close()?>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>
</div>

