 <!-- start including header -->
 <?php
 include('./dbConnection.php');
include('./mainInclude/header.php');
?>
 <!-- end including headre -->

 <!-- Start Course Page Banner -->
 <div class="container-fluid bg-dark">
     <div class="row">
         <img src="./image/books4.jpg" alt="courses"
             style="height: 500px;width: 100%;object-fit: cover;box-shadow: 10px;" />
     </div>
 </div>
 <!-- End Course Page Banner -->

 <!-- <div class="container jumbotron mb-5">
     <div class="row">
         <div class="col-md-4">
             <h5 class="mb-3">
                 If Already Registered !! Login
             </h5>

             <form role="form" id="stuLoginForm1">
                 <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label> -->
 <!-- <small id="statusLogMsg1"></small> -->
 <!-- <input type="email" class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                 </div>
                 <div class="form-group">
                     <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
                     <small id="statusLogMsg1"></small>
                     <input type="password" class="form-control" placeholder="Password" name="stuLogPass"
                         id="stuLogPass">
                 </div>
                 <button type="button" class="btn btn-primary" onclick="checkStuLogin()" id="stuLoginBtn">Login</button>
             </form><br />
             <small id="statusLogMsg"></small>
         </div>
         <div class="col-md-6 offset-md-1">
             <h5 class="mb-3">
                 New User !! Signup
             </h5>
             <form role="form" id="stuRegForm1" action="">
                 <div class="form-group">
                     <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
                     <small id="statusMsg1"></small>
                     <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                 </div>
                 <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                     <small id="statusMsg2"></small>
                     <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                     <small class="form-text">We'll never share your email woth anyone else.</small>
                 </div>
                 <div class="form-group">
                     <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                     <small id="statusMsg3"></small>
                     <input type="password" class="form-control" placeholder="Password" id="stupass" name="stupass">
                 </div>
                 <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign Up</button>
             </form><br />
             <small id="statusLogMsg"></small>
         </div>
     </div>
 </div> -->



 <?php 
        //  session_start();
        
          echo '
                <div class="text-center mt-3">
         
        <label class="mt-4 font-weight-bold">Sign Up:</label>
        <button class="btn btn-primary">
        
                <a href="#" class="nav-link text-white " data-toggle="modal" 
                data-target="#stuRegModalCenter">Signup</a>
                </button>
                 <label class="ml-2 font-weight-bold"> Login: </label>
          <button class="btn btn-primary">
          
                <a href="#" class="nav-link text-white " data-toggle="modal"
                data-target="#stuLoginModalCenter">Login</a>
        </button>
                </div>';
        
        ?>



 <!-- Start Contact Us -->
 <?php
include('./contact.php');
?>
 <!-- End Contact Us -->

 <!-- start including footer -->
 <?php
include('./mainInclude/footer.php');
?>
 <!-- end including footer -->