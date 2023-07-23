<?php
    $conn = mysqli_connect('localhost', 'root', '', 'dropout_db');
    if(!$conn)
    {
        echo "error in connection";
    }
    if (isset($_POST['conf1'])) {
         if(!empty($_POST['reason'])){
            // $gr_no=$_GET['gr_no'];

          $selected=$_POST['reason'];
        //   echo $selected;
        }
        // $gr_no = $_POST['gr_no'];
    //    echo $gr_no;
       

$sql = "INSERT INTO `reason_db`(reason) VALUES ('$selected') ";

             $r=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
            if ($r) {
                ?>
                <script>
                    alert('Successfully');
                    window.location ="./homepage.php?gr_no=<?php echo $gr_no; ?>" method="POST">
                </script>
            <?php
             } else {
             ?>
                 <script>
                    alert('unSuccessfully');
            window.location = "./admission_Form.php";
            </script>
        <?php
            }}
        
    mysqli_close($conn);
    
?>