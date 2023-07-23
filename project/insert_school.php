<?php
    $conn = mysqli_connect('localhost', 'root', '', 'dropout');
    if(!$conn)
    {
        echo "error in connection";
    }
    if (isset($_POST['info1'])) {
       $date = $_POST['date'];
       $school = $_POST['school'];
       $s_name = $_POST['s_name'];
       $s_add = $_POST['s_add'];
       $gr_no = $_POST['gr_no'];
       $dob = $_POST['dob'];
       $p_name = $_POST['p_name'];
       $p_no = $_POST['p_no'];
       $std = $_POST['std'];
       $gender= $_POST['gender'];
       $caste= $_POST['caste'];
       $reason = $_POST['reason'];
       

$sql = "INSERT INTO `saint_marry`(`date`, `school`, `s_name`, `s_add`, `gr_no`, `dob`, 
`p_name`, `p_no`, `std`, `gender`, `caste`, `reason`) VALUES ('$date','$school',
'$s_name','$s_add','$gr_no','$dob','$p_name','$p_no ','$std','$gender',
'$caste','$reason')";

            $r=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
            if ($r) {
                ?>
        
                <script>
                    alert('Successfully');
                    // window.location = "../trans_form/gmit_adm_conf.php?email=";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('unSuccessfully');
                    // window.location = "./admission_Form.php";
                </script>
        <?php
            }
        }
    mysqli_close($conn);
    
?>