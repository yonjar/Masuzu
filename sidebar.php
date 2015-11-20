<div id="sidebar" class="col s12 m4 hide">
  <div class="card waves-effect waves-light wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s"><a href="http://www.cytrs.club/" target="_blank" style="display:block;" rel="nofollow">
            <div class="card-image">
                <img src="http://img.itc.cn/photo/osZ6p2qgKY0">
                <span class="card-title wow tada" style="color:#000;font-weight:bold;">偽物も、本物も</span>
            </div>
            </a><div class="card-action"><a href="http://www.cytrs.club/" target="_blank" style="display:block;" rel="nofollow">
                </a><a href="http://weibo.com/yonjar" rel="nofollow">微博</a>
                <a href="https://github.com/yonjar" rel="nofollow">Github</a>
                <a href="mailto:cytrs@qq.com">勾搭PO主</a>
            </div>
        </div>

<ul class="collapsible wow bounceInUp" data-collapsible="accordion" data-wow-duration="1s" data-wow-delay="1.5s">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>分类</div>
      <div class="collapsible-body">
        <div class="collection">
          <?php $this->widget('Widget_Metas_Category_List')->to($pages); ?>
          <?php while($pages->next()): ?>
            <a class="collection-item" href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>"><?php $pages->name(); ?></a>
          <?php endwhile;?>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>归档</div>
      <div class="collapsible-body">
        <div class="collection">
          <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')->parse('<a class="collection-item" class="filing" href="{permalink}">{date}</a>'); ?>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header active"><i class="material-icons">whatshot</i>最近文章</div>
      <div class="collapsible-body">
        <div class="collection">
          <?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="collection-item" href="{permalink}">{title}</a>'); ?>
        </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">group</i>小伙伴</div>
      <div class="collapsible-body">

  <ul class="collection">
    <li class="collection-item avatar">
      <img src="https://api.kotori.im/favicon/?url=blog.5wzh.com" alt="blog.5wzh.com" class="circle">
      <span class="title">Papersnake</span>
      <p>wzh's blog</p>
      <a href="//blog.5wzh.com" class="secondary-content"><i class="material-icons">send</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="https://api.kotori.im/favicon/?url=jclmiku.me" alt="jclmiku.me" class="circle">
      <span class="title">JclMiku</span>
      <p>温州某初中学生，准初三，IT爱好者，不折腾会死星人。</p>
      <a href="//jclmiku.me" class="secondary-content"><i class="material-icons">send</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="https://api.kotori.im/favicon/?url=emilelu.com" alt="emilelu.com" class="circle">
      <span class="title">Emilelu</span>
      <p>深圳某学校学生，准初一，熟悉 HTML 但不精通，不折腾会死星人。 </p>
      <a href="//emilelu.com" class="secondary-content"><i class="material-icons">send</i></a>
    </li>

<!--     <li class="collection-item avatar">
      <img src="https://api.kotori.im/favicon/?url=" alt="" class="circle">
      <span class="title"></span>
      <p></p>
      <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
    </li> -->
  </ul>

      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">face</i>寻人启示(*/ω°＼)</div>
      <div class="collapsible-body">
      　　<ul class="ds-recent-visitors collection-item" data-avatar-size="73" data-num-items="100"></ul>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">settings</i>其他</div>
      <div class="collapsible-body">
        <div class="collection">
          <?php if($this->user->hasLogin()): ?>
            <a class="collection-item"  href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
            <a class="collection-item"  href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
          <?php else: ?>
            <a class="collection-item" href="<?php $this->options->loginurl();?>">登录</a>
          <?php endif; ?>
          <a class="collection-item" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a>
          <a class="collection-item" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
        </div>
      </div>
    </li>
  </ul>







</div>