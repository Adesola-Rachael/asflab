
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Library | Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Font-->
 	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/reg_style.css') }}">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body class="form-v9" >
	
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('imgbook/10.jpg'); background-size:cover;" >
			<form class="form-detail" action="#" method="post" id="regForm">
                @csrf
				<h2>Registration Form</h2>
				<div id="success_message"></div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="email" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
                <!-- password and username -->
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="user_name" id="user_name" class="input-text" placeholder="Your Username" required>
					</div>
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
					</div>
				</div>
                    <!-- Department and level-->
                <div class="form-row-total">
					<select  name="dept" id="dept" >
						<option value="">name</option>
						<option value="">name</option>
						<option value="">name</option>
						<!-- <input type="text" name="dept" id="dept" class="input-text" placeholder="Your Department" required> -->
					</select>
 					<div class="form-row">
						<input type="text" name="level" id="level" class="input-text" placeholder="Your level" required>
					</div>
				</div>
				<!-- role. The role here is that of the visitor or student  -->
				<input type="hidden" name="role" id="role" class="role" value="100">

                    <!-- Submission -->
				<div class="form-row-last">
					<input type="submit" name="register" id="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body> 
<script>
        $(document).ready(function(){
            $('#regForm').on('submit', function(e){
                e.preventDefault();
                console.log('reg');
                var form = $('#regForm').serialize();
                // var form = new FormData(this);
                console.log(form);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:    "/register",
                    type:   "POST",
                    data:   form,
                    success:function(response){
                        //  console.log(response);
						if(response.status=='success'){
							$('#success_message').html(
							'<div class="alert alert-success alert-dismissible">'+
								'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
								'<h5><i class="icon fas fa-ban"></i>!</h5>' +response.message+
							'</div>'
							);
						}else{
							console.log(response.message);
							$('#success_message').html(
							'<div class="alert alert-danger alert-dismissible">'+
								'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
								'<h5><i class="icon fas fa-ban"></i>Registration Error!</h5>' +response.message+
							'</div>'
							);

						}
                    }
                });

            });
        });
</script>
</html>