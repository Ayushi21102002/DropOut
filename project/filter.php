<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <title>Filteration</title>
</head>

<body style="
      background-image: url(img.png);
      background-repeat: no-repeat;
      background-size: cover;
    ">
    <div class="container">
        <center>
            <p style="margin-top: 50px; font-size:30px;">Filter the data as per requirement.</p>
        </center>
        <div class="row" style="margin-top: 100px;">

            <div class="col-md-1">
                <label style="float: left; margin-right:40px; font-size:18px;">SELECT STATE:</label>
            </div>
            <div class="col-md-3">
                <span style="display:block; overflow:hidden;">
                    <select id="my_select" class="form-control">
                        <option>--Select State--</option>
                        <option value="guj">Gujarat</option>
                        <option value="raj">Rajasthan</option>
                    </select>
            </div>
            </span>



            <div class="col-md-4">
                &nbsp;
            </div>
            <div class="col-md-1">
                <label style="float: left;  font-size:18px;">SORT BY:</label>
            </div>
            <div class="col-md-3">
                <span style="display:block; overflow:hidden;">
                    <select id="my_select" class="form-control">
                        <option>--Filter By--</option>
                        <option value="chart_age.php">Age</option>
                        <option value="">Gender</option>
                        <option value="">Category</option>
                        <option value="">Area</option>
                        <option value="">Reasons</option>

                    </select>
            </div>
            </span>
        </div>

        <!-- <center> <div class="button-group" role="group">
            <form action="./filter_age.php" method="post">
                <button id="submit" type="submit" name="info1" class="btn btn-primary" style="margin-top: 25px;">Data</button>
            </form> -->


<center>
            <form action="./chart_age.php" method="post">
                <button id="submit" type="submit" name="info1" class="btn btn-primary" style="margin-top: 25px; width:100px; border-radius:10px;">Chart</button>
            </form>
</center>
    </div>
    </center> </div>

</body>

</html>