<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/images/favicon/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/images/favicon/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("/images/favicon/favicon.ico") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("/images/favicon/android-chrome-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/images/favicon/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("/images/favicon/site.webmanifest") }}">
    <link rel="mask-icon" href="{{ asset("/images/favicon/safari-pinned-tab.svg") }}" color="#0e0e0e">
    <link rel="shortcut icon" href="{{ asset("/images/favicon/favicon.ico") }}">
    <meta name="apple-mobile-web-app-title" content="Bumble Bees">
    <meta name="application-name" content="Bumble Bees">
    <meta name="msapplication-TileColor" content="#0e0e0e">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    

    <!-- Styles --> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" media="all">
    <!-- Styles -->
    <style>
        
        
    
    </style>
</head>
<body>
    
@include('components.header')

@yield('content')
  
@include('components.footer')
 
 
 
 <!-- Script -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 {{-- <script src="{{asset('vendor/jquery.min.js')}}"></script> --}}
 <!-- Bootstrap JS -->
 <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <!-- AOS js -->
 <script src="{{asset('vendor/aos-next/dist/aos.js')}}"></script>
 <!-- Slick Slider -->
 <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
 <!-- js Counter -->
 <script src="{{asset('vendor/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('vendor/jquery.waypoints.min.js')}}"></script>
 <!-- Fancybox -->
 <script src="{{asset('vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
 <!-- validator js -->
 <script src="{{asset('vendor/validator.js')}}"></script>

 <!-- Theme js -->
 <script src="{{asset('js/theme.js')}}"></script>

  <!-- Sceipt -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @turnstileScripts()



<script>

$.ajax({
    // Your AJAX configuration
    // ...
    success: function(response) {
        if (response.status === 'success') {
            // Display SweetAlert with the success message
            Swal.fire({
                title: 'Success!',
                text: response.message,
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            });
        } else {
            // Handle other cases if needed
        }
    },
    error: function(error) {
        // Handle errors if needed
    }
});
</script>

 </body>


        
    

    
   
</html>
