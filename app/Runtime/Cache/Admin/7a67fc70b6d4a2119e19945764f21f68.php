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
    
    <!-- 模块jqgrid  start -->
    <link rel="stylesheet" href="/Public/Admin/assets/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="/Public/Admin/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/Public/Admin/assets/css/ui.jqgrid.css" />
    <!-- 模块jqgrid  end -->

    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/css/google_font_css.css">

    <!-- ace styles -->
    <link rel="stylesheet" href="/Public/Admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/Admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/Public/Admin/assets/css/ace-skins.min.css" />

    <!-- jQuery smartMenu右键自定义上下文菜单插件  start -->
    <link rel="stylesheet" href="/Public/Admin/jquery-smartMenu/css/smartMenu.css" type="text/css" />
    <!-- jQuery smartMenu右键自定义上下文菜单插件  end -->

    <link rel="stylesheet" href="/Public/Admin/layui-v1.0.4/layui/css/layui.css"  media="all">
    <link rel="stylesheet" href="/Public/Admin/css/my_diy_css.css"  media="all">

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="/Public/Admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/Public/Admin/assets/js/ace-extra.min.js"></script>
    <script src="/Public/Admin/assets/js/jquery.min.js"></script>
    <!-- layui.js   -->
    <script src="/Public/Admin/layui-v1.0.4/layui/layui.js"></script>
    <script src="/Public/layer/layer.js"></script>

    <!-- jquery获取地址栏参数 -->
    <script src="/Public/js/jquery_get.js"></script>
    <script type="text/javascript">
      $(function(){
        console.log($.request.queryString);
      });
    </script>
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

        <!-- 左侧菜单栏 start-->
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
        
        <!-- 右侧主要内容 start-->
        <div class="main-content">
          

          <!-- 右block_1  start -->
          <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
              try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
              <li>
  <i class="icon-home home-icon"></i>
  <a href="#">Home</a>
</li>
<li>
  <a href="#" id="_nav_1"></a>
