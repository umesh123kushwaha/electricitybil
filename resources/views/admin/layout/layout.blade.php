<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('Page_title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/all.min.css">
  <!-- jsGrid -->
    <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin/layout/header')
@include('admin/layout/sidebar')
@yield('content')
@include('admin/layout/footer')
