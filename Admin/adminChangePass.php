<!-- start including header -->
	<?php 
	if(!isset($_SESSION)){
		session_start();
	}
		include('./admininclude/header.php');
		include('../dbConnection.php');

		if(isset($_SESSION['is_admin_login'])){
			$adminEmail=$_SESSION['adminLogEmail'];
		}else{
			echo "<script>location.href='../index.php';</script>";
		}
		$adminEmail=$_SESSION['adminLogEmail'];
		if(isset($_REQUEST['adminPassUpdatebtn'])){
			if(($_REQUEST['adminPass']=="")){
				//msgg displayed if required field missing
				$passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
			}else{
				$sql="SELECT * FROM admin WHERE admin_email='$adminEmail'";
				$result=$conn->query($sql);
				if($result->num_rows==1){
					$adminPass=$_REQUEST['adminPass'];
					$sql="UPDATE admin SET admin_pass='$adminPass' WHERE admin_email='$adminEmail'";
					if($conn->query($sql)==TRUE){
						//below msg display on form sub,it success
						$passmsg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully </div>';
					}else{
						//below msg display on form submit failed
						$passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable to Update</div>';
					}
				}
			}
		}
	?>
<!-- end including header -->

<div class="col-sm-9 mt-5">
	<div class="row">
		<div class="col-sm-6">
			<form class="mt-5 mx-5">
				<div class="form-group">
					<label for="inputEmail">
						Email
					</label>
					<input type="email" name="" class="form-control" id="inputEmail" value="<?php echo $adminEmail?>" readonly>
				</div>
				<div class="form-group">
					<label for="inputnewpassword">New Password</label>
					<input type="text" name="adminPass" class="form-control" id="inputnewpassword" placeholder="New Password" >
				</div>
				<button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
				<button type="reset" class="btn btn-secondary mt-4">Reset</button>
				<?php if(isset($passmsg)){echo $passmsg;}?>
			</form> 
		</div>
	</div>
	
</div>

<!-- start including footer -->
	<?php 
		include('./admininclude/footer.php');
	?>
<!-- end including footer -->