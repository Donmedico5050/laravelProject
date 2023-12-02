@include('header')


  <!-- Section -->
  <div class="section section-pad">
    <div class="container">
      <div class="tab-custom">
        <div class="row">



                                    </div>
        <div class="gaps size-2x"></div>
        <!-- Tab panes -->
        <div class="tab-content no-pd">

          <div class="tab-pane fade in active" id="tab2">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <h3 class="heading-lead center">Register An Account</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="form-results"></div>
                  <div class="form-group">
                                      <div class="form-field form-m-bttm">
                      <input  for="name" :value="__('Name')" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" type="text" placeholder="User Name *" class="form-control required" aria-required="true" required>
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-field form-m-bttm">
    <input  for="f_name" :value="__('Name')" id="f_name" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" type="text" placeholder="First Name *" class="form-control required" aria-required="true" required>
    <x-input-error :messages="$errors->get('f_name')" class="mt-2" />

  </div>
</div>
                  <div class="form-group">
                                      <div class="form-field form-m-bttm">
                      <input name ="l_name" value="" id="l_name" type="text" placeholder="Last Name *" class="form-control required" aria-required="true" required>
                    </div>
                  </div>

                  <div class="form-group">
                                      <div class="form-field form-m-bttm">
                      <input for="email" :value="__('Email')" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email *" class="form-control required email" aria-required="true" required>
                    </div>
                  </div>
                  <div class="form-group">
                                      <div class="form-field form-m-bttm">
                      <input  name ="phone" value="" id="phone" type="phone" placeholder="Phone *" class="form-control required email" aria-required="true" required>
                    </div>
                  </div>

                 <div class="form-group">
                                    <div class="form-field form-m-bttm">

                    <select class="form-control" name="country" id="country" required>
                        <option selected disabled value="">Choose Country</option>

                                              </select>
                  </div>
                </div>

                  <div class="form-group">
                                      <div class="form-field">
                      <input  for="password" :value="__('Password')" id="password"
                      type="password"
                      name="password"
                      required autocomplete="new-password"  type="password" placeholder="Password *" class="form-control required" aria-required="true" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="form-field">
                      <input for="password_confirmation" :value="__('Confirm Password')"id="password_confirmation"
                      type="password"
                      name="password_confirmation"
                      required autocomplete="new-password"  autocomplete="on" type="password" placeholder="Confirm Password *" class="form-control required" aria-required="true" required>
                    </div>
                  </div>

                                                  <div class="form-group">
                                      <div class="col-md-12">
                                      <div class="g-recaptcha" data-sitekey="6Lfs9u8lAAAAAIPCx8x9UkkRgAW5dwLuGO3fzn2Y"></div>
                                      </div>
                                  </div>
                                                                  <br>

                  <div class="form-group">
                    <div class="form-field">
                      <input type="checkbox" name="signup-term"> <span> I accept and agree with the<a href="terms.html">Terms & Conditions</a> and<a href="privacy.html">Privacy Policy</a>.</span>
                    </div>
                  </div>

                  <button type="{{ __('Register') }}" class="btn btn-alt" onclick="submitForm()"> Signup</button>
                  <div class="loader" id="loader"></div>
                  <span class="gaps"></span>
                  <p class="small">Already registered? <a class="switch-tab"  href="{{ route('login') }}" >Login here</a></p>
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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


@include('footer')

