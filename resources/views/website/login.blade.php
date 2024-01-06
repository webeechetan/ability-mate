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

  <title>{{ $title ?? env('APP_NAME').' - Login' }}</title>


</head>

<body>
  
    <!-- ========== Login & Registation Section ========== -->
    <section class="log-reg">
      <div class="top-menu-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <a href="index.html" class="backto-home"><i class="fas fa-chevron-left"></i> Back to {{ env('APP_NAME') }}</a>
            </div>
            <div class="col-lg-7 ">
              <div class="logo">
                <img src="{{ asset('webiste') }}/assets/images/logo2.png" alt="logo">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-end">
          <div class="image image-log">
          </div>
          <div class="col-lg-7">
            <div class="log-reg-inner">
              <div class="section-header inloginp">
                <h2 class="title">
                  Welcome to {{ env('APP_NAME') }}
                </h2>
              </div>
              <div class="main-content inloginp">
                <livewire:website.auth.login />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- ========== Login & Registation Section ========== -->
  
  
  
  
    <script src="{{ asset('webiste') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('webiste') }}/assets/js/bootstrap.min.js"></script>
  </body>


</html>