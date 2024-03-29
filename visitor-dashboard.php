<?php
    //jailor functions:
    //view prisoner
    // update prisoner
    require "./header.php";

    


    if(isset($_SESSION['userUidVisitor'])){
        echo'<section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="font-medium title-font text-center text-gray-900 mb-20">
          <h1 class="text-3xl">
              Visitor Dashboard
          </h1>    
            <br class="hidden sm:block">
            <h2 class="text-lg">Prisoner Management System</h2>
          </div>
          
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Apply for Visit</h2>
                <p class="leading-relaxed text-base">Apply for Visit of a Prisoner</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="./visit_apply.php">Apply for Visit
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div> 
            </div>

          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex">
      <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
        </svg>
      </div>
      <div class="flex-grow pl-6">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">View Request Status</h2>
        <p class="leading-relaxed text-base">View whether Request has been Approved or Not</p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="./view_visit_request_status.php">View Request Status
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
        </div>
        </div>
      </div>
            
            
      </section>';
      }else{
        echo' <div class="hero bg-gray-100 py-16 h-screen">
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <!-- hero wrapper -->
            <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
  
                <!-- hero text -->
                <div class="hero-text col-span-6">
                    <h1 class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">Operation Failed</h1>
                    <hr class=" w-12 h-1 bg-indigo-500 rounded-full mt-8">
                    <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold">Access Denied</p>
  
                </div>
  
                <!-- hero image -->
                <div class="hero-image col-span-6">
                    <img src="./failure.svg" alt="">
                </div>
            </div>
        </div>
    </div>';
      }
  ?>
  
  <?php
      require "./footer.php"
  ?>
  