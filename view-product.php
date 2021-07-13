
<?php include('header.php'); ?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">View Products</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>View Products</h3>
    </div>

    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
     <section class="container-fluid">

	
     <div class="search-box">
          <form>
            <input  class="light-table-filter" data-table="order-table" placeholder="Search Here..." type="search" id="search">
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div>
	   <!-- <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /> -->

    	<table class="order-table table">
		<thead>
			<tr>
				<th>Name</th>
				<th>catlog</th>
				<th>stock</th>
                <th>Price</th>
                <th>sale Price</th>
                <th>images</th>
                <th>Date</th>
                <th>Action</th>
                
                
			</tr>
		</thead>
		<tbody>
       
            <?php
            foreach($ob->view_pro() as $view){
                echo('
                <tr>
                    <td>'.$view['p_name'].'</td>            
                    <td>'.$view['c_name'].'</td>            
                    <td>'.$view['p_stock'].'</td>            
                    <td>'.$view['p_price'].'</td>            
                    <td>'.$view['p_sale_price'].'</td>            
                    <td><img src="assets/images/product/'.$view['p_img'].'"></td>            
                    <td>'.$view['p_datetime'].'</td>
                    <td>
                    <a href="move-to-trash.php?id='.$view['p_id'].'"><i class="fa fa-trash"></i></a>
                    <a href="product.php?pid='.$view['p_id'].'"><i class="fa fa-edit"></i></a>
                    </td>
                        
                    </tr>        

                ');

            }
            ?>
		
		</tbody>
	</table>

  </section>

  </div>
  </div>
</div>
</div>
<?php include('footer.php'); 