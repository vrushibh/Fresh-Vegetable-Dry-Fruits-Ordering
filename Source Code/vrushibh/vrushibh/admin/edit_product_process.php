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
	$id = $_GET['id'];
    $edit_result = mysqli_query($conn, "select * FROM product WHERE p_id='$id'");
    $row= mysqli_fetch_assoc($edit_result);
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Item</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Here 
                            </div>
                            <div class="card-body">
                            	<form action="edit_product_process_back.php" method="POST">
                            		<input type="hidden" name="pid" value="<?php echo $id; ?>">
                                <div class="successmsg"><?php echo $_SESSION['Success']; unset($_SESSION['Success']); ?></div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Category</th>
                                            <th>KG</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                           
                                        <tr>
                                            <td><input type="text" name="pname" value="<?php echo $row['p_name'] ?>"></td>
                                            <td><input type="file" name="pfile" id="fileToUpload"></td>
                                            <td>
                                            	<select name="pcat">
												  <option value="vegetables">Vegetables</option>
												  <option value="fruits">Fruits</option>
												  <option value="dryfruits">DryFruits</option>
												</select>
                                            </td>
                                            <td><input type="text" name="pkg" value="<?php echo $row['p_detail'] ?>"></td>
                                            <td><input type="text" name="pprice" value="<?php echo $row['p_price'] ?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                 <div class="submit-button">
                                    <input type="submit" name="submit" value="Update">
                                </div>
                            	</form>
                            	 <div>
                                    <div style="color: red;"><?php echo $_SESSION['perror']; unset($_SESSION['perror']); ?></div>
                                    <div style="color: red;"><?php echo $_SESSION['error']['pname']; unset($_SESSION['error']['pname']); ?></div>
                                    <div style="color: red;"><?php echo $_SESSION['error']['pfile']; unset($_SESSION['error']['pfile']); ?></div>
                                    <div style="color: red;"><?php echo $_SESSION['error']['pkg']; unset($_SESSION['error']['pkg']); ?></div>
                                    <div style="color: red;"><?php echo $_SESSION['error']['pprice']; unset($_SESSION['error']['pprice']); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php'); ?>