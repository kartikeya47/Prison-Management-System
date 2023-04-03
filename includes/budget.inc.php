<?php
    if(isset($_POST['budgetamt'])){
        require './dbh.inc.php';
        $amt = $_POST['budgetamt'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="UPDATE prisoner SET Budget = Budget + ? WHERE Prisoner_id = ?";
        $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $result=mysqli_query($conn,$sql2);
        $resultCheck=mysqli_num_rows($result);
        $stmt=mysqli_stmt_init($conn);
        if($resultCheck === 0){
            header("Location: ../budget.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"ii",$amt,$prisoner_id);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                header("Location: ../budget.php?error=reserror");
                exit();
            }
            
            header("Location: ../budget.php?error=success");
            exit();
        }

            
            
    }
    else{
        header("Location: ../failure.php");
        exit();
    }
    
?>




