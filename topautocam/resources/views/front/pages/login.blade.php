@extends('front.layouts.app')

@section('content')

<div id="primary" class="site-primary has-sidebar">
    <div class="uk-container uk-container-small">
        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-expand">
                <main id="main" class="site-main">
                    <div class="inner uk-position-relative">
                        <article class="page type-page">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="u-columns col2-set" id="customer_login">
                                        <div class="u-column1 col-1">
                                            <h2>Login</h2>
                                            <form class="woocommerce-form woocommerce-form-login login" method="post">
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="username">Username&nbsp;
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value=""> </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Password&nbsp;
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce">
                                                    <input type="hidden" name="_wp_http_referer" value="/wordpress/my-account/">
                                                    <button type="submit" class="woocommerce-Button button" name="login" value="Log in">Log in</button>
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                                        <span>Remember me</span>
                                                    </label>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>

                                        <!--
                                        <div class="u-column2 col-2">
                                            <h2>Register</h2>
                                            <form method="post" class="woocommerce-form woocommerce-form-register register">
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Email address&nbsp;
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">
                                                </p>
                                                <div class="woocommerce-privacy-policy-text">
                                                    <p>
                                                        Being our partner will grant you access to some restrict information such as price, 
                                                        and some other. Your membership must be approved first.
                                                    </p>
                                                </div>
                                                <p class="woocommerce-FormRow form-row">
                                                    <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce">
                                                    <input type="hidden" name="_wp_http_referer" value="#">
                                                    <button type="submit" class="woocommerce-Button button" name="register" value="Register">Register</button>
                                                </p>
                                            </form>
                                        </div>
                                        -->
                                    
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection