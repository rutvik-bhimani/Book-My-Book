<?php 
        include_once 'connection.php';
        session_start();
        if (!empty($_SESSION['user'])) 
        {
            $id=$_REQUEST['id'];
            $sql = "SELECT * FROM book WHERE b_id=$id";
            $result = mysqli_query($conn,$sql) or die("Error Product not Found..");
            $row= mysqli_fetch_assoc($result);
            $bid = $row['b_id'];
            $pname = $row['b_name'];
            $price = $row['b_price'];
            $img = $row['b_img'];
            $customerid = $_SESSION['login_id'];


            echo "$id\t $bid\t $pname\t $price\t $img\t $customerid";

            
            //try 
           // {
            //    $sql1 = "INSERT INTO cart(cart_id,b_id,c_id,product_name,quantity,price,img) VALUES(0,$bid,$customerid,$pname,1,$price,'$img')";
             //   $result1 = mysqli_query($conn,$sql1);
              //  if (isset($result1)) 
               // {
                //    header("Location: shopping-cart.php?cid=$customerid");
               // }
                //else
                //{
                 //   echo "<script>alert('Something Went Wrong..')<script>";
                //}
           // }   
            //catch (Exception $e) 
            //{
             //   echo($e->getmessage());    
           // }
        }
        else
        {
            header("Location: login.php");
        }
 ?>