<?php
include('db.php');
session_start();

// Get method 
if(!isset($_GET['pf'])){
    $pf= false;
    ?>
    <style>
        .changedn{
        display: block;
        }
    </style>
    <?php
}else{
    $pf = $_GET['pf'];
    ?>
    <style>
        .changedn{
        display: none;
        }
    </style>
    <?php
}
$id = $_GET['id'];
if(!$pf){
    $role= $_SESSION['role'];
}
$sql = $conn->query("SELECT * FROM info where id=".$id."")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
		*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        .main-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: center;
            background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&w=600');
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            font-size: 24px;
            font-weight: 600;
        }
        form{
            display: flex;
            background-color:rgba(226, 214, 214, 0.5);
            padding: 20px 60px;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            width: 50%;
        }
        .main-container img{
            width: 50%;
        }
        .main-container img img{
            width: 100%;
        }
        label{
            margin-top: 5px;
            margin-bottom: 2px;
        }
        .sub-con{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 5px;
            align-items: center;
            justify-content: center;
        }
        .submit{
            color: white;
            background-color: blue;
            margin-top: 5px;
            padding: 5px 20px;
            font-size: large;
            width: 20%;
        }
        form .titlehead{
            display: flex;
            border-bottom: 1px solid white;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        /* common classes */
        .df{
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .w-50{
            width: 49%  !important ;
        }
        .df a{
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        .text-right{
            margin-top: 5px;
            text-align: end;
            font-size: 20px;
        }
        .sp{
            display: flex;    
            align-items: center;
            justify-content: flex-start;
            font-size: small;
            color:red;
            margin-top: 5px;
        }
        @media(max-width:1200px){
            .main-container {
            height: auto;
            }
            form{
                width: 100vw;
                padding: 20px;
            }
        }
        @media(max-width:420px){
            form .titlehead{
                padding-bottom: 20px;
                flex-direction: column-reverse;
                /* justify-content: space-evenly; */
            }
        }
        @media(max-width:550px){
            *{
                font-size:20px
            }
        }
</style>
</head>
<body>
    <div class="main-container">  
        <form action="editfile.php?id=<?=$id?>" method="post">
            <div class="titlehead">
                
                <a href="home.php" class="btn btn-light changedn">< < &nbsp;Back Home</a>
                
                <h2>Testing Version</h2>
                <p>&nbsp;</p>
            </div>
			<label for="" class="changedn">Full Name</label>
			<div class="df changedn" >
				<input type="text" name="fname" value="<?=$sql['fname']?>" class="w-50 changedn" placeholder="First Name">
				<input type="text" name="lname" value="<?=$sql['lname']?>" class="w-50 changedn" placeholder="Last Name">
			</div>
		<!--  -->

            <!-- security Start -->
            <div class="df">
                <div class="sub-df" style="width: 49%;">
                    <label for="" class="changedn">E-mail<span style="color:red;">*</span></label>
			        <input type="email" style="width: 100%;"
                     class="changedn" name="email" value="<?=$sql['email']?>" placeholder="E-mail">
                </div>
                
                <div class="sub-df" style="width: 49%;">
                    <label for="" class="changedn">Phone</label>
                    <input type="text" class="changedn" style="width: 100%;"
                    name="phone" value="<?=$sql['phone']?>" placeholder="Enter Phone">
                </div>
            </div>
            <!-- security END -->

            <!-- security Start -->
            <div class="df">
                    <div class="sub-df changedn" style="width: 49%;">
                    <label for="">Security Question<span style="color:red;">*</span></label>
                    <input type="text" name="securityquestion" placeholder="Enter Security Question" 
                    style="width: 100%;" maxlength="12" value="<?=$sql['securityquestion']?>" required>
                </div>
                
                <div class="sub-df changedn" style="width: 49%;" >
                    <label for="">Security Answer <span style="color:red;">*</span>&nbsp;</label>
                    <input type="text" name="securityanswer" placeholder="Enter Security Answer" 
                    style="width: 100%;" maxlength="12" value="<?=$sql['securityanswer']?>" required>
                </div>
            </div>
            <!-- security END -->
            <!-- birth Start -->
            <div class="df">
                    
                <div class="sub-df" style="width: 49%;">
                    <label for="" class="changedn">City</label>
                    <input type="text" class="changedn" name="location"
                    style="width: 100%;" value="<?=$sql['location']?>" placeholder="City" maxlength="12">

                </div>
                <div class="sub-df changedn" style="width: 49%;">
                    <label for="">Pin code </label>
                    <input type="text" name="pincode" placeholder="Enter Pin Code"
                    style="width: 100%;" maxlength="12" value="<?=$sql['pincode']?>">
                </div>
            </div>

            <!-- security Start -->
            <div class="df">
                
                <div class="sub-df" style="width: 49%;">
                    <label for="" >Password <span style="color:red;">*</span></label>
                    <input type="password" name="password" id="pass" 
                    minlength="8" placeholder="Enter Password" style="width: 100%;"> 
                    <div class="sp">
                        <input type="checkbox" onclick="validateForm()">
                        <p class="ifp" style="margin-bottom:0px;font-size: small;">&nbsp;Show Password</p>
                    </div>
                </div>
                    <div class="sub-df changedn" style="width: 49%;">
                    <label for=""> Birth date <span style="color:red;">*</span></label>
                        <input type="date" name="birthdate" placeholder="Enter Security Question" 
                        style="width: 100%;" maxlength="12" value="<?=$sql['birthdate']?>" required>
                    </div>
            </div>
            <!-- security END -->
         
                <!--Start  role -->
                
        <?php if(!$pf){ ?>

            <?php if($role!="0"){?>
                <div class="df">
                    <label for="">Role </label>
                    <p class="text-danger text-right"><?php echo"Old value : ";
                    if($sql['role']=="0"){ echo "User";}else{ echo"Admin"; }?></p>
                </div>
                
				<select name="role" value="<?=$sql['role']?>">
					<option value="0">User</option>
					<option value="10">Admin</option>
				</select>
                <!--END role -->
        <?php }
    } ?>

            <?php 
            if(!$pf){
                $changeandupdate="Update";
            }else{
                $changeandupdate="Change";
            }            
            ?>
			<input type="submit" value="<?=$changeandupdate?>" class="mt-2 btn btn-primary w-50">
		</form>
	</div>
    <script>
        function validateForm() {
            var pass = document.getElementById('pass');
            if(pass.type === "password"){
                pass.type = "text";
            }else{
                pass.type = "password"
            }
        }
        </script>
</body>
</html>