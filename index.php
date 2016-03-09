<?php
$background = 'CCC';
$text = '222';

$font = 'Titillium Web';
$weights = array(
	'body'     => '300',
	'category' => '600',
	'title'    => '900',
	'italic'   => '300italic',
	'welcome'  => '200',
);

?><!DOCTYPE html>
<html>
<head>
	<title>tasuki.org</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Tasuki is a diagonal fuseki (opening) in the game of go. It leads to fierce games full of fighting." />
	<link href="//fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>:<?php echo join(',', $weights) ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
	<style type="text/css">
		/* layout */
		html, button, input, select, textarea, .pure-g [class *= "pure-u"] { font-family: "<?php echo $font ?>", sans-serif; letter-spacing: 0px; }
		body { background-color: #<?php echo $background ?>; color: #<?php echo $text ?>; font-weight: <?php echo $weights['body'] ?>; }
		.header { background-color: #<?php echo $text ?>; color: #<?php echo $background ?>; }
		.header, .content { padding: 0px 10px; }
		.content { padding-bottom: 30px; }

		/* common */
		a:link, a:visited { color: #<?php echo $text ?>; }
		a:hover { text-decoration: none; }
		a strong { font-weight: <?php echo $weights['category'] ?>; }

		/* grid */
		.pure-g { max-width: 750px; margin: auto; }
		.inner { text-align: right; }

		@media screen and (max-width: 48em) {
			.pure-g { display: block; }
			.inner { text-align: left; padding-top: 15px; }
			.pure-g div { display: inline; }
		}

		/* header */
		h1, h4 { margin: 0; }
		h4 { font-size: 18px; font-weight: <?php echo $weights['welcome'] ?>; line-height: 18px; letter-spacing: -1px; padding-top: 10px; margin-bottom: -10px; }
		@media screen and (min-width: 768px) { h4 { padding-top: 50px; } }
		h1 { font-size: 45px; font-weight: <?php echo $weights['title'] ?>; line-height: 45px; }
		h1 .org { font-size: 20px; position: relative; bottom: 10px; left: -12px; }

		/* content */
		.notice { font-style: italic; margin-bottom: 24px; }
		.inner::after { content: "–"; padding: 0px 10px; }
		.category { font-weight: <?php echo $weights['category'] ?>; margin-top: 24px; padding: 0px; }
	</style>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		$(document).ready(function() {
			function reanimate() {
				var timeout = 10000, low = 200, high = 255, dark = light = "#";
				for (i = 0; i < 3; i++) {
					color = Math.floor(Math.random() * (high - low)) + low;
					light += color.toString(16);
					dark += ("0" + (color - low).toString(16)).slice(-2);
				}

				$(".header").animate({ backgroundColor: dark, color: light }, timeout);
				$("body").animate({ backgroundColor: light, color: dark }, timeout);
				$("a").animate({ color: dark }, timeout, function() {
					reanimate();
				});
			}
			reanimate();
		});

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2554217-7']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		//]]>
	</script>
</head>
<body>

<div class="header">
	<div class="pure-g">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			<h4>Welcome to</h4>
			<h1>tasuki.<span class="org">org</span></h1>
		</div>
	</div>
</div>

<div class="content">
	<div class="pure-g notice">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			If it appears the colours are changing, please restart your display device.<br />
			This is a known bug and will be fixed next week.
		</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			Hi, you've found my home on the interwebs. I am Vít from Czechia, but my Polish and internet friends sometimes call me tasuki.
		</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">I, me, mine</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner">Contact</div></div>
		<div class="pure-u-md-3-4">you can contact me at vit.brunner @ the ever popular gmail</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://gallery.tasuki.org/">Photo gallery</a></div></div>
		<div class="pure-u-md-3-4">an avid amateur photographer</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://blog.tasuki.org/">Awesome blog</a></div></div>
		<div class="pure-u-md-3-4">personal blog, mostly about various things and stuff</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://cv.tasuki.org/">Curriculum vit&aelig;</a></div></div>
		<div class="pure-u-md-3-4">you can have my enthusiasm, skills &amp; time</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Useful/interesting stuff on tasuki.org</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://tsumego.tasuki.org/">Tsumego Collections</a></div></div>
		<div class="pure-u-md-3-4">collections of go problems in pdf format</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://golem.tasuki.org/">LG Monster Ratings</a></div></div>
		<div class="pure-u-md-3-4">summary ratings for <a href="http://littlegolem.net/">Little Golem</a></div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://masonry-ordered.tasuki.org/">Masonry Ordered</a></div></div>
		<div class="pure-u-md-3-4">alternative layout strategy for jQuery Masonry</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://ttc.tasuki.org/">Tao Te Ching</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of Tao Te Ching</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://enchiridion.tasuki.org/">Enchiridion</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of Epictetus' Enchiridion</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Me elsewhere</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="http://www.flickr.com/photos/tasuki/">Flickr</a></div></div>
		<div class="pure-u-md-3-4">my better photos end up there</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="http://github.com/tasuk">GitHub</a></div></div>
		<div class="pure-u-md-3-4">code a little in my spare time</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="http://www.facebook.com/vit.brunner">Facebook</a></div></div>
		<div class="pure-u-md-3-4">no time waste at all</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="http://tasukisempai.deviantart.com/">DeviantArt</a></div></div>
		<div class="pure-u-md-3-4">povray and random gfx</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="http://www.littlegolem.net/jsp/info/player.jsp?plid=5460">Little Golem</a></div></div>
		<div class="pure-u-md-3-4">love abstract board games</div>
	</div>
</div>

</body>
</html>
