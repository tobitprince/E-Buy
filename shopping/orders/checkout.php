<?php 
session_start();

require_once("Createdb.php");


$db=new Createdb("Order","Userorders");


if (isset($_POST['submitImage']))
{


			if ($_GET['action']=='submity') 
				{
					$id = $_SESSION['username'];
					$price = $product['product_price'];
					$namee = $product['product_name'];
					$img = $product['product_image'];
											
					$sql = "INSERT INTO userorders(Username, Product Name, Product Price,Product Image)VALUES('$id','$namee', '$price','$qnty','$total');";
					mysqli_query($db, $sql);

					echo "<script>alert('Order Submitted')</script>";
 					echo "<script>window.location='../index.php'</script>";
				}
				else
				{
					$db->error();
				}

}
 ?>