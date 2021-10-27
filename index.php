<!-- start including header -->
<?php
include('./mainInclude/header.php');
include('./dbConnection.php');

?>
<!-- end including headre -->

<!-- start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="./video/banvid.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Smart Champs</h1>
        <small class="my-content">Learn and Implement</small><br>
        <?php 
			if(!isset($_SESSION['is_login'])){
				echo '<a href="#" class="btn btn-danger mt-3"  data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
			}
			else{
				echo '<a href="./Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
			}
		?>
    </div>
</div>
<!-- End Video Background -->

<!-- start text bannner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online
                Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructor</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee</h5>
        </div>
    </div>
</div>
<!-- end text bannner -->

<!-- Start Most Popular Course -->
<div class="container mt-5 ">
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Most Popular Course 1st Card Deck -->
    <div class="card-deck row mt-4">
        <?php
        $sql="SELECT * FROM course LIMIT 3";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $course_id=$row['course_id'];
                echo
                '
                <div class="col-sm-4 mb-4">
                <a href="./coursedetails.php?course_id='.$course_id.'" class="btn " style="text-align: left;padding: 0px;
		        margin: 0px;">
                    <div class="card">
                        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guitar" />
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text">'.$row['course_desc'].'</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: </p><small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p><a
                                class="btn btn-primary text-white font-weight-bolder float-right" href="./coursedetails.php?course_id='.$course_id.'">Enroll</a>
                        </div>
                    </div>
        </a>
        </div>';
            }
        }
    
    ?>

    </div>
    <!-- End Most Popular Course 1st Card Deck -->
    <!-- Start Most Popular Course 2nd Card Deck -->
    <div class="card-deck mt-4 carddeck">
        <?php
        $sql="SELECT * FROM course LIMIT 3,3";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $course_id=$row['course_id'];
                echo
                '<a href="./coursedetails.php?course_id='.$course_id.'" class="btn " style="text-align: left;padding: 0px;
		        margin: 0px;">
                    <div class="card">
                        <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Guitar" />
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text">'.$row['course_desc'].'</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: </p><small><del>&#8377 '.$row['course_original_price'].'</del></small><span
                                class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p><a
                                class="btn btn-primary text-white font-weight-bolder float-right" href="./coursedetails.php?course_id='.$course_id.'">Enroll</a>
                        </div>
                    </div>
        </a>';
            }
        }
    
    ?>

    </div>
    <!-- End Most Popular Course 2nd Card Deck -->
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="./courses.php">View All Course</a>
    </div>
</div>
<!-- End Most Popular Course -->


<!-- start of testimonial carousel -->

<section class="pt-5 pb-5 testimonial-carousel">
    <div class="container">
        <h2 class="text-center">What Our Student say for us</h2>
        <hr class="midline">
        <h5 class="text-center mb-5">Our team created best opportunities to provide world class education.</h5>
        <div class="card col-md-12 mt-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                <div class="w-100 carousel-inner mb-5" role="listbox">
                    <div class="carousel-item active">
                        <div class="bg"></div>
                        <div class="row">
                            <?php
    $sql="SELECT s.stu_name,s.stu_occ,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id=f.stu_id LIMIT 2";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row=$result->fetch_assoc()) {
                    $s_img=$row['stu_img'];
                    $n_img=str_replace('..', '.', $s_img); ?>
                            <div class="col-md-6">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3 col-4 align-items-start">
                                            <img src="<?php echo $n_img; ?>" alt="" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="col-sm-9 col-8">
                                            <h2><?php echo $row['stu_name']; ?>
                                                <span><?php echo $row['stu_occ']; ?></span>
                                            </h2>
                                            <small><?php echo $row['f_content']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg"></div>
                        <div class="row">
                            <?php
    $sql="SELECT s.stu_name,s.stu_occ,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id=f.stu_id LIMIT 2,2";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row=$result->fetch_assoc()) {
                    $s_img=$row['stu_img'];
                    $n_img=str_replace('..', '.', $s_img); ?>
                            <div class="col-md-6">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3 col-4 align-items-start">
                                            <img src="<?php echo $n_img; ?>" alt="" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="col-sm-9 col-8">
                                            <h2><?php echo $row['stu_name']; ?>
                                                <span><?php echo $row['stu_occ']; ?></span>
                                            </h2>
                                            <small><?php echo $row['f_content']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg"></div>
                        <div class="row">
                            <?php
    $sql="SELECT s.stu_name,s.stu_occ,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id=f.stu_id LIMIT 4,2";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row=$result->fetch_assoc()) {
                    $s_img=$row['stu_img'];
                    $n_img=str_replace('..', '.', $s_img); ?>
                            <div class="col-md-6">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3 col-4 align-items-start">
                                            <img src="<?php echo $n_img; ?>" alt="" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="col-sm-9 col-8">
                                            <h2><?php echo $row['stu_name']; ?>
                                                <span><?php echo $row['stu_occ']; ?></span>
                                            </h2>
                                            <small><?php echo $row['f_content']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>


                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i
                            class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i
                            class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- End of testimonial carousel -->




<!-- Start Social Follow -->
<div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>WhatsApp</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
    </div>
</div>
<!-- End Social Follow -->

<!-- Start about section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
    <div class="container" style="background-color: #E9ECEF">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>Smart champs provides universal access to the world's best education , partnering with top
                    universities and organizations to offer coourses online</p>
            </div>
            <div class="col-sm">
                <h5> Category </h5>
                <a class="text-dark" href="#">Web development</a><br />
                <a class="text-dark" href="#">Web designing</a><br />
                <a class="text-dark" href="#">Android app dev</a><br />
                <a class="text-dark" href="#">iOS Development</a><br />
                <a class="text-dark" href="#">Data Analysis</a><br />
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>Smart Champs Pvt Ltd<br>Near IIT BOMBAY <br>Mumbai , Maharashtra <br>Ph. 0000000</p>
            </div>
        </div>

    </div>

</div>
<!-- End about section -->

<!-- start including footer -->
<?php
include('./mainInclude/footer.php');
?>
<!-- end including footer -->