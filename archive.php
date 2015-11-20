<?php
$this->need('header.php');
?>
<div class="row">
<div class="container">
	<div class="col s12">
			<?php $this->archiveTitle(array(
				'category'  =>  _t('这是归类在 <span class="label label-success">&lt;%s&gt;</span> 下的文章'),
				'search'    =>  _t('包含了你要的关键字 <span class="label label-success">&lt;%s&gt;</span> 的文章'),
				'tag'       =>  _t('你要找的标签 <span class="label label-success">&lt;%s&gt;</span> 下的文章'),
				'author'    =>  _t('作者<span class="label label-success">&lt;%s&gt;</span> 发布的文章')
				), '<h5 class="comments-title">', '</h5>'); ?>
			<?php while($this->next()): ?>
		       <article class=" bounceInUp wow">
		          <div class="card">
		            <div class="card-image">
		            <div class="cardrandco" style="<?php echo("background-color:rgb(" . rand(0,250) . "," . rand(0,250) . "," . rand(0,250) . ");"); ?>"></div>
		              <img class="blur" src="<?php if($this->attachments(1)->attachment->isImage) $this->attachments(1)->attachment->url(); ?>">
		              <h3 class="card-title truncate"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
		            </div>
		            <div class="card-content">
		              <?php $this->content('Continue Reading...'); ?>
		            </div>
		           <div class="card-action clearfix">
		           <div class="darken-2">
		              <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
		              <a><?php $this->date('F j, Y'); ?></a>
		              <span class="hide-on-small-only"><?php $this->category(''); ?></span>
		            </div>
		          </div>
		       </article>
			<?php endwhile;?>
			<?php $this->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination pagination-success','currentClass'=>'active')); ?>
		</div>
</div>
</div>
	<?php $this->need('footer.php');?>




