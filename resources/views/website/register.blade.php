<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('webiste') }}/assets//css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('webiste') }}/assets//css/all.min.css">
  <link rel="stylesheet" href="{{ asset('webiste') }}/assets//css/animate.css">
  <link rel="stylesheet" href="{{ asset('webiste') }}/assets//css/main.css">
  @livewireStyles
  <!-- <link rel="stylesheet" href="{{ asset('webiste') }}/assets//css/dark.css"> -->

  <link rel="shortcut icon" href="{{ asset('webiste') }}/assets//images/favicon.png" type="image/x-icon">

  <title>{{ $title ?? env('APP_NAME').' - Register' }}</title>


</head>

<body>

  <!-- ========== Login & Registation Section ========== -->
  <section class="log-reg">
    <div class="top-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <a wire:navigate href="{{ route('home') }}" class="backto-home"><i class="fas fa-chevron-left"></i> Back to {{env('APP_NAME')}}</a>
          </div>
          <div class="col-lg-7 ">
            <div class="logo">
              <img src="{{ asset('webiste') }}/assets//images/logo2.png" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="image">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
            <div class="section-header">
              <h2 class="title">
                Welcome to PEYAMBA
              </h2>
              <p>
                Let's create your profile! Just fill in the fields below, and
                we’ll get a new account.
              </p>
            </div>
            <livewire:website.auth.register />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Login & Registation Section ========== -->

  <!-- Modal -->
  <div class="modal fade" id="email-confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="top-img">
            <img src="{{ asset('webiste') }}/assets//images/c-image.png" alt="">
          </div>
          <div class="main-content">
            <h4 class="title">
              Check Your Inbox, Please!
            </h4>
            <p>
              A link to verify account has been sent to the email supplied. Please open the link and follow the prompts
              to verify
              email.
            </p>
            <p class="send-again">
              Didn't get e-mail? <a href="#">
                Send it again
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @livewireScripts
  <script src="{{ asset('webiste') }}/assets//js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('webiste') }}/assets//js/modernizr-3.6.0.min.js"></script>
  <script src="{{ asset('webiste') }}/assets//js/bootstrap.min.js"></script>
</body>


</html>