<?php 
require "./header.php";
if(isset($_SESSION['userUidOfficer'])){
  if(isset($_GET['error'])){
    if($_GET['error']=="emptyfields"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
       Empty fields!!       
       </h2>';
    }elseif($_GET['error']=="sqlerror"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
      Prisoner was not Present!!       
      </h2>';
    }elseif($_GET['error']=="sqlerror1"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
      IPC does not Exist in the System!!       
      </h2>';
    }elseif($_GET['error']=="sqlerror2"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
      IPC has Been Already Applied to the Prisoner!!       
      </h2>';
    }elseif($_GET['error']=="outerror"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
      Prisoner is Outside the Prison!!       
      </h2>';
    }elseif($_GET['error']=="success"){
      echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-green-600">
     IPC Added Sucessfully!!       
      </h2>';
    }elseif($_GET['error']=="reserror"){
        echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
       Not Valid!!       
        </h2>';
      }
  }

echo'
  <div class="flex flex-col h-screen">
  <form action="includes/ipc_update.inc.php" method="POST">

  <section class="text-gray-700 body-font relative flex-grow">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
        Add IPC Code to Prisoner
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          Enter the Prisoner ID and IPC
        </p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
          
            <label class="block text-sm leading-5 font-medium text-gray-700"
              >IPC</label
            >
            <div class="mt-1 relative rounded-md shadow-sm >
            placeholder="Jobs">
            <input
            required
              name="IPC"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="IPC"
            />
              
            </div>
          </div>
          
          
          <div class="p-2 w-1/2">
          <label
            for="price"
            class="block text-sm leading-5 font-medium text-gray-700"
            >Prisoner ID</label
          >
          <div class="mt-1 relative rounded-md shadow-sm">
            <input
            required
            name="Prisoner_id"
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Prisoner ID"
            />
          </div>
        </div>
       
              
           
          
          <div class="p-5 w-full">
            <button
            name="update_ipc" type="submit"
              class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form> 
  
</div>


';}else{
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

echo'
<footer>';
require "./footer.php";
echo'</footer>';
?>