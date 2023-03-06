<?php
    if(isset($_POST['vuname'])){
        require './dbh.inc.php';
        $vuname = $_POST['vuname'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="INSERT INTO visit_approval(pid,vuname) VALUES (?,?)";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../leave_apply.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"is",$prisoner_id,$vuname);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                header("Location: ../leave_apply.php?error=reserror");
                exit();
            }
            
            header("Location: ../leave_apply.php?error=success");
            exit();
        }
    }
    else{
        header("Location: ../failure.php");
        exit();
    }
