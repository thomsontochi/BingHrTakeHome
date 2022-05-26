<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Developia Software Engineer">
    <title>Bing HR TakeHome</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.js"></script>
    <link href="/css/indexstyles.css" rel="stylesheet">
    <link href="/css/bing.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/all.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/all.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/duotone.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/duotone.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/light.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/light.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/regular.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/regular.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/solid.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/solid.min.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/thin.css">
    <link rel="stylesheet" href="/css/fontawesome-pro-6.1.0-web/css/thin.min.css">



</head>

<body>

    <main>

      
        @yield('content')

        
    </main>








    <script src=""
    <script>
        /* Sets the width of the sidebar
          to 250 and the left margin of the
          page content to 250 */
        function openNav() {
            document.getElementById(
                "sidebar").style.display = "block";
            document.getElementById(
                "form").style.marginLeft = "-1050px";
            document.getElementById(
                "open").style.display = "none";
            document.getElementById(
                "close").style.display = "block";
            document.getElementById(
                "main").style.width = "1650px";
            document.getElementById(
                "main").style.marginLeft = "0px";
        }

        /* Set the width of the sidebar
        to 0 and the left margin of the
        page content to 0 */
        function closeNav() {
            document.getElementById(
                "sidebar").style.display = "none";
            document.getElementById(
                "main").style.marginLeft = "0";
            document.getElementById(
                "main").style.width = "1850px";
            document.getElementById(
                "form").style.marginLeft = "-1150px";
            document.getElementById(
                "close").style.display = "none";
            document.getElementById(
                "open").style.display = "block";
        }
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closem")[0];
        var spann = document.getElementsByClassName("closemm")[0];


        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        spann.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    
</body>

</html>
