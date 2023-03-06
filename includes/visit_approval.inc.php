<?php
    if(isset($_POST['vuname'])){
        require 'dbh.inc.php';
        $vuname=$_POST['vuname'];

        if(empty($vuname)){
            header("Location: ../visit_approval.php?error=emptyfields");
            exit();
        }else{
          $sql1="UPDATE visit_approval SET status='Approved' WHERE vuname='$vuname' ";
          if(!mysqli_query($conn,$sql1)){
            header("Location: ../visit_approval.php?error=sqlerror");
            exit();
        }else{
            header("Location: ../visit_approval.php?error=success");
              exit();
        }
      }
    }else{
      header("Location: ../failure.php");
      exit();
      }