<?php
$this->need('header.php');
?>
	<div id="page-wrap">
        <div id="main-content" style="display: block;">
        <div id="guts">
			<div class="row tables">
			  <div class="container">
			  <div class="post">
				<div class="col s12 wow bounceInUp">
					<div class="card" style="color:#000;width:100%;">
						<div class="card-content white-text">
			        <span class="card-title hide-on-large-only"><a href="<?php $this->permalink() ?>"><?php $this->title();?></a></span>
							<div class="card-content" style="color:#000;font-size:18px;">
								<?php $this->content(); ?>
							</div>
						</div>
						<div class="card-action my-tags">
							<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
							<a><?php $this->date('F j, Y'); ?></a>
								<a href="<?php $this->permalink() ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></a>
						</div>
					</div>
				</div>
					<?php $this->need('comments.php');?>
			  </div>
			  </div>
		</div>
		</div>
	</div>
				<?php $this->need('footer.php');?>
