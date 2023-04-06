<?php
    if(isset($_POST['update_behavior'])){
        require './dbh.inc.php';
        $behavior = $_POST['behavior'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="UPDATE prisoner SET Behavior = ? WHERE Prisoner_id = ?";
        $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $result=mysqli_query($conn,$sql2);
        $row=mysqli_fetch_assoc($result);
        $resultCheck=mysqli_num_rows($result);
        $stmt=mysqli_stmt_init($conn);
        if($resultCheck === 0){
            header("Location: ../behavior.php?error=sqlerror");
            exit();
        }elseif($row['Status_inout'] === 'OUT'){
            header("Location: ../behavior.php?error=outerror");
            exit();
        }else{
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"si",$behavior,$prisoner_id);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                header("Location: ../behavior.php?error=reserror");
                exit();
            }
            
            header("Location: ../behavior.php?error=success");
            exit();
        }

            
            
    }
    else{
        header("Location: ../failure.php");
        exit();
    }
    
?>