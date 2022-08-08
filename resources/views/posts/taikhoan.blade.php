@extends('layout.trangchu')
@section('content')

<main id="main" class="">
			<div id="content" class="content-area page-wrapper" role="main">
				<div class="row row-main">
					<div class="large-12 col">
						<div class="col-inner">



							<div class="woocommerce">
								<div class="woocommerce-notices-wrapper"></div>
								<div class="account-container lightbox-inner">


									<div class="account-login-inner">

										<h3 class="uppercase">Đăng nhập</h3>

										<form class="woocommerce-form woocommerce-form-login login" method="post">


											<p
												class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span
														class="required">*</span></label>
												<input type="text"
													class="woocommerce-Input woocommerce-Input--text input-text"
													name="username" id="username" autocomplete="username" value="" />
											</p>
											<p
												class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="password">Mật khẩu&nbsp;<span
														class="required">*</span></label>
												<input class="woocommerce-Input woocommerce-Input--text input-text"
													type="password" name="password" id="password"
													autocomplete="current-password" />
											</p>


											<p class="form-row">
												<input type="hidden" id="woocommerce-login-nonce"
													name="woocommerce-login-nonce" value="b3ca92f339" /><input
													type="hidden" name="_wp_http_referer" value="/tai-khoan/" /> <button
													type="submit" class="woocommerce-Button button" name="login"
													value="Đăng nhập">Đăng nhập</button>
												<label
													class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
													<input
														class="woocommerce-form__input woocommerce-form__input-checkbox"
														name="rememberme" type="checkbox" id="rememberme"
														value="forever" /> <span>Ghi nhớ mật khẩu</span>
												</label>
											</p>
											<p class="woocommerce-LostPassword lost_password">
												<a href="lost-password/index.html">Quên mật khẩu?</a>
											</p>


										</form>
									</div><!-- .login-inner -->


								</div><!-- .account-login-container -->

							</div>


						</div><!-- .col-inner -->
					</div><!-- .large-12 -->
				</div><!-- .row -->
			</div>


		</main><!-- #main -->

@endsection
