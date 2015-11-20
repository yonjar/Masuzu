<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="col s12">
<div id="comments" class="card-panel bounceInUp wow">

    <?php if($this->allow('comment')): ?>

<!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->

   <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
</div>
