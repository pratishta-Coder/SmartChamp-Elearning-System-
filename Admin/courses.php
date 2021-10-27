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
	?>
<!-- end including header -->

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of all courses</p>
    <?php 
		$sql="SELECT * FROM course";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
	?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Course Id</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()){ ?>
            <tr>
                <th scope="row"><?php echo $row['course_id']; ?></th>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['course_author']; ?></td>
                <td>
                    <form action="editcourse.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
                        <button type="submit" class="btn btn-info mr-3" name="view" value="View"><i
                                class="fas fa-edit"></i></button>
                    </form>
                    <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
                        <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i
                                class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
					echo "0 Result";
						}
						if(isset($_REQUEST['delete'])){
						$sql="DELETE FROM course WHERE course_id={$_REQUEST['id']}";
						if($conn->query($sql)==TRUE){
							echo '<meta http-equiv="refresh" content="0;"/>';
						}else{
							echo "Unable to Delete data";
					}
					}
					?>
    <!-- div row close from header -->
    <div>
        <a class="btn btn-danger box" href="./addCourse.php"><i class="fas fa-plus fa-2x"></i></a>
    </div>
</div>


<!-- start including footer -->
<?php 
	include('./admininclude/footer.php');
	?>
<!-- end including footer-->