<!-- start including header -->
<?php
 include('./dbConnection.php');
 session_start();
 if(!isset($_SESSION['stuLogEmail'])){
     echo "<script>location.href='loginorsignup.php'</script>";
 }
 else{

    require('./config.php');
    
     $course_id=$_SESSION['course_id'];
    $stuEmail=$_SESSION['stuLogEmail'];

    $sql="SELECT stu_name From student WHERE stu_email='$stuEmail'";
     $result=$conn->query($sql);
            if ($result->num_rows > 0) 
            $row=$result->fetch_assoc();
    $stuname=$row['stu_name'];
    
?>
<!-- end including headre -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Check Out Page</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
    <!-- Bootstarp CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time();?>">


</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 jumbotron">
                <h3 class="mb-5">
                    Welcome to Smart Champs Payment Gateway
                </h3>
                <form action="./payment_process.php" method="post">
                    <div class="form-group row">
                        <label for="order_id" class="col-sm-4 col-form-label">ORDER_ID</label>
                        <div class="col-sm-8">
                            <input id="order_id" class="form-control" tabindex="1" maxlength="20" size="20"
                                name="order_id" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stuEmail" class="col-sm-4 col-form-label">Student Email</label>
                        <div class="col-sm-8">
                            <input id="stuEmail" class="form-control" tabindex="2" maxlength="12" size="12"
                                name="stuEmail" autocomplete="off" value="<?php
                                if(isset($stuEmail)){echo $stuEmail;} ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_price" class="col-sm-4 col-form-label">Amount</label>
                        <div class="col-sm-8">
                            <input id="course_price" class="form-control" tabindex="10" type="text" maxlength="12"
                                size="12" name="course_price" autocomplete="off" value="<?php
                                if(isset($_POST['id'])){echo $_POST['id'];} ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-8">
                            <input id="course_id" class="form-control" tabindex="10" type="hidden" maxlength="12"
                                size="12" name="course_id" autocomplete="off" value="<?php echo $course_id; ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-8">
                            <input id="stuname" class="form-control" tabindex="10" type="hidden" maxlength="12"
                                size="12" name="stuname" autocomplete="off" value="<?php echo $stuname; ?>" readonly>
                        </div>
                    </div>
                    <div class="text-center">
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $publishableKey; ?>" data-amount="<?php echo $_POST['id']*100;  ?>"
                            data-name="Smart Champs" data-description="Welcome to payment Smart Champs gateway"
                            data-image="./image/logo.jpg" data-currency="inr" data-email="<?php echo $stuEmail;  ?>">
                        </script>
                        <a href="./courses.php" class="btn btn-secondary">Cancel</a>
                    </div>

                </form>
                <small class="form-text text-muted">Note:Complete Payment by clicking checkout button</small>
            </div>
        </div>
    </div>



</body>

</html>
<?php
}
?>

<!-- ./Student/myCourse.php class="stripe-button"-->

<!-- data: "order_id=" + order_id + "&stuEmail=" + stuEmail + "&course_price=" +    course_price + "&course_id=" + course_id, -->