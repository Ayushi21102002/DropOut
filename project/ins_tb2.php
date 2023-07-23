<?php

if (isset($_POST['conf1'])) {

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
       $reason = $row['reason'];

    $conn = mysqli_connect("localhost", "root", "", "dropout_db");
    $query = "INSERT INTO `dropout_students`(`s_name`, `gr_no`, `dob`, 
    `age`, `p_name`, `p_cont`, `std`, `gender`, `category`, `state`, `district`,
     `reason`) VALUES '$s_name','$gr_no','$dob','$age','$p_name','$p_cont',
     '$std','$gender','$category','$state','$district','$reason' WHERE gr_no ='$gr_no' ";
    $result = mysqli_query($conn, $query);
    
    // echo $query;
    if ($result) {
        // echo "sucess";
        // echo $password;
        ?>

        <script>
            alert('Successfully');
            window.location = "../trans_form/d2d_adm_conf.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('unSuccessfully');
            window.location = "./admission_Form.php";
        </script>
<?php
    }
}
// }
// }
mysqli_close($conn);
?>