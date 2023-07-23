<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> schooldropout login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./log.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(image.jpg); background-repeat:no-repeat; background-size:cover;"class="img img responsive``">
    <div class="container-fluid bg">
        <div class="row">
       
            <div class="col-md-4  col-sm-4 col-xs-12 "></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
    <form action="./filter.php" method="post">

            <fieldset class="form-container" style="border:1px solid black ; padding: 30px 60px; margin-top:20vh ;">
                <center>
                    <img src="bgremoved.png" alt="" srcset="" class="img img-responsive" style="width:25%;">
                    </center><br>
                <div class="form-group">
                    
                    <label for="email" style="font-weight:bolder; font-size: 18px;">Gov ID</label>
                    <input type="text" class="form-control" placeholder="Enter given government ID"
                        required />
                        
                </div>
                <br>
                <div class="form-group">
                    <label for="password1" style="font-weight: bolder; font-size: 18px;">Password</label>
                    <input type="text" class="form-control" placeholder="Password "
                        required />
                        
                </div>
                <div class="text" align="right" style=" margin-top: 5px;">
                    <a href="#" style="color: black; font-size: 15px;font-weight:bold;">Forgot Password?</a>
                </div>
                
                
                
                <button id="submit" type="submit" class="btn btn-success btn-black" style="margin-top: 25px ; width: 100%; border-radius: 10px; background-color: rgb(179, 147, 106); font-weight: bolder;">Login</button>


            </fieldset>
        </div>
        </div>



    </div>
</body>
</html>