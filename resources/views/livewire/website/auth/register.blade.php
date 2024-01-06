<div class="main-content">
    <form action="POST" wire:submit="register">
      <h4 class="content-title">Acount Details</h4>
      <div class="form-group">
        <label for="">Username*</label>
        <input type="text" wire:model="name" class="my-form-control" placeholder="Enter Your Usewrname">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label for="">Email Address*</label>
        <input type="email" wire:model="email" class="my-form-control" placeholder="Enter Your Email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label for="">Phone*</label>
        <input type="text" wire:model="phone" class="my-form-control" placeholder="Enter Your Phone Number">
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label for="">Password*</label>
        <input type="text" wire:model="password" class="my-form-control" placeholder="Enter Your Password">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <h4 class="content-title mt-5">Profile Details</h4>
      <div class="form-group">
        <label for="">Birthday*</label>
        <input type="date" wire:model="dob" class="my-form-control">
        @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <label for="">I am a*</label>
        <div class="option">
          <div class="s-input mr-3">
            <input type="radio" wire:model="gender" value="male" id="males1"><label for="males1">Man</label>
          </div>
          <div class="s-input">
            <input type="radio" wire:model="gender" value="female" id="females1"><label for="females1">Woman</label>
          </div>
        </div>
        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <button class="custom-button" type="submit" >Create Your Profile</button>
    </form>
  </div>