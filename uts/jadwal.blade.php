<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body> 
@include('uts.header')
  <!--header-->
@include('uts.nav')
  <!--nav-->
  
@yield('contentuts2')
<!--content jadwal-->

@include('uts.footer')
<!--footer-->
  
