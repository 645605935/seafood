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
		<link rel="stylesheet" href="/Public/Admin/assets/css/chosen.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/datepicker.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="/Public/Admin/assets/css/colorpicker.css" />

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
								编辑房源
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          编辑房源
								        </a>
								      </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <form action="<?php echo U('Admin/Fang/edit');?>" id="myform" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
        									<input type="hidden" value="<?php echo ($row['id']); ?>" name="id">
        									<div class="form-group">
        										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 房源编号</label>

        										<div class="col-sm-9">
        											<input type="text" id="form-field-1" name="sn" value="<?php echo ($row['sn']); ?>" class="col-xs-10 col-sm-5" />
        										</div>
        									</div>

        									<div class="form-group">
        										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 房源名称</label>

        										<div class="col-sm-9">
        											<input type="text" id="form-field-1" name="title" value="<?php echo ($row['title']); ?>" class="col-xs-10 col-sm-5" />
        										</div>
        									</div>

        									<div class="form-group">
        										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 地址</label>

        										<div class="col-sm-9">
        											<input type="text" id="form-field-1" name="address" value="<?php echo ($row['address']); ?>" class="col-xs-10 col-sm-5" />
        										</div>
        									</div>

        									<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-first">所属区域</label>

												<div class="col-sm-9">
													<select name="area">
									                    <option value="">请选择分类</option>
									                    <?php if(is_array($area)): foreach($area as $key=>$v): ?><option value="<?php echo ($v["title"]); ?>" <?php if($row['area'] == $v['title']): ?>selected<?php endif; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
									                </select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-first">地铁</label>

												<div class="col-sm-9">
													<select name="metro">
									                    <option value="">请选择分类</option>
									                    <?php if(is_array($metro)): foreach($metro as $key=>$v): ?><option value="<?php echo ($v["title"]); ?>" <?php if($row['metro'] == $v['title']): ?>selected<?php endif; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
									                </select>
												</div>
											</div>

        									<div class="form-group">
        										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">搜索关键字</label>

        										<div class="col-sm-9">
        											<input type="text" name="keywords" id="form-field-tags" value="<?php echo ($row['keywords']); ?>" placeholder="Enter tags ..." />
        										</div>
        									</div>

        									<div class="form-group">
        										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 站点描述</label>

        										<div class="col-sm-9">
        											<input type="text" id="form-field-1" name="description" value="<?php echo ($row['description']); ?>" class="col-xs-10 col-sm-5" />
        										</div>
        									</div>


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">房源图片</label>
                                                <div class="col-sm-9">
                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <input type="file" name="img" id="id-input-file-2" />
                                                            <?php if(!empty($row['img'])): ?><img width="100px" src="/Uploads/<?php echo ($row['img']); ?>"/><?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <!-- ========================================== 编辑器 start-->
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-10 col-sm-offset-2">
                                                        <h3 class="header blue lighter">
                                                                房源详情
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-10 col-sm-offset-2">
	                                                    <!-- the wysiwyg form -->
                                                        <div id="editor" name="text" class="wysiwyg-editor"><?php echo ($row["text"]); ?></div>
                                                        <input type="hidden" name="text" value="" id="wysiwyg-value" />
                                                    </div>
                                                </div>
                                                <!-- ========================================== -->
                                            </div>


        									<div class="clearfix form-actions">
        										<div class="col-md-offset-3 col-md-9">
        											<button class="btn btn-info" type="submit">
        												<i class="icon-ok bigger-110"></i>
        												保存
        											</button>

        											&nbsp; &nbsp; &nbsp;
        											<button class="btn" type="reset">
        												<i class="icon-undo bigger-110"></i>
        												重置
        											</button>
        										</div>
        									</div>
        								</form>
								      </div>
								    </div>
								  </div>
								</div>
							</div>

								

							<!-- /.col -->
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
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/Public/Admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/Admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/Admin/assets/js/chosen.jquery.min.js"></script>
		<script src="/Public/Admin/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/Public/Admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/Public/Admin/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/Public/Admin/assets/js/date-time/moment.min.js"></script>
		<script src="/Public/Admin/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="/Public/Admin/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.knob.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.autosize.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
                <script src="/Public/Admin/assets/js/x-editable/bootstrap-editable.min.js"></script>
                <script src="/Public/Admin/assets/js/jquery.gritter.min.js"></script>
                <script src="/Public/Admin/assets/js/bootbox.min.js"></script>
                <script src="/Public/Admin/assets/js/jquery.slimscroll.min.js"></script>
                <script src="/Public/Admin/assets/js/jquery.easy-pie-chart.min.js"></script>
                <script src="/Public/Admin/assets/js/jquery.hotkeys.min.js"></script>
                <script src="/Public/Admin/assets/js/bootstrap-wysiwyg.min.js"></script>
                <script src="/Public/Admin/assets/js/select2.min.js"></script>
                <script src="/Public/Admin/assets/js/x-editable/ace-editable.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/Public/Admin/assets/js/bootstrap-tag.min.js"></script>



		<!-- ace scripts -->

		<script src="/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script src="/Public/Admin/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
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


                <!-- inline scripts related to this page -->
                <script type="text/javascript">
                        jQuery(function($) {
                                
                        
                                
                                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                                        no_file:'No File ...',
                                        btn_choose:'Choose',
                                        btn_change:'Change',
                                        droppable:false,
                                        onchange:null,
                                        thumbnail:false //| true | large
                                        //whitelist:'gif|png|jpg|jpeg'
                                        //blacklist:'exe|php'
                                        //onchange:''
                                        //
                                });
                                //pre-show a file name, for example a previously selected file
                                //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
                        
                        
                                $('#id-input-file-3').ace_file_input({
                                        style:'well',
                                        btn_choose:'Drop files here or click to choose',
                                        btn_change:null,
                                        no_icon:'ace-icon fa fa-cloud-upload',
                                        droppable:true,
                                        thumbnail:'small'//large | fit
                                        //,icon_remove:null//set null, to hide remove/reset button
                                        /**,before_change:function(files, dropped) {
                                                //Check an example below
                                                //or examples/file-upload.html
                                                return true;
                                        }*/
                                        /**,before_remove : function() {
                                                return true;
                                        }*/
                                        ,
                                        preview_error : function(filename, error_code) {
                                                //name of the file that failed
                                                //error_code values
                                                //1 = 'FILE_LOAD_FAILED',
                                                //2 = 'IMAGE_LOAD_FAILED',
                                                //3 = 'THUMBNAIL_FAILED'
                                                //alert(error_code);
                                        }
                        
                                }).on('change', function(){
                                        //console.log($(this).data('ace_input_files'));
                                        //console.log($(this).data('ace_input_method'));
                                });
                                
                        
                                //dynamically change allowed formats by changing allowExt && allowMime function
                                $('#id-file-format').removeAttr('checked').on('change', function() {
                                        var whitelist_ext, whitelist_mime;
                                        var btn_choose
                                        var no_icon
                                        if(this.checked) {
                                                btn_choose = "Drop images here or click to choose";
                                                no_icon = "ace-icon fa fa-picture-o";
                        
                                                whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
                                                whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
                                        }
                                        else {
                                                btn_choose = "Drop files here or click to choose";
                                                no_icon = "ace-icon fa fa-cloud-upload";
                                                
                                                whitelist_ext = null;//all extensions are acceptable
                                                whitelist_mime = null;//all mimes are acceptable
                                        }
                                        var file_input = $('#id-input-file-3');
                                        file_input
                                        .ace_file_input('update_settings',
                                        {
                                                'btn_choose': btn_choose,
                                                'no_icon': no_icon,
                                                'allowExt': whitelist_ext,
                                                'allowMime': whitelist_mime
                                        })
                                        file_input.ace_file_input('reset_input');
                                        
                                        file_input
                                        .off('file.error.ace')
                                        .on('file.error.ace', function(e, info) {
                                                //console.log(info.file_count);//number of selected files
                                                //console.log(info.invalid_count);//number of invalid files
                                                //console.log(info.error_list);//a list of errors in the following format
                                                
                                                //info.error_count['ext']
                                                //info.error_count['mime']
                                                //info.error_count['size']
                                                
                                                //info.error_list['ext']  = [list of file names with invalid extension]
                                                //info.error_list['mime'] = [list of file names with invalid mimetype]
                                                //info.error_list['size'] = [list of file names with invalid size]
                                                
                                                
                                                /**
                                                if( !info.dropped ) {
                                                        //perhapse reset file field if files have been selected, and there are invalid files among them
                                                        //when files are dropped, only valid files will be added to our file array
                                                        e.preventDefault();//it will rest input
                                                }
                                                */
                                                
                                                
                                                //if files have been selected (not dropped), you can choose to reset input
                                                //because browser keeps all selected files anyway and this cannot be changed
                                                //we can only reset file field to become empty again
                                                //on any case you still should check files with your server side script
                                                //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                                        });
                                
                                });
                        
                                
                        });
                </script>

		<input type="hidden" name="cur_c" id="cur_c" value="Config">
		<input type="hidden" name="cur_v" id="cur_v" value="setting">
		<script type="text/javascript">
			$(function(){
				var cur_c=$('#cur_c').val();
				var cur_v=$('#cur_v').val();

				$('.'+cur_c).addClass('active').addClass('open');
				$('.'+cur_c+'_'+cur_v).addClass('active');
			});
		</script>
	</body>
</html>