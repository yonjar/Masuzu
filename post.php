<?php $this->need('header.php'); ?>

<div id="page-wrap">
        <div id="main-content" style="display: block;"><div id="guts">
                <div class="container">
                    <div class="wrapper light-blue-text text-darken-3">
                        <div class="post">

<article class="row bounceInUp wow">
        <div class="col s12">
          <div class="card">
            <div class="card-content black-text">
        <span class="card-title hide-on-large-only"><a href="<?php $this->permalink() ?>"><?php $this->title();?></a></span>
              <div class="post-content" ><?php $this->content(); ?></div>

            </div>
            <div class="card-action">
    <div class="col s12">
      <ul class="tabs light-blue z-depth-1" style="width: 100%;">
        <li class="waves-effect tab col s3 light-blue darken-1 btn"><?php _e('作者: '); ?><?php $this->author(); ?></li>
        <li class="waves-effect tab col s3 light-blue darken-1 btn"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
        <li class="waves-effect tab col s6 light-blue darken-1 btn"><?php $this->category('✔'); ?></li>

      </ul>
    </div>
          </div>
        </div>
      </article>
    <div class="hide-on-med-and-down">
    <button class="brown darken-3 white-text text-darken-3 waves-effect waves-light-blue waves-light btn bounceInLeft wow">上一篇: <?php $this->thePrev('%s','没有了'); ?></button>
    <button class="brown darken-3 white-text text-darken-3 waves-effect waves-light-blue waves-light btn right bounceInRight wow">下一篇: <?php $this->theNext('%s','没有了'); ?></button>
    </div>
</div>
        <?php $this->need('comments.php'); ?>


  </div>
</div>
</div>
                </div>
            </div></div>
    </div>

<?php $this->need('footer.php'); ?>