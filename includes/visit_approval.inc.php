<?php
    if(isset($_POST['vuname'])){
        require 'dbh.inc.php';
        $vuname=$_POST['vuname'];

        if(empty($vuname)){
            header("Location: ../visit_approval.php?error=emptyfields");
            exit();
        }else{
          $sql1="UPDATE visit_approval SET status='Approved' WHERE vuname='$vuname' ";
          $sql2 ="SELECT * FROM visit_approval WHERE vuname='$vuname' ";
          $result=mysqli_query($conn,$sql2);
          $resultCheck=mysqli_num_rows($result);
          if($resultCheck === 0){
            header("Location: ../visit_approval.php?error=sqlerror");
            exit();
        }else{
            mysqli_query($conn,$sql1);
            header("Location: ../visit_approval.php?error=success");
              exit();
        }
      }
    }else{
      header("Location: ../failure.php");
      exit();
      }