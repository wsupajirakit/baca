<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Customize ตั้งค่าเว็บ</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/select2.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
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
						<small>
							<i class="fa fa-leaf"></i>
							Ace Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="../assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="../assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
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

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
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
				</div><!-- /.sidebar-shortcuts -->






        <ul class="nav nav-list">
          <li>
            <a href="index.php">
              <i class="menu-icon fa fa-tachometer"></i>
              <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-users"></i>
              <span class="menu-text"> User Setup </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="">
                <a href="create-member.php">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Create User
                </a>

                <b class="arrow"></b>
              </li>


            </ul>
          </li>


          <li class="active open">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-cogs"></i>
              <span class="menu-text"> Customize </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="active">
                <a href="#">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Image Logo Banner
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
								<a href="#">Customize</a>
							</li>
							<li class="active">ตั้งค่า</li>
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
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>ตั้งค่า Logo / Banner</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- <div class="clearfix">
									<div class="pull-right">
										<span class="green middle bolder">Choose result page type: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div id="toggle-result-page" data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">1</span>

													<input type="radio" value="1" />
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">2</span>

													<input type="radio" value="2" />
												</label>
											</div>
										</div>
									</div>
								</div> -->

								<!-- <div class="hr dotted"></div> -->

								<div>
									<div class="row search-page" id="search-page-1">
										<div class="col-xs-12">
											<div class="row">


												<div class="col-xs-12 col-sm-12">

													<div class="row">
														<div class="col-xs-6 col-sm-4 col-md-3">
															<div class="thumbnail search-thumbnail">
																<!-- <span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span> -->

																<img class="media-object" src="https://sagaming88.com/wp-content/uploads/2019/03/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99-SA-Gaming-%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C.jpg"/>
																<div class="caption">
																	<div class="clearfix">
																		<span class="pull-right label label-grey info-label">โลโก้</span>

																		<!-- <div class="pull-left bigger-110">
																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star-half-o orange2"></i>

																			<i class="ace-icon fa fa-star light-grey"></i>
																		</div> -->
																	</div>

																	<h3 class="search-title">
																		<a href="edit.php?id=1001&element=1" class="blue">LOGO #1</a>
																	</h3>
																	<!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p> -->
																</div>
															</div>
														</div>

                            <div class="col-xs-6 col-sm-4 col-md-3">
                              <div class="thumbnail search-thumbnail">
                                <!-- <span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span> -->

                                <img class="media-object" src="https://sagaming88.com/wp-content/uploads/2019/03/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99-SA-Gaming-%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C.jpg"/>
                                <div class="caption">
                                  <div class="clearfix">
                                    <span class="pull-right label label-grey info-label">โลโก้</span>

                                    <!-- <div class="pull-left bigger-110">
                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star-half-o orange2"></i>

                                      <i class="ace-icon fa fa-star light-grey"></i>
                                    </div> -->
                                  </div>

                                  <h3 class="search-title">
                                  	<a href="edit.php?id=1001&element=2" class="blue">LINE ID #1</a>
                                  </h3>
                                  <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p> -->
                                </div>
                              </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3">
                              <div class="thumbnail search-thumbnail">
                                <!-- <span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span> -->

                                <img class="media-object" src="https://sagaming88.com/wp-content/uploads/2019/03/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99-SA-Gaming-%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C.jpg"/>
                                <div class="caption">
                                  <div class="clearfix">
                                    <span class="pull-right label label-grey info-label">โลโก้</span>

                                    <!-- <div class="pull-left bigger-110">
                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star-half-o orange2"></i>

                                      <i class="ace-icon fa fa-star light-grey"></i>
                                    </div> -->
                                  </div>

                                  <h3 class="search-title">
                                  	<a href="edit.php?id=1001&element=3" class="blue">QR CODE #1</a>
                                  </h3>
                                  <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p> -->
                                </div>
                              </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3">
                              <div class="thumbnail search-thumbnail">
                                <!-- <span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span> -->

                                <img class="media-object" src="https://sagaming88.com/wp-content/uploads/2019/03/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99-SA-Gaming-%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C.jpg"/>
                                <div class="caption">
                                  <div class="clearfix">
                                    <span class="pull-right label label-grey info-label">โลโก้</span>

                                    <!-- <div class="pull-left bigger-110">
                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star orange2"></i>

                                      <i class="ace-icon fa fa-star-half-o orange2"></i>

                                      <i class="ace-icon fa fa-star light-grey"></i>
                                    </div> -->
                                  </div>

                                  <h3 class="search-title">
                                  	<a href="edit.php?id=1001&element=4" class="blue">BANNER #1</a>
                                  </h3>
                                  <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p> -->
                                </div>
                              </div>
                            </div>


													</div>

													<div class="space-12"></div>


                          <div class="page-header">
                            <h1>ตั้งค่า Youtube </h1>
                          </div><!-- /.page-header -->

                          <!-- <?php
                          $url = "https://www.youtube.com/watch?v=DFEVA5-INzM";

                              $doc = new DOMDocument();
                              $doc->preserveWhiteSpace = FALSE;
                              $doc->loadHTMLFile($url);

                              $title_div = $doc->getElementById('eow-title');
                              $title = $title_div->nodeValue;

                              $title = iconv(mb_detect_encoding($title, mb_detect_order(), true), "UTF-8", $title);
                              //
                              // var_dump($title);
                              // exit;
                          ?> -->

													<div class="row">
														<div class="col-xs-12">
															<div class="media search-media">
																<div class="media-left">
											                 <iframe width="300" height="175" src="https://www.youtube.com/embed/DFEVA5-INzM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
																</div>

																<div class="media-body">
																	<div>
																		<h4 class="media-heading">
																			<a href="#" class="blue">Youtube #1</a>
																		</h4>
																	</div>
																	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

																	<div class="search-actions text-center">
																		<!-- <span class="text-info">$</span> -->

																		<span class="blue bolder bigger-150">ตำแหน่ง xx</span>

																		<div class="action-buttons bigger-125">

																		</div>
																		<a href="#" class="search-btn-action btn btn-sm btn-block btn-info">แก้ไข</a>
																	</div>



																</div>
															</div>

                              <div class="media search-media">
                                <div class="media-left">
                                       <iframe width="300" height="175" src="https://www.youtube.com/embed/DFEVA5-INzM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <div class="media-body">
                                  <div>
                                    <h4 class="media-heading">
                                      <a href="#" class="blue">Youtube #1</a>
                                    </h4>
                                  </div>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

                                  <div class="search-actions text-center">
                                    <!-- <span class="text-info">$</span> -->

                                    <span class="blue bolder bigger-150">ตำแหน่ง xx</span>

                                    <div class="action-buttons bigger-125">

                                    </div>
                                    <a href="#" class="search-btn-action btn btn-sm btn-block btn-info">แก้ไข</a>
                                  </div>



                                </div>
                              </div>


                              <div class="media search-media">
                                <div class="media-left">
                                       <iframe width="300" height="175" src="https://www.youtube.com/embed/DFEVA5-INzM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <div class="media-body">
                                  <div>
                                    <h4 class="media-heading">
                                      <a href="#" class="blue">Youtube #1</a>
                                    </h4>
                                  </div>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

                                  <div class="search-actions text-center">
                                    <!-- <span class="text-info">$</span> -->

                                    <span class="blue bolder bigger-150">ตำแหน่ง xx</span>

                                    <div class="action-buttons bigger-125">

                                    </div>
                                    <a href="#" class="search-btn-action btn btn-sm btn-block btn-info">แก้ไข</a>
                                  </div>



                                </div>
                              </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div class="row search-page" id="search-page-2">
										<div class="col-xs-12 col-md-10 col-md-offset-1">
											<div class="search-area well no-margin-bottom">
												<form>
													<div class="row">
														<div class="col-md-6">
															<div class="input-group">
																<input type="text" class="form-control" name="search" value="Hello World" />
																<div class="input-group-btn">
																	<button type="button" class="btn btn-primary btn-sm">
																		<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>
												</form>

												<div class="space space-6"></div>
												<span class="grey">About 263,000,000 results (0.74 seconds)</span>
											</div>

											<div class="search-results">
												<div class="search-result">
													<h5 class="search-title">
														<a href="#">&quot;Hello, World!&quot; - Wikipedia, the free encyclopedia</a>
													</h5>
													<a class="text-success" href="#">en.wikipedia.org</a>

													<p class="search-content">
														A &quot;
														<b>Hello</b>
