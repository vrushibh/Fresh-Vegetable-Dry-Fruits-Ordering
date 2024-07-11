<?php
    include ('admin/configdb.php'); 
    include('header.php');

    if (isset($_SESSION['login'])) {
        
    }
    else {
        
        header("location:login.php");
    }

?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <form action="cart-action.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="background: #f5f5f5; font-size: 20px; color: red; font-weight: 600;"><?php echo $_SESSION['remove_product'];unset($_SESSION['remove_product']); ?></div>
                    <div class="table-main table-responsive">
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price (KG)</th>
                                    <th>Quantity (In KG)</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
                                  foreach ($_SESSION['cart'] as $key => $value) {
                                      # code...
                                    
                                         ?>   
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
    									<img class="img-fluid" src="images/<?php echo $value['image']; ?>" alt="" />
    								</a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
    									<?php echo $value['name']; ?>
    								    </a>
                                        <input type="hidden" name="productid[]" value="<?php echo $value['id']; ?>">
                                        </td>

                                        <td class="price-pr" data-price="<?php echo $value['price']; ?>">
                                            <p>₹ <?php echo $value['price']; ?></p>
                                        </td>
                                        <td class="quantity-box"><input type="number" value="1" class="c-input-text qty text" name="qty[]" min="1" max="15"></td>
                                        <td class="total-pr">
                                            <p><?php echo $value['price']; ?></p>
                                        </td>
                                        <td class="remove-pr">
                                            <a href="add-to-cart.php?id=<?php echo $value['id']; ?>&action1='remove'">
    									<i class="fas fa-times"></i>
    								</a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>

                        </table>
                       
                    </div>
                </div>
            </div>



            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5 gtotal">388</div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box">
                <?php if(empty($_SESSION['cart'])){
                       echo '<div class="ml-auto btn hvr-hover">Cart Is Empty</div>';
                    }
                    else{
                         echo '<input type="submit" name="submit" value="Checkout" class="ml-auto btn hvr-hover">';
                    }
                ?>
                </div>
            </div>

        </div>
    </form>
    </div>
    <!-- End Cart -->

   <?php include('footer.php'); ?>