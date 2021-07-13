<?php include('header.php'); 
$ob->add_product();
$ob->add_edit_product();

?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">
  

  

   <?php
if(isset($_GET['pid']))
{
  $a = $_GET['pid'];
  foreach($ob->edit_pro($a) as $data){

 
  echo('
  <!-- breadcrumbs -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-ite
      m"><a href="index.php">Home</a></li>
      
      <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
    </ol>
  </nav>
  <!-- //breadcrumbs -->
  <!-- card heading -->
  <div class="cards__heading">
    <h3>Edit Products</h3>
  </div>
  <!-- //card heading -->

  <!-- content block style 1-->
  <div class="card card_border p-lg-5 p-3 mb-4">
    <div class="card-body py-3 p-0">
      <form method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <input type="" name="p-name" class="form-control" value="'.$data['p_name'].'">
        </div>
        <div class="col-md-6">
          <select class="form-control" name = "cat">
          <option value="">Select One</option>
          <option selected value="'.$data['c_id'].'" >'.$data['c_name'].'</option>
  ');
             foreach($ob->product_sel() as $sel){
                      echo('<option value="'.$sel['c_id'].'" >'.$sel['c_name'].'</option>');
                  } 
                  echo('
          </select>
        </div>
        
  </div>

<div class="row">
        <div class="col-md-6">
          <input type="number" name="p-stock" class="form-control mt-4" value="'.$data['p_stock'].'">
        </div>
        <div class="col-md-6">
          <input type="number" name="p-price" class="form-control mt-4" value="'.$data['p_price'].'">
        </div>
        
</div>



  <div class="row">
        <div class="col-md-6">
          <input type="number" name="p-sale-price" class="form-control mt-4" value="'.$data['p_sale_price'].'">
        </div>
        
        <div class="col-md-6">
           <input type="file" name="p-img" class="form-control mt-4">
           <input type="hidden" name="img" value="'.$data['p_img'].'">
           
        </div>
  
  </div>
        

  <div class="row">
    <div class="col-md-12">
    <textarea name="p-dec" id=""  rows="3" class= "form-control mt-4" >'.$data['p_dec'].'</textarea>    	</div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <input type="submit" name="btn-edit-product" class="btn btn-warning mt-4">
</div>
</form>
  </div>
  ');

}
}

else{
  echo('
  <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">Products</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

  <!-- card heading -->
  <div class="cards__heading">
    <h3>Products</h3>
  </div>
  <!-- //card heading -->

  <!-- content block style 1-->
  <div class="card card_border p-lg-5 p-3 mb-4">
    <div class="card-body py-3 p-0">
      <form method="post" action="main.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <input type="" name="p-name" class="form-control" placeholder="Enter product name ">
        </div>
        <div class="col-md-6">
          <select class="form-control" name = "cat">
          <option value="">Select One</option>
  ');
             foreach($ob->product_sel() as $sel){
                      echo('<option value="'.$sel['c_id'].'" >'.$sel['c_name'].'</option>');
                  } 
                  echo('
          </select>
        </div>
        
  </div>

<div class="row">
        <div class="col-md-6">
          <input type="number" name="p-stock" class="form-control mt-4" placeholder="Enter stock  ">
        </div>
        <div class="col-md-6">
          <input type="number" name="p-price" class="form-control mt-4" placeholder="Enter price">
        </div>
        
</div>



  <div class="row">
        <div class="col-md-6">
          <input type="number" name="p-sale-price" class="form-control mt-4" placeholder="Enter sale price ">
        </div>
        
        <div class="col-md-6">
        <input type="file" name="p-img[]"  class="form-control mt-4"  multiple>
           
        </div>
  
  </div>
        

  <div class="row">
    <div class="col-md-12">
    <textarea name="p-dec" id=""  rows="3" class= "form-control mt-4"></textarea>    	</div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <input type="submit" name="btn-product" class="btn btn-warning mt-4">
</div>
</form>
  </div>
  ');
}
   ?>

</div>
</div>
<?php  include('footer.php'); ?>