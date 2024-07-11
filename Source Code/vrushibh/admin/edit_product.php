<?php
	
	session_start();
    if (isset($_SESSION['login'])) {

    }
    else
    {
        header("location:login.php");
    }

	include ('configdb.php');
	include('header.php');
    error_reporting(0);

    $result = mysqli_query($conn, "select * FROM product");
    $total = mysqli_num_rows($result);

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Items</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Products
                            </div>
                            <div class="card-body">
                            	<form action="delete_product_process.php" method="GET">
                                <div class="successmsg"><?php echo $_SESSION['delete']; unset($_SESSION['delete']); ?></div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Category</th>
                                            <th>Delete Product</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_array($result)) 
                                            {?> 
                                        <tr>
                                            <td><?php echo $row['p_name'] ?></td>
                                            <td><img class="imgcenter" width="50px" height="50px"src="../images/<?php echo $row['p_photo']?>"></td>
                                            <td><?php echo $row['p_cat']?></td>
                                            <td><a href="edit_product_process.php?id=<?php echo $row['p_id']; ?>">Edit</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            	</form>
                                <div>
                                    <div style="color: red;"><?php echo $_SESSION['error']['pname']; unset($_SESSION['error']['pname']); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php'); ?>