,
														<b>World</b>
!&quot; program is a computer program that outputs &quot;
														<b>Hello</b>
,
														<b>World</b>!&quot; (or some variant thereof) on a display device. Because it is typically one of the ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello World! - GNU Project</a>
													</h5>
													<a class="text-success" href="#">www.gnu.org</a>

													<p class="search-content">
														<b>Hello World</b>
! How the way people code “
														<b>Hello World</b>” varies depending on their age and job ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">HelloWorld.java - Introduction to Programming in Java</a>
													</h5>
													<a class="text-success" href="#">introcs.cs.princeton.edu</a>

													<p class="search-content">
														<b>HelloWorld</b>
														code in Java. ...
														<b>HelloWorld</b>
.java. Below is the syntax highlighted version of
														<b>HelloWorld</b>.java from ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello, World! - Learn Python - Free Interactive Python Tutorial</a>
													</h5>
													<a class="text-success" href="#">www.learnpython.org</a>

													<p class="search-content">
														<b>Hello</b>
,
														<b>World</b>! Python is a very simple language, and has a very straightforward syntax. It encourages programmers to program without boilerplate (prepared) ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello World · GitHub Guides</a>
													</h5>
													<a class="text-success" href="#">guides.github.com</a>

													<p class="search-content">
														The
														<b>Hello World</b>
														project is a time-honored tradition in computer programming. It is a simple exercise that gets you started when learning something new. Let's get ...
													</p>
												</div>
											</div>

											<div class="search-area well well-sm text-center">
												<ul class="pagination">
													<li class="disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li>
														<a href="#">4</a>
													</li>

													<li>
														<a href="#">5</a>
													</li>

													<li>
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="../assets/js/tree.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/holder.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

				//data for tree element
				var category = {
					'for-sale' : {text: 'For Sale', type: 'folder'}	,
					'vehicles' : {text: 'Vehicles', type: 'item'}	,
					'rentals' : {text: 'Rentals', type: 'item'}	,
					'real-estate' : {text: 'Real Estate', type: 'item'}	,
					'pets' : {text: 'Pets', type: 'item'}	,
					'tickets' : {text: 'Tickets', type: 'item'}
				}
				category['for-sale']['additionalParameters'] = {
					'children' : {
						'appliances' : {text: 'Appliances', type: 'item'},
						'arts-crafts' : {text: 'Arts & Crafts', type: 'item'},
						'clothing' : {text: 'Clothing', type: 'item'},
						'computers' : {text: 'Computers', type: 'item'},
						'jewelry' : {text: 'Jewelry', type: 'item'},
						'office-business' : {text: 'Office', type: 'item'},
						'sports-fitness' : {text: 'Sports & Fitness', type: 'item'}
					}
				}

				var dataSource1 = function(options, callback){
					var $data = null
					if(!("text" in options) && !("type" in options)){
						$data = category;//the root tree
						callback({ data: $data });
						return;
					}
					else if("type" in options && options.type == "folder") {
						if("additionalParameters" in options && "children" in options.additionalParameters)
							$data = options.additionalParameters.children || {};
						else $data = {}//no data
					}

					callback({ data: $data })
				}

				$('#cat-tree').ace_tree({
					dataSource: dataSource1,
					multiSelect: true,
					cacheItems: true,
					'open-icon' : 'ace-icon tree-minus',
					'close-icon' : 'ace-icon tree-plus',
					'itemSelect' : true,
					'folderSelect': false,
					'selected-icon' : 'ace-icon fa fa-check',
					'unselected-icon' : 'ace-icon fa fa-times',
					loadingHTML : '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
				});


				$('.tree-container').ace_scroll({size: 250, mouseWheelLock: true});
				$('#cat-tree').on('closed.fu.tree disclosedFolder.fu.tree', function() {
					$('.tree-container').ace_scroll('reset').ace_scroll('start');
				});



				//select2 location element
				$('.select2').css('min-width', '150px').select2({allowClear:true});


				//jQuery ui distance slider
				$( "#slider-range" ).css('width','150px').slider({
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";

						if( !ui.handle.firstChild ) {
							$("<div class='tooltip bottom in' style='display:none;left:-6px;top:14px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});


				//this is for demo only
				$('.thumbnail').on('mouseenter', function() {
					$(this).find('.info-label').addClass('label-primary');
				}).on('mouseleave', function() {
					$(this).find('.info-label').removeClass('label-primary');
				});


				//toggle display format buttons
				$('#toggle-result-format .btn').tooltip({container: 'body'}).on('click', function(e){
					$(this).siblings().each(function() {
						$(this).removeClass($(this).attr('data-class')).addClass('btn-grey');
					});
					$(this).removeClass('btn-grey').addClass($(this).attr('data-class'));
				});

				////////////////////
				//show different search page
				$('#toggle-result-page .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.search-page').parent().addClass('hide');
					$('#search-page-'+which).parent().removeClass('hide');
				});
			});
		</script>
	</body>
</html>
