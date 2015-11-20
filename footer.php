<?php $this->footer();?>

<footer class="parallax-container valign-wrapper  hide-on-med-and-down">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
            <h6 class="header col light right">
            <div class="h-title hoverable blue darken-3"> © 2015 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> // Theme by <a href="http://www.cytrs.com/" target="_blank"> Masuzu</a> // Powered by <a href="http://www.typecho.org" target="_blank">Typecho)))</a><br/>
            <div>本站点由<a href="https://a-nime.cn/" style="color: #EDFF00;text-decoration: none;">A-Nime Project</a>&amp;<a href="http://blog.ours.moe" style="color: #EDFF00;text-decoration: none;">Ours.moe</a>提供 // 遵循<a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>协议</div>
            </div>
            </h6>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://img.itc.cn/photo/obYexDY4i22" style="transform: translate3d(-50%, 388px, 0px); display: block;"></div>
  </footer>


<script src="http://7x2xdm.com1.z0.glb.clouddn.com/Image-Box/ImageBox.js"></script>

<a class="btn-floating btn-large waves-effect waves-light green" href="#top" id="totop" style="position:fixed;bottom:10%;z-index:99;right:5%;"><i class="material-icons">keyboard_arrow_up</i></a>
<script type="text/javascript">
  $(document).ready(function() {
    $("#to-top").hide();
    $(function() {
      $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
          $("#totop").fadeIn(200);
        } else {
          $("#totop").fadeOut(200);
        }
      });
      $("#totop").click(function() {
        $('body,html').animate({
          scrollTop: 0
        },
        1000);
        return false;
      });
    });
  });
</script>

<script type="text/javascript">
$(window).load(function() {
$("#loadb").fadeOut(500);
});
</script>

<script>
        //初始化一言
        setTimeout("getkoto()",1000);
        //加载一言
        var t;
        function getkoto(){
            var hjs = document.createElement('script');
            hjs.setAttribute('id', 'hjs');
            hjs.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto&length=50');
            document.getElementById("hjsbox").appendChild(hjs);
            t=setTimeout("getkoto()",15000);
        }
        //输出一言
        function echokoto(result){
            var hc = eval(result);
            $("#hitokoto").fadeTo(1500,0.4);
            document.getElementById("hitokoto").innerHTML = hc.hitokoto;
            $("#hitokoto").fadeTo(3000,0.9);
        }
</script>



<!-- 多说公共JS代码 start (一个网页只需插入一次)  -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"masuzu"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//7x2xdm.com1.z0.glb.clouddn.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script>
 <!-- 多说公共JS代码 end -->


</body>
</html>