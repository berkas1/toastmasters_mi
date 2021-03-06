<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>Setkání Brněnských Toastmástrů</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.scrolly.min.js"></script>
  <script src="js/skel.min.js"></script>
  <script src="js/init.js"></script>
  <noscript>
    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-desktop.css" />
  </noscript>
  <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo($meeting['ga_code']);?>', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body>




<!-- Nav -->
<nav id="nav">
  <ul class="container">
    <li><a href="#top">Setkání</a></li>
    <li><a href="#work">Pozvánka</a></li>
    <li><a href="#portfolio">Návštěva setkání</a></li>
    <li><a href="http://www.projevse.cz/form/kontakt" target="_blank">Kontakt</a></li>
  </ul>
</nav>

<!-- Home -->

<div class="wrapper style1 first">
  <article class="container" id="top">
    <div class="row">
      <div class="4u">
        <span class="image"><img src="images/tmlogo.png" alt="" /></span>
      </div>
      <div class="8u">
        <header>
          <h2><?php echo(htmlspecialchars_decode($meeting['title']));?></h2>
        </header>
        <p>...proběhne <strong><?=$this->e($date);?></strong> <?php echo(htmlspecialchars_decode($meeting['when']));?>
        <br>...moderuje <strong><?=$this->e($moderator);?></strong>
        <br>...role <strong><a href="<?=$this->e($easyspeak_link);?>" target="_blank">Easyspeak</a></strong>
        <br><?php echo(htmlspecialchars_decode($meeting_place));?>

        <p></p>
        <p></p>
        <a href="#work" class="button big scrolly"><?php echo(htmlspecialchars_decode($meeting['button1']));?></a>
      </div>
    </div>
  </article>
</div>

<!-- Work -->



<div class="wrapper style2">
  <article >
    <header>
      <h3><div>Pozvánka</div></h3>

    </header>
    <div class="container" id="work">
      <strong><?=nl2br($this->e($invitation_text))?></strong>
      <br><p></p>      <a href="#portfolio" class="button big scrolly"><?php echo(htmlspecialchars_decode($meeting['button2']));?></a>

    </div>



    <footer>
<!--      <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>-->
<!--      <a href="#portfolio" class="button big scrolly">Chci přijít na setkání</a>-->
    </footer>
  </article>
</div>

<!-- Portfolio -->
<div class="wrapper style3">
  <article id="portfolio">
    <header>
      <?php echo(htmlspecialchars_decode($meeting['promo1']));?>
    </header>
    <div class="container">
      <div class="row">
        <div class="4u">
          <article class="box style2">
            <a href="#" class="image featured"><img src="images/img01.jpg" alt="" /></a>
            <h3><a href="#"><?php echo(htmlspecialchars_decode($meeting['img01']));?></a></h3>
<!--            <p>Ornare nulla proin odio consequat.</p>-->
          </article>
        </div>
        <div class="4u">
          <article class="box style2">
            <a href="#" class="image featured"><img src="images/img02.jpg" alt="" /></a>
            <h3><a href="#"><?php echo(htmlspecialchars_decode($meeting['img02']));?></a></h3>
<!--            <p>Ornare nulla proin odio consequat.</p>-->
          </article>
        </div>
        <div class="4u">
          <article class="box style2">
            <a href="#" class="image featured"><img src="images/img03.jpg" alt="" /></a>
            <h3><a href="#"><?php echo(htmlspecialchars_decode($meeting['img03']));?></a></h3>
<!--            <p>Ornare nulla proin odio consequat.</p>-->
          </article>
        </div>
      </div>
<!--      <div class="row">-->
<!--        <div class="4u">-->
<!--          <article class="box style2">-->
<!--            <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>-->
<!--            <h3><a href="#">Tempus dolore</a></h3>-->
<!--            <p>Ornare nulla proin odio consequat.</p>-->
<!--          </article>-->
<!--        </div>-->
<!--        <div class="4u">-->
<!--          <article class="box style2">-->
<!--            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>-->
<!--            <h3><a href="#">Feugiat aliquam</a></h3>-->
<!--            <p>Ornare nulla proin odio consequat.</p>-->
<!--          </article>-->
<!--        </div>-->
<!--        <div class="4u">-->
<!--          <article class="box style2">-->
<!--            <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>-->
<!--            <h3><a href="#">Sed amet ornare</a></h3>-->
<!--            <p>Ornare nulla proin odio consequat.</p>-->
<!--          </article>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    <footer>
      <?php echo(htmlspecialchars_decode($meeting['promo2'])) ?>
      <!--      <a href="#contact" class="button big scrolly">Get in touch with me</a>-->
    </footer>
  </article>
</div>

<!-- Contact -->
<div class="wrapper style4">
  <article id="contact" class="container">
<!--    <header>-->
<!--      <h2>Have me make stuff for you.</h2>-->
<!--      <p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>-->
<!--    </header>-->
<!--    <div>-->
<!--      <div class="row">-->
<!--        <div class="12u">-->
<!--          <form method="post" action="#">-->
<!--            <div>-->
<!--              <div class="row">-->
<!--                <div class="6u">-->
<!--                  <input type="text" name="name" id="name" placeholder="Name" />-->
<!--                </div>-->
<!--                <div class="6u">-->
<!--                  <input type="text" name="email" id="email" placeholder="Email" />-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="row">-->
<!--                <div class="12u">-->
<!--                  <input type="text" name="subject" id="subject" placeholder="Subject" />-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="row">-->
<!--                <div class="12u">-->
<!--                  <textarea name="message" id="message" placeholder="Message"></textarea>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="row 200%">-->
<!--                <div class="12u">-->
<!--                  <ul class="actions">-->
<!--                    <li><input type="submit" value="Send Message" /></li>-->
<!--                    <li><input type="reset" value="Clear Form" class="alt" /></li>-->
<!--                  </ul>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="row">-->
<!--        <div class="12u">-->
          <hr />
          <h3>Najdete nás na...</h3>
          <ul class="social">
            <?php echo($meeting['social']);?>
<!--            <li><a href="https://twitter.com/projevsecz" class="icon fa-twitter"><span class="label">Twitter</span></a></li>-->
<!--            <li><a href="https://www.facebook.com/BrnenstiToastmastri" class="icon fa-facebook"><span class="label">Facebook</span></a></li>-->
<!--            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
<!--            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
<!--            <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>-->
<!--            <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>-->
<!--            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>-->
            <!--
            <li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
            <li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
            <li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
            <li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
            <li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
            <li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
            <li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
            <li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
            -->
          </ul>
          <hr />
        </div>
      </div>
    </div>
    <footer>
      <ul id="copyright">
        <li>&copy;<?php echo date("Y")?> by <a href="http://projevse.cz" target="_blank">Brněnští Toastmástři</a></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
      </ul>
    </footer>
  </article>
</div>

</body>
</html>
