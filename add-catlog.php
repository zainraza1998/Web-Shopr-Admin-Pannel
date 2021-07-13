<?php include('header.php'); 
$ob->add_catlog();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Catlog</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>Add Catlog</h3>
    </div>
    <!-- //card heading -->

    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
      	<form method="post" >
        <div class="row">
        	<div class="col-md-12">
        		<input type="" name="catlog" class="form-control" placeholder="Enter catlog ">
        	</div>
        	
          
    </div>




   

    <div class="row">
    	<div class="col-md-12">
    			<input type="submit" name="btn-catlog" class="btn btn-warning mt-4">
</div>
</form>
    </div>

</div>
</div>
<?php  include('footer.php'); ?>