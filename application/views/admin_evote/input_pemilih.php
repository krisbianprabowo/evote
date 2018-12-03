<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Tambah Pemilih
					
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="<?php base_url()?>dashboard" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Olah Pemilih
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Tambah Pilihan Kandidat
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
							Input Data Kandidat Baru
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/simpan_pemilih', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']) ?>
				<div class="m-portlet__body">
					<div class="row">
						<div class="col-md-1"></div>
	                    <div class="col-md-10">
	                      <?php
	                          $info = $this->session->flashdata('info');
	                              if (!empty($info)){
	                                echo $info;
	                              }else {
	                              }?>
	                    </div>
		                <div class="col-md-1"></div>
		            </div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Nama
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="nama" name="nama" maxlength="50" required>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Tempat Lahir
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="tempat_lahir" name="tempat_lahir" maxlength="25" required>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Tanggal Lahir
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="date" class="form-control m-input" id="tanggal_lahir" name="tanggal_lahir" required>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Jenis Kelamin
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
								<label class="custom-control custom-radio">
									<input type="radio" name="jenis_kelamin" value="L" class="custom-control-input" checked="checked">
									<span class="custom-control-indicator"></span>
				                    <span class="custom-control-description">Laki-laki</span>
								</label>
								<label class="custom-control custom-radio">
									<input type="radio" name="jenis_kelamin" value="P" class="custom-control-input">
									<span class="custom-control-indicator"></span>
				                    <span class="custom-control-description">Perempuan</span>
								</label>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Address ETH
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="text" class="form-control m-input" id="address_eth" name="address_eth" maxlength="42" required>
						</div>
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
