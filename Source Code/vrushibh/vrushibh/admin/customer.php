<?php
	session_start();
	//error_reporting(0);
	if (isset($_SESSION['login'])) {

    }
    else
    {
        header("location:login.php");
    }
    include ('configdb.php');
	include('header.php');

	$query = "select * from customer";
    $result = mysqli_query($conn, $query);
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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                            while ($row = mysqli_fetch_assoc($result)) 
                                            {?> 
                                        <tr>
                                            <td><?php echo $row['c_username'] ?></td>
                                            <td><?php echo $row['c_phone'] ?></td>
                                            <td><?php echo $row['c_address'] ?></td>
                                            <td><a href="order_detail.php?id=<?php echo $row['c_id']; ?>">View Order</a></td>
                                        </tr>
                                         <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php'); ?>