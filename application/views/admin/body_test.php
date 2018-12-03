<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					BANK SEKOLAH
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
								Penyetujuan Pembayaran
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="<?php echo site_url()?>admin/lihatbank" class="m-nav__link">
							<span class="m-nav__link-text">
								Daftar Bank Sekolah
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Tambah Bank
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
							Tambah Bank
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/prosestambahbank', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']) ?>
				<div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							No Rekening
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="no_rekening" name="no_rekening" placeholder="Masukan Nomor Rekening" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama Pemilik Rekening
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="atas_nama" name="atas_nama" placeholder="Masukan Jumlah Kelas">
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama Bank
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama_bank" name="nama_bank" placeholder="Masukan Jumlah Kuota Per Kelas" >
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Logo Bank
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="file" class="form-control m-input" id="logo_bank" name="logo_bank" placeholder="Masukan Jumlah Kuota Per Kelas" >
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


