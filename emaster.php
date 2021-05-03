<?php
/**
 * Created by PhpStorm.
 * User: troot
 * Date: 1/4/15
 * Time: 2:04 AM
 */
$base_url="http://localhost/hms/";

$ses = new \sessionManager\sessionManager();
//$ses->start();
$name=$ses->Get("name");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $GLOBALS['title'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base_url;?>dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url;?>dist/css/datepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $base_url;?>dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo $base_url;?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $base_url;?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $base_url;?>dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $base_url;?>dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/dataTable.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/timepicker.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/calendar.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/custom_2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/app.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style type="text/css">
	.auto-style1 {
		font-family: Georgia;
	}
	.auto-style2 {
		color: #C11212;
	}
	.auto-style3 {
		vertical-align: baseline;
		margin-bottom: 0px;
	}
	</style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="https://nith.ac.in/" >
			<img src="nith.png" height="40" width="42" class="auto-style3" style="float: left"></a><span class="auto-style1"><span lang="en-in">&nbsp;
			</span><a class="navbar-brand titlehms" href="<?php echo $base_url.'edashboard.php'?>"><span class="auto-style2"><span lang="en-in">NIT-H 
			H</span>ostel Management System</span></a></span>
        </div>
        <!-- /.navbar-header -->
		<div class="pull-right">
                    <strong>
<!--                        <a id="button1" onclick="changeFontSize(this)"><span class="topa">A<sup>+</sup></span></a>&nbsp;&nbsp;
                        <a id="button2" onclick="changeFontSize(this)"><span class="topa">A<sup>-</sup></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                        <a href="https://nith.ac.in"><i class="fa fa-home"></i> 
					<span class="auto-style2">Home
                        </span>
                        </a>
                        | <a href="http://172.16.28.5/"><i class="fa fa-internet-explorer"></i> 
					<span class="auto-style2">Intranet
                        </span>
                        </a>
                        | <a href="https://eoffice.nith.ac.in/"><i class="fa fa-envelope"></i> 
					<span class="auto-style2">eOffice
                        </span>
                        </a>
                        | <a href="https://nith.ac.in/td/index.html"><i class="fa fa-phone"></i> 
					<span class="auto-style2">Directory
                        </span>
                        </a>
                        | <a href="https://nith.ac.in/contact-us"><i class="fa fa-phone"></i> 
					<span class="auto-style2">Contact Us
                        </span>
                        </a>
                    </strong>
                                        <!--&nbsp; | &nbsp;-->
                       <div id="google_translate_element"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"></div>
						   </div></div>
                                   </div>
                <div class="pull-left">
                                                            <span class="top-email">
                        <!--                        &nbsp; | &nbsp;-->
                        <i class="fa fa-envelope"></i> &nbsp;<a target="_blank" href="https://mail.google.com/a/nith.ac.in"><span class="auto-style2">Web Mail</span></a>
                        &nbsp; | &nbsp;
                        <i class="fa fa-link"></i> &nbsp;<a href="https://portfolios.nith.ac.in/index.php?/login" target="_blank"><span class="auto-style2">Faculty Portfolio</span></a>
                    </span>
                </div>
            </div>

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms"><?php echo $name?></h5>
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo $base_url;?>ui/usr/profilee.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
                    </li>

                    <li class="divider"></li>
                    <li><a href="<?php echo $base_url;?>logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->


        <!-- /.navbar-static-side -->
    </nav>
