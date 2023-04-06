<?php
    if(isset($_POST['vuname'])){
        require './dbh.inc.php';
        $vuname = $_POST['vuname'];
        $prisoner_id = $_POST['Prisoner_id'];
        $status = 'Not Approved';

        $sql="INSERT INTO visit_approval(pid,vuname,status) VALUES (?,?,?)";
        $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $result=mysqli_query($conn,$sql2);
        $row=mysqli_fetch_assoc($result);
        $resultCheck=mysqli_num_rows($result);
        $stmt=mysqli_stmt_init($conn);
        if($resultCheck === 0){
            header("Location: ../visit_apply.php?error=sqlerror");
            exit();
        }elseif($row['Status_inout'] === 'OUT'){
            header("Location: ../visit_apply.php?error=outerror");
            exit();
        }else{
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"iss",$prisoner_id,$vuname,$status);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                header("Location: ../visit_apply.php?error=reserror");
                exit();
            }
            
            header("Location: ../visit_apply.php?error=success");
            exit();
        }
    }
    else{
        header("Location: ../failure.php");
        exit();
    }
