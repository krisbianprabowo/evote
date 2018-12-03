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
			
				<div class="m-portlet__body">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<div class="col-lg-12 ">
									<div class="form-group m-form__group row align-items-center float-right">
										<div >
											<div class="m-input-icon m-input-icon--left">
												<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
												<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
												</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<table class="m-datatables m-table m-table--head-bg-success" id="html_table">
								<thead >
									<tr>
										<th>
											Id Menu
										</th>
										<th>
											Nama Menu
										</th>
										<th>
											Link Menu
										</th>
										<!-- <th>
											Aksi
										</th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($menu as $menu){ 
					                   ?>
					                    <tr>
					                    	<?php if($menu->link!='profile/pengajar'){?>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                      <a href="<?php echo site_url()?>admin/edit_menu/<?php echo $menu->id_menu?>" class="col-md text-success">
							                        <span ><?php echo $menu->id_menu?></span>
							                      </a>
							                    </h6>
					                    	</td>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                      <a href="<?php echo site_url()?>admin/edit_menu/<?php echo $menu->id_menu?>" class="col-md text-info">
							                        <span ><?php echo $menu->nama_menu?></span>
							                      </a>
							                    </h6>
					                    	</td>
					                    	<?php }else{ ?>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                      <a href="<?php echo site_url()?>admin/kelola_pengajar" class="col-md text-success">
							                        <span ><?php echo $menu->id_menu?></span>
							                      </a>
							                    </h6>
					                    	</td>
					                    	<td>
					                    		<h6 class="text-truncate mb-0">
							                      <a href="<?php echo site_url()?>admin/kelola_pengajar" class="col-md text-info">
							                        <span ><?php echo $menu->nama_menu?></span>
							                      </a>
							                    </h6>
					                    	</td>
					                    	<?php } ?>
					                    	<td>
					                    		<?php if($menu->link=="disabled"){?>
					                    		<span class="text-danger font-weight-bold">
					                    		<?php echo $menu->link?></span>
					                    		<?php }else {?>
					                    		<span class="text-success font-weight-bold">
					                    		<?php echo $menu->link?></span>
					                    		<?php } ?>
					                    	</td>
					                    	<!-- <td>
							                    	<a href="<?php echo site_url()?>/admin/editpengumuman/<?php echo $menu->id_menu?>"><i class="la la-edit text-d-none"></i> Ubah</a> &nbsp;|&nbsp;
							                    	<a class="text-danger " href="<?php echo site_url()?>/admin/proseshapuspengumuman/<?php echo $menu->id_menu?>"> <i class="la la-trash text-d-none"></i> Hapus</a>&nbsp;
					                    	</td> -->
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