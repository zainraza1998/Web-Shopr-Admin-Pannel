<?php session_start();

class over_store{

	function con(){
		$con = mysqli_connect('localhost','root','','mybase');
		return $con;
	}



	function user_account(){
		if(isset($_POST['btn-user'])){

			$a = $_POST['fname'];
			$b = $_POST['father'];
			$c = $_POST['email'];
			$d = $_POST['psw'];
			$e = $_POST['no'];
			$f = $_POST['role'];
			$img = $_FILES['img']['name'];
			
			$qu = mysqli_query($this->con(),"INSERT INTO `user_login`
			( `u_full_name`, `u_father_name`, `u_email`, `u_pasword`, `u_no`, `u_role`, `u_img`) VALUES ('$a','$b','$c','$d','$e',$f,'$img')");

			move_uploaded_file($_FILES['img']['tmp_name'],"assets/images/user/".$img);
		}
	}


	function user_login(){
		

			$email = $_GET['username'];
			$psw = $_GET['password'];

			$qu = mysqli_query($this->con(),"SELECT * FROM `user_login` WHERE u_email = '$email' and u_pasword = '$psw'");
			$count = mysqli_num_rows($qu);
			if($count == 0){

				echo("1");
			}
			else{
				$_SESSION['user'] = $_GET['username'];
				
			}
			
		
	}

	function user_data(){
		$qu = mysqli_query($this->con(),"SELECT  * FROM user_login WHERE u_email = '".$_SESSION['user']."' ");
		return $qu;
	}


	function add_catlog(){
		if(isset($_POST['btn-catlog'])){
			$a = $_POST['catlog'];

			$query = mysqli_query($this->con(),"INSERT INTO `catlog`( `c_name`) VALUES ('$a')");
			
			if($query){
				echo ('<script>alert("Done")</script>');

			}
			else{
				echo ('<script>alert("Not Done")</script>');
				
			}
			return $query;
		}
	}


	function product_sel(){
		$query = mysqli_query($this->con(),"SELECT * FROM `catlog`");
		return $query;
	}


	function add_product(){
		if(isset($_POST['btn-product'])){

			$a = $_POST['p-name'];
			$b = $_POST['cat'];
			$c = $_POST['p-stock'];
			$d = $_POST['p-price'];
			$e = $_POST['p-sale-price'];
			$img = $_FILES['p-img']['name'];
			
			$im = json_encode($img);
			$txt = $_POST['p-dec'];

			$query = mysqli_query($this->con(),"INSERT INTO `product`(`p_name`,`p_cid`, `p_stock`, `p_price`, `p_sale_price`,   `p_img`, `p_dec`)
			 VALUES ('$a',$b,$c,$d,$e,'$im','$txt')");

				$count = count($img);
				for($i=0; $i< $count ; $i++){
					$tmp = $_FILES['p-img']['tmp_name'][$i];
					move_uploaded_file($tmp,"assets/images/product/".$img[$i]);
				}
			 
			 return $query;
			
		}
	}


	
	function add_edit_product(){
		if(isset($_POST['btn-edit-product'])){

			$pid = $_GET['pid'];
			$a = $_POST['p-name'];
			$b = $_POST['cat'];
			$c = $_POST['p-stock'];
			$d = $_POST['p-price'];
			$e = $_POST['p-sale-price'];
			$img = $_FILES['p-img']['name'];
			$txt = $_POST['p-dec'];
			if($img == ''){
				$im = $_POST['img'];
			}
			else{
				$im = $_FILES['p-img']['name'];

			}

			$query = mysqli_query($this->con(),
			"UPDATE `product` SET `p_name`='$a',`p_dec`='$txt',`p_stock`=$c,
			`p_price`=$d,`p_sale_price`=$e,`p_cid`=$b,`p_img`='$im' WHERE p_id=$pid"
			 );

			 move_uploaded_file($_FILES['p-img']['tmp_name'],"assets/images/product/".$im);
			 return $query;
			
		}
	}


	function total_pro(){
		$qu = mysqli_query($this->con(), "SELECT COUNT(p_id) AS total FROM `product`");
		return $qu;

	}

	function total_pro_qty(){
		$qu = mysqli_query($this->con(), "SELECT COUNT(p.p_cid),c.c_name FROM `product`AS p LEFT JOIN catlog AS c on p.p_cid=c.c_id GROUP BY c.c_name");
		return $qu;

	}


	function view_pro(){
		$qu = mysqli_query($this->con(),"SELECT p.p_id,p.p_name,c.c_name,p.p_stock,p.p_price,p.p_sale_price,p.p_img,p.p_datetime
		 FROM `product` AS p LEFT JOIN catlog AS c ON p.p_cid=c.c_id where p.p_status=1");
		return $qu;
	}

	function trash_pro(){
		$qu = mysqli_query($this->con(),"SELECT p.p_id,p.p_name,c.c_name,p.p_stock,p.p_price,p.p_sale_price,p.p_img,p.p_datetime
		 FROM `product` AS p LEFT JOIN catlog AS c ON p.p_cid=c.c_id where p.p_status=2");
		return $qu;
	}



	function move_to_trash(){
		$a = $_GET['id'];
		$qu = mysqli_query($this->con(),"UPDATE `product` SET p_status=2 WHERE p_id=$a");
		return $qu;
	}


	function move_to_view_pro(){
		$a = $_GET['mid'];
		$qu = mysqli_query($this->con(),"UPDATE `product` SET p_status=1 WHERE p_id=$a");
		return $qu;
	}


	function edit_pro($a){
		$qu = mysqli_query($this->con(),"SELECT * FROM product AS p LEFT JOIN catlog AS c ON p.p_cid=c.c_id where p_id=$a");
		return $qu;
	}


	function view_accounts(){
		$query  = mysqli_query($this->con(),"SELECT * FROM `user_login`");
		return $query;
	}

	function daily_order(){
		$qu = mysqli_query($this->con(),"
		SELECT COUNT(order_id) as c FROM `order_tbl` WHERE date_format(datetime,'%d-%m-%Y') = date_format(now(),'%d-%m-%Y')");
		return $qu;
	}

	function month_order(){
		$qu = mysqli_query($this->con(),"
		SELECT COUNT(order_id) as c FROM `order_tbl` WHERE date_format(datetime,'%m-%d-%Y') BETWEEN date_format(now(),'%m-%01-%Y') AND date_format(now(),'%m-%31-%Y')
		");
		return $qu;
	}



}

$ob = new over_store;

if(isset($_POST['btn-product'])){
	$ob->add_product();
}

if(isset($_GET['btn_login'])){
	$ob->user_login();
}

?>"