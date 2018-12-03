<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					ATUR PENGUMUMAN
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
								Atur Pengumuman
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
							Ubah dan Tambah Pengumuman/Berita
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<?php if (isset($pengajar)){?>
				<div class="m-portlet__body">
					<div class="row">
						<?php $info = $this->session->flashdata('info'); 
						if (!empty($info)){?>
							<?php $this->load->view('admin/pesan_notifikasi') ?>
						<?php }?>
					</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<a class="col-form-label btn btn-accent text-white col-lg-2 col-sm-12" href="<?php echo site_url('admin/tambah_pengajar')?>">
									<i class="flaticon-app"></i>
									Tambah Pengajar
								</a>
							</div>
							<table class=" m-datatable table-responsive" id="html_table">
								<thead >
									<tr>
										<th>
											#
										</th>
										<th >
											Nama Pengajar / Guru
										</th>
										<th>
											Jabatan
										</th>
										<th>
											Deskripsi
										</th>
										<th>
											Status
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pengajar as $pengajar ){ ?>
					                    <tr>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                        <img src="<?php echo $pengajar->foto?>" width="40" style="border-radius:50%">
							                      </a>
							                    </h6>
					                    	</td>
					                    	<td>
					                    		<h6 class="text-truncate">
						                    		<a href="<?php echo site_url('admin/edit_pengajar/').$pengajar->id?>" class="col-md">
						                    		<span class="text-info "><?php echo $pengajar->nama?></span>
						                    		</a>
					                    		</h6>
					                    	</td>
					                    	<td>
					                    		<span class="text-primary font-weight-bold"><?php echo $pengajar->jabatan?></span>
					                    	</td>
					                    	<td>
					                    		<?php echo $pengajar->deskripsi?>
					                    	</td>
					                    	<td><?php if($pengajar->status=="aktif"){?>
					                    		<span class="text-success font-weight-bold">
					                    		<?php echo $pengajar->status?></span>
					                    		<?php }else {?>
					                    		<span class="text-danger font-weight-bold">
					                    		<?php echo $pengajar->status?></span>
					                    		<?php } ?>
					                    	</td>
					                    	<td>
							                    	<a href="<?php echo site_url('admin/edit_pengajar/').$pengajar->id?>"><i class="la la-edit text-d-none"></i> Ubah</a> &nbsp;|&nbsp;
							                    	<a class="text-danger " href="<?php echo site_url()?>/admin/proseshapuspengumuman/<?php echo $pengajar->id?>"> <i class="la la-trash text-d-none"></i> Hapus</a>&nbsp;&nbsp;
					                    	</td>
					                	</tr>
					                  <?php } ?>
								</tbody>
							</table>

						
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
				<!-- <div class="m-portlet__foot ">
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
				</div> -->
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>
</div>