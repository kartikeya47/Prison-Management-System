<?php
if(isset($_POST['visitor_login-submit'])){
    require "dbh.inc.php";
    $uid=$_POST['visitor_uname'];
    $password=$_POST['visitor_pwd'];

    if(empty($uid)|| empty($password)){
        header("Location: ../signin-visitor.php?error=emptyFields");
        exit();
    }else{
        $sql="SELECT Pass,User FROM Visitor WHERE User=?; ";
        $stmt=mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signin-visitor.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$uid);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                   $pwdCheck=($password==$row['Pass']);   
                    if($pwdCheck == false){
                        header("Location: ../signin-visitor.php?error=wrongpassword");
                        exit();
                    }else if($pwdCheck==true){
                        session_start();
                        //$_SESSION['userId']=$row['Officer_id'];
                        $_SESSION['userUidVisitor']=$row['User'];

                        header("Location: ../visitor-dashboard.php?login=success");
                        exit();
                    }else{
                        header("Location: ../signin-visitor.php?error=wrongpassword");
                        exit();
                    }
            }else{
                header("Location: ../signin-visitor.php?error=usernotfound");
                 exit();
            }
        }
    }
}else{
    header("Location: ../signin-visitor.php?error=usernotfound");
                 exit();

}    