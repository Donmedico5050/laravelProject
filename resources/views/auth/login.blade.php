
@include('header')


<style>
  .help-block{
    color: #e42727 !important;
  }
</style>
<!-- Section -->
<div class="section section-pad">
  <div class="container">
    <div class="tab-custom">
      <div class="row">



                                  </div>
      <div class="gaps size-2x"></div>
      <!-- Tab panes -->
      <div class="tab-content no-pd">
        <div class="tab-pane fade in active" id="tab1">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <h3 class="heading-lead center">Login Your Account</h3>



			  <form method="POST" action="{{ route('login') }}">
				@csrf

                <div class="form-results"></div>
                <div class="form-group">
                                    <div class="form-field form-m-bttm">
                    <input for="email" :value="__('Email')" id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email *" class="form-control required email" value=""aria-required="true">
                  </div>
                </div>
                <div class="form-group">
                                    <div class="form-field">
                    <input  for="password" :value="__('Password')" id="password"
					type="password"
					name="password"
					required autocomplete="current-password" placeholder="Password *" class="form-control required" aria-required="true">
                  </div>
                </div>

                                                <div class="form-group">
                                    <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6Lfs9u8lAAAAAIPCx8x9UkkRgAW5dwLuGO3fzn2Y"></div>
                                    </div>
                                </div>
                                                                <br>
                <button type="{{ __('Log in') }}" class="btn btn-alt" onclick="submitForm()">Log In</button>
                <span class="gaps"></span>


                <div class="row mt-3" style="display: flex;">
                  <div class="col-6" style="width: 50%;">
                    <a  href="{{ route('password.request') }}">
<small>Forgot password?</small></a>
                  </div>
                  <div class="col-6 text-right" style="width: 50%;">
                    <a href="register.html" class="text-light"><small>Create new account</small></a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>
<!-- End Section -->
<!-- Start Profile Authentication Area -->
<script src='../www.google.com/recaptcha/api.js'></script>


 @include('footer')
