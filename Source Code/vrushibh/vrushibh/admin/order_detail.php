<?php
	session_start();
	include ('configdb.php');
	include('header.php');
	
	$cid = $_GET['id'];


	// $query = "select * from 'order_detail' as o where 'customer_id'=$cid
 //    left join product as p on o.product_id=p.p_id";
    $query = "SELECT * FROM order_detail LEFT JOIN product ON order_detail.product_id = product.p_id WHERE order_detail.customer_id = $cid";
    $result = mysqli_query($conn, $query);
    $total=0;
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Customer Details</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Item Name</th>
                                            <th>Price</th>
                                            <th>Qty.</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php  
                                            while ($row = mysqli_fetch_assoc($result)) 
                                            {?> 
                                        <tr>
                                            <td><img class="imgcenter" width="50px" height="50px"src="../images/<?php echo $row['p_photo']?>"></td>
                                            <td><?php echo $row['p_name']; ?></td>
                                            <td><?php echo $row['p_price']; ?></td>
                                            <td><?php echo $row['order_qty']; ?></td>
                                            <td><?php echo $price = $row['order_qty']*$row['p_price']; $total+=$price; ?></td>
                                            
                                        </tr>
                                         <?php }  ?>
                                         <tr>
                                         	<td></td>
                                         	<td></td>
                                         	<td></td>
                                         	<td><b>Grand Total:</b></td>
                                         	<td><b><?php echo $total; ?></b></td>
                                         </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php'); ?>