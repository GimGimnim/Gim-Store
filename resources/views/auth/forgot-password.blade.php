<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<!-- <div class="modal fade" id="tyModal" role="dialog">
  <div class="modal-dialog">
    
  
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Forgot Password</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" style="padding:15px 50px;">
        <div class="text-wrap text-left d-flex align-items-center order-md-last">
          <div class="text w-100">
            <form method="post" action="forgotpassword.php">
              <div class="form-group" style="padding:20px 0px;">
                <label for="usrname"><span class="fa fa-user"></span> Email</label>
                <input type="email" class="form-control" name="emm" id="emm" placeholder="Enter your email" required>
              </div>
              <div style="padding:10px 0px;">
                <button type="submit" class="form-control btn btn-dark btn-block" id="submitt">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->