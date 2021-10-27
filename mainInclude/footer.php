<!-- Start footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2020 || Designed By E-learning || <a href="#login" data-toggle="modal"
            data-target="#adminLoginModalCenter"> Admin Login</a></small>
</footer>
<!-- End footer -->

<!-- Start student Registration Modal -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start student Registration Form -->
                <?php include('./studentRegistration.php'); ?>
                <!-- End student Registration Form -->
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End student Registration Modal -->

<!-- Start student login Modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start student login Form -->
                <form id="stuLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="stuLogemail"
                            class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="stuLogemail" name="stuLogemail"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="stuLogpass"
                            name="stuLogpass">
                    </div>

                </form>
                <!-- End student login  Form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" onclick="checkStuLogin()" id="stuLoginBtn">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End student login Modal -->

<!-- Start admin login Modal -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start admin login Form -->
                <form id="adminLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="adminLogemail"
                            class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="adminLogemail" name="adminLogemail"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="adminLogpass"
                            class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="adminLogpass"
                            name="adminLogpass">
                    </div>

                </form>
                <!-- End admin login  Form -->
            </div>
            <div class="modal-footer">
                <span id="statusAdminLogMsg"></span>
                <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="
        checkAdminLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End admin login Modal -->


<!-- Jquery and Bootstrap Javasvript -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/popper.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!-- Font Awesome JS -->
<script type="text/javascript" src="./js/all.min.js"></script>
<!-- Testimonial Carousel -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>




<script type="text/javascript" src="./js/javascript.js"></script>

<!-- Student Ajax call Javasript -->
<script type="text/javascript" src="./js/ajaxrequest.js"></script>

<!-- Admin Ajax call Javasript -->
<script type="text/javascript" src="./js/adminajaxrequest.js"></script>

<!-- Custom Ajax call Javasript -->
<script type="text/javascript" src="./js/custom.js"></script>

</body>

</html>