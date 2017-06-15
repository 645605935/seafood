<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($web_set['title']); ?></title>
		<meta name="keywords" content="<?php echo ($web_set['keywords']); ?>" />
		<meta name="description" content="<?php echo ($web_set['description']); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style type="text/css">
			#nav-search{display: none;}
			.main-container-inner{overflow: hidden;}
			.ui-dialog{min-width: 640px!important;}
			.layui-form-label{width: 125px!important;}
			#search_table .layui-form-label{width: auto!important;}
			#search_table .layui-form-item{margin-bottom: 0px!important;}
			.page-content{padding: 8px 20px 0!important;}
		</style>
		<script type="text/javascript">
			var api_url="<?php echo ($web_set["ip"]); ?>";
			var grid_selector = "#grid-table";
			var pager_selector = "#grid-pager";
			var login_user="<?php echo ($user["username"]); ?>";
		</script>


		<!-- basic styles -->

		<link href="/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="/Public/Admin/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/select2.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/bootstrap-editable.css" />

		<!-- fonts -->

		<link rel="stylesheet" type="text/css" href="/Public/Admin/assets/css/google_font_css.css">

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/Admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/Admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/Admin/assets/js/html5shiv.js"></script>
		<script src="/Public/Admin/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
	try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

			

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand" style="background:url('/Uploads/<?php echo ($web_set['logo']); ?>') left 5px;background-size:35px 35px;background-repeat:no-repeat;">
						<small style="margin-left:34px;">
							<!-- <i class="icon-leaf"></i> -->
							<?php echo ($web_set['title']); ?>
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
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

										<div class="progress progress-mini ">
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

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>

							</ul>

						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
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
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>
											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>
											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/Public/Admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>
											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="inbox.html">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>



						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<?php if($user['gid'] == 4 || $user['gid'] == 3): ?><img class="nav-user-photo" src="/Uploads/<?php echo ($user["logo"]); ?>" alt="Jason's Photo" />
									<span class="user-info">
										<small><?php echo ($user["school"]); ?>,</small>
										<?php echo ($user["username"]); ?>
									</span>
								<?php else: ?>
									<img class="nav-user-photo" src="/Public/Admin/assets/avatars/user.jpg" alt="Jason's Photo" />
									<span class="user-info">
										<small><?php echo ($user["group"]); ?>,</small>
										<?php echo ($user["username"]); ?>
									</span><?php endif; ?>
								<i class="icon-caret-down"></i>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('Admin/User/resetPasswordMyself');?>">
										<i class="icon-cog"></i>
										修改密码
									</a>
								</li>

								<li class="divider"></li>
								<li>
									<a href="<?php echo U('Admin/Login/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>

						</li>

					</ul><!-- /.ace-nav -->

				</div><!-- /.navbar-header -->

			</div><!-- /.container -->

		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
  try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <button class="btn btn-success">
        <i class="icon-signal"></i>
      </button>
      <button class="btn btn-info">
        <i class="icon-pencil"></i>
      </button>
      <button class="btn btn-warning">
        <i class="icon-group"></i>
      </button>
      <button class="btn btn-danger">
        <i class="icon-cogs"></i>
      </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>
      <span class="btn btn-info"></span>
      <span class="btn btn-warning"></span>
      <span class="btn btn-danger"></span>
    </div>

  </div><!-- #sidebar-shortcuts -->


  <ul class="nav nav-list">

    <?php if( name_to_status('Index') == 1 && $user['gid']==427 || in_array('Index', $user['auth_controller_names'])){ ?>
      <li <?php if($cur_c == 'Index'): ?>class="active open"<?php endif; ?>>
        <a href="#" class="dropdown-toggle">
          <i class="icon-dashboard"></i>
          <span class="menu-text"> 我的面板 </span>
          <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
          <?php if( name_to_status('Admin/Index/index') == 1 && $user['gid']==427 || in_array('Admin/Index/index', $user['auth_action_names'])){ ?>
          <li <?php if($cur_v == 'Index-index'): ?>class="active"<?php endif; ?>>
            <a href="<?php echo U('Admin/Index/index');?>" page="Admin/Index/index" title="index">
              <i class="icon-double-angle-right"></i>
              首页
            </a>
          </li>
          <?php } ?>
        </ul>

      </li>
    <?php } ?>

    

    <?php if( name_to_status('Config') == 1 && $user['gid']==427 || in_array('Config', $user['auth_controller_names'])){ ?>
    <li <?php if($cur_c == 'Config'): ?>class="active open"<?php endif; ?>>
      <a href="#" class="dropdown-toggle">
        <i class="icon-film"></i>
        <span class="menu-text"> 网站设置 </span>
        <b class="arrow icon-angle-down"></b>
      </a>

      <ul class="submenu">
        <?php if( name_to_status('Admin/Config/setting') == 1 && $user['gid']==427 || in_array('Admin/Config/setting', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'Config-setting'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/Config/setting');?>" page="Admin/Config/setting" title="setting" data-title="网站设置">
            <i class="icon-double-angle-right"></i>
            网站设置
          </a>
        </li>
        <?php } ?>
      </ul>

    </li>
    <?php } ?>

    

 <!--    <?php if( name_to_status('AuthManager') == 1 && $user['gid']==427 || in_array('AuthManager', $user['auth_controller_names'])){ ?>
    <li <?php if($cur_c == 'AuthManager'): ?>class="active open"<?php endif; ?> style="display:none;">
      <a href="#" class="dropdown-toggle">
        <i class="icon-group"></i>
        <span class="menu-text"> 用户组管理 </span>
        <b class="arrow icon-angle-down"></b>
      </a>

      <ul class="submenu">
        <?php if( name_to_status('Admin/AuthManager/index') == 1 && $user['gid']==427 || in_array('Admin/AuthManager/index', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'AuthManager-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/AuthManager/index');?>" page="Admin/AuthManager/index" title="index" data-title="用户组列表">
            <i class="icon-double-angle-right"></i>
            用户组列表
          </a>
        </li>
        <?php } ?>
      </ul>
    </li>
    <?php } ?> -->

    
<!-- 
    <?php if( name_to_status('User') == 1 && $user['gid']==427 || in_array('User', $user['auth_controller_names'])){ ?>
    <li <?php if($cur_c == 'User'): ?>class="active open"<?php endif; ?> style="display:none;">
      <a href="#" class="dropdown-toggle">
        <i class="icon-eye-open"></i>
        <span class="menu-text"> 
		          用户管理
        </span>
        <b class="arrow icon-angle-down"></b>
      </a>

      <ul class="submenu">
        <?php if( name_to_status('Admin/User/homeUser') == 1 && $user['gid']==427 || in_array('Admin/User/homeUser', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'User-homeUser'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/homeUser');?>" page="Admin/User/homeUser" title="homeUser" data-title="用户列表">
            <i class="icon-double-angle-right"></i>
            用户列表
          </a>
        </li>
        <?php } ?>

        <?php if( name_to_status('Admin/User/userAdd') == 1 && $user['gid']==427 || in_array('Admin/User/userAdd', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'User-userAdd'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/userAdd');?>" page="Admin/User/userAdd" title="userAdd" data-title="添加系统用户">
            <i class="icon-double-angle-right"></i>
            添加系统用户
          </a>
        </li>
        <?php } ?>

        <?php if( name_to_status('Admin/User/usersAdd') == 1 && $user['gid']==427 || in_array('Admin/User/usersAdd', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'User-usersAdd'): ?>class="active"<?php endif; ?> <?php if($user['gid'] == 1): ?>style="display:none;"<?php elseif($user['gid'] == 2): ?>style="display:none;"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/usersAdd');?>" page="Admin/User/usersAdd" title="usersAdd" data-title="批量添加学生">
            <i class="icon-double-angle-right"></i>
            批量添加学生
          </a>
        </li>
        <?php } ?>

        <?php if( name_to_status('Admin/User/students') == 1 && $user['gid']==427 || in_array('Admin/User/students', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'AuthRule-index'): ?>class="active"<?php endif; ?> <?php if($user['gid'] == 1): ?>style="display:none;"<?php elseif($user['gid'] == 2): ?>style="display:none;"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/students');?>" page="Admin/User/students" title="students" data-title="学生列表">
            <i class="icon-double-angle-right"></i>
            学生列表
          </a>
        </li>
        <?php } ?>

        <?php if( name_to_status('Admin/User/addStudent') == 1 && $user['gid']==427 || in_array('Admin/User/addStudent', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'AuthRule-index'): ?>class="active"<?php endif; ?> <?php if($user['gid'] == 1): ?>style="display:none;"<?php elseif($user['gid'] == 2): ?>style="display:none;"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/addStudent');?>" page="Admin/User/addStudent" title="addStudent" data-title="添加学生">
            <i class="icon-double-angle-right"></i>
            添加学生
          </a>
        </li>
        <?php } ?>
      </ul>
    </li>
    <?php } ?> -->

    

    

    <?php if( name_to_status('Type') == 1 && $user['gid']==427 || in_array('Type', $user['auth_controller_names'])){ ?>
    <li <?php if($cur_c == 'Type'): ?>class="active open"<?php endif; ?>>
      <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 分类管理 </span>
        <b class="arrow icon-angle-down"></b>
      </a>

      <ul class="submenu">
        <?php if( name_to_status('Admin/Type/index') == 1 && $user['gid']==427 || in_array('Admin/Type/index', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'Type-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/Type/index');?>" page="Admin/Type/index" title="index" data-title="分类列表">
            <i class="icon-double-angle-right"></i>
            分类列表
          </a>
        </li>
        <?php } ?>
      </ul>
    </li>
    <?php } ?>

 <!-- 导航栏分为：我的面板、板料库、生产管理、成品管理、停线管理、工单管理、设备管理、能源管理、基础数据、系统管理 -->   

    <li <?php if($cur_c == 'Fang'): ?>class="active open"<?php endif; ?>>
      <a href="#" class="dropdown-toggle">
        <i class="icon-beaker"></i>
        <span class="menu-text">文章管理 </span>
        <b class="arrow icon-angle-down"></b>
      </a>
      <ul class="submenu">
        <li <?php if($cur_v == 'Fang-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/Fang/index');?>" page="Admin/Fang/index" title="index" data-title="文章列表">
            <i class="icon-double-angle-right"></i>
            文章列表
          </a>
        </li>
      </ul>
    </li>

    <li <?php if($cur_c == 'Product'): ?>class="active open"<?php endif; ?>>
      <a href="#" class="dropdown-toggle">
        <i class="icon-beaker"></i>
        <span class="menu-text">产品管理 </span>
        <b class="arrow icon-angle-down"></b>
      </a>
      <ul class="submenu">
        <li <?php if($cur_v == 'Product-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/Product/index');?>" page="Admin/Product/index" title="index" data-title="产品列表">
            <i class="icon-double-angle-right"></i>
            产品列表
          </a>
        </li>
      </ul>
    </li>

    <?php if( name_to_status('AuthRule') == 1 && $user['gid']==427 || in_array('AuthRule', $user['auth_controller_names']) || in_array('AuthManager', $user['auth_controller_names']) || in_array('User', $user['auth_controller_names'])){ ?>
    <li <?php if($cur_c == 'AuthRule' || $cur_c == 'AuthManager' || $cur_c == 'User'): ?>class="active open"<?php endif; ?>>
      <a href="#" class="dropdown-toggle">
        <i class="icon-briefcase"></i>
        <span class="menu-text"> 系统管理 </span>
        <b class="arrow icon-angle-down"></b>
      </a>
      <ul class="submenu">
        <?php if( name_to_status('Admin/AuthRule/index') == 1 && $user['gid']==427 || in_array('Admin/AuthRule/index', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'AuthRule-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/AuthRule/index');?>" page="Admin/AuthRule/index" title="index" data-title="权限列表">
            <i class="icon-double-angle-right"></i>
            权限列表
          </a>
        </li>
        <?php } ?>
        <?php if( name_to_status('Admin/AuthManager/index') == 1 && $user['gid']==427 || in_array('Admin/AuthManager/index', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'AuthManager-index'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/AuthManager/index');?>" page="Admin/AuthManager/index" title="index" data-title="用户组列表">
            <i class="icon-double-angle-right"></i>
            用户组列表
          </a>
        </li>
        <?php } ?>
        <?php if( name_to_status('Admin/User/homeUser') == 1 && $user['gid']==427 || in_array('Admin/User/homeUser', $user['auth_action_names'])){ ?>
        <li <?php if($cur_v == 'User-homeUser'): ?>class="active"<?php endif; ?>>
          <a href="<?php echo U('Admin/User/homeUser');?>" page="Admin/User/homeUser" title="homeUser" data-title="用户列表">
            <i class="icon-double-angle-right"></i>
            用户列表
          </a>
        </li>
        <?php } ?>
      </ul>
    </li>
    <?php } ?>

  </ul><!-- /.nav-list -->


  <div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
  </div>

  <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
  </script>


				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<?php echo ($cur_controller_name); ?>
							</li>
							<li class="active"><?php echo ($cur_action_name); ?></li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								分类管理
								<small>
									<i class="icon-double-angle-right"></i>
									编辑分类
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div>
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<form class="form-horizontal" id="myform" method="post" action="<?php echo U('Admin/Type/edit');?>" enctype="multipart/form-data" >
												<input name="id"  type="hidden" value="<?php echo ($_GET['id']); ?>"/>
												<div class="tabbable">
													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">编辑分类</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<input type="file" name="img" />
																	<?php if($row["img"] != null): ?><img src="/Uploads/<?php echo ($row["img"]); ?>" style="position:absolute;right:0px;bottom:0px;width:50px;height:50px;border-radius:50%;"><?php endif; ?>
																</div>
																
																<div class="vspace-xs"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">标题</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" name="title" id="title" placeholder="title" value="<?php echo ($row['title']); ?>" />
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">上级分类</label>

																		<div class="col-sm-8">
																			<select name="pid">
															                    <option value="">请选择分类</option>
															                    <?php echo ($select); ?>
															                </select>
																		</div>
																	</div>
																</div>
															</div>

															<hr />
															
															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-username">排序</label>

																<div class="col-sm-9">
																	<input class="form-control" type="text" name="sort" id="sort" placeholder="0" value="<?php echo ($row['sort']); ?>" />
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">简介</label>

																<div class="col-sm-9">
																	<textarea name="desc" class="form-control" id="form-field-comment"><?php echo ($row['desc']); ?></textarea>
																</div>

															</div>

															<div class="form-group">
																<!-- ========================================== 编辑器 start-->
																<div class="row">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-2">
																		<h3 class="header blue lighter">
																			详情
																		</h3>
																	</div>
																</div>
																<div class="row">
																	<div class="col-xs-12 col-sm-10 col-sm-offset-2">
																		
																		<!-- the wysiwyg form -->
																		<div id="editor" name="text" class="wysiwyg-editor"><?php echo ($row['text']); ?></div>
																		<input type="hidden" name="text" id="wysiwyg-value" />
																		
																	</div>
																</div>
																<!-- ========================================== -->
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="submit">
															<i class="icon-ok bigger-110"></i>
															保存
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="icon-undo bigger-110"></i>
															重置
														</button>
													</div>
												</div>
											</form>
										</div><!-- /span -->
									</div><!-- /user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="/Public/Admin/assets/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/Public/Admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/Admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.gritter.min.js"></script>
		<script src="/Public/Admin/assets/js/bootbox.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.hotkeys.min.js"></script>
		<script src="/Public/Admin/assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="/Public/Admin/assets/js/select2.min.js"></script>
		<script src="/Public/Admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/Public/Admin/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/Public/Admin/assets/js/x-editable/bootstrap-editable.min.js"></script>
		<script src="/Public/Admin/assets/js/x-editable/ace-editable.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->

		<script src="/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script src="/Public/Admin/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    
				
				//editables 
			    $('#username').editable({
					type: 'text',
					name: 'username'
			    });
			
			
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
			        source: countries,
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							source: new_source
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
			        source: cities[currentValue]
			    });
			
			
			
				$('#signup').editable({
					type: 'date',
					format: 'yyyy-mm-dd',
					viewformat: 'dd/mm/yyyy',
					datepicker: {
						weekStart: 1
					}
				});
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16, max:99, step:1
					}
				});
				
				//var $range = document.createElement("INPUT");
				//$range.type = 'range';
			    $('#login').editable({
			        type: 'slider',//$range.type == 'range' ? 'range' : 'slider',
					name : 'login',
					slider : {
						min : 1, max:50, width:100
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {
				//ie8 throws some harmless exception, so let's catch it
			
					//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
					//so let's have a fake appendChild for it!
					if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						image: {
							//specify ace file input plugin's options here
							btn_choose: '添加图片',
							droppable: true,
							/**
							//this will override the default before_change that only accepts image files
							before_change: function(files, dropped) {
								return true;
							},
							*/
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							max_size: 1100000000,//~100Kb
							on_error : function(code) {
							//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(code == 1) {
								//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(code == 2) {
								//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {
								//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload
			
			
							var deferred = new $.Deferred
			
							//if value is empty, means no valid files were selected
							//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
							//so we return just here to prevent problems
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
						},
						
						success: function(response, newValue) {
							
						}
					})
				}catch(e) {}
				
				
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal hide fade">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">添加图片</h4>\
						</div>\
						\
						<form class="no-margin">\
						<div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						</div>\
						\
						<div class="modal-footer center">\
							<button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
							<button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
						</div>\
						</form>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'icon-picture',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						before_change: function(files, dropped) {
							var file = files[0];
							if(typeof file === "string") {
								//file is just a file name here (in browsers that don't support FileReader API)
								if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
							}
							else {
							//file is a File object
								var type = $.trim(file.type);
								if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
										|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
									) return false;
			
								if( file.size > 1100000000 ) {
								//~100Kb
									return false;
								}
							}
			
							return true;
						}
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').slimScroll({
				height: '250px',
				alwaysVisible : true
				});
			
				$('.profile-social-links > a').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function() {
					return false;
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'添加图片',
					btn_change:null,
					no_icon:'icon-picture',
					thumbnail:'large',
					droppable:true,
					before_change: function(files, dropped) {
						var file = files[0];
						if(typeof file === "string") {
						//files is just a file name here (in browsers that don't support FileReader API)
							if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
						}
						else {
						//file is a File object
							var type = $.trim(file.type);
							if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
									|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
								) return false;
			
							if( file.size > 1100000000 ) {
							//~100Kb
								return false;
							}
						}
			
						return true;
					}
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
			});
		</script>


		<!-- my.js 编辑器-->
