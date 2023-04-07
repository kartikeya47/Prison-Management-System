<?php
    $row;
    if(isset($_POST['IPC'])){
        require './dbh.inc.php';
        $IPC = $_POST['IPC'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="INSERT INTO Commits(IPC,Prisoner_id) VALUES (?,?)";
        $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $sql3 ="SELECT * FROM crime WHERE IPC='$IPC' ";
        $sql4 ="SELECT * FROM commits WHERE IPC='$IPC' AND Prisoner_id='$prisoner_id' ";
        $result=mysqli_query($conn,$sql2);
        $result1=mysqli_query($conn,$sql3);
        $result2=mysqli_query($conn,$sql4);
        $row=mysqli_fetch_assoc($result);
        $resultCheck=mysqli_num_rows($result);
        $resultCheck1=mysqli_num_rows($result1);
        $resultCheck2=mysqli_num_rows($result2);
        $stmt=mysqli_stmt_init($conn);
        if($resultCheck === 0){
            header("Location: ../ipc_update.php?error=sqlerror");
            exit();
        }elseif($resultCheck1 === 0){
            header("Location: ../ipc_update.php?error=sqlerror1");
            exit();
        }elseif($resultCheck2 > 0){
            header("Location: ../ipc_update.php?error=sqlerror2");
            exit();
        }elseif($row['Status_inout'] === 'OUT'){
            header("Location: ../ipc_update.php?error=outerror");
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




