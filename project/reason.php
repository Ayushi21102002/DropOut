<!DOCTYPE html>
<html lang="en">
<?php
// $gr_no = $_GET['gr_no'];
?>
<head>
  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <!-- <link rel="stylesheet" href="admissionconfirm.css"> -->
  <title>Admission Process</title>
</head>

<style>
  .text-center{
    font-size: 30px;
    margin-top: 80px;
  }
  
</style>
<?php

?>
<body style="
      background-image: url(img.png);
      background-repeat: no-repeat;
      background-size: cover;
    ">
  <div class="container-fluid" style="width: 100%">
    <div class="row">
      <div class="text-center">
       Please select the  reason for dropout of student.
      </div>
    </div>
    <div class="left-intrsution white;" style="margin-top: 100px; margin-left: 0px; text-align: left">
    <form action="./fil_std.php" method="post">
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-2" id="A">
          <h5 style="font-size: 22px;"><b>Select Reason:</b></h5>
        </div>

        <div class="col-md-3">
          <select id="my_select" name="reason" class="form-control">
            <option>--Select Reason--</option>
            <option value="Poor health/Medical issues">Poor health/Medical issues</option>
            <option value="Poverty issues">Poverty issues</option>
            <option value="School Environment">School Environment</option>
            <option value="Child Labour">Child Labour</option>
            <option value="Poor Accessibility">Poor Accessibility</option>
            <option value="Lack of Interest">Lack of Interest</option>
            <option value="Accessive Academic Pressure From Shool Or Parents">
              Accessive Academic Pressure From Shool Or Parents
            </option>
            <option value="Bullying At School">Bullying At School</option>
            <!-- <option value="cf">Constant Failure</option> -->
            <option value="Retention">Retention</option>
            <option value="Others">Others</option>
          </select>
        </div>
       
      
        
        <button type="submit" name="conf1" class="btn btn-black" style="
              
              width: 120px;
              border-radius: 15px;
              background-color: black;
              color: white;
              margin-left: 30px;
            ">
          CONFIRM
        </button>
        </form>
    </div>
  </div>
</body>

</html>