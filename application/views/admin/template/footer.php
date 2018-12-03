<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								 &copy; TK ABA Wirobrajan 2
							</span>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->    
    	<!--begin::Base Scripts -->
		<script src="<?php echo site_url()?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo site_url()?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Resources -->
		<script src="<?php echo site_url() ?>assets/demo/default/custom/header/actions.js" type="text/javascript"></script>
		<?php if(isset($dashboardjs)) {
			echo $dashboardjs;
		}else {
			echo"";
		} ?>

	<?php if(isset($datatable)) {
		echo $datatable;
	}else {
		echo"";
	} ?>


		
	</body>
	<!-- end::Body -->
</html>