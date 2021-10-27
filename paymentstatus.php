 <!-- start including header -->
 <?php
include('./mainInclude/header.php');
include('./dbConnection.php');
$order_id=$_POST['order_id'];
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

 <!-- start main content -->
 <div class="container">
     <h2 class="text-center my-4">Payment Status</h2>
     <form method="post" action="">
         <div class="form-group row">
             <label class="offset-sm-3 col-form-label">Order Id:</label>
             <div>
                 <input class="form-control mx-3" id="order_id" tabindex="1" maxlength="20" size="20" name="order_id"
                     autocomplete="off">
             </div>
             <div>
                 <input class="btn btn-primary mx-4" type="submit" value="View">
             </div>
         </div>
     </form>
 </div>
 <div class="container">
     <div class=" justify-content-center">
         <div class="col-auto">
             <?php
					$sql="SELECT * FROM courseorder where order_id='$order_id' ";
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row=$result->fetch_assoc()) {
                    ?>
             <h2 class="text-center">
                 Payment Receipt
             </h2>
             <table class="table table-bordered">

                 </thead>
                 <tbody>

                     <tr>
                         <td><label>Order Id:</label></td>
                         <td><?php echo $row['order_id'];?></td>
                     </tr>
                     <tr>
                         <td><label>Student Email</label></td>
                         <td><?php echo $row['stu_email'];?></td>
                     </tr>
                     <tr>
                         <td><label>Course Id</label></td>
                         <td><?php echo $row['course_id'];?></td>
                     </tr>
                     <tr>
                         <td><label>Status</label></td>
                         <td><?php echo $row['status1'];?></td>
                     </tr>
                     <tr>
                         <td><label>Respmsg</label></td>
                         <td><?php echo $row['respmsg'];?>
                         <td>
                     </tr>
                     <tr>
                         <td><label>Amount</label></td>
                         <td><?php echo $row['amount'];?>
                         <td>
                     </tr>
                     <tr>
                         <td><label>Order Date</label></td>
                         <td><?php echo $row['order_date'];?>
                         <td>
                     </tr>
                     <tr>
                         <td><label>Payment Id</label></td>
                         <td><?php echo $row['payment_id'];?>
                         <td>
                     </tr>
                     <tr>
                         <td><label>Course Name purcahsed</label></td>
                         <td><?php echo $row['course_name'];?></td>
                     </tr>


                     <tr>
                         <td>
                             <button type="button" class="btn btn-primary"
                                 onclick="javascript:window.print();">Print</button>
                         </td>
                     </tr>

                 </tbody>
             </table>
             <?php
                     }
            }
				?>
         </div>
     </div>
 </div>
 <!-- end main content -->

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