//Ajax call for Admin login registration
function checkAdminLogin(){
	console.log("clicked");
	var adminLogEmail=$("#adminLogemail").val();
	var adminLogPass=$("#adminLogpass").val(); 
	console.log(adminLogEmail);
	console.log(adminLogEmail);
		$.ajax({
			url:'Admin/admin.php',
			method:'POST',
			dataType: "json",
			data:{
				checkLogemail:"checklogemail",
				adminLogEmail: adminLogEmail,
				adminLogPass: adminLogPass,
			},
			success:function(data){
				if(data==0){
					$("#statusAdminLogMsg").html(
						"<span class='alert alert-danger'>Invalid Email Id or Password !</span>"
						);
				}
				else if(data==1){
					$("#statusAdminLogMsg").html(
						'<div class="alert alert-success">Success Loading....</div>'
						);
					setTimeout(()=>{
						window.location.href="Admin/adminDashboard.php";
					},1000);
				}
			},
	});
}