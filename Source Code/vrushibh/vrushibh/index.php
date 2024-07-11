
    <?php 
        include('header.php'); 
        include ('admin/configdb.php');

        $result = mysqli_query($conn, "select * FROM product LIMIT 8");
        $total = mysqli_num_rows($result);
    ?>



 

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php">Vegetables</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/fruits354.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php">Fruits</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/dryfruits.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php">Dry Fruits</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/photo-1.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/photo-2.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
        <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fruits & Vegetables</h1>
                        <p>We are developing green house technology that promotes vegetable plants growth organically that will help for us.</p>
                    </div>
                </div>
            </div>
      
            <div class="row special-list">
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="images/<?php echo $rows['p_photo']?>" class="img-fluid" alt="Image">
                        </div>
                        <div class="why-text">
                            <h4><?php echo $rows['p_name'] ?></h4>
                            <h5> ₹<?php echo $rows['p_price']?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>  
            </div>
        </div> 
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Organic Veggies/Fruits</h1>
                        <p>We are always follow the organic method while farming because its good & beneficial for out health.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Cabbage Benefits</h3>
                                <p>Cabbage is frequently recommended for people who want to lose weight healthily. Since the vegetable is packed with many beneficial vitamins, minerals, and other nutrients, including water and fiber, it is a healthy dietary option for people looking to eat healthier and shedding pounds. It may also low in calories, containing only 33 calories in a cup of the cooked vegetable.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Carrot Benefits</h3>
                                <p>For those who wish to improve their diet through skin products, carrots are a wonderful snack. As we all know, they can treat acne, dermatitis, acne, rash, and other skin diseases. In addition to the antioxidant content, they also contain β-carotene. What plays a role in healing? Scars and spots on the skin. Eat more ingredients to get the full nutritional benefits.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Organic Vegetables Benefits</h3>
                                <p>Organic foods usually do not contain toxic substances as they do not use harmful substances like chemicals, pesticides, drugs, preservatives. The body's immunity is also strengthened by the consumption of organic food. It tastes better and is considered beneficial for the growing skin. Organic food has higher nutritional content than chemical-rich foods. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->

 <?php include('footer.php'); ?>