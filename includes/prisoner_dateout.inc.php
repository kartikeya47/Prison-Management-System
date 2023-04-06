<?php
    if(isset($_POST['update_dateout'])){
        require'./dbh.inc.php';
        $out_date=$_POST['date_out'];
        $pid=$_POST['add_pid'];
        echo $out_date."<br>";
        echo $pid;

        if(empty($out_date)||empty($pid)){
            header("Location: ../prisoner_dateout.php?error=emptyfields");
            exit();

            }else{
                    $sql="UPDATE Prisoner SET Date_out='$out_date' WHERE Prisoner_id='$pid' ";
                    $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$pid' ";
                    $result=mysqli_query($conn,$sql2);
                    $row=mysqli_fetch_assoc($result);
                    $resultCheck=mysqli_num_rows($result);
                    if($resultCheck === 0){
                        header("Location: ../prisoner_dateout.php?error=sqlerror");
                        exit();
                    }elseif($row['Status_inout'] === 'OUT'){
                        header("Location: ../prisoner_dateout.php?error=outerror");
                        exit();
                    }
                    else{
                        mysqli_query($conn,$sql);
                        header("Location: ../prisoner_dateout.php?error=success");
                    
                        exit();
                    }
            }
            
            
        }else{
        header("Location: ../failure.php");
        exit();
        }
    







