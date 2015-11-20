<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Hello, I&#39;m Cytrs, a Doubi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('css/materialize.min.css');?>" media="screen,projection">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css');?>">
    <link rel="stylesheet" href="http://7x2xdm.com1.z0.glb.clouddn.com/Image-Box/ImageBox.css">
    <link rel="stylesheet" href="http://7x2xdm.com1.z0.glb.clouddn.com/animate.min.css">


    <script src="http://7x2xdm.com1.z0.glb.clouddn.com/wow.min.js"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.min.js');?>"></script>
    <script src="<?php $this->options->themeUrl('js/materialize.min.js');?>"></script>
    <script src="<?php $this->options->themeUrl('js/init.js');?>"></script>
    <script src="<?php $this->options->themeUrl('js/main.js');?>"></script>
    <script src="http://7x2xdm.com1.z0.glb.clouddn.com/smoothscroll.js"></script>



    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>


</head>



<body class="light-blue lighten-5">
<!-- 加载动画s  -->

<div id="loadb">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>
<!-- 加载动画e  -->
<header class="site-header">
    <div class="navbar-fixed">
        <nav class="nav light-blue darken-2" style="opacity: 0.9;">
               <div class="container">
               <ul>
                <li><a internal="" href="<?php $this->options->siteUrl(); ?>" class="brand-logo"><?php $this->options->title();?></a></li>
               </ul>
                  <ul id="slide-out" class="side-nav">
                    <li class="waves-effect waves-purple">
                        <form method="post" action="">
                            <div class="input-field">
                              <label for="search"><i class="material-icons">search</i></label>
                              <input placeholder="Search" id="search" type="text" name="s" required>
                            </div>
                        </form>
                    </li>
    <li class=" waves-effect waves-teal"><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
    <?php $this->widget('Widget_Contents_Page_List')->parse('<li class=" waves-effect waves-teal"><a href="{permalink}">{title}</a></li>'); ?>

                <?php if($this->user->haslogin()) echo '<li class=" waves-effect waves-teal"><a href="'.$this->options->adminurl.'">进入后台</a></li>';?>

                    <li class="no-padding">
                      <ul class="collapsible collapsible-accordion">
                        <li>
                          <a class="collapsible-header">关于Cytrs<i class="mdi-navigation-arrow-drop-down"></i></a>
                          <div class="collapsible-body">
                            <ul>
                              <li class="waves-effect waves-purple"><a href="http://weibo.com/yonjar" target="_blank">Weibo</a></li>
                              <li class="waves-effect waves-purple"><a href="https://github.com/yonjar" target="_blank">Github</a></li>
                              <li class="waves-effect waves-purple"><a href="https://a-nime.cn" target="_blank">感谢A-Nime Project</a></li>
                              <li class="waves-effect waves-purple"><a href="http://blog.ours.moe" target="_blank">感谢Ours.moe</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="right hide-on-med-and-down">
                    <li class="waves-effect waves-light"><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li class="waves-effect waves-light"><a href="{permalink}">{title}</a></li>'); ?>
                        <?php if($this->user->haslogin()) echo '<li class="waves-effect waves-light"><a href="'.$this->options->adminurl.'">进入后台</a></li>';?>
                    <li class="waves-effect waves-light" id="switch" title="显示/隐藏Sidebar"><a href="#!"><i class="material-icons">more</i></a></li>

                <li class="search-nav waves-effect waves-light">
                <form method="post" action="">
                    <div class="input-field">
                      <label for="search"><i class="material-icons">search</i></label>
                      <input placeholder="Search" id="search" type="text" name="s" required>
                    </div>
                  </form>
                  </li>
                  </ul>
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

            </div>
        </nav>
    </div>

<?php if($this->is('single')): ?>

  <div class="head-parallax-container valign-wrapper hide-on-med-and-down">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
              <h2 class="header col s12 light"><a class="h-title hoverable blue darken-3" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php $this->options->themeUrl('img/bgurl.php');?>" style="transform: translate3d(-50%, 388px, 0px); display: block;"></div>
  </div>


<?php else: ?>
<div class="head-parallax-container valign-wrapper hide-on-med-and-down">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
            <h4 class="col s12"><span class="col hitokoto h-title hoverable blue darken-3" id="hitokoto" style="color:#fff;">Loading..</span></h4>
            <div id="hjsbox" style="display:none"></div>
      </div>
    </div>
    <div class="parallax"><img src="<?php $this->options->themeUrl('img/bgurl.php');?>" style="transform: translate3d(-50%, 388px, 0px); display: block;"></div>
  </div>
<?php endif;?>

</header>