<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Edit Halaman
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
								Olah Halaman
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Edit Halaman
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
							Edit Dalam Halaman Ini
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/proses_edithalaman', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']); 
				if (isset($halaman)){?>

					<div class="m-portlet__body">
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
	                    <input type="hidden" name="id_halaman" value="<?php echo $halaman->id_halaman ?>">
						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Judul
							</label>
							<div class="col-lg-7 col-md-7 col-sm-12">
								<input type="text" class="form-control m-input" id="exampleInputEmail1" name="judul" placeholder="Enter post title" value="<?php echo $halaman->judul ?>">
								<input type="hidden" name="id_user" value="<?php echo $this->session->id_admin ?>">
							</div>
						</div>
						<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Gambar Cover
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<input type="file" class="form-control m-input" id="exampleInputEmail1"name="media" placeholder="Enter post title">
						</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Content
							</label>
							<div class="col-lg-9 col-md-7 col-sm-12">
								<textarea class="summernote" name="konten"><?php echo $halaman->konten?></textarea>
							</div>
						</div>
						<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Kategori Menu <?php echo $halaman->kategori_menu?>
						</label>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<?php foreach($kategori as $k){?>
								<label class="custom-control custom-radio">
									<input type="radio" name="kategori" value="<?php echo $k->id_menu?>" class="custom-control-input" <?php if ($k->id_menu == $halaman->kategori_menu){ echo 'checked="checked"';}else echo '';?>>
									<span class="custom-control-indicator"></span>
				                    <span class="custom-control-description"><?php echo $k->nama_menu?></span>
								</label>
							<?php } ?>
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