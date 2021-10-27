<!--start including header -->
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

		//UPDATE
		if(isset($_REQUEST['requpdate'])){
			//Checking for Empty fields
			if(($_REQUEST['course_id'] =="") ||($_REQUEST['course_name'] =="") || ($_REQUEST['course_desc'] =="") || ($_REQUEST['course_author'] =="") || ($_REQUEST['course_duration'] =="") || ($_REQUEST['course_price'] =="") || ($_REQUEST['course_original_price'] =="")){
				//msg displayed if required field missing
				$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
			}else
			{
				//Assigning user values to variable
				$course_id=$_REQUEST['course_id'];
				$course_name=$_REQUEST['course_name'];
				$course_desc=$_REQUEST['course_desc'];
				$course_author=$_REQUEST['course_author'];
				$course_duration=$_REQUEST['course_duration'];
				$course_price=$_REQUEST['course_price'];
				$course_original_price=$_REQUEST['course_original_price'];

				$stu_image=$_FILES['course_img']['name'];
		$stu_image_temp=$_FILES['course_img']['tmp_name'];
		$img_folder='../image/courseimg/'.$stu_image;
		move_uploaded_file($stu_image_temp,$img_folder);

				$sql="UPDATE course SET course_id='$course_id',course_name='$course_name',course_desc='$course_desc',course_author='$course_author',course_img='$img_folder',course_duration='$course_duration',course_price='$course_price',course_original_price='$course_original_price' WHERE course_id='$course_id' ";
				if($conn->query($sql) == TRUE){
					//below msg display on form submit success
					$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Updated Successfully</div>';
				}else{
					//below msg display on form submit failed
					$msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update Course</div>';
				}
			}
		}
	?>
<!-- end including header -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course Details</h3>

    <?php
		if (isset($_REQUEST['view'])) {
			$sql="SELECT * FROM course WHERE course_id={$_REQUEST['id']}";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
		}
	?>



    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">
                Course ID
            </label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php 
						if(isset($row['course_id']))
						{
							echo $row['course_id'];
						}
			?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">
                Course Name
            </label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php 
						if(isset($row['course_name']))
						{
							echo $row['course_name'];
						}
			?>">
        </div>
        <div class="form-group">
            <label for="course_desc">
                Course Description
            </label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2><?php 
						if(isset($row['course_desc']))
						{
							echo $row['course_desc'];
						}
			?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">
                Course Author
            </label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php 
						if(isset($row['course_author']))
						{
							echo $row['course_author'];
						}
			?>">
        </div>
        <div class="form-group">
            <label for="course_duration">
                Course Duration
            </label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php 
						if(isset($row['course_duration']))
						{
							echo $row['course_duration'];
						}
			?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">
                Course Original price
            </label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php 
						if(isset($row['course_original_price']))
						{
							echo $row['course_original_price'];
						}
			?>">
        </div>
        <div class="form-group">
            <label for="course_price">
                Course Selling price
            </label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php 
						if(isset($row['course_price']))
						{
							echo $row['course_price'];
						}
			?>">
        </div>
        <div class="form-group">
            <label for="course_img">
                Course Image
            </label>
            <img src="<?php 
						if(isset($row['course_img']))
						{
							echo $row['course_img'];
						}
			?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">
                    Update
                </button>
                <a href="courses.php" class="btn btn-secondary">Close</a>
            </div>
        </div>
        <?php 
		if(isset($msg)){
			echo $msg;
		}
		?>
    </form>
</div>

<!-- start including footer -->
<?php 
	include('./admininclude/footer.php');
	?>
<!-- end including footer-->