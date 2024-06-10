<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


<!-- <div class="modal fade" id="nyModal" role="dialog">
      <div class="modal-dialog">
      
        
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><span class="fa fa-user"></span> Sign Up</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body" style="padding:15px 50px;">
            <div class="text-wrap text-left d-flex align-items-center order-md-last">
              <div class="text w-100">
                <form method="post" action="signup.php" id="formgg">
                  <div class="form-group">
                    <label for="emailAddress"><span class="fa fa-mail"></span> Email</t><p id="txt"></p></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                  </div>
                  <div class="form-group" style="padding:5px 0px;">
                    <label for="usrname"><span class="fa fa-user"></span> Username</t><p id="txtHint"></p></label>
                    <input type="text" class="form-control" autocomplete="off" name="username" id="username" placeholder="Enter username" required>
                  </div>
                  <div class="form-group" style="padding:5px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Password</label>
                    <input type="password" class="form-control" autocomplete="off" name="password" id="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div id="message">
                    <p><b>Password must contain the following:</b></p>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum of <b>8 characters</b></p>
                  </div>
                  <div class="form-group" style="padding:5px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Confirm Password</label>
                    <input type="password" class="form-control" autocomplete="off" name="cpassword" id="pswd" placeholder="Confirm password" required>
                  </div>
                  <div style="padding:10px 0px;">
                    <button type="submit" id= "submit" class="form-control btn btn-dark btn-block" disabled="disabled">Sign Up</button>
                  </div>
                </form>
                  
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <div class="text-wrap text-center d-flex align-items-center order-md-last">
              <div class="text w-100">
                <p>Have an account? <a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div> -->