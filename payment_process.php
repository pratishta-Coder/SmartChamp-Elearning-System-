<?php
session_start();
require('./config.php');
include('./dbConnection.php');

$course_id=$_POST['course_id'];
$sql="SELECT course_name From course WHERE course_id='$course_id'";
     $result=$conn->query($sql);
            if ($result->num_rows > 0) 
            $row=$result->fetch_assoc();
    $course_name=$row['course_name'];


if (isset($_POST['stripeToken'])) {
 \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];

    $data=\Stripe\Charge::create(array(
"amount"=> $_POST['course_price'] *100,
"currency"=>"inr",
"description"=>$course_name,
"source"=>$token,
));

$order_id=$_POST['order_id'];
$stuEmail=$_POST['stuEmail'];
$course_id=$_POST['course_id'];
$course_price=$_POST['course_price']*100;
$status1="Success";
$respmsg="Payment Complete";
$added_on=date('Y-m-d h:i:s');
$payment_id=$data->{'id'};

$sql="INSERT INTO courseorder(order_id,stu_email,course_id,status1,respmsg,amount,order_date,payment_id,course_name) values('$order_id','$stuEmail','$course_id','$status1','$respmsg','$course_price','$added_on','$payment_id','$course_name')";
	if($conn->query($sql) == TRUE){
        echo "Redirecting to my profile";
        
        echo "<script>setTimeout(()=>{
            window.location.href='./Student/myCourse.php';},1500);</script>";
    }


// echo "
// <pre>";
// echo $data->{'id'};
   // print_r($data['id']);
}
?>