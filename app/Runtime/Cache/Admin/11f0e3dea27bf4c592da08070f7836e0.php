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


		<style type="text/css">
			button a{color: white;font-weight: bold;}
		</style>

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
									分类列表
									<select name="pid_color" class="pid_color">
					                    <option value="">请选择分类</option>
					                    <?php echo ($select); ?>
					                </select>
					                （显示该分类的下一级分类）
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">排序</th>
														<th>ID</th>
														<th class="hidden-480">分类名称</th>
														<th class="hidden-480">level层级</th>
														<th>操作</th>
													</tr>
												</thead>
												<tbody>
													<?php echo ($html_tree); ?>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
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

		<script src="/Public/Admin/assets/js/jQuery1.7.2for_live.min.js"></script>

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

		<script src="/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/Admin/assets/js/bootbox.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.gritter.min.js"></script>
		<script src="/Public/Admin/assets/js/spin.min.js"></script>


		<script src="/Public/Admin/assets/js/jquery.dataTables.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script src="/Public/Admin/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

				//排序
				$('body').on('blur' ,'.sort_input', function(){
					var _id = $(this).attr('data-id');
					var _sort=$(this).val();
					
			      	$.ajax({  
			      	    async:false,
			      	    type:'post',  
			      	    url : "<?php echo U('Admin/Type/ajax_sort');?>",
			      	    dataType : 'json',
			      	    data:{'id':_id,'sort':_sort},
			      	    success  : function(json) { 
			      	        if(json.code==0){
			      	            
			      	        }else{
			      	            alert(json.msg);
			      	        }
			      	    },
			      	    error  : function(json) {  
			      	        alert(json.msg);
			      	    }  
			      	});  
				});
			})
		</script>


		<!-- my.js -->
<script type="text/javascript">
	$(function(){
		//添加子
		$('body').on('click','._add',function(){
		  var self=$(this);
		  var level=parseInt(self.attr('data-level'));
		  var pid=self.attr('data-pid');
		  var icon='';
		  for (var i = level; i >= 0; i--) {
		    icon+='&nbsp;&nbsp;&nbsp;&nbsp;';
		  };
		  icon+='└─';
		  var html='<tr class="tr">'
		                  +'<td align="center"><input type="hidden" value="'+pid+'" name="pid"><input type="text" value="0" size="3" name="sort"></td>'
		                  +'<td align="center"></td>'
		                  +'<td >'+icon+'<input type="text" name="title"><a href="javascript:void(0)" class="_save">保存</a></td>'
		                  +'<td align="center"></td>'
		                  +'<td align="center"></td>'
		                  +'<td align="center"></td>'
		                +'</tr>';
		  self.closest(".tr").after(html);
		});

		//保存子
		$('._save').live('click',function(){
		  var self=$(this);
		  var _tr=self.closest(".tr");
		  $.ajax({
		    url:'?s=/Admin/Type/add',
		    type:'post',
		    data:{sort:_tr.find("input[name='sort']").val(),title:_tr.find("input[name='title']").val(),pid:_tr.find("input[name='pid']").val()},
		    success:function(data){
		      if(data.status=='1'){
		        level=data.data.level-1;
		        var icon='';
		        for (var i = level; i >= 0; i--) {
		          icon+='&nbsp;&nbsp;&nbsp;&nbsp;';
		        };
		        var html='<tr class="tr">'
		                    +'<td align="center"><input data-id="'+data.data.id+'" type="text" class="sort_input" value="'+data.data.sort+'" size="3" name="sort['+data.data.id+']"></td>'
		                    +'<td align="center">'+data.data.id+'</td>'
		                    +'<td >'+icon+'├─ '+data.data.title+'</td>'
		                    +'<td >'+data.data.level+'</td>'
		                    +'<td>'
                                +'<button class="btn btn-xs btn-success"><a href="javascript:void(0)" data-pid="'+data.data.id+'" data-title="'+data.data.title+'" data-level="'+data.data.level+'" class="_add">添加子分类</a>'
                                    +'<i class="icon-ok bigger-120"></i>'
                                +'</button>'

                                +'<button class="btn btn-xs btn-info"><a href="?s=/Admin/Type/edit/id/'+data.data.id+'/pid/'+data.data.pid+'">修改</a>'
                                    +'<i class="icon-edit bigger-120"></i>'
                                +'</button>'

                                +'<button class="btn btn-xs btn-danger"><a class="del" data-id="'+data.data.id+'" href="javascript:void(0)">删除</a>'
                                    +'<i class="icon-trash bigger-120"></i>'
                                +'</button>'
                            +'</td>'
		                  +'</tr>';
		        _tr.after(html);
		        _tr.remove();
		      }
		    }
		  });
		});

		//删除
		  $(".del").on(ace.click_event, function() {
		  	var self=$(this);
		  	var _tr=self.closest(".tr");
			bootbox.confirm("你确定要删除吗?", function(result) {
				if(result) {
					$.ajax({
				        url:'?s=/Admin/Type/del',
				        type:'post',
				        data:{id:self.attr('data-id'),'adas':'asdas'},
				        success:function(data){
				          if(data.status=='1'){
				            _tr.remove();
				          }else{
				            // popMsg(data.info,2,'error');
				            bootbox.dialog({
				            	message: data.info,
				            	buttons: 			
				            	{
				            		"danger" :
				            		{
				            			"label" : "Danger!",
				            			"className" : "btn-sm btn-danger",
				            			"callback": function() {
				            				//Example.show("uh oh, look out!");
				            			}
				            		}, 
				            	}
				            });
				          }
				        }
				    });
				}
			});
		  });
		});
	</script>


<form id="pid_color_form" method="post" action="">
	<input type="text" name="pid_color" style="display:none;" class="input_pid_color" value="">
</form>		
<script>
$(function(){
		$(".pid_color").change(function(){
			$('form#pid_color_form input.input_pid_color').val($(this).val());
			$('form#pid_color_form').submit();
		});
});
</script>
	</body>
</html>