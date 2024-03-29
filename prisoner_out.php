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
        }elseif($_GET['error']=="outerror"){
          echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-red-600">
          Prisoner is Already Outside the Prison!!       
          </h2>';
        }elseif($_GET['error']=="success"){
          echo'<h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-green-600">
          Prisoner removed successfully!!       
          </h2>';
        }

      }
      echo'
      <form action="includes/prisoner_out.inc.php" method="post" >
    <div class="flex flex-col h-screen">
    <section class="text-gray-700 body-font relative flex-grow">
    <div class="container px-5 my-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1
          class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
        >
        Prisoner Status Update
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          The Officer Can Update The Status of the Prisoner to IN/OUT!
        </p>
      </div>
    </div>
    <div class="container px-5 my-5 mx-auto md:flex md:justify-center mb-6">
    <form class="w-full max-w-sm md:items-center">
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-700 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            PrisonerID
          </label>
        </div>
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:outline-none focus:border-indigo-500" id="inline-full-name" type="text" placeholder="Prisoner ID" name="prisoner_id">
        </div>
      </div>
    </form>
    </div>
    <div class="p-2 w-full">
      <button
      name="prisoner_out_status" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
      >
        Submit
      </button>
    </div>
    </section>
    </form>
    ';}else{
      header("Location: ./failure.php");
            exit();
    
    }
    require "./footer.php";
    ?>
</div>