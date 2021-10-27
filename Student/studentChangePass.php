<?php
	if(!isset($_SESSION)) {
	session_start();
	}
    
	include('./stuInclude/header.php');
	include_once('../dbconnection.php');

	if(isset($_SESSION['is_login'])){
		$stuEmail = $_SESSION['stuLogEmail'];
	} else {
		echo "<script> location.href='../index.php'; </script>";
	}
	
if(isset($_REQUEST['stuPassUpdateBtn'])){
	if(($_REQUEST['stuNewPass']=="")){
		//msg displayed if required field missing
		$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
	}else{
        $stupass=$_REQUEST["stuNewPass"];
		$sql="UPDATE student SET stu_pass='$stupass' WHERE stu_email='$stuEmail'";

				if($conn->query($sql) == TRUE){
					//below msg display on form submit success
					$passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Feedback Submitted Successfully</div>';
				}else{
					//below msg display on form submit failed
					$passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
				}
	}
}
?>
<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5" method="POST">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $stuEmail; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password"
                        name="stuNewPass">
                </div>
                <button type="submit" class="btn btn-primary mr-4 mt-4" name="stuPassUpdateBtn">
                    Update
                </button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if(isset($passmsg)){
			echo $passmsg;
		} 
		?>
            </form>
        </div>
    </div>
</div>

<!-- start including footer -->
<?php 
	include('./stuInclude/footer.php');
	?>
<!-- end including footer-->