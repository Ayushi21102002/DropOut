<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <title>Admission Process</title>
</head>

<style>
  .text-center{
    font-size: 30px;
    margin-top: 80px;
  }
  
</style>

<body style="
      background-image: url(img.png);
      background-repeat: no-repeat;
      background-size: cover;
    ">
  <div class="container-fluid" style="width: 100%">
    <div class="row">
    <form action="./fil_std.php" method="post">
      <div class="text-center">
       Please select the  standard for details of students.
      </div>
    </div>
    <div class="left-intrsution white;" style="margin-top: 100px; margin-left: 0px; text-align: left">
      
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-2" id="A">
          <h5 style="font-size: 22px;"><b>Select standard:</b></h5>
        </div>

        <div class="col-md-3">
          <select id="std" name="std" class="form-control">
            <option>--Select Standard--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
       
      
        <button type="submit" name="submit" class="btn btn-black" style=" width: 120px;
              border-radius: 15px;
              background-color: black;
              color: white;
              margin-left: 30px;
            ">
          SELECT
        </button>
        </form>

          
    </div>
  </div>
</body>

</html>