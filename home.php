<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Roboto'><link rel="stylesheet" href="style_book_index.css">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Roboto'><link rel="stylesheet" href="style_book_index.css">
<link rel="stylesheet" href="style_book_card.css">
<!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<style>
.box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap:1.5rem;
   max-width: 1200px;
   margin:0 auto;
   align-items: flex-start;
}
</style>
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="carousel">
	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">H.C Verma 1</div>
			<div class="num">01</div>
			<img src="https://3.bp.blogspot.com/-tkzv6oOcg2Y/W9r4DJoZrgI/AAAAAAAAAYk/J7RnjTSuWSwx61kExt0MNz_IkGuL8RQjgCLcBGAs/s400/41AnJ%252Bzt7iL._BO1%252C204%252C203%252C200_.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">H.C Verma 2</div>
			<div class="num">02</div>
			<img src="https://cdn.shopclues.com/images/detailed/78828/124011334_HC202_1500643182.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">O.P Tandon</div>
			<div class="num">03</div>
			<img
				src="https://3.bp.blogspot.com/-xvctOAjeeuQ/WheyYljmX0I/AAAAAAAAFhY/9acoa11KIOgQQp7SbONUt1F4fz5tZC1lgCLcBGAs/s1600/91NuMboG4KL.jpg"
			/>
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Atkins</div>
			<div class="num">04</div>
			<img src="https://www.oup.com.au/new_book_images/covers/9780198769866.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Arihant</div>
			<div class="num">05</div>
			<img src="https://bookwindow.in/image/uploads/1506505746buy-arihant-mathematics-master-resource-book-for-iit-jee-exam-arihant-publcation.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">Irodov</div>
			<div class="num">06</div>
			<img src="https://m.media-amazon.com/images/I/61n+461iagL.jpg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">NCERT for NEET biology</div>
			<div class="num">07</div>
			<img src="https://cdn.shopaccino.com/boookart/products/9789324196873-477634_l.jpg?v=447" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">MCGraw Hill</div>
			<div class="num">08</div>
			<img src="https://1.bp.blogspot.com/-kCZRvcBwaIM/Xzf88pvxThI/AAAAAAAAD0U/d3WXJmOfK7UAnpROMDhXTnq0cE7D4oRwwCLcBGAsYHQ/s969/WhatsApp%2BImage%2B2020-08-15%2Bat%2B20.19.48%2B%25282%2529.jpeg" />
		</div>
	</div>

	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">N Avasthi</div>
			<div class="num">09</div>
			<img src="https://imgs.search.brave.com/G5KUKmWqpoBNATwnWbrQ8EVRz-GkuRTKUS4cvNSC2QI/rs:fit:353:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5n/SjBBMm5PenpnTFBm/aU5zdkl6cGhBSGFK/NyZwaWQ9QXBp" />
		</div>
	</div>
	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title">R.D Sharma</div>
			<div class="num">10</div>
			<img src="https://imgs.search.brave.com/CJ4cu2g_unIG6RL7YpqMp1_qcWJQZggHz94Bryij6MY/rs:fit:344:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5W/SndkT282R05VZnZj/aWNqc2FZSl9BSGFL/TiZwaWQ9QXBp" />
		</div>
	</div>
</div>

<div class="cursor"></div>
<div class="cursor cursor2"></div>
<!-- partial -->
  <script  src="script_book_index.js"></script>





</div>
<!-------------------BOOKS LIST------------------->
<section class="products">

   <h1 class="title" style="color:white;">latest products</h1>
   <br>   <br>   <br>
   <div >
   <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
	
<form action="" method="post" class="box-container" >
  <div class = "card">
    <img src="https://images.unsplash.com/photo-1656618020911-1c7a937175fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc1MzQyNTE&ixlib=rb-1.2.1&q=80" alt="">
    <div class="card-content">
      <h2>
         <?php echo $fetch_products['name']; ?>
      </h2>

     
      <a href="#" class="button">
     
        <span class="material-symbols-outlined">
          
          <input type="submit   " value="add to cart" name="add_to_cart" class="btn">

        </span>
      </a>

    </div>
  </div>
  <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
  </form>

      <!-- <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
   
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div> -->

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>





      

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Do you need help or have any questions the link is below </p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>