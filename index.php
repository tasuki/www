<?php
$background = 'CCC';
$text = '222';

$font = 'Alegreya Sans';
$weights = array(
	'body'     => '400',
	'category' => '900',
	'title'    => '900',
	'italic'   => '400italic',
	'welcome'  => '300',
);

?><!DOCTYPE html>
<html>
<head>
	<title>tasuki.org</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Tasuki is a diagonal fuseki (opening) in the game of go. It leads to fierce games full of fighting." />
	<link href="//fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>:<?php echo join(',', array_unique($weights)) ?>&amp;subset=latin-ext" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
	<style type="text/css">
		/* layout */
		html, button, input, select, textarea, .pure-g [class *= "pure-u"] { font-family: "<?php echo $font ?>", sans-serif; }
		body { background-color: #<?php echo $background ?>; color: #<?php echo $text ?>; font-weight: <?php echo $weights['body'] ?>; font-size: 1.2em; line-height: 1.3; }
		.header { background-color: #<?php echo $text ?>; color: #<?php echo $background ?>; text-shadow: .05em .05em #000; padding: 0 .5em; }
		.content { padding: .5em; }

		/* common */
		a:link, a:visited { color: #<?php echo $text ?>; }
		a:hover { text-decoration: none; }
		a strong { font-weight: <?php echo $weights['category'] ?>; }

		/* grid */
		.pure-g { max-width: 40em; margin: auto; }
		.inner { text-align: right; }

		@media screen and (max-width: 55em) {
			.pure-g { display: block; }
			.inner { text-align: left; padding-top: 1em; }
			.pure-g div { display: inline; }
		}

		/* header */
		h1, h4 { margin: 0; }
		h4 { font-weight: <?php echo $weights['welcome'] ?>; letter-spacing: -0.03em; padding-top: 2em; position: relative; left: .9em; top: .5em; }
		@media screen and (max-width: 55em) { h4 { padding-top: .5em; } }
		h1 { font-size: 3em; font-weight: <?php echo $weights['title'] ?>; line-height: .7em; }
		h1 .org { font-size: .45em; position: relative; bottom: .5em; left: -.5em; }

		/* content */
		.notice { font-style: italic; margin-bottom: 1em; }
		.inner::after { content: "–"; padding: 0 .5em; }
		.category { font-weight: <?php echo $weights['category'] ?>; margin-top: 1em; padding: 0px; }
	</style>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		$(document).ready(function() {
			function reanimate() {
				var timeout = 10000, low = 200, high = 255, dark = light = "#";
				for (i = 0; i < 3; i++) {
					color = Math.floor(Math.random() * (high - low));
					dark += color.toString(16).padStart(2, "0");
					light += (color + low).toString(16);
				}

				$("a").animate({ color: dark }, timeout);
				$(".header").animate({ backgroundColor: dark, color: light }, timeout);
				$("body").animate({ backgroundColor: light, color: dark }, timeout, function() {
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
			Hi, you've found my home on the interwebs. I am Vít from the Czech Republic, but my Polish and internet friends sometimes call me tasuki.
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
		<div class="pure-u-md-3-4">personal blog, mostly forgotten</div>
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
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://masonry-ordered.tasuki.org/">Masonry Ordered</a></div></div>
		<div class="pure-u-md-3-4">alternative layout strategy for jQuery Masonry</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://ttc.tasuki.org/">Tao Te Ching</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of the Tao Te Ching</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://enchiridion.tasuki.org/">Enchiridion</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of Epictetus' Enchiridion</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://fonts.tasuki.org/">Fonts</a></div></div>
		<div class="pure-u-md-3-4">interactive comparison of my favourite Google Web Fonts</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Me elsewhere</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://github.com/tasuki">GitHub</a></div></div>
		<div class="pure-u-md-3-4">code a little in my spare time</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://keybase.io/tasuki">Keybase</a></div></div>
		<div class="pure-u-md-3-4">if you're into all that security and encryption stuff</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://www.linkedin.com/in/vit-brunner/">LinkedIn</a></div></div>
		<div class="pure-u-md-3-4">deleted my account and ended up regretting it, so here it is again</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://www.facebook.com/vit.brunner">Facebook</a></div></div>
		<div class="pure-u-md-3-4">haven't deleted it yet, but don't visit often</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="inner"><a href="https://www.littlegolem.net/jsp/info/player.jsp?plid=5460">Little Golem</a></div></div>
		<div class="pure-u-md-3-4">love abstract board games, but somehow stopped playing</div>
	</div>
</div>

</body>
</html>
