<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="gmit.css">
    <title>Student dropout_from</title>
</head>

<body style="background-color: rgb(231, 231, 231);">
    <br class="container-fluid">
    <div class="text-center">
        <h2 class="headding5" style="color: #1c508c; font-size: 40px; margin-top: 35px;"> Student Dropout Details </h2>
    </div>
    </br>
    <div class="row" style="background-color: white; border-radius:10px; margin:20px; padding:20px; margin-top: 0px;">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-6">
               
                    <div class="form-group">
                        <label for="shdp">Date Referral Submitted</label>
                        <input type="text" class="form-control" placeholder="Date Referral Submitted " name="rg_date" />
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="st">School Name</label>
                    <input type="text" class="form-control" placeholder="School" name="school" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="st">Student Full Name</label>
                    <input type="text" class="form-control" placeholder="Student Full Name " name="s_name" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="shdp">G.R. Number </label>
                    <input type="tel" class="form-control" placeholder="GR No." name="s_add" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="shdp">Age </label>
                    <input type="tel" class="form-control" placeholder="Age" name="age"  />
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label for="st">Parent Name</label>
                    <input type="text" class="form-control" placeholder="Parent Name " name="paretname"  />
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cont">Standard</label>
                    <input type="tel" class="form-control" maxlength="10" placeholder="Student Standard" name="Standard" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn" >
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="transgender">Others</option>
                    </select>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="acont"> Parent Contact Number</label>
                        <input type="tel" class="form-control" maxlength="10" placeholder="  parent Contact Info" name="wpno" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cg">Category</label>
                        <select class="form-control" name="cg" id="cg">
                            <option value="">-- Select Category --</option>
                            <option value="gen">General</option>
                            <option value="sc">SC/ST</option>
                            <option value="obc">OBC</option>
                        </select>
                    </div>
                </div>
            </div>
        <!-- </div>x -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cont">Standard</label>
                    <input type="tel" class="form-control" maxlength="10" placeholder="Student Standard" name="Standard" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gn">Gender</label>
                    <select class="form-control" name="gn" id="gn">
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="transgender">Others</option>
                    </select>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="st">State</label>
                    <input type="text" class="form-control" placeholder=" State" name="State" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dis">District</label>
                    <input type="text" class="form-control" placeholder="District" name="District">
                </div>
            </div>
        </div>


        <div>
        <form action="./ins_student.php" method="post">
            <button id="submit" type="submit" name="info1" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
</form>
            <form action="./display.php" method="POST">
            <button id="submit" type="submit" name="info1" class="btn btn-primary" style="margin-top: 25px;">View details</details></button>
</form>        
        </div>



    </div>
    </div>
</body>

</html>