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

        @include('partials._sideNav')

        @include('partials._sideNav2')

        <div class="bg-light" style="width:1850px;" id="main">
            <div class="row-lg-4">
                <header class="p-3 bg-light text-black" style="border-bottom:1px solid rgb(235, 234, 234) ;">
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center  justify-content-lg-start">
                            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black text-decoration-none">
                                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                            </a>

                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="#" class="nav-link text-black"
                                        style="font-size:20px;margin-left: -50px;">Users</a></li>
                                <li>
                                    <form class="nav-link text-black" style="font-size:15px;margin-left: 20px;">
                                        <input type="number" class="" placeholder="  Year"
                                            style="width:70px;border:1px solid rgb(197, 195, 195);border-radius: 3px;outline-style: none;">
                                    </form></a>
                                </li>
                                <li>
                                    <form class="nav-link text-black" style="font-size:15px;margin-left: 0px;">
                                        <input type="search" placeholder="  Search..." class=""
                                            style="width:200px;border:1px solid rgb(197, 195, 195);border-radius: 4px;border-top-right-radius:0px;border-bottom-right-radius: 0px;border-right: 0px;outline-style: none;"><button
                                            style="border:1px solid rgb(197, 195, 195);border-radius: 4px;background-color: white;border-top-left-radius:0px;border-bottom-left-radius: 0px;border-left: 0px;"><i
                                                class="fa-light fa-search"></i></button>
                                    </form></a>
                                </li>

                            </ul>
                            <div class="dropdon">
                                <button class="bg-light dropbtn"
                                    style="font-size:15px;color:black;border-style: none;margin-left: -50px;">
                                    Languages<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                                </button>
                                <div class="dropdon-content">
                                    <a href="#">English</a>
                                    <a href="#">Spanish</a>
                                    <a href="#">French</a>
                                </div>
                            </div>
                            <div class="dropdon">
                                <button class="bg-light dropbtn" style="font-size:15px;color:black;border-style: none;">
                                    Reports<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                                </button>
                                <div class="dropdon-content">
                                    <a href="#">Report 1</a>
                                    <a href="#">Report 2</a>
                                    <a href="#">Report 3</a>
                                </div>
                            </div>
                            <div class="dropdon">
                                <button class="bg-light dropbtn" style="font-size:15px;color:black;border-style: none;">
                                    Projects<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                                </button>
                                <div class="dropdon-content">
                                    <a href="#">Project 1</a>
                                    <a href="#">Project 2</a>
                                    <a href="#">Project 3</a>
                                </div>
                            </div>
                            <i class="fa-solid fa-envelope" style="padding:10px;font-size:16px;"></i>
                            <i class="fa-solid fa-bell" style="padding:10px;font-size:16px;"></i>
                            <i class="fa-solid fa-user" style="padding:10px;font-size:16px;"></i>



                        </div>
                    </div>
                </header>
                <header class="p-3 bg-light text-black" style="height:70px;">
                    <div class="container">
                        <a href="" style="margin-left: 800px"><button class="btn btn-success"
                                style="border-radius: 7px;;color:rgb(224, 224, 250);">View users</button></a>
                        <button id="myBtn" class="btn btn-success"
                            style="border-radius: 7px;margin-left: 930px;margin-top:-50px;color:rgb(224, 224, 250);">Add
                            user</button>
                        <div id="myModal" class="modal">

                            <!-- Modal content -->


                            <div class="modal-content">
                                <form style="width:auto;height:100%;">
                                    <div style="height:8%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);">
                                        <span style="font-size:18px;padding: 20px;">Add Users<span
                                                class="closem" style="margin-left: 85%;">&times;</span></span>
                                    </div>
                                    <div class="row" style="height:4%;width: 100%;"></div>
                                    <div class="row"
                                        style="height:9.6%;width: 100%;display: flex;align-items: center;">
                                        <div class="col-md-12"><input type="text"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="employerid" placeholder="  Employer ID*"></div>
                                    </div>
                                    <div class="row"
                                        style="height:9%;width: 100% ;display: flex;align-items: center;">
                                        <div class="col-md-6"><input type="text"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="firstname" placeholder="  First Name*"></div>
                                        <div class="col-md-6"><input type="text"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="lastname" placeholder="  Last Name*"></div>
                                    </div>
                                    <div class="row"
                                        style="height:9%;width: 100%;display: flex;align-items: center;">
                                        <div class="col-md-4"><input type="email"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="email" placeholder="  Email ID*"></div>
                                        <div class="col-md-4"><input type="number"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="phone" placeholder="  Mobile no"></div>
                                        <div class="col-md-4"><select type="text"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="role">
                                                <option value="">Select Role Type*</option>
                                                <option value="ceo and founder">CEO and Founder</option>
                                                <option value="team lead">Team Lead</option>
                                                <option value="employer">Employer</option>
                                                <option value="web developer">Web Developer</option>
                                                <option value="app designer">App Designer</option>
                                                <option value="hr">HR</option>
                                            </select></div>
                                    </div>
                                    <div class="row"
                                        style="height:9.6%;width: 100%;display: flex;align-items: center;">
                                        <div class="col-md-4"><input type="text"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="username" placeholder="  Username*"></div>
                                        <div class="col-md-4"><input type="password"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="password" placeholder="  Password*"></div>
                                        <div class="col-md-4"><input type="password"
                                                style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;"
                                                name="cpassword" placeholder="  Confirm Password*"></div>
                                    </div>
                                    <div class="row" style="height:5.6%;width: 100%;"></div>
                                    <div class="row"
                                        style="height:9.6%;width: 100%;display: flex;align-items: center;background-color: rgb(220, 234, 252);color: grey;font-size: 13px;">
                                        <div class="col-md-2">Module Permission</div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center">Read</div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center">Write</div>
                                        <div class="col-md-1 "></div>
                                        <div class="col-md-1 d-flex justify-content-center">Delete</div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row"
                                        style="height:9%;width: 100%;display: flex;align-items: center;border-bottom: 1px solid rgb(202, 201, 201);">
                                        <div class="col-md-2">Super Admin</div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="saread" value="saread"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="sawrite" value="sawrite"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="sadelete" value="sadelete"></div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row"
                                        style="height:9%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);border-bottom: 1px solid rgb(202, 201, 201);display: flex;align-items: center;">
                                        <div class="col-md-2">Admin</div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="aread" value="aread"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="awrite" value="awrite"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="adelete" value="adelete"></div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row"
                                        style="height:9.6%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);border-bottom: 1px solid rgb(202, 201, 201);display: flex;align-items: center;">
                                        <div class="col-md-2">Employer</div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="eread" value="eread"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="ewrite" value="ewrite"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1 d-flex justify-content-center"><input type="checkbox"
                                                name="edelete" value="edelete"></div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="foot"
                                        style="height:8%;width:100%;display: flex;align-items: center;"><button
                                            class="btn"
                                            style="margin-left: 80%;border-radius: 10px;background-color: #0a9cfd;width:90px;color: white;">Add
                                            User</button><span class="closemm"
                                            style="font-size:15px;margin-left: 20px;color:grey;font-weight: bold;">Cancel</span>
                                    </div>

                                </form>

                            </div>


                        </div>
                    </div>
            
                </div>
            

        </div>



        <div class="row-lg-8">

            <div class="bg-white col-lg-12"
                style="width:1020px;height:450px;margin-left: -1150px;margin-top: 140px;border:2px solid #7dadf7"
                id="form">


                <h2 style="padding-top: 20px;color:grey;"></h2>
                <span style="padding-top: 20px;color:grey;">@Copyright 2022<a
                        style="color: black; font-weight: bolder;"> BingHR.io</a></span>

            </div>
        </div>




    </main>





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
