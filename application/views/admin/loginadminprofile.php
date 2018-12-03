<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.6.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Login Admin E-Vote
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="<?php echo site_url() ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo site_url() ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?php echo asset_url()?>img/logos/logo-tk-aba2.png" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<?php echo asset_url().'img/cover/bg-2.jpg'?>); ">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							
								<span class="h1 text-warning">E</span> <span class="h1 text-white"> - VOTE</span>
							
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
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
								<h3 class="text-center text-white">
									Masuk Sebagai Admin
								</h3>
							</div>

							<form class="m-login__form m-form" method="post" action="<?php echo site_url('admin/proses_login')?>" style="margin-top:-1rem">
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Username" name="username" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-info m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Masuk
									</button>
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-center m-login__form-center">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Lupa Password Akun?
										</a>
									</div>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Lupa Password ?
								</h3>
								<div class="m-login__desc">
									Masukan Nama Pengguna Admin untuk Me-reset Password:
								</div>
							</div>
							<form class="m-login__form m-form" method="post" action="<?php echo site_url('admin/proses_reset_NWE6EW3')?>" style="margin-top:-1rem">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Username" name="username" id="m_email" autocomplete="off">
								</div>
								<div class="form-group text-center">
				                    <small class="text-danger">Selesaikan Box(Captcha) di bawah ini untuk melanjutkan</small><br></small>
				                    <div class="g-recaptcha" align="center" data-sitekey="6LfE_WMUAAAAAH1MrAPHzI4ZckOSwqd7T7dCTfwD"></div>
				                 </div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
										Kirim
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
										Kembali
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="<?php echo site_url()?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo site_url()?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="<?php echo site_url()?>assets/snippets/pages/user/login.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
