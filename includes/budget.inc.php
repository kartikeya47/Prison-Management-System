<?php
    if(isset($_POST['budgetamt'])){
        require './dbh.inc.php';
        $amt = $_POST['budgetamt'];
        $prisoner_id= $_POST['Prisoner_id'];

        $sql="UPDATE prisoner SET Budget = Budget + ? WHERE Prisoner_id = ?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../budget.php?error=sqlerror");
            exit();
        }
        else{
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




