<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<!-- 
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><span class="fa fa-lock"></span> Login</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body" style="padding:25px 50px;">
            <div class="text-wrap text-left d-flex align-items-center order-md-last">
              <div class="text w-100">
                <form method="post" action="login.php">
                  <div class="form-group">
                    <label for="usrname"><span class="fa fa-user"></span> Username or Email</label>
                    <input type="text" class="form-control" name="username" id="usrname" placeholder="Enter username or email" required>
                  </div>
                  <div class="form-group" style="padding:10px 0px;">
                    <label for="psw"><span class="fa fa-eye"></span> Password</label>
                    <input type="password" class="form-control" autocomplete="off" name="passwordd" id="psw" placeholder="Enter password" required>
                  </div>
                  <div style="padding:10px 0px;">
                    <button type="submit" class="form-control btn btn-dark btn-block" id="register"><span class="fa fa-power-off"></span> Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <div class="text-wrap text-center d-flex align-items-center order-md-last">
              <div class="text w-100">
                <p>Not a member? <a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target=
                  "#nyModal">Sign Up</a></p>
                <a class="link-secondary text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#tyModal">Forgot Password?</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div> -->