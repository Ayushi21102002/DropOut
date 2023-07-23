<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./gmit.css ">
    <title>School Registration</title>
</head>

<body style="background-color: lightgray">
    <div class="container-fluid">
        <div class="text-center" style="margin-top: 20px;">
            <h1 style="font-size:45px;  color: #1c508c;">School Registration Form</h1>
        </div>

        <div class="row" style="background:white; border-radius:10px; margin:15px; padding: 15px; margin-top: 25px;">
            <div class="row">
                <div class="col-md-6">
                <form action="./insert.php" method="post">
              <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" class="form-control" placeholder=" Enter School Name" name="s_name" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Index Number</label>
                        <input type="number" class="form-control" placeholder="Enter school index number" name="index_id"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Address</label>
                        <input type="text" class="form-control" placeholder="Enter School Address" name="s_add" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Email-Id</label>
                        <input type="email" class="form-control" placeholder="Enter school email-id" name="email"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" placeholder="Enter Your State" name="state" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" class="form-control" placeholder="Enter Your District" name="district"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Registration Date</label>
                        <input type="date" class="form-control" placeholder="Enter school Registration date" name="reg_date" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Start Year</label>
                        <input type="" class="form-control" placeholder="Enter school start Year" name="start_year"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Landline Number</label>
                        <input type="tel" class="form-control" placeholder="Enter landline number" name="landline_no" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="tel" class="form-control" placeholder="Enter  Mobile number" name="mo_no"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>School Website Address</label>
                        <input type="url" class="form-control" placeholder="Enter School Website Address" name="web_add" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UDISE Code
                        </label>
                        <input type="tel" class="form-control" placeholder="Enter FAX number" name="udise"
                            required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>FAX Number</label>
                        <input type="text" class="form-control" placeholder="Enter SVS Code" name="fax" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>SVS Code</label>
                        <input type="text" class="form-control" placeholder="Enter UDISE code" name="svs"
                            required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jsc">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" name="password">
                        </div>
                    </div>
                </div>
                <div>
                    <button id="submit" type="submit" name="ins1" class="btn btn-primary">Register</button>
               
    </form>
 </div>
            </div>







        </div>
    </div>
</body>

</html>