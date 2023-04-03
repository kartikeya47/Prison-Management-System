<?php
    if(isset($_POST['IPC'])){
        require './dbh.inc.php';
        $IPC = $_POST['IPC'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="INSERT INTO Commits(IPC,Prisoner_id) VALUES (?,?)";
        $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $result=mysqli_query($conn,$sql2);
        $resultCheck=mysqli_num_rows($result);
        $stmt=mysqli_stmt_init($conn);
        if($resultCheck === 0){
            header("Location: ../ipc_update.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"ii",$IPC,$prisoner_id);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                header("Location: ../ipc_update.php?error=reserror");
                exit();
            }
            
            header("Location: ../ipc_update.php?error=success");
            exit();
        }

            
            
    }
    else{
        header("Location: ../failure.php");
        exit();
    }
    
?>




