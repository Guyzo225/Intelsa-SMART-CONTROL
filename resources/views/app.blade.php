<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   @include('layout.nav')
</nav>
<div class="content-wrapper">
    <div class="container-fluid">


  @yield('content')



    </div>
    <footer class="sticky-footer">

        @include('layout.footer')


    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
</body>

</html>