</li>
<li class="active" id="_nav_2"></li>
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
          <!-- 右block_1  end -->

          <div class="page-content">
            <!-- 权限设置  start -->
            <!-- <div class="row">
                <?php if($_SESSION['ez_']['auth']['gid'] == 427): ?><div class="col-xs-12">
       <div class="panel panel-default">
         <div class="panel-heading">页面权限设置</div>
         <div class="panel-body">
           <form class="layui-form layui-form-pane col-xs-12" action="" id="role_auth_table" >
                  <style type="text/css">
                    #role_auth_table{padding-left: 0px;padding-right: 0px;}
                    #buttons_box .layui-input-inline{margin-right: 0px;}
                    #buttons_box .layui-form-label{padding: 4px 3px!important;width: auto!important;}
                    #role_auth_table .editing label{font-weight: bold;color: red;}
                  </style>

                  <table class="layui-table">
                    <colgroup>
                      <col width="450">
                      <col>
                    </colgroup>
                    <thead>
                      <tr>
                        <td colspan="2">
                          <div style="float:right;" class="layui-inline">
                            <div class="layui-form-item">
                              <div class="layui-input-inline">
                                 <input type="text" class="layui-input" placeholder="按钮" id="button_button">
                              </div>
                              <div class="layui-input-inline">
                                 <input type="text" class="layui-input" placeholder="描述" id="button_remark">
                              </div>
                              <label class="layui-form-label" id="add_button" data-page="<?php echo ($page); ?>">添加</label>
                              <label class="layui-form-label" style="display:none;" id="edit_button" data-page="<?php echo ($page); ?>" data-id="">编辑</label>
                            </div>
                          </div>
                        </td>
                      </tr> 
                    </thead>

                    <tbody>
                      <tr>
                        <td>

                          <div class="layui-inline">
                            <div class="layui-form-item">
                              <label class="layui-form-label">用户角色</label>
                              <div class="layui-input-inline">
                                 <select name="gid" lay-filter="select_group">
                                   <option value="">请选择</option>

                                   <?php if(is_array($group)): foreach($group as $key=>$vo): ?><optgroup label="<?php echo ($vo['title']); ?>">
                                        <?php if(is_array($vo['_child'])): foreach($vo['_child'] as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
                                      </optgroup><?php endforeach; endif; ?>

                                 </select>
                              </div>
                            </div>
                          </div>
                        </td>

                        <td id="buttons_box">
                          
                            <?php if(is_array($page_buttons)): foreach($page_buttons as $key=>$v): ?><div class="layui-form-item button_item">
                                    <div class="layui-input-inline">
                                      <input type="checkbox" name="<?php echo ($v["button"]); ?>" title="<?php echo ($v["remark"]); ?>">
                                    </div>
                                    <label class="layui-form-label button_edit" data-id="<?php echo ($v["id"]); ?>" data-button="<?php echo ($v["button"]); ?>" data-title="<?php echo ($v["remark"]); ?>">编辑</label>
                                    <label class="layui-form-label button_del" data-id="<?php echo ($v["id"]); ?>">删除</label>
                                </div><?php endforeach; endif; ?>

                        </td>

                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2">
                          <button style="float:right;" class="layui-btn" lay-submit="" lay-filter="demo1_save_role_buttons">保存</button>
                        </td>
                      </tr> 
                    </tfoot>
                  </table>
              </form>
         </div>
       </div>
   </div><?php endif; ?>
   <script type="text/javascript">
       $(function(){
           

           //添加按钮
           $('#add_button').click(function(){
               var page=$(this).attr('data-page');
               var button=$('#button_button').val();
               var remark=$('#button_remark').val();

               if(button==''||button==''){
                  layer.msg('不可空！');return;
               }

               _ajax_add_page_button(page, button, remark);
           });

           //编辑按钮
           $('#edit_button').click(function(){
               var id=$(this).attr('data-id');
               var button=$('#button_button').val();
               var remark=$('#button_remark').val();

               var json=_ajax_edit_page_button(id, button, remark);

               if(json.code==0){
                   var value=json.data;
                   var _str='';
                       _str+='<div class="layui-input-inline">';
                         _str+='<input type="checkbox" name="'+value.button+'" title="'+value.remark+'">';
                       _str+='</div>';
                       _str+='<label class="layui-form-label button_edit" data-id="'+value.id+'" data-button="'+value.button+'" data-title="'+value.remark+'">编辑</label>';
                       _str+='<label class="layui-form-label button_del" data-id="'+value.id+'">删除</label>';

                   $('.button_item.editing').html(_str);

                   //重置为添加
                   $('#button_button').val('');
                   $('#button_remark').val('');
                   $('#add_button').show();
                   $('#edit_button').hide();

                   layui.form().render();
               }
           });

           //编辑按钮
           $('body').on('click','.button_edit',function(){
               $('.button_item').removeClass('editing');
               $(this).parent('.button_item').addClass('editing');

               $('#add_button').hide();
               $('#edit_button').show();
               var button=$(this).attr('data-button');
               var remark=$(this).attr('data-title');
               var id=$(this).attr('data-id');
               $('#button_button').val(button);
               $('#button_remark').val(remark);
               $('#edit_button').attr('data-id',id);
           });

           //删除按钮
           $('body').on('click','.button_del',function(){
               var id=$(this).attr('data-id');
               var json=_ajax_del_page_button(id);

               if(json.code==0){
                   $(this).parent('.button_item').remove();
               }
           });
       });

       //添加按钮
       function _ajax_add_page_button(page, button, remark){

           var page=page;
           var button=button;
           var remark=remark;

           var _data ='{';
               _data+='"page":"'+page+'","button":"'+button+'","remark":"'+remark+'"';
               _data+='}';

           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/ajax_add_page_button');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) { 
                   console.log(json); 
                   if(json.code == 0){
                       layer.msg(json.msg);

                       var value=json.data;
                       var _str='';
                       _str+='<div class="layui-form-item button_item">';
                           _str+='<div class="layui-input-inline">';
                             _str+='<input type="checkbox" name="'+value.button+'" title="'+value.remark+'">';
                           _str+='</div>';
                           _str+='<label class="layui-form-label button_edit" data-id="'+value.id+'" data-button="'+value.button+'" data-title="'+value.remark+'">编辑</label>';
                           _str+='<label class="layui-form-label button_del" data-id="'+value.id+'">删除</label>';
                       _str+='</div>';

                       $('#buttons_box').append(_str);
                       layui.form().render();
                   }else{
                       layer.msg(json.msg);
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
       }

       //编辑按钮
       function _ajax_edit_page_button(id, button, remark){
           var id=id;
           var button=button;
           var remark=remark;

           var _data ='{';
               _data+='"id":"'+id+'","button":"'+button+'","remark":"'+remark+'"';
               _data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/ajax_edit_page_button');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) { 
                   if(json.code == 0){
                       layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //添加
       function _ajax_add_role_buttons(gid, buttons, page){
           var gid=gid;
           var button=button;
           var page=page;

           var _data ='{';
               _data+='"page":"'+page+'","buttons":"'+buttons+'","gid":"'+gid+'"';
               _data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/ajax_add_role_buttons');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) { 
                   console.log(json); 
                   if(json.code == 0){
                       layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //异步获取 buttons
       function _ajax_get_buttons(gid, page){
           var gid=gid;
           var page=page;

           var _data ='{';
               _data+='"page":"'+page+'","gid":"'+gid+'"';
               _data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/ajax_get_buttons');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) {  
                   var _str="";
                   if(json.code == 0){
                       $.each(json.data, function(key, value){
                           _str+='<div class="layui-form-item button_item">';
                               _str+='<div class="layui-input-inline">';
                                 
                             if(value._has==1){
                                 _str+='<input type="checkbox" name="'+value.button+'" checked="checked" title="'+value.remark+'">';
                             }else{
                                 _str+='<input type="checkbox" name="'+value.button+'" title="'+value.remark+'">';
                             }

                               _str+='</div>';
                               _str+='<label class="layui-form-label button_edit" data-id="'+value.id+'" data-button="'+value.button+'" data-title="'+value.remark+'">编辑</label>';
                               _str+='<label class="layui-form-label button_del" data-id="'+value.id+'">删除</label>';
                           _str+='</div>';
                           
                       });
                       
                       $('#buttons_box').html(_str);
                       layer.msg(json.msg);
                       _json=json;

                       layui.form().render();
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //删除按钮
       function _ajax_del_page_button(id){
           var id=id;
           var _data ='{';
               _data+='"id":"'+id+'"';
               _data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/ajax_del_page_button');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) { 
                   console.log(json); 
                   if(json.code == 0){
                       layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //初使化按钮操作权限
       function _init_button_operate(page){
           var _data ='{';
               _data+='"page":"'+page+'"';
               _data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/PageButtons/init_button_operate');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) { 
                   console.log(4444);
                   console.log(json);
                   $.each(json, function(key, value){
                       $('.'+value).attr('disabled', 'disabled');
                   });
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }
   </script>
   <script type="text/javascript">
       //layui表单
       layui.use(['form'], function(){
         var form = layui.form();

         //监听提交
         form.on('submit(demo1_save_role_buttons)', function(data){
           var gid=data.field.gid;

           var _arr=[];
           $.each(data.field, function(key, value){
               if(key!='gid'){
                   _arr.push(key);
               }
           });
           var buttons=_arr.join(',');
           var page=$('#add_button').attr('data-page');
           var json=_ajax_add_role_buttons(gid, buttons, page);
           return false;
         });

         //select_group 改变
         form.on('select(select_group)', function(data) {
           var gid=data.value;
           var page=$('#add_button').attr('data-page');

           _ajax_get_buttons(gid, page);
         });
      
       });
   </script> 


            </div> -->
            <!-- 权限设置  end -->

            <div class="row">
              <div class="col-xs-12">

                <style>
                  .layui-form-item .layui-input-inline{width: auto!important;}
                  .layui-form-item{margin-bottom: 0px;}
                  #gbox_grid-table{width: 100%!important;}
                  #gview_grid-table{width: 100%!important;}
                  #gview_grid-table>div{width: 100%!important;}
                </style>

                <!-- 搜索  start -->
                <div class="row">
                    <form class="layui-form layui-form-pane col-xs-12" action="" method="post">
                        <table class="layui-table" id="search_table">
                          <thead>
                            <tr>
                              <th>搜索</th>
                            </tr> 
                          </thead>
                          <tbody>
                            <tr>
                              <td>

                                <div class="layui-inline" style="margin-top: 5px;">
                                  <div class="layui-form-item">
                                    <label class="layui-form-label">用户名</label>
                                    <div class="layui-input-inline">
                                      <input type="text" name="username" value="<?php echo ($_POST['username']); ?>" placeholder="请输入" autocomplete="off" class="layui-input">
                                    </div>
                                  </div>
                                </div>  
                                
                                <div class="layui-inline" style="margin-top: 5px;">
                                  <div class="layui-form-item">
                                    <label class="layui-form-label">用户组</label>
                                    <div class="layui-input-inline">
                                      <select name="gid">
                                        <option value="请选择">请选择</option>
                                        <?php if(is_array($group)): foreach($group as $key=>$vo): ?><optgroup label="<?php echo ($vo['title']); ?>">
                                             <?php if(is_array($vo['_child'])): foreach($vo['_child'] as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == $_POST['gid']): ?>selected<?php endif; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
                                           </optgroup><?php endforeach; endif; ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>  

                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td>
                                <button style="float:left;" class="layui-btn id-btn-dialog2_add" title="id-btn-dialog2_add"> 添加 </button>
                                <a style="float:right;" href="<?php echo U('Admin/User/homeUser');?>" class="layui-btn search_btn" >重置</a>
                                <button style="float:right;" type="submit" class="layui-btn search_btn" id="search_submit" name="submit" title="search_btn">搜索</button>
                              </td>
                            </tr> 
                          </tfoot>
                        </table>
                    </form>
                </div>
                <!-- 搜索  end -->

                <div class="row">
                    <div class="col-xs-12" style="display: none;">
                        <div class="panel panel-default">
                          <div class="panel-heading">户型列表</div>
                          <div class="panel-body">
                            <table id="grid-table-2"></table>
                            <div id="grid-pager-2"></div>
                          </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">房源列表
                              <!-- <a href="javascript:void(0)" id="hcg">隐藏列</a> -->
                              <!-- <a href="javascript:void(0)" id="scg">显示列</a> -->
                          </div>
                          <div class="panel-body">
                            <table id="grid-table"></table>
                            <div id="grid-pager"></div>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->

        </div><!-- /.main-content -->
        <!-- 右侧主要内容 end-->

        
        
        <!-- 模板相关设置 -->
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

    <!-- 底栏版本说明 -->
    <script type="text/javascript">
	$(function(){
		//面包导航
		$('#_nav_1').html($('#sidebar .nav-list li.active>a>span.menu-text').html());
		$('#_nav_2').html($('#sidebar .nav-list li.active>ul.submenu li.active a').attr('data-title'));

		//配置权限的时候根据左侧的page属性将右侧的对应按钮高亮
		console.log(11111111)
		$.each($('#sidebar .submenu>li>a'), function(key, value){
			if( $(value).attr("page") !="" ){
				var _page_=$(value).attr('page');

				$.each($('#auth_form label'), function(k, v){
					if( $(v).attr("page") ==_page_ ){
						$(v).addClass('auth_heightlight');
					}
				});
			}
		});
		console.log(3333333)
	});

</script>

<style type="text/css">
	.auth_heightlight{background: red;}
	.footer {
		width: 100%;
		height: 65px;
		overflow: hidden;
	/*	position: absolute;
		bottom: 0px;*/
	}
	.footer .footer-inner {
	    text-align: center;
		height: 55px;
	    z-index: auto;
	    left: 0;
	    right: 0;
	    bottom: 0;
	}
	.footer .footer-inner .footer-content {
	    position: absolute;
	    bottom: 4px;
	    padding: 8px 0px;
	    line-height: 36px;
	    border-top: 3px double #E5E5E5;
	    width: 100%;
	    overflow: hidden;
	    background: white;
	}
	.bigger-120 {
	    font-size: 120%!important;
	}
	.blue {
	    color: #478FCA!important;
	}
	.bolder {
	    font-weight: bolder;
	}
</style>

<div class="footer">

  <div class="footer-inner row">

    <div class="footer-content col-xs-12">

      <span class="bigger-120">

        <span class="blue bolder">&copy; 2016</span>
          ELCO(TIANJIN)ELECTRONICS CO.,LTD.

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





    <!-- basic scripts -->

    <!--[if !IE]> -->



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

    <script src="/Public/Admin/assets/js/jquery.maskedinput.min.js"></script>

    <script src="/Public/Admin/assets/js/bootstrap-tag.min.js"></script>

    <script src="/Public/Admin/assets/js/jquery.dataTables.min.js"></script>

    <script src="/Public/Admin/assets/js/jquery.dataTables.bootstrap.js"></script>
    
    <!-- 模块jqgrid  start -->
    <script src="/Public/Admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="/Public/Admin/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
    <!-- <script src="/Public/Admin/assets/js/jqGrid/grid.setcolumns.js"></script> -->
    <!-- <script src="/Public/Admin/assets/js/jqGrid/i18n/grid.locale-en.js"></script> -->
    <script src="/Public/Admin/assets/js/jqGrid/i18n/grid.locale-zh.js"></script>
    
    <script src="/Public/Admin/assets/js/jquery-ui-1.10.3.full.min.js"></script>
    <script src="/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
    <!-- 模块jqgrid  end -->

    <!-- ace scripts -->
    <script src="/Public/Admin/assets/js/jquery.nestable.min.js"></script>


    <script src="/Public/Admin/assets/js/ace-elements.min.js"></script>

    <script src="/Public/Admin/assets/js/ace.min.js"></script>

    

    <!-- inline scripts related to this page -->


    <script type="text/javascript">
      $(function(){
          var _username="<?php echo ($_POST['username']); ?>";
          var _gid="<?php echo ($_POST['gid']); ?>";

          pageInit(_username, _gid);

          //初使化按钮操作权限
          var page="<?php echo ($page); ?>";
          // _init_button_operate(page);
      });

      //自定义报警列格式
      function imgFormatter(cellvalue, options, rowdata){ 
          if (cellvalue != "0"){
              return '<img class="avatar" style="width:30px;height:30px;" src="'+cellvalue+'" alt="' + cellvalue + '" />';
          }else{
              return '<img class="avatar" style="width:30px;height:30px;" src="'+cellvalue+'" alt="' + cellvalue + '" />';
          }
      }

      function pageInit(_username, _gid){
        var grid_selector = "#grid-table";
        var pager_selector = "#grid-pager";
        var grid_selector_2 = "#grid-table-2";
        var pager_selector_2 = "#grid-pager-2";

        var grid_data=_ajax_list_device(_username,_gid);

        jQuery(grid_selector).jqGrid({
          caption: "房源列表",
          data: grid_data,
          datatype: "local",
          colNames:['id', '图片', '编号', '名称','地址', '区域', '地铁', '关键字', '时间', '操作'],
          colModel:[
            {name:'id', index:'id', sorttype:"int", align:"center", hidden: true},

            {name:'img',index:'img',align:"center", formatter: imgFormatter },
            {name:'sn',index:'sn',align:"center"},
            {name:'title',index:'title',align:"center"},
            {name:'address',index:'address',align:"center"},
            {name:'area',index:'area',align:"center" },
            {name:'metro',index:'metro',align:"center",hidden: true},
            {name:'keywords',index:'keywords',align:"center"},
            {name:'time',index:'time',align:"center"},

            {name:'operates',index:'operates',align:'center',sortable:false,width:200}
          ], 
          rownumbers:true,
          rownumWidth:50,//设置行号列宽度
          shrinkToFit:true,//ture，则按比例初始化列宽度。如果为false，则列宽度使用colModel指定的宽度
          autowidth:true,
          viewrecords : true,
          rowNum:10,
          rowList:[10,20,30],
          pager : pager_selector,
          altRows: true,
          width:'100%',
          height: 700,
          multiselect: false,
          multiboxonly: true,
          sortable: true,
      
          loadComplete : function() {
            var table = this;
            setTimeout(function(){
              updatePagerIcons(table);
            }, 0);
          },

          onSelectRow : function(ids) {
            $('#grid-table-2').jqGrid('clearGridData');

            if (ids == null) {
              ids = 0;
              if (jQuery("#grid-table-2").jqGrid('getGridParam','records') > 0) {
                jQuery("#grid-table-2").jqGrid('setGridParam', {
                      url : "index.php?s=/Admin/Huxing/ajax_get_fang_relation_huxings.html&id=" + ids,
                      page : 1
                    });
                jQuery("#grid-table-2").jqGrid('setCaption',"户型列表: " + ids).trigger('reloadGrid');
              }
            } else {
              jQuery("#grid-table-2").jqGrid('setGridParam', {
                url : "index.php?s=/Admin/Huxing/ajax_get_fang_relation_huxings.html&id=" + ids,
                page : 1
              });


              var id=ids;   
              var _rowData = $(grid_selector).jqGrid('getRowData',id);console.log(11111);
              console.log(_rowData);
              jQuery("#grid-table-2").jqGrid('setCaption',"户型列表: " + _rowData.sn +"▶"+ _rowData.title).trigger('reloadGrid');
            }
          },

          gridComplete:function(){  //在此事件中循环为每一行添加修改和删除链接
              var ids=jQuery(grid_selector).jqGrid('getDataIDs');
              for(var i=0; i<ids.length; i++){

                  var id=ids[i];   
                  var _rowData = $(grid_selector).jqGrid('getRowData',id);

                  var operates =""; 
                      operates += "<a style='margin-right:5px;' class='btn btn-primary btn-xs' href='index.php?s=/Admin/Fang/edit.html&id="+_rowData.id+"' data-id='"+_rowData.id+"'>编辑</a>";
                      operates += "<button class='btn btn-danger btn-xs id-btn-dialog2_del' data-id='"+_rowData.id+"'>删除</button>";

                  jQuery(grid_selector).jqGrid('setRowData', ids[i], { operates: operates });
              }
          },
        }).navGrid(pager_selector, {
          	search: false,
  	        add: false,
  	        edit: false,
  	        del: false,
  	        refresh: false
        });

        //显示隐藏列
        jQuery("#hcg").click(function() {
            var len=$(grid_selector).getGridParam("width");
            $(grid_selector).setGridParam().hideCol("username");
            $(grid_selector).setGridWidth(len);
        });
        jQuery("#scg").click(function() {
            var len=$(grid_selector).getGridParam("width");
            $(grid_selector).setGridParam().showCol("username");
            $(grid_selector).setGridWidth(len);
        });
        jQuery(grid_selector).closest(".ui-jqgrid-bdiv").css({ "overflow-x" : "hidden" });//去除jqgrid横向滚动条

        //选择列显示与隐藏
        $(grid_selector).jqGrid('navButtonAdd', pager_selector, {
            caption: "Columns",
            buttonicon: "ui-icon-calculator",
            title: "Choose columns", 
            onClickButton: function () {
                $(grid_selector).jqGrid('columnChooser',{
        					width: 550, 
        					dialog_opts: {
        						modal: true,
        						minWidth: 470,
        						height: 470,
        						show: 'blind',
        						hide: 'explode',
        						dividerLocation: 0.5
        					},
        					done : function (perm) {

        						// var len=$(grid_selector).getGridParam("width");
        						// $(grid_selector).setGridParam().hideCol("username");
        						// $(grid_selector).setGridWidth(len);

        						console.log(perm);
        						if (perm) {
        						  // "OK" button are clicked
        						  this.jqGrid("remapColumns", perm, true);
        						  // the grid width is probably changed co we can get new width
        						  // and adjust the width of other elements on the page
        						  var gwdth = this.jqGrid("getGridParam","width");
        						  this.jqGrid("setGridWidth",gwdth);
        						} else {
        						  // we can do some action in case of "Cancel" button clicked
        						}
        				    }
        				});
        			}
        });

        
        jQuery("#grid-table-2").jqGrid({
          url : "index.php?s=/Admin/Huxing/ajax_get_fang_relation_huxings.html&id=0",
          datatype: "json",
          colNames:['id', '图片', '户型名称', '类型', '面积', '风格', '卫生间', '朝向', '阳台', '付款方式', '出租状态', '价格', '室友', '时间', '操作'],
          colModel:[
            {name:'id', index:'id', sorttype:"int", align:"center", hidden: true, editable: true ,sortable: false},

            {name:'img',index:'img',align:"center", formatter: imgFormatter },
            {name:'title',index:'title',align:"center"},
            {name:'leixing',index:'leixing',align:"center"},
            {name:'mianji',index:'mianji',align:"center"},
            {name:'fengge',index:'fengge',align:"center"},
            {name:'weishengjian',index:'weishengjian',align:"center" },
            {name:'chaoxiang',index:'chaoxiang',align:"center",hidden: true},
            {name:'yangtai',index:'yangtai',align:"center"},
            {name:'payment',index:'payment',align:"center"},
            {name:'status',index:'status',align:"center"},
            {name:'price',index:'price',align:"center"},
            {name:'shiyou',index:'shiyou',align:"center"},
            {name:'time',index:'time',align:"center"},

            {name:'operates',index:'operates',align:'center',sortable:false,width:200}
          ], 
          rownumbers:true,
          rownumWidth:50,//设置行号列宽度
          rowNum:10,
          rowList:[10,100,1000],
          // pager : '#grid-pager-2',
          viewrecords : true,
          autowidth:true,
          shrinkToFit:true,//ture，则按比例初始化列宽度。如果为false，则列宽度使用colModel指定的宽度
          // height : 250,
          caption : "操作日志",

          loadComplete : function(data) {
            var table = this;
            setTimeout(function(){
              updatePagerIcons(table);
            }, 0);
          },

          onSelectRow : function(ids) {
            
          },

          gridComplete:function(){  //在此事件中循环为每一行添加修改和删除链接
              var ids=jQuery(grid_selector_2).jqGrid('getDataIDs');
              for(var i=0; i<ids.length; i++){

                  var id=ids[i];   
                  var _rowData = $(grid_selector_2).jqGrid('getRowData',id);

                  var operates =""; 
                      operates += "<a style='margin-right:5px;' class='btn btn-primary btn-xs' href='index.php?s=/Admin/Huxing/edit.html&id="+_rowData.id+"' data-id='"+_rowData.id+"'>编辑</a>";
                      operates += "<button class='btn btn-danger btn-xs id-btn-dialog2_del_huxing' data-id='"+_rowData.id+"'>删除</button>";

                  jQuery(grid_selector_2).jqGrid('setRowData', ids[i], { operates: operates });
              }
          },

        }).navGrid('#grid-pager-2', {
          add : false,
          edit : false,
          del : false
        });


        //更新分页图标  
        function updatePagerIcons(table) {
          var replacement = 
          {
            'ui-icon-seek-first' : 'icon-double-angle-left bigger-140',
            'ui-icon-seek-prev' : 'icon-angle-left bigger-140',
            'ui-icon-seek-next' : 'icon-angle-right bigger-140',
            'ui-icon-seek-end' : 'icon-double-angle-right bigger-140'
          };
          $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
            var icon = $(this);
            var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
            
            if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
          })
        }
      }
    </script>
   
    
    <!-- 模板引擎doT.js    start -->
    <script id="j-tmpl" type="text/template">
        <tr>
          <td class="center">
            <div class="layui-inline">
              <div class="layui-form-item">
                <div class="layui-input-inline">
                  <input class="layui-input" placeholder="板料计划时间" onclick="layui.laydate({elem: this, istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                </div>
              </div>
            </div>
          </td>
          <td>
            <div class="layui-inline">
              <div class="layui-form-item">
                <div class="layui-input-inline">
                  <input type="text" name="keyword" lay-verify="required" placeholder="板料名称" autocomplete="off" class="layui-input id-btn-dialog2_bl_info item-2">
                </div>
              </div>
            </div>
            <div class="layui-inline" style="display:none;">
              <div class="layui-form-item">
                <div class="layui-input-inline">
                  <input type="text" name="keyword" lay-verify="required" placeholder="" autocomplete="off" class="layui-input id-btn-dialog2_bl_info item-3">
                </div>
              </div>
            </div>
          </td>
          <td>
            <div class="layui-inline">
              <div class="layui-form-item">
                <div class="layui-input-inline">
                  <input type="text" name="keyword" lay-verify="required" placeholder="数量" autocomplete="off" class="layui-input item-4">
                </div>
              </div>
            </div> 
          </td>
          <td>
          </td>
        </tr>
    </script>

    <script id="j-tmpl_detail_show" type="text/template">
        {{ if(it.code == 0){ }}

            <table class="layui-table">
              <colgroup>
                <col width="150">
                <col>
              </colgroup>
              <tbody>
                <tr>
                  <td>姓名</td>
                  <td>{{=it.data.truename}}</td>
                </tr>
                <tr>
                  <td>用户名</td>
                  <td>{{=it.data.username}}</td>
                </tr>
              </tbody>
            </table>

        {{ }else{ }}

                <h2>暂无数据</h2>

        {{ } }}
    </script>

    
    <script src="/Public/Admin/doT-master/doT.js"></script>
    <script type="text/javascript">
        $(function(){
            //smartMenu右键自定义上下文菜单插件初使化
            Fn_Init_smartMenu();
            
            //表格头部排序点击
            $('.ui-state-default.ui-jqgrid-hdiv').click(function(){
                Fn_Init_smartMenu();
            });

            //表格头部排序点击
            $('.ui-jqgrid-bdiv').click(function(){
                Fn_Init_smartMenu();
            });

            //表格头部排序点击
            $('#grid-pager').click(function(){
                Fn_Init_smartMenu();
            });

            
        });
    </script>
    <!-- 模板引擎doT.js    end -->

    <!-- jQuery smartMenu右键自定义上下文菜单插件  start -->
    <script type="text/javascript" src="/Public/Admin/jquery-smartMenu/js/jquery-smartMenu.js"></script>
    <script>
        function Fn_Init_smartMenu(){
            var chkSingle = $("th input"), chkGroup = $("td input");
            var funTrStyle = function() {
              chkGroup.each(function() {
                if ($(this).attr("checked")) {
                  $(this).parents("tr").addClass("bg"); 
                } else {
                  $(this).parents("tr").removeClass("bg");  
                }
              });
            }, funTrGet = function() {
              return  $("td input:checked").parents("tr");
            };

            chkSingle.bind("click", function() {
              if ($(this).attr("checked")) {
                chkGroup.attr("checked", "checked");
              } else {
                chkGroup.attr("checked", "");
              }
              funTrStyle(); 
            });

            chkGroup.bind("click", funTrStyle);
            funTrStyle();

            //自定义右键上下文
            var objDelete = {
              text: "删除",
              func: function() {
                  $('#del_grid-table').trigger('click');
              } 
            }, objShow = {
              text: "查看",
              func: function() {
                  $('#view_grid-table').trigger('click');
              } 
            }, objEdit = {
              text: "编辑",
              func: function() {
                  $('#edit_grid-table').trigger('click');
              }
            }, objUnRead = {}, objSend = {};

            var mailMenuData = [
              [objDelete, objShow]
            ];

            $("#grid-table>tbody>tr").smartMenu(mailMenuData, {
              name: "mail",
              beforeShow: function() {    
                //根据选中的是否是已读显示不同的上下文菜单
                $(this).find("input").attr("checked", "checked"); 
                funTrStyle();

                //动态数据，及时清除
                $.smartMenu.remove();

                //确定显示数据 - 主要是已读与未读
                var numTrBold = 0, numTrNormal = 0, eleTr = funTrGet();
                eleTr.each(function() {
                  if ($(this).css("font-weight") === "700") {
                    numTrBold++; 
                  } 
                  if ($(this).css("font-weight") === "400") {
                    numTrNormal++;  
                  }
                });

                if (eleTr.size() === numTrBold) {
                  //全是粗体  
                  mailMenuData[1] = [objEdit];
                } else if (eleTr.size() === numTrNormal) {
                  //全是正常
                  mailMenuData[1] = [objEdit];
                } else {
                  //混杂
                  mailMenuData[1] = [objEdit];
                }
              }
            });
        }
    </script>
    <!-- jQuery smartMenu右键自定义上下文菜单插件  end -->


    <!-- ============================= -->
    <style type="text/css">
        .site-demo-upload,
        .site-demo-upload img{width: 200px; height: 200px; border-radius: 100%;margin:0 auto;}
        .site-demo-upload{position: relative; background: #e2e2e2;}
        .site-demo-upload .site-demo-upbar{position: absolute; top: 50%; left: 50%; margin: -18px 0 0 -56px;}
        .site-demo-upload .layui-upload-button{background-color: rgba(0,0,0,.2); color: rgba(255,255,255,1);}
    </style>
    <!-- 确认弹框 start-->
    <div id="dialog-confirm_add" class="hide">
       <div class="row">
              <table class="table table-striped table-bordered table-hover">
                <tbody id="update_img_block">
                  <tr>
                    <td colspan="2" style="text-align:center;">
                      <div class="site-demo-upload">
                        <img id="LAY_demo_upload_add" src="/Public/Admin/images/tong.jpg">
                        <div class="site-demo-upbar">
                          <input type="file" name="img" class="layui-upload-file avatar" id="add_upload_img">
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

             <form class="layui-form layui-form-pane col-xs-12">
                <table id="sample-table_add" class="table table-striped table-bordered table-hover">
                  <tbody>
                    <tr>
                      <td class="center">
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">房源编号</label>
                            <div class="layui-input-inline">
                              <input type="text" name="sn" lay-verify="sn" placeholder="" autocomplete="off" class="layui-input">
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">房源名称</label>
                            <div class="layui-input-inline">
                              <input type="text" name="title" lay-verify="title" placeholder="" autocomplete="off" class="layui-input">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="center">
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">地址</label>
                            <div class="layui-input-inline">
                              <input type="text" name="address" lay-verify="address" placeholder="" autocomplete="off" class="layui-input">
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">搜索关键字</label>
                            <div class="layui-input-inline">
                              <input type="text" name="keywords" lay-verify="keywords" placeholder="" autocomplete="off" class="layui-input">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="center">
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">所属区域</label>
                            <div class="layui-input-inline">
                              <select name="area" lay-filter="area">
                                <option value="请选择">请选择</option>
                                <?php if(is_array($area)): foreach($area as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="layui-inline">
                          <div class="layui-form-item">
                            <label class="layui-form-label">地铁</label>
                            <div class="layui-input-inline">
                              <select name="metro" lay-filter="metro">
                                <option value="请选择">请选择</option>
                                <?php if(is_array($metro)): foreach($metro as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    
                    <tr>
                      <td colspan="2">
                        <div class="layui-form-item layui-form-text">
                          <div class="layui-input-block">
                            <textarea placeholder="简介" class="layui-textarea"></textarea>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- <tr>
                      <td colspan="2" align="center">
                        <div class="layui-form-item layui-form-text">
                          <div class="layui-input-block">
                            <a class="layui-btn layui-btn-normal id-btn-dialog2_editer" data-url="<?php echo U('Admin/Index/baidu_editer');?>">百度编辑器</a>
                            <a class="layui-btn layui-btn-warm id-btn-dialog2_editer" data-url="<?php echo U('Admin/Index/layui_editer');?>">Layui编辑器</a>
                            <a class="layui-btn layui-btn-danger id-btn-dialog2_editer" data-url="<?php echo U('Admin/Index/ace_editer');?>">ace编辑器</a>
                          </div>
                        </div>
                      </td>
                    </tr> -->
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" style="text-align:right;">
                        <input type="text" name="img" id="add_img" class="layui-input" style="display:none;">
                        <button class="layui-btn" lay-submit="" lay-filter="demo1_add">添加</button>
                      </td>
                    </tr>
                  </tfoot>
                </table>
             </form>
        </div>
    </div><!-- #dialog-confirm -->

    <!-- 确认弹框 start-->
    <div id="dialog-confirm_del" class="hide">
       <div class="row">
           <form class="layui-form layui-form-pane col-xs-12">
            
            <table id="sample-table_del" class="table table-striped table-bordered table-hover">
                <tbody id="liaoliao_box">
                  <tr>
                    <td>
                      <div class="layui-inline">
                        <div class="layui-form-item">
                          <label class="layui-form-label">扫码</label>
                          <div class="layui-input-inline">
                            <input type="text" name="keyword" lay-verify="required" placeholder="" autocomplete="off" class="layui-input item-4">
                          </div>
                        </div>
                      </div> 
                    </td>
                  </tr>
                </tbody>
              </table>
           </form>
        </div>
    </div><!-- #dialog-confirm -->

    <!-- 确认弹框 start-->
    <div id="dialog-confirm_edit" class="hide">
       <div class="row">
              <table class="table table-striped table-bordered table-hover">
                <tbody id="update_img_block">
                  <tr>
                    <td colspan="2" style="text-align:center;">
                      <div class="site-demo-upload">
                        <img id="LAY_demo_upload_edit" src="/Public/Admin/images/tong.jpg">
                        <div class="site-demo-upbar">
                          <input type="file" name="img" class="layui-upload-file avatar" id="edit_upload_img">
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

              <form class="layui-form layui-form-pane col-xs-12">
                  <table class="table table-striped table-bordered table-hover">
                      <tbody id="edit_form_block">
                        <tr>
                          <td>
                            <div class="layui-inline">
                              <div class="layui-form-item">
                                <label class="layui-form-label">姓名</label>
                                <div class="layui-input-inline">
                                  <input type="text" name="truename" placeholder="" autocomplete="off" class="layui-input">
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="layui-inline">
                              <div class="layui-form-item">
                                <label class="layui-form-label">用户名</label>
                                <div class="layui-input-inline">
                                  <input type="text" name="username" placeholder="" autocomplete="off" class="layui-input">
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="layui-inline">
                              <div class="layui-form-item">
                                <label class="layui-form-label">用户组</label>
                                <div class="layui-input-inline">
                                  <select name="gid" id="edit_select_group">
                                    <option value="请选择">请选择</option>
                                    <?php if(is_array($group)): foreach($group as $key=>$vo): ?><optgroup label="<?php echo ($vo['title']); ?>">
                                         <?php if(is_array($vo['_child'])): foreach($vo['_child'] as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
                                       </optgroup><?php endforeach; endif; ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                           
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2" style="text-align:right;">
                            <input type="hidden" name="img" id="edit_img" class="layui-input">
                            <input type="hidden" name="id" id="edit_id" class="layui-input">
                            <button class="layui-btn" lay-submit="" lay-filter="demo1_edit">保存</button>
                          </td>
                        </tr>
                      </tfoot>
                  </table>
              </form>
           
        </div>
    </div><!-- #dialog-confirm -->

    <!-- 确认弹框 start-->
    <div id="dialog-confirm_editer" class="hide">
        <iframe src="" id="editer" name="editer" width="100%" height="100%" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    </div><!-- #dialog-confirm -->
    
    <!-- 详情 start-->
    <div id="dialog-confirm_show" class="hide">
       
    </div><!-- #dialog-confirm -->
    
  
    <script type="text/javascript">
        $(function(){
            //添加
            $( "body" ).on('click', '.id-btn-dialog2_add', function(e) {
              e.preventDefault();
              
              $( "#dialog-confirm_add" ).removeClass('hide').dialog({
                resizable: false,
                modal: true,
                title: "",
                width:800,
                title_html: true,
              });

              $("div[aria-describedby='dialog-confirm_add'] div span.ui-dialog-title").html("<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> 添加：</h4></div>");
            });

            //编辑
            $( "body" ).on('click', '.id-btn-dialog2_edit', function(e) {
              e.preventDefault();

              var _id  = $(this).attr('data-id');
              var _json = _ajax_get_user_info(_id);

              if(_json.code==0){
                  var _user=_json.data;

                  $('#LAY_demo_upload_edit').attr('src','/Uploads'+_user.img);
                  $('#edit_form_block input[name=truename]').val(_user.truename);
                  $('#edit_form_block input[name=username]').val(_user.username);
                  $('#edit_id').val(_user.id);

                  if(_user.gid>0){
                      $('#edit_select_group option[value='+_user.gid+']').attr('selected',true);
                  }

                  var form = layui.form();
                  form.render();
                   
              }

              $( "#dialog-confirm_edit" ).removeClass('hide').dialog({
                resizable: false,
                modal: true,
                title: "",
                width:800,
                title_html: true,
              });

              $("div[aria-describedby='dialog-confirm_edit'] div span.ui-dialog-title").html("<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> 编辑：</h4></div>");
            });

            //编辑器弹框
            $( "body" ).on('click', '.id-btn-dialog2_editer', function(e) {
              e.preventDefault();

              $('#editer').attr('src',$(this).attr('data-url'));
              var _editer_url=$(this).attr('data-url');

              //弹出即全屏
              var index = layer.open({
                type: 2,
                content: _editer_url,
                area: ['800px', '500px'],
                maxmin: true
              });
            });

            // 添加房型
            $( "body" ).on('click', '.id-btn-dialog2_show', function(e) {
              e.preventDefault();

              var _id  = $(this).attr('data-id');
              
              window.location.href="index.php?s=/Admin/Fang/edit.html&id="+_id;
            });

            //删除
            $( "body" ).on('click', '.id-btn-dialog2_del', function(e) {
              e.preventDefault();

              if(confirm("确定要删除？")){
                  var ids=$(this).attr('data-id');
                  _ajax_del(ids);
              }
            });

            //删除
            $( "body" ).on('click', '.id-btn-dialog2_del_huxing', function(e) {
              e.preventDefault();

              if(confirm("确定要删除此户型？")){
                  var ids=$(this).attr('data-id');
                  _ajax_del_huxing(ids);
              }
            });

        });
    </script>
    <!-- 确认弹框 end-->

    <script type="text/javascript">
       //获取列表
       function _ajax_list_device(_username,_gid){
          var grid_data;
          $.ajax({  
              async:false,
              type:'get',  
              contentType:"application/x-www-form-urlencoded",
              url : "<?php echo U('Admin/Fang/ajax_get_fang_list');?>",
              data: {'username':_username, 'gid':_gid},
              dataType : 'json',
              success  : function(json) { 
                  if(json.code==0){
                      // layer.msg(json.msg);
                      grid_data=json.data;
                  }else{
                      layer.msg(json.msg);
                  }
              }
          });  
          return grid_data;  
       } 

       //异步获取用户关联的信息
       function _ajax_get_user_relation_logs(id){
           var _data='{"id":"'+id+'"}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/User/ajax_get_user_relation_logs');?>",
               data: _data,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //异步获取一条信息
       function _ajax_get_user_info(id){
           var _edit_data  ='{';
           _edit_data     +='"id":'+id;
           _edit_data     +='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/User/ajax_get_user_info_by_id');?>",
               data: _edit_data,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       // layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //异步编辑信息
       function _ajax_edit_user(data){

           var truename=data.truename;
           var gid=data.gid;
           var username=data.username;
           var img=data.img;
           var id=data.id;

           var _edit_data ='{';
               _edit_data+='"truename":"'+truename+'","gid":"'+gid+'","username":"'+username+'","img":"'+img+'","id":"'+id+'"';
               _edit_data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/User/ajax_edit_user');?>",
               data: _edit_data,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       // layer.msg(json.msg);
                       _json=json;
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //异步添加信息
       function _ajax_add_fang(data){

           var sn=data.sn;
           var title=data.title;
           var address=data.address;
           var area=data.area;
           var metro=data.metro;
           var keywords=data.keywords;
           var img=data.img;

           var _add_data ='{';
               _add_data+='"sn":"'+sn+'","title":"'+title+'","address":"'+address+'","area":"'+area+'","metro":"'+metro+'","keywords":"'+keywords+'","img":"'+img+'"';
               _add_data+='}';

           var _json;
           $.ajax({  
               async:false,
               type:'post',  
               contentType:"application/x-www-form-urlencoded",
               url : "<?php echo U('Admin/User/ajax_add_fang');?>",
               data: _add_data,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       layer.msg(json.msg);
                       _json=json;

                       var _row=json.data;
                       console.log(_row);
                       var operate =""; 
                       operate  = "<button style='margin-right:5px;' class='btn btn-warm btn-xs id-btn-dialog2_show' data-id='"+_row.id+"'>查看</button>";
                       operate += "<button style='margin-right:5px;' class='btn btn-primary btn-xs id-btn-dialog2_edit' data-id='"+_row.id+"'>编辑</button>";
                       operate += "<button class='btn btn-danger btn-xs id-btn-dialog2_del' data-id='"+_row.id+"'>删除</button>";

                       $("#grid-table").addRowData("1", {"id":_row.id,"sn":_row.sn,"title":_row.title,"address":_row.address,"_area_title":_row._area_title,"_metro_title":_row._metro_title,"keywords":_row.keywords,"img":"./Uploads"+_row.img,"operates":_row.operate}, "first");  

                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   alert('error');
               }  
           }); 
           return _json;  
       }

       //异步删除
       function _ajax_del(ids){
           var _RowID='{"ids":"'+ids+'"}';

           var _json;
           $.ajax({  
               type:'post',  
               url : "<?php echo U('Admin/Fang/ajax_del');?>",
               data: _RowID,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       layer.msg(json.msg);
                       var selectRow = $("#grid-table").jqGrid('getGridParam','selrow');
                       $("#grid-table").delRowData(selectRow);
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   layer.msg('error');
               }  
           }); 
       }

       //异步删除户型 
       function _ajax_del_huxing(ids){
           var _RowID='{"ids":"'+ids+'"}';

           var _json;
           $.ajax({  
               type:'post',  
               url : "<?php echo U('Admin/Huxing/ajax_del_huxing');?>",
               data: _RowID,
               dataType : 'json',
               success  : function(json) {  
                   if(json.code == 0){
                       layer.msg(json.msg);
                       var selectRow = $("#grid-table-2").jqGrid('getGridParam','selrow');
                       $("#grid-table-2").delRowData(selectRow);
                   }else{
                       layer.msg(json.msg);
                       _json=json;
                   }
               },
               error  : function() {  
                   layer.msg('error');
               }  
           }); 
       }
    </script>

    <script>
        //layui表单
        layui.use(['form', 'layedit', 'laydate'], function(){
          var form = layui.form()
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;

          //创建一个编辑器
          var editIndex = layedit.build('LAY_demo_editor');

          //自定义验证规则
          form.verify({
            title: function(value){
              if(value.length < 5){
                return '标题至少得5个字符啊';
              }
            }
            ,truename: function(value){  
              if(value.length < 2){  
                return '请输入真实姓名';  
              }  
            }
            ,username: function(value){  
              if(value.length < 4){  
                return '请输入至少4位的用户名';  
              }  
            }
            ,password: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
              layedit.sync(editIndex);
            }
          });


          //监听提交
          form.on('submit(demo1)', function(data){
            var _keyword=data.field.keyword;
            get_bl_list(_keyword);
            return false;
          });


          //监听提交
          form.on('submit(demo1_search)', function(data){
            layer.alert(JSON.stringify(data.field), {
              title: '最终的提交信息'
            })
            pageInit(_username, _gid);
            return false;
          });

          //监听提交
          form.on('submit(demo1_detail)', function(data){
            alert('demo1_detail');
            console.log(data.field);
            return false;
          });

          //监听提交
          form.on('submit(demo1_add)', function(data){
            var _json=_ajax_add_fang(data.field);

            if(_json.code==0){
                $("div[aria-describedby='dialog-confirm_add'] .ui-dialog-titlebar-close").trigger("click");
            }
            return false;
          });

          //监听提交
          form.on('submit(demo1_edit)', function(data){
            var _json=_ajax_edit_user(data.field);

            var _data=_json.data;
            var selectID=$("#grid-table").getGridParam("selrow");

            $("#grid-table").setRowData(selectID,{"truename":_data.truename,"_auth_group_title":_data._auth_group_title, "username":_data.username, "img":"./Uploads"+_data.img});

            if(_json.code==0){
                $("div[aria-describedby='dialog-confirm_edit'] .ui-dialog-titlebar-close").trigger("click");
            }
            return false;
          });

          //监听提交
          // form.on('submit(demo1)', function(data){
          //   layer.alert(JSON.stringify(data.field), {
          //     title: '最终的提交信息'
          //   })
          //   return false;
          // });
        });
    </script>


    <script>
        layui.use('upload', function(){
          //上传文件
          layui.upload({
             url: "<?php echo U('Admin/User/upload_img');?>" //上传接口
             ,elem: '#edit_upload_img' //指定原始元素，默认直接查找class="layui-upload-file"
             ,success: function(res){ //上传成功后的回调
               console.log(res);
               if(res.code==0){
                  $('#LAY_demo_upload_edit').attr('src','/Uploads'+res.data);
                  $('#edit_img').val(res.data);
               }
             }
           });

          //上传文件
          layui.upload({
             url: "<?php echo U('Admin/User/upload_img');?>" //上传接口
             ,elem: '#add_upload_img' //指定原始元素，默认直接查找class="layui-upload-file"
             ,success: function(res){ //上传成功后的回调
               console.log(res);
               if(res.code==0){
                  $('#LAY_demo_upload_add').attr('src','/Uploads'+res.data);
                  $('#add_img').val(res.data);
               }
             }
           });
        });
    </script>

    <script>
        layui.use('layedit', function(){
          var layedit = layui.layedit
          ,$ = layui.jquery;
          
          //构建一个默认的编辑器
          var index = layedit.build('LAY_demo1');
          
          //编辑器外部操作
          var active = {
            content: function(){
              alert(layedit.getContent(index)); //获取编辑器内容
            }
            ,text: function(){
              alert(layedit.getText(index)); //获取编辑器纯文本内容
            }
            ,selection: function(){
              alert(layedit.getSelection(index));
            }
          };
          
          $('.site-demo-layedit').on('click', function(){
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
          });
          
          //自定义工具栏
          layedit.build('LAY_demo2', {
            tool: ['face', 'link', 'unlink', '|', 'left', 'center', 'right']
            ,height: 100
          })
        });
    </script>
  </body>
</html>