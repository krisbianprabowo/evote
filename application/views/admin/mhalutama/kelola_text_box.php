<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Tambah Halaman Baru
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
								Tambah Halaman Baru
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
							Buat dan Tambahkan Halaman Baru
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php echo form_open_multipart('admin/proses_textbox', ['class'=>'form-horizontal m-form m-form--fit m-form--label-align-right']) ?>
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
						<div class="col-lg-4 col-md-4 col-sm-12">
							<input type="text" class="form-control m-input" id="exampleInputEmail1" name="judulmisi" placeholder="Masukan Poin-poin Misi"  value="<?php echo $misi->nama_pengaturan?>">
							<span class="m--space-30"></span>
							<textarea class="summernote" name="isimisi"><?php echo $misi->isi?></textarea>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<input type="text" class="form-control m-input" id="exampleInputEmail1" name="judulkbm" placeholder="Masukan Detail KBM"  value="<?php echo $kbm->nama_pengaturan?>">
							<span class="m--space-30"></span>
							<textarea class="summernote" name="isikbm"><?php echo $kbm->isi?></textarea>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<input type="text" class="form-control m-input" id="exampleInputEmail1" name="judulvisi" placeholder="Masukan Poin-poin Visi"  value="<?php echo $visi->nama_pengaturan?>">
							<span class="m--space-30"></span>
							<textarea class="summernote" name="isivisi"><?php echo $visi->isi?></textarea>
						</div>

						<div id="colorpicker"></div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-form-label col-lg-3 col-sm-12">
							Kategori(Opsional)
						</label>
						<div class="col-lg-4 col-md-4 col-sm-12">
						</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-7 ml-lg-auto">
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
