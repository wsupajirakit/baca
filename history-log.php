<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Rca777 Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		
		<link rel="stylesheet" href="assets/css/my-custom.css" />
		
		<!-- 	font awesome -->
<!-- 		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
		<!-- 	font awesome -->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
<!-- 						<img src="assets/images/logo/RCA777.png" alt=""> -->
						<small>

							Rca777 Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								English
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu  dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="glyphicon glyphicon-chevron-right"></i>
										English
									</a>
								</li>

								<li>
									<a href="#">
										<i class="glyphicon glyphicon-chevron-right"></i>
										Thai
									</a>
								</li>

								

							
							</ul>
						</li>
						
						
						
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/profile.jpeg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

<!-- 				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div> -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text"> Member Setup </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="create-member.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Member
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="create-agent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Agent
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-status.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Status
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-keep.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Keep
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-return.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Return
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-structure.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Structure
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="user-online.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Online
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="sub-agent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Agent
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="monitor-casino.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Monitor Casino
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="change-password.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Change Password
								</a>

								<b class="arrow"></b>
							</li>

							<li class="active">
								<a href="history-log.php">
									<i class="menu-icon fa fa-caret-right"></i>
									History Log
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-trophy"></i>
							<span class="menu-text"> Dice </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="dice-summary-today.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Summary Today
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="dice-winandlose.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Win or lose by player
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-bill.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bill
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-bet-reject.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bet Reject
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dice-robot.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Robot
								</a>

								<b class="arrow"></b>
							</li>	

							<li class="">
								<a href="dice-result.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Result
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-trophy"></i>
							<span class="menu-text"> Card </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="card-summary-today.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Summary Today
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="card-winandlose.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Win or lose by player
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-bill.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bill
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-bet-reject.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bet Reject
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="card-robot.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Robot
								</a>

								<b class="arrow"></b>
							</li>	

							<li class="">
								<a href="card-result.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Result
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-money"></i>
							<span class="menu-text"> Cash </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="cash-setting.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Setting
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="cash-bank.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Bank
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-deposit-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Deposit List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-withdrawal-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Withdrawal List
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Report
								</a>

								<b class="arrow"></b>
							</li>	

							<li class="">
								<a href="cash-sub-agent-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Agent Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-user-report.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-report-credit-change-manual.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Report Credit Change Manual
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-control-auto-deposit.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Control Auto Deposit
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-control-live-chat.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Control Live Chat
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="cash-user-group-bank.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Group Bank
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					


					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
                <a href="#">Member Setup</a>
              </li>
              <li class="active">History Log</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
<div class="row">
    <div class="widget-box hidden-boder" id="reloadLog">
        <div class="widget-header hidden">
            <div class="widget-toolbar hidden">
                <a href="https://mm8betag.234ag.net/main#" data-action="reload">
                    <i class="ace-icon fa fa-refresh"></i>
                </a>
            </div>
        </div>
        <div class="widget-body">
            <div class="widget-main">
                <div class="row">
                    <div class="col-xs-12 widthTable">
                        <form class="form-horizontal" id="frmSearchDeposit">
                        </form>
                        <div class="tabbable">
                            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                                <li class="active">
                                    <a data-toggle="tab" href="https://mm8betag.234ag.net/main#home4" aria-expanded="true">Login Log</a>
                                </li>

                                <li class="">
                                    <a data-toggle="tab" href="https://mm8betag.234ag.net/main#profile4" aria-expanded="false" onclick="searchLog(&#39;changePassLog&#39;);">Change Password Log</a>
                                </li>

                                <li class="">
                                    <a data-toggle="tab" href="https://mm8betag.234ag.net/main#dropdown14" aria-expanded="false" onclick="searchLog(&#39;setupLog&#39;);">Log Setting</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="home4" class="tab-pane active">
                                    <div class="table-responsive">
                                        <table id="tbLoginLog" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"> User ID </th>
                                                    <th class="text-center"> Login Date </th>
                                                    <th class="text-center"> Logout Date </th>
                                                    <th class="text-center"> Login IP </th>
                                                    <th class="text-center"> Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>            <tr>
            <td align="center">Admin</td>
            <td align="center">2019-07-03 03:15:14</td>
            <td align="center"></td>
            <td align="center">192.168.1.1</td>
            <td align="center">A</td>
        </tr>
            <tr>
            <td align="center">Admin</td>
            <td align="center">2019-07-03 03:15:14</td>
            <td align="center"></td>
            <td align="center">192.168.1.1</td>
            <td align="center">A</td>
        </tr>
            <tr>
            <td align="center">Admin</td>
            <td align="center">2019-07-03 03:15:14</td>
            <td align="center"></td>
            <td align="center">192.168.1.1</td>
            <td align="center">A</td>
        </tr>
            <tr>
            <td align="center">Admin</td>
            <td align="center">2019-07-03 03:15:14</td>
            <td align="center"></td>
            <td align="center">192.168.1.1</td>
            <td align="center">A</td>
        </tr>
            
    </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="profile4" class="tab-pane">
                                    <div class="table-responsive">
                                        <table id="tbChangePassLog" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"> Main User </th>
                                                    <th class="text-center"> Sub User </th>
                                                    <th class="text-center"> Edit User </th>
                                                    <th class="text-center"> Date/Time </th>
                                                    <th class="text-center"> IP </th>
                                                    <th class="text-center"> Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="6" align="center">No Data</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="dropdown14" class="tab-pane">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="col-xs-12 col-sm-2">
                                                    <input type="text" id="user" name="user" placeholder="User" value="" class="col-xs-12 col-sm-12">
                                                </div>
                                                <div class="col-xs-12 col-sm-2">
                                                    <button type="button" name="search" id="search" class="btn btn-primary btn-sm" onclick="searchLog(&#39;setupLog&#39;);">
                                                        <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                        Search                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="table-responsive">
                                                <table id="tbSetupLog" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"> Date/Time </th>
                                                            <th class="text-center"> Agent </th>
                                                            <th class="text-center"> User </th>
                                                            <th class="text-center"> Log Type </th>
                                                            <th class="text-center"> Old Value </th>
                                                            <th class="text-center"> New Value </th>
                                                            <th class="text-center"> IP </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="7" align="center">No Data</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>						

					

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
