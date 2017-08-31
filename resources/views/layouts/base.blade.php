<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Linco | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <link rel="icon" type="image" href="<?= url('fotos/favicon.ico') ?>" />

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  @include('layouts.css')

  
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="document.getElementById('cargando').style. display='none';">

<div id="cargando" style="width: 100%; height: 100%; text-align: center"><img src="<?= url('fotos/Loading_icon.gif') ?>" alt=""></div>

<div class="wrapper">

  
  @include('layouts.header')

  <!-- Left side column. contains the logo and sidebar -->
 
  @include('layouts.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.header_content')

    <!-- Main content -->
    <section class="content">
     
      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('layouts.footer')

</div>
<!-- ./wrapper -->

@include('layouts.js')

</body>
</html>
