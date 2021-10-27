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

		$sql="SELECT * FROM course";
		$result = $conn->query($sql);
		$totalcourse=$result->num_rows;

		$sql="SELECT * FROM student";
		$result = $conn->query($sql);
		$totalstu=$result->num_rows;

		$sql="SELECT * FROM courseorder";
		$result = $conn->query($sql);
		$totalsold=$result->num_rows;
?>
<!-- end including header -->
<div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center ">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalcourse; ?>
                    </h4>
                    <a class="btn text-white" href="courses.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Students</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalstu; ?>
                    </h4>
                    <a class="btn text-white" href="students.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Sold</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totalsold; ?>
                    </h4>
                    <a class="btn text-white" href="sellReport.php">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5 mt-5 text-center">
        <!-- Table -->
        <p class="bg-dark text-white p-2">Course Ordered</p>
        <?php
			$sql="SELECT * FROM courseorder";
			$result=$conn->query($sql);
            if ($result->num_rows > 0) {
                ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Course Id</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row=$result->fetch_assoc()) {
                    ?>
                <tr>
                    <th scope="row"><?php echo $row['order_id']; ?></th>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo $row['stu_email']; ?></td>
                    <td><?php echo $row['order_date']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td>
                        <form action="" method="POST" class="d-inline"><input type="hidden" name="co_id"
                                value="<?php echo $row['co_id']; ?>"><button type="submit" class="btn btn-secondary"
                                name="delete" value="delete"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <?php
                	} 
					
				?>

            </tbody>
        </table>
        <?php
            }else{
                        echo "0 Result";
                }
            if (isset($_REQUEST['delete'])) {
                $sql="DELETE FROM courseorder WHERE co_id={$_REQUEST['co_id']}";
                if ($conn->query($sql)==true) {
                    echo '<meta http-equiv="refresh" content="0;"/>';
                } else {
                    echo "Unable to Delete data";
                }
            }
		?>
    </div>
</div>
</div> <!-- div Row close from header -->
</div> <!-- div container fluid claose from header -->

<!-- start including footer -->
<?php 
	include('./admininclude/footer.php');
	?>
<!-- end including footer -->