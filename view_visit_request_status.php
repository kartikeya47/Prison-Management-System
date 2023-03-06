<?php
    require 'header.php';
    if(isset($_SESSION['userUidVisitor'])){

    include_once 'includes/dbh.inc.php';
    //require'header.php';
    }else{
        header("Location: ./failure.php");
        exit();
    }

    //require 'header.php';
    //if(isset($_SESSION['userUidOfficer'])){
        $vunamee = $_SESSION['userUidVisitor'];
    $sql="SELECT * FROM visit_approval where vuname = '$vunamee'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <section class="text-gray-700 body-font relative">
  <h1 class="text-3xl text-center">
            Visitors Visited 
        </h1> 
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/8 px-8 py-2">Status</th>
              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ ?>
            
            
              <tr>
                <td class="border px-8 py-2"><?php echo$row['status']."<br>";?></td>
              </tr>
             
       


        <?php }?>
        </tbody>
        </table>



    <?php }
   ?>
    </div>
    

  </div>
  
    
</section>


<footer class="foot">
<?php
 require'footer.php';?>
</foooter>
