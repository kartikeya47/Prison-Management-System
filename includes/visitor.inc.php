<?php
    if(isset($_POST['visitor_add'])){
        require 'dbh.inc.php';    
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $aadhaar=$_POST['aadhaar'];
        $date_visit=$_POST['date_visit'];
        $time_slot = $_POST['time_slot'];
        $prisoner_id=$_POST['prisoner_id'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];
                
        $sql_input = "INSERT INTO Visitor(First_name,Last_name,Aadhaar,Prisoner_id,Pass,User) VALUES (?,?,?,?,?,?)";
        $sql3 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $sql4 ="SELECT * FROM visitor WHERE Aadhaar='$aadhaar' ";
        $sql5 ="SELECT * FROM visitor WHERE User='$username' ";
        $sql6 ="SELECT * FROM Prisoner WHERE Prisoner_id='$prisoner_id' ";
        $result3=mysqli_query($conn,$sql3);
        $result4=mysqli_query($conn,$sql4);
        $result5=mysqli_query($conn,$sql5);
        $result6=mysqli_query($conn,$sql6);
        $resultCheck0=mysqli_num_rows($result3);
        $resultCheck1=mysqli_num_rows($result4);
        $resultCheck2=mysqli_num_rows($result5);
        $resultCheck3=mysqli_num_rows($result6);
        $row=mysqli_fetch_assoc($result6);
        $stmt = mysqli_stmt_init($conn);
        if(!preg_match("/^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$/", $aadhaar)){
            header("Location: ../visitor.php?error=invalidaadhaar");
             exit();
         }elseif($resultCheck1 > 0){
            header("Location: ../visitor.php?error=sqlerror");
            exit();
        }elseif($resultCheck0 === 0){
            header("Location: ../visitor.php?error=sqlerror3");
            exit();
        }elseif($resultCheck2 > 0){
            header("Location: ../visitor.php?error=sqlerror2");
            exit();
        }elseif($row['Status_inout'] === 'OUT'){
            header("Location: ../visitor.php?error=outerror");
            exit();
        }else{
            mysqli_stmt_prepare($stmt,$sql_input);
            mysqli_stmt_bind_param($stmt,"sssiss",$f_name,$l_name,$aadhaar,$prisoner_id,$pass,$username);
            // To DO : check for success or failure of statement in case of duplicate entry
            $res = mysqli_stmt_execute($stmt);
            // if (mysqli_num_rows($res) == 0) {
            //     header("Location: ../visitor.php?error=sqlerror");
            //     exit();
            // }

            $visit_sql = "INSERT INTO Visit(Visitor_aadhaar,Date_visit,Time_slot,Prisoner_id,Pass,User) VALUES (?,?,?,?,?,?)";
            $visit_stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($visit_stmt,$visit_sql)){
                header("Location: ../visitor.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($visit_stmt,"sssiss",$aadhaar,$date_visit,$time_slot,$prisoner_id,$pass,$username);
                $result = mysqli_stmt_execute($visit_stmt);
                if (!$result) {
                    header("Location: ../visitor.php?error=reserror");
                    exit();
                }

                header("Location: ../success_visitor.php?insert=success");
                exit();
            }
        }
    }
?>