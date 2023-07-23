<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(image.jpg); background-size: cover; background-repeat: no-repeat; display:block; height: 100%; width: 100%; background-position: initial;">
    <div class="container-fluid">
        <h2 class="py-3 text-center">
            <!-- <div class="row1 py-3" style="margin-top: 25px;">
                <img class="img img-responsive" src="logo12.png" style="width: 10%; ">
                <img class="img img-responsive" src="logoname.png" style="width:50%;">
            </div> -->
        </h2>
        <div class="row " style="background-color: #1c508c;">
            <div class="col" style="padding: 0; margin: 0 ; font-size: 20px;  ">

                <nav class="navbar navbar-expand-sm">
                    <img class="img img-responsive" src="logowht.png" alt="" style="width: 5%; margin-left:35px;">
                    <img class="img img-responsive" src="txtwht.png" alt="" style="width:17%;">
                    <!-- <p style="color: white; font-size:10px; margin-left:10px; float: left;">Education Department <br> School Dropout Analysis</p> -->
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbarcontent"
                        aria-controls="mynavbarcontent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbarcontent">
                       
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item" style="margin-right: 50px; margin-top: 0;  ">
                                <a href="" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item" style="margin-right: 50px; margin-top: 0;  ">
                                <a href="./about.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item" style="margin-right: 50px; margin-top: 0;  ">
                                <a href="./dropoutreg.php" class="nav-link">Registration</a>
                            </li>
                            <li class="nav-item dropdown" style="margin-right: 100px; margin-top:0;">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="items">Login</a>
                             <div class="dropdown-menu" style="background-color: black;">
                               <a href="./loginschool.php" class="dropdown-item" style="color: white;">School</a>
                               <a href="./govlogin.php" class="dropdown-item" style="color:white;">Government</a>
                               
                             </div>
                           </li>
                            
                        </ul>
                    </div>
                </nav>
                
            </div>
        </div>
        <center>
        <h1 style="margin-top:130px; color:#1c508c; font-size:70px; ">WELCOME!</h1>
        <p style="font-size:30px; color:black;">Education breeds confidence. Confidence breeds hope. Hope breeds peace.</p>
        </center>
    </div>


</body>

</html>