
@include('body.head')

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  @include('body.header')
  @include('body.sidebar')
  <div class="content-wrapper">
	  <div class="container-full">

        @yield('master_admin')
	  </div>
  </div>
  <!-- /.content-wrapper -->

  @include('body.footer')
</div>
<!-- ./wrapper -->
  	
	 
</body>
</html>
