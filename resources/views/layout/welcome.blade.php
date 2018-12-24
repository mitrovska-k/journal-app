
<!DOCTYPE html>

<html lang="en">

<head>


 <link rel="stylesheet" type="text/css" href="css/index.css">


 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
 <style>
     /* Footer */
     @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
     section {
         padding: 60px 0;
     }

     section .section-title {
         text-align: center;
         color: #007b5e;
         margin-bottom: 50px;
         text-transform: uppercase;
     }
     #footer {
         background: #323631
     }
     #footer h5{
         padding-left: 10px;
         padding-bottom: 6px;
         margin-bottom: 20px;
         color:#ffffff;
     }
     #footer a {
         color: #ffffff;
         text-decoration: none !important;
         background-color: transparent;
         -webkit-text-decoration-skip: objects;
     }
     #footer ul.social li{
         padding: 3px 0;
     }
     #footer ul.social li a i {
         margin-right: 5px;
         font-size:25px;
         -webkit-transition: .5s all ease;
         -moz-transition: .5s all ease;
         transition: .5s all ease;
     }
     #footer ul.social li:hover a i {
         font-size:30px;
         margin-top:-10px;
     }
     #footer ul.social li a,
     #footer ul.quick-links li a{
         color:#ffffff;
     }
     #footer ul.social li a:hover{
         color:#eeeeee;
     }
     #footer ul.quick-links li{
         padding: 3px 0;
         -webkit-transition: .5s all ease;
         -moz-transition: .5s all ease;
         transition: .5s all ease;
     }
     #footer ul.quick-links li:hover{
         padding: 3px 0;
         margin-left:5px;
         font-weight:700;
     }
     #footer ul.quick-links li a i{
         margin-right: 5px;
     }
     #footer ul.quick-links li:hover a i {
         font-weight: 700;
     }

     @media (max-width:767px){
         #footer h5 {
             padding-left: 0;
             border-left: transparent;
             padding-bottom: 0px;
             margin-bottom: 10px;
         }
     }

 </style>
</head>

<body>


@include('partials.nav-partials')
@include('layout.header')

@yield('content')
@include('partials.main-content')

@include('partials.footer-partials')
@include('partials.footer-fontscripts')

 </body>

</html>