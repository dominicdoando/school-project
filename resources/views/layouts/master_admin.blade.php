
@include('body.head')

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  @include('body.header')
  @include('body.sidebar')
  <div class="content-wrapper">
	  <div class="container-fluid pt-3">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ Session('message') }}
      </div>
        @yield('master_admin')
	  </div>
  </div>

  <!-- /.content-wrapper -->

  @include('body.footer')
</div>
<!-- ./wrapper -->
  	
	 
</body>
</html>
