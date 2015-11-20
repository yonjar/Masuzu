<?php 
define('__TYPECHO_GRAVATAR_PREFIX__','https://secure.gravatar.com/avatar/');   //Gravatar头像显示问题修复  
?>
<div id="comments" class="card-panel bounceInUp wow">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h5 class="hoverable center card-panel wow zoomIn"><?php $this->commentsNum(_t('No comment, waiting for you to rob sofa'), _t('Someone has won'), _t('已被 %d 条水怪侵略')); ?></h5>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h5 id="response" class="hoverable center card-panel wow zoomIn"><?php _e('Say Something…'); ?></h5>
        <div class="row">
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form"  class="col s12">
        <div class="row">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<div  class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <label for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
    		</div>
    		<div  class="input-field col s4">
                <i class="material-icons prefix">email</i>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</div>
    		<div  class="input-field col s4">
                <i class="material-icons prefix">http</i>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e(''); ?></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div>
            <?php endif; ?>
    		<div class="input-field col s12">
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="12" cols="50" name="text" id="textarea" class="materialize-textarea" required ><?php $this->remember('text'); ?></textarea>
            </div>
    		<div>
                        <button id="postcomment" type="submit" class="btn blue waves-effect">提交评论 <i class="mdi-content-send left"></i></button>
              </div>
        </div>
    	</form>
        </div>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
