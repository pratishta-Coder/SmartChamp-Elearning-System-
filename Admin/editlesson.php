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
			if(($_REQUEST['lesson_id'] =="") ||($_REQUEST['lesson_name'] =="") ||  ($_REQUEST['course_id'] =="") || ($_REQUEST['course_name'] =="")){
				//msg displayed if required field missing
				$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
			}else
			{
				//Assigning user values to variable
				$lesson_id=$_REQUEST['lesson_id'];
				$lesson_name=$_REQUEST['lesson_name'];
				
				$course_id=$_REQUEST['course_id'];
				$course_name=$_REQUEST['course_name'];

				$stu_image=$_FILES['lesson_link']['name'];
		$stu_image_temp=$_FILES['lesson_link']['tmp_name'];
		$img_folder='../lessonvid/'.$stu_image;
		move_uploaded_file($stu_image_temp,$img_folder);

				// $cimg='../image/courseimg/'.$_FILES['course_img']['name'];

				$sql="UPDATE lesson SET lesson_id='$lesson_id',lesson_name='$lesson_name',course_id='$course_id',course_name='$course_name',lesson_link='$img_folder' WHERE lesson_id='$lesson_id' ";
				if($conn->query($sql) == TRUE){
					//below msg display on form submit success
					$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Updated Successfully</div>';
				}else{
					//below msg display on form submit failed
					$msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update Course</div>';
				}
			}
		}
	?>
<!-- end including header -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Lesson Details</h3>

    <?php
		if (isset($_REQUEST['view'])) {
			$sql="SELECT * FROM lesson WHERE lesson_id={$_REQUEST['id']}";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
		}
	?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">
                Lesson ID
            </label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php 
						if(isset($row['lesson_id']))
						{
							echo $row['lesson_id'];
						}
			?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">
                Lesson Name
            </label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php 
						if(isset($row['lesson_name']))
						{
							echo $row['lesson_name'];
						}
			?>">
        </div>
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
            <input type="text" class="form-control" id="course_name" name="course_name"
                onkeypress="isInputNumber(event)" value="<?php 
						if(isset($row['course_name']))
						{
							echo $row['course_name'];
						}
			?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_link">
                Lesson Link
            </label>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php 
						if(isset($row['lesson_link']))
						{
							echo $row['lesson_link'];
						}
			?>" allowfullscreen></iframe>
            </div>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">
                Update
            </button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
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