<?php
/**
 * 这是 Cytrs 的一个基于Materialize框架的自用Typecho模板
 * 
 * @package Masuzu
 * @author Yonjar Liang
 * @version 1.1.0
 * @link http://www.cytrs.com/
 */

 $this->need('header.php');
 ?>

<div id="page-wrap">
        <div id="main-content" style="display: block;">
        <div id="guts">
                <div class="container">
                    <div class="wrapper light-blue-text text-darken-3">
                        <div class="post">

    <div class="row">
      <div id="article" class="col s12">
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
<?php endwhile; ?>
      </div>
      <?php $this->need('sidebar.php'); ?>
    </div>

       <div class="pagenav">
    <?php $this->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination pagination-success','currentClass'=>'active')); ?>
       </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

</div>
              <?php $this->need('footer.php'); ?>

