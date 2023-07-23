<?php
    $conn = mysqli_connect('localhost', 'root', '', 'dropout');
    if(!$conn)
    {
        echo "error in connection";
    }
    if (isset($_POST['info1'])) {
       $rg_date = $_POST['rg_date'];
       $school = $_POST['school'];
       $s_name = $_POST['s_name'];
       $gr_no = $_POST['gr_no '];
       $age = $_POST['age'];
       $p_name = $_POST['p_name'];
       $p_cont = $_POST['p_cont'];
       $std = $_POST['std'];
       $gender = $_POST['gender'];
       $category = $_POST['category'];
       $state = $_POST['state'];
       $district= $_POST['district'];
      
$sql = "INSERT INTO `student_data`(`rg_data`, `school`, `s_name`, `gr_no`, `age`, 
`p_name`, `p_cont`, `std`, `gender`, `category`, `state`, `district`) VALUES ('$rg_data',
'$school','$s_name','$gr_no','$age','$p_name','$p_cont','$std','$gender','$category',
'$state','$district')";
echo"$sql";
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