<?php require_once("header.php") ?>
  <body>

    <div class="section"></div>
     <main>
       <center>
         <img class="responsive-img" style="width: 150px;" src="../img/spud_logo.png" />
         <div class="section"></div>

         <h5 class="green-text">Student Confirmation</h5>
         <div class="section"></div>

         <div class="container">
           <div class="z-depth-1 grey lighten-4 row" style="width: 350px; display: inline-block; padding: 40px 50px 0px 50px; border: 1px solid #EEE;">

             <form class="col s12" method="post">
               <div class='row'>
                 <div class='col s12'>
                 </div>
               </div>

               <div class='row'>
                 <div class='input-field col s12'>
                   <input type='text' name='text' id='text' />
                   <label for='email'>Enter your School ID</label>
                 </div>
               </div>

               <br />
               <center>
                 <div class='row'>
                  <a href="dashboard.php" class="left-align"><button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>
                   Sign in</button></a>
                 </div>
               </center>
             </form>
           </div>
         </div>
       </center>

       <div class="section"></div>
       <div class="section"></div>
     </main>
<?php require_once("header.php") ?>