<script type="text/javascript">
			jQuery(function($) {
				$('#editor').ace_wysiwyg({
					toolbar:
					[
						{
							name:'font',
							title:'Custom tooltip',
							values:['Some Font!','Arial','Verdana','Comic Sans MS','Custom Font!']
						},
						null,
						{
							name:'fontSize',
							title:'Custom tooltip',
							values:{1 : 'Size#1 Text' , 2 : 'Size#1 Text' , 3 : 'Size#3 Text' , 4 : 'Size#4 Text' , 5 : 'Size#5 Text'} 
						},
						null,
						{name:'bold', title:'Custom tooltip'},
						{name:'italic', title:'Custom tooltip'},
						{name:'strikethrough', title:'Custom tooltip'},
						{name:'underline', title:'Custom tooltip'},
						null,
						'insertunorderedlist',
						'insertorderedlist',
						'outdent',
						'indent',
						null,
						{name:'justifyleft'},
						{name:'justifycenter'},
						{name:'justifyright'},
						{name:'justifyfull'},
						null,
						{
							name:'createLink',
							placeholder:'Custom PlaceHolder Text',
							button_class:'btn-purple',
							button_text:'Custom TEXT'
						},
						{name:'unlink'},
						null,
						{
							name:'insertImage',
							placeholder:'Custom PlaceHolder Text',
							button_class:'btn-inverse',
							//choose_file:false,//hide choose file button
							button_text:'Set choose_file:false to hide this',
							button_insert_class:'btn-pink',
							button_insert:'Insert Image'
						},
						null,
						{
							name:'foreColor',
							title:'Custom Colors',
							values:['red','green','blue','navy','orange'],
							/**
								You change colors as well
							*/
						},
						/**null,
						{
							name:'backColor'
						},*/
						null,
						{name:'undo'},
						{name:'redo'},
						null,
						'viewSource'
					],
					//speech_button:false,//hide speech button on chrome
					
					'wysiwyg': {
						hotKeys : {} //disable hotkeys
					}
					
				}).prev().addClass('wysiwyg-style2');

				
				
				//handle form onsubmit event to send the wysiwyg's content to server
				$('#myform').on('submit', function(){
					
					//put the editor's html content inside the hidden input to be sent to server
					//$('input[name=wysiwyg-value]' , this).val($('#editor').html());
					
					//but for now we will show it inside a modal box

					// $('#modal-wysiwyg-editor').modal('show');
					$('#wysiwyg-value').val($('#editor').html());
					
				});
				$('#myform').on('reset', function() {
					$('#editor').empty();
				});
				
				
			});
		</script>

	</body>
</html>