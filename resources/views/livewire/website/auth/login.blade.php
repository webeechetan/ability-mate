<div>
    <form method="POST" wire:submit="login">
        <div class="form-group">
          <label for="">Your Address</label>
          <input type="email" wire:model="email" class="my-form-control" placeholder="Enter Your Email">
          @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" wire:model="password" class="my-form-control" placeholder="Enter Your Password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <p class="f-pass">
          Forgot your password? <a href="#">recover password</a>
        </p>
        <div class="button-wrapper">
            @if(session()->has('error'))
                <div class="text-danger">
                    {{ session('error') }}
                </div>
            @endif
          <button type="submit" class="custom-button">Sign IN</button>
        </div>
        <div class="or">
          <p>OR</p>
        </div>
        <div class="or-content">
          <p>Sign up with your email</p>
          <a href="#" class="or-btn"><img src="{{ asset('webiste') }}/assets/images/google.png" alt=""> Sign Up with Google</a>
          <p class="or-signup">
            Don't have an account? <a href="{{ route('register') }}" wire:navigate>
              Sign up here
            </a>
          </p>
        </div>
      </form>
</div>
