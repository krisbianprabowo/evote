<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Edit Menu
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
								Edit Menu
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
			
				<div class="m-portlet__body">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<a class="col-form-label btn btn-accent text-white col-lg-2 col-sm-12" href="<?php echo site_url('admin/tambahpengumuman')?>">
									<i class="flaticon-app"></i>
									Tambah Baru
								</a>
							</div>
							<table class=" m-datatable table-responsive" id="html_table">
								<thead >
									<tr>
										<th>
											Judul
										</th>
										<th >
											Kategori
										</th>
										<th>
											Penulis
										</th>
										<th >
											Terakhir Dimodifikasi
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($halaman as $halaman ){ 
					                    $judul = $halaman->judul;
					                    $url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));?>
					                    <tr>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                      <a href="<?php echo site_url()?>/admin/edit_halaman/<?php echo $halaman->id_halaman?>" class="col-md text-success text-d-none">
							                        <span ><?php echo $halaman->judul?></span>
							                      </a>
							                    </h6>
					                    	</td>
					                    	<td>
					                    		<span class="text-info font-weight-bold"><?php echo $halaman->nama_menu?></span>
					                    	</td>
					                    	<td>
					                    		<span class="text-danger"><?php echo $halaman->nama?></span>
					                    	</td>
					                    	<td>
					                    		<?php echo $halaman->tanggal_terakhir?>
					                    	</td>
					                    	<td>
							                    	<a href="<?php echo site_url()?>/admin/edit_halaman/<?php echo $halaman->id_halaman?>"><i class="la la-edit text-d-none"></i> Ubah</a> &nbsp;|&nbsp;
							                    	<a class="text-danger " href="<?php echo site_url()?>/admin/proseshapuspengumuman/<?php echo $halaman->id_halaman?>"> <i class="la la-trash text-d-none"></i> Hapus</a>&nbsp;|&nbsp;
							                    	<a class="text-info" target="_blank" href="<?php echo site_url()?>/home/lihatpengumuman/<?php echo $halaman->id_halaman."/"."$url"?>"><i class="la la-eye text-d-none"></i> Lihat</a>
					                    	</td>
					                	</tr>
					                  <?php } ?>
								</tbody>
							</table>

						
		              </div>
				</div>
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