
<?php include('header.php'); 


?>
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">View User Accounts</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- card heading -->
    <div class="cards__heading">
      <h3>View User Accounts</h3>
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
				<th>Father</th>
				<th>Email</th>
                <th>Password</th>
                <th>Number</th>
                <th>Role</th>
                <th>images</th>
                <th>Date</th>
                
                
                
			</tr>
		</thead>
		<tbody>
       
            <?php
            foreach($ob->view_accounts() as $view){
                echo('
                <tr>
                    <td>'.$view['u_full_name'].'</td>            
                    <td>'.$view['u_father_name'].'</td>            
                    <td>'.$view['u_email'].'</td>            
                    <td>'.$view['u_pasword'].'</td>            
                    <td>'.$view['u_no'].'</td>
                    <td>'.$view['u_role'].'</td>
                                
                    <td><img src="assets/images/user/'.$view['u_img'].'"></td>            
                    <td>'.$view['u_datetime'].'</td>
                    <td>
                    <a href=""><i class="fa fa-trash"></i></a>
                    <a href=""><i class="fa fa-edit"></i></a>
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