<?php
    if(isset($_POST['new_section_prisoner'])){
        require 'dbh.inc.php';
        $prisoner_id=$_POST['Prisoner_id'];
        $section_id=$_POST['Section_id'];

        if(empty($prisoner_id)){
            header("Location: ../prisoner_newsection.php?error=emptyfields");
            exit();
        }else{
          $sql1="UPDATE Prisoner SET Section_id='$section_id' WHERE Prisoner_id='$prisoner_id' ";
          $sql2 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
          $result=mysqli_query($conn,$sql2);
          $resultCheck=mysqli_num_rows($result);
          if($resultCheck === 0){
            header("Location: ../prisoner_newsection.php?error=sqlerror");
            exit();
        }else{
            mysqli_query($conn,$sql1);
            header("Location: ../prisoner_newsection.php?error=success");
              exit();
        }
      }
    }else{
      header("Location: ../failure.php");
      exit();
      }