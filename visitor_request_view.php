<?php
    require 'header.php';
    if(isset($_SESSION['userUidOfficer'] )){

    include_once 'includes/dbh.inc.php';
    //require'header.php';
    }else{
        header("Location: ./failure.php");
        exit();
    }
    ?>
  <form action="includes/visitor_request_view.inc.php" method="post">
  <div class="flex flex-col h-screen">
    <section class="text-gray-700 body-font relative flex-grow">
      <div class="container px-5 my-5 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
          >
          View all Visit Requests!
          </h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
            The Officer can view all Visit Requests!
          </p>
        </div>
      </div>
    
      </section>
</form>
<?php
    //require 'header.php';
    //if(isset($_SESSION['userUidOfficer'])){
    $sql="SELECT * FROM visit_approval ";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <section class="text-gray-700 body-font relative">
    
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/4 px-4 py-2">Prisoner ID</th>
                <th class="w-1/4 px-5 py-2">Visitor Username</th>
                <th class="w-1/4 px-5 py-2">Request Status</th>

              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ ?>
            
            
              <tr>
                <td class="border px-4 py-2"><?php echo"PRI".$row['pid']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['vuname']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['status']."<br>";?></td>
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
</footer>
</div>
