<?php 
    session_start();
    error_reporting(0);
    include ('configdb.php');

    if (isset($_SESSION['login'])) {

    }
    else
    {
        header("location:login.php");
    }

    $result = mysqli_query($conn, "select * FROM product");
    $total = mysqli_num_rows($result);

    $veg_result = mysqli_query($conn, "select p_cat FROM product WHERE p_cat='vegetables'");
    $veg_total = mysqli_num_rows($veg_result);

    $frt_result = mysqli_query($conn, "select p_cat FROM product WHERE p_cat='fruits'");
    $frt_total = mysqli_num_rows($frt_result);

    $dry_result = mysqli_query($conn, "select p_cat FROM product WHERE p_cat='dryfruits'");
    $dry_total = mysqli_num_rows($dry_result);
?>
<?php include('header.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Grocery Items</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                            <?php   
                                                echo "<div style='font-size: 22px; font-weight: 700;'>".$total."</div>"; 
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Vegetables</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php   
                                            echo "<div style='font-size: 22px; font-weight: 700;'>".$veg_total."</div>"; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Fruits</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php   
                                            echo "<div style='font-size: 22px; font-weight: 700;'>".$frt_total."</div>"; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Dry Fruits</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                            <?php   
                                                echo "<div style='font-size: 22px; font-weight: 700;'>".$dry_total."</div>"; 
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Total Products
                            </div>
                            <div class="card-body">
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
                                        <?php
                                            while ($row = mysqli_fetch_array($result)) 
                                            {?> 
                                        <tr>
                                            <td><?php echo $row['p_name'] ?></td>
                                            <td><img class="imgcenter" width="50px" height="50px"src="../images/<?php echo $row['p_photo']?>"></td>
                                            <td><?php echo $row['p_cat']?></td>
                                            <td><?php echo $row['p_detail']?></td>
                                            <td><?php echo $row['p_price']?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include('footer.php'); ?>