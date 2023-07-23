<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="/CSS/display.css">
<script>
    $(document).ready(function() {
        $('#example').DataTable();  

    });
</script>
<style>
    p {
        font-weight: bold;
        font-size: 22px;
        /* border: 3px solid red; */
        display: block;
        width: 44.5%;
        text-align: center;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
    }
    #size {
        width:100px;
        height: 30px;
        /* font-size: 30px; */

    }
    
    
</style>

    <p>Student Information</p>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align: center;">
            <th>Index</th>
            
            <th>Student Name</th>
                <th>GR no.</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Parents Name</th>
                <th>Parents Contact</th>
                <th>STD</th>
                <th>Gender</th>
                <th>Category</th>
                <th>State</th>
                <th>District</th>
                <th>Dropout</th>
           </tr>
        </thead>
        <?php
                $con = mysqli_connect('localhost','root','','dropout_db');
                
                $cmd ="SELECT * FROM `student_data` where gender='male'";
                 $index = 0;
                $result = mysqli_query($con,$cmd);
                while($row = mysqli_fetch_array($result))
                  { 
            
    //    $rg_date = $row['rg_date'];
    //    $school = $row['school'];
    $s_name = $row['s_name'];
    $gr_no = $row['gr_no'];
    $dob=$row['dob'];
    $age = $row['age'];
    $p_name = $row['p_name'];
    $p_cont = $row['p_cont'];
    $std = $row['std'];
    $gender = $row['gender'];
    $category= $row['category'];
    $state= $row['state'];
    $district = $row['district'];
                 ?>
                        <tr> 
                            <td  scope="row"><?php echo $index = $index + 1 ;?></td>
                       
                            <!-- <td></td> -->
                            <td><?php echo $s_name;?></td>
                            <!-- <td></td> -->
                            <td><?php echo $gr_no;?></td>
                            <td><?php echo $dob;?></td>
                            <td><?php echo $age;?></td>
                          <td><?php echo $p_name;?></td>
                            <td><?php echo $p_cont;?></td>
                            <td><?php echo $std;?></td>
  
                            <td><?php echo $gender;?></td>
                            <td><?php echo $category;?></td>
                            <td><?php echo $state;?></td>
                            <td><?php echo $district;?></td>
                             
                        <td>
                        <form action="" method="POST">
                                <input type="hidden" name="email" value="<?php echo $gr_no; ?>" />
                                <center>
                                    <button type="submit" name="update" id="update" class="btn btn-success" style="text-align:'center';"><a>Add reason</a></button>
                                </center>
                            </form>
                        </td>
                         </tr>

              <?php
                  }
                  ?>

            </tbody>

       
        
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>