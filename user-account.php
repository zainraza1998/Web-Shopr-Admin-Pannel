<?php include('header.php'); 
$ob->user_account();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">User Account</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>User Account</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
      	<form method="post" enctype="multipart/form-data">
        <div class="row">
        	<div class="col-md-6">
        		<input type="" name="fname" class="form-control" placeholder="Enter Full Name ">
        	</div>
        	<div class="col-md-6">
        		<input type="" name="father" class="form-control" placeholder="Enter Father Name">
        	</div>
          
    </div>

  <div class="row">
        	<div class="col-md-6">
        		<input type="email" name="email" class="form-control mt-4" placeholder="Enter Your Email  ">
        	</div>
        	<div class="col-md-6">
        		<input type="" name="psw" class="form-control mt-4" placeholder="Enter Your Password">
        	</div>
          
    </div>


    <div class="row">
        	<div class="col-md-6">
        		<input type="number" name="no" class="form-control mt-4" placeholder="Enter Your Number  ">
        	</div>
        	<div class="col-md-6">
        		<select name="role" class="form-control mt-4">
        			<option value="">Select One</option>
        			<option value="1">Admin</option>
        			<option value="2">User</option>

        		</select>
        	</div>
          
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<input type="file" name="img" class="form-control mt-4" multiple>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    			<input type="submit" name="btn-user" class="btn btn-warning mt-4">
</div>
</form>
    </div>

</div>
</div>
<?php  include('footer.php'); ?>