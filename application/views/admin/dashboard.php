<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					DASHBOARD
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<!-- <li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Actions
							</span>
						</a>
					</li> -->
					
				</ul>
			</div>
			 
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<div class="row">
			<?php $info = $this->session->flashdata('info'); 
			if (!empty($info)){?>
				<?php $this->load->view('admin/pesan_notifikasi') ?>
				<div style="height: 3rem"></div>
			<?php }?>
		</div>
		<div class=row>
			<div class="col-xl-6">
				<!--begin::Portlet-->
					<div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="flaticon-interface-7"></i>
									</span>
									<h2 class="m-portlet__head-text" style="font-size:1.5rem">
										Di Panel Admin Web Profile TK Aba Wirobrajan 2
									</h2>
									<h2 class="m-portlet__head-label m-portlet__head-label--danger">
										<span class="m-portlet__head-icon">
											<i class="flaticon-confetti text-warning" ></i>
										</span>
										<span>
											Selamat Datang !
										</span>
									</h2>
								</div>
							</div>
						</div>
						<div class="m-portlet__body m--regular-font-size-lg1 text-justify">
							Panel Admin ini dapat digunakan untuk mengatur dan memberikan perubahan serta penambahan yang ada di dalam halaman <a href="">Web Profile TK ABA Wirobrajan 2 </a>.<br>
							Web Profile yang ditampilkan kepada pengunjung diharapkan dapat memuat informasi yang layak dan sesuai selaras dengan tujuan yang ingin dicapai.
						</div>
					</div>
					<div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi" style="margin-top:3rem" >
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption" >
								<div class="m-portlet__head-title" >
									<span class="m-portlet__head-icon">
										<i class="flaticon-clipboard"></i>
									</span>
									<h2 class="m-portlet__head-text" style="font-size:1.5rem">
										Tinjauan Data Web Profile
									</h2>
									<h2 class="m-portlet__head-label m-portlet__head-label--success" >
										<span class="m-portlet__head-icon">
											<i class="flaticon-notes text-white" ></i>
										</span>
										<span>
											Ringkasan
										</span>
									</h2>
								</div>
							</div>
						</div>
						<div class="m-portlet__body m--regular-font-size-lg1">
							<table class="table table-sm  table-hover">
								<tbody>
									<tr>
										<td style="width: 40%">
											<i class="flaticon-file-1"></i> Jumlah Halaman
										</td>
										<td style="width: 10%">
											<?php echo $jhalaman->jhalaman?>
										</td>
										<td style="width: 40%">
											<i class="flaticon-interface-8"></i> Menu
										</td>
										<td style="width: 10%">	
											<?php echo $jmenu->jnavbar_menu?>
										</td>
									</tr>
									<tr>
										<td>
											<i class="flaticon-profile-1"></i> Pengajar
										</td>
										<td>	
											<?php echo $jpengajar->jpengajar?>
										</td>
										<td>
											<i class="la la la-camera" style="font-size:1.5rem;color:#878787"></i> Media
										</td>
										<td>
											<?php echo $jmedia->jmedia?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
				<div class="col-xl-6">
					<div class="m-portlet" style="margin-top:1.2rem">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="flaticon-apps"></i>
									</span>
									<h2 class="m-portlet__head-text" style="font-size:1.5rem">
											Pintasan
									</h2>
								</div>
							</div>
						</div>
						<div class="m-portlet__body" >
							<div class="m-nav-grid m-nav-grid--skin-light">
								<div class="m-nav-grid__row">
									<a href="<?php echo site_url('admin/tambah_halaman')?>" class="m-nav-grid__item">
										<i class="m-nav-grid__icon flaticon-file"></i>
										<span class="m-nav-grid__text">
											Tambah Halaman Baru
										</span>
									</a>
									<a href="<?php echo site_url('admin/mod_cover')?>" class="m-nav-grid__item">
										<i class="m-nav-grid__icon flaticon-technology"></i>
										<span class="m-nav-grid__text">
											Edit Gambar Cover Web Profile
										</span>
									</a>
								</div>
								<div class="m-nav-grid__row">
									<a href="<?php echo site_url('admin/kelola_menu')?>" class="m-nav-grid__item">
										<i class="m-nav-grid__icon flaticon-share"></i>
										<span class="m-nav-grid__text">
											Kelola Menu
										</span>
									</a>
									<a href="<?php echo site_url('admin/kelola_pengajar')?>" class="m-nav-grid__item">
										<i class="m-nav-grid__icon flaticon-users"></i>
										<span class="m-nav-grid__text">
											Daftar Pengajar
										</span>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
		</div>
		</div>
		<!--end::Portlet-->				
	</div>
</div>
<!-- end:: Body -->
