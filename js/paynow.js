$("#owl-demo").owlCarousel({
    navigation : true
  });

function paynow(){
        var order_id = $('#order_id').val();
        var stuEmail = $('#stuEmail').val();
        var course_price = $('#course_price').val();
        var course_id = $('#course_id').val();

        console.log(order_id);
        console.log(stuEmail);
        console.log(course_price);
        console.log(course_id);

        var options = {
            "key": "rzp_test_vrOCLffqdgdgF4",

            "amount": course_price * 100,

            "currency": "INR",

            "name": "xyz",

            "description": "Test Transaction",

            "image": "./logo.jpg",

            "handler": function(response) {

                jQuery.ajax({
                    type:'post',
                    url:'../payment_process.php',
                    data:"order_id="+order_id+"&stuEmail="+stuEmail+"&course_price="+course_price+"&course_id="+course_id,
                    success:function(result){
                      window.location.href="../thank_you.php";
     	          }
                });


            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();


    }
