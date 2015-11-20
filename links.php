<?php
/**
 * 友链模板
 *
 * @package custom
 */

 $this->need('header.php');
 ?>
 	<div id="page-wrap">
        <div id="main-content" style="display: block;">
        <div id="guts">
			<div class="row tables">
			  <div class="container">
			  <div class="post">

				<div class="col s12 m7 wow bounceInUp">
					<div class="card" style="color:#000;width:100%;">
						<div class="card-content">
			                 <span class="card-title hide-on-large-only"><a href="<?php $this->permalink() ?>"><?php $this->title();?></a></span>
							<div class="card-content">
							  <ul class="links collection">
							    <li class="collection-item avatar hoverable">
							      <img src="https://api.kotori.im/favicon/?url=blog.5wzh.com" alt="blog.5wzh.com" class="circle">
							      <span class="title">Papersnake</span>
							      <p>wzh's blog</p>
							      <a href="//blog.5wzh.com" class="secondary-content"><i class="material-icons">send</i></a>
							    </li>
							    <li class="collection-item avatar hoverable">
							      <img src="https://api.kotori.im/favicon/?url=jclmiku.me" alt="jclmiku.me" class="circle">
							      <span class="title">JclMiku</span>
							      <p>温州某初中学生，准初三，IT爱好者，不折腾会死星人。</p>
							      <a href="//jclmiku.me" class="secondary-content"><i class="material-icons">send</i></a>
							    </li>
							    <li class="collection-item avatar hoverable">
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
						</div>
						<div class="card-action my-tags">
							<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
							<a><?php $this->date('F j, Y'); ?></a>
								<a href="<?php $this->permalink() ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></a>
						</div>
					</div>
				</div>
			    <div class="col s12 m5 wow bounceInUp">
			      <div class="card white">
			        <div class="card-content black-text">
						<?php $this->content(); ?>
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