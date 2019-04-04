
<!--
Author: fayaz nasrati
Author URL: https://www.facebook.com/fayaz.nasrati
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kabul Yoga Center</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Yoga " />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
  tinymce.init({ 
    selector:'textarea',
    plugins:'link',

});
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/css/style.css" type="text/css" media="all" />

</head>

<body>
 
  @include('inc.header')

  @include('inc.messages')

      @yield('content2')

  @include('inc.footer')
  
</body>

</html>
