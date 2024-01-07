<div>
    <section class="breadcrumb-area profile-bc-area">
        <div class="container">
            <div class="content">
                <h2 class="title extra-padding">
                    Setting
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a wire:navigate href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        Setting
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->


    <!-- ========= Profile Section Start -->

    <section class="user-setting-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                              <button class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div> 
                                <span>My Profile</span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul class="links">
                                  <li>
                                      <a  class="active" href="user-setting.html">Profile Info</a>
                                  </li>
                                  <li>
                                      <a href="user-notification.html">Notifications</a>
                                  </li>
                                  <li>
                                      <a href="user-friend-request.html">Friend Requests</a>
                                  </li>
                                  <li>
                                      <a href="user-badges.html">Badges</a>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div> 
                                <span>
                                    Account
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-account-info.html">Account Info</a>
                                    </li>
                                    <li>
                                        <a href="user-change-pass.html">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="user-privicy-setting.html">Privacy Settings</a>
                                    </li>
                                    <li>
                                        <a href="user-verify-account.html">Verified account</a>
                                    </li>
                                    <li>
                                        <a href="user-close-account.html">Close Account</a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="icon">
                                    <i class="far fa-credit-card"></i>
                                </div> 
                                <span>
                                    Subscriptions & Payments
                                </span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                              </button>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a href="user-billing.html">Billing & Payout</a>
                                    </li>
                                    <li>
                                        <a href="user-plan.html">Upgrade Membership Plan</a>
                                    </li>
                                    <li>
                                        <a href="user-purchase.html">View Purchase History</a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-xl-8 col-md-7 ">
                    <div class="page-title">
                        Profile Info
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="profile-about-box">
                                <div class="top-bg"></div>
                                <div class="p-inner-content">
                                    <div class="profile-img">
                                        <img src="{{ asset('webiste') }}/assets/images/profile/profile-user.png" alt="">
                                        <div class="active-online"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="up-photo-card mb-30">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="content">
                                    <h4>
                                        Change Avatar
                                    </h4>
                                    <span>
                                        120x120p size minimum
                                    </span>
                                </div>
                            </div>
                            <div class="up-photo-card">
                                <div class="icon">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="content">
                                    <h4>
                                        Change Cover
                                    </h4>
                                    <span>
                                        1200x300p size minimum
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-info-box mt-30">
                        <div class="header">
                            About your Profile
                        </div>
                        <div class="content">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Type of problem</label>
                                        <select wire:model.change="disability_category_id">
                                            <option value="" >Select Type of problem</option>
                                            @foreach ($disability_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('disability_category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Type of challenge</label>
                                        <select id="" wire:model="disability_id">
                                            <option value=""  selected>Select Type of challenge</option>
                                            @foreach ($disabilities as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('disability_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Profile Name</label>
                                        <input type="text" placeholder="Profile Name" disabled value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Public Email</label>
                                        <input type="text" placeholder="Public Email" disabled value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <textarea name="" placeholder="Write a little description about you..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="my-input-box">
                                        <label for="">Country</label>
                                        <select wire:model.change="country_id">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="my-input-box">
                                        <label for="">State</label>
                                        <select wire:model.change="state_id">
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('state_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="my-input-box">
                                        <label for="">City</label>
                                        <select wire:model="city_id">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Birthday</label>
                                        <input type="date" disabled value="{{ auth()->user()->dob }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Occupation</label>
                                        <input type="text" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Status</label>
                                        <select name="" id="">
                                            <option value="">In a Relationship</option>
                                            <option value="">Single</option>
                                            <option value="">Marid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Birthplace</label>
                                        <input type="text" placeholder="Birthplace">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-info-box mt-30">
                        <div class="header">
                            Interests
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Favourite TV Shows</label>
                                        <textarea name="" placeholder="Favourite TV Shows"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Favourite Music Bands / Artists</label>
                                        <textarea name="" placeholder="Favourite Music Bands / Artists"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Favourite Movies</label>
                                        <textarea name="" placeholder="Favourite Movies"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Favourite Games </label>
                                        <textarea name="" placeholder="Favourite Games "></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Favourite Games </label>
                                        <textarea name="" placeholder="Favourite Games"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-info-box mt-30">
                        <div class="header">
                            Jobs & Education
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Title or Place</label>
                                        <input type="text" placeholder="Title or Place">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Year Started</label>
                                        <select name="" id="">
                                            <option value="">2014</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Year End</label>
                                        <select name="" id="">
                                            <option value="">2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Description</label>
                                        <textarea name="" id="" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Title or Place</label>
                                        <input type="text" placeholder="Title or Place">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Year Started</label>
                                        <select name="" id="">
                                            <option value="">2014</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-input-box">
                                        <label for="">Year End</label>
                                        <select name="" id="">
                                            <option value="">2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-input-box">
                                        <label for="">Description</label>
                                        <textarea name="" id="" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons  mt-30">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <button type="submit" class="custom-button" wire:click="saveChanges">Save Changes</button>
                        <button class="custom-button2">Discard All</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
