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
<html lang="en">
<head>
	<title>tasuki.org</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Tasuki is a diagonal fuseki (opening) in the game of go. It leads to fierce games full of fighting." />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>:<?php echo join(',', array_unique($weights)) ?>&amp;subset=latin-ext&amp;display=swap" type="text/css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
	<style type="text/css">
		/* layout */
		html, button, input, select, textarea, .pure-g [class *= "pure-u"] { font-family: "<?php echo $font ?>", sans-serif; letter-spacing: 0; }
		body { background-color: #<?php echo $background ?>; color: #<?php echo $text ?>; font-weight: <?php echo $weights['body'] ?>; font-size: 1.2em; line-height: 1.3; }
		.header { background-color: #<?php echo $text ?>; color: #<?php echo $background ?>; text-shadow: .05em .05em #000; padding: 0 .5em; }
		.content { padding: .5em; }

		/* common */
		a:link, a:visited { color: #<?php echo $text ?>; }
		a:hover { text-decoration: none; }
		a strong { font-weight: <?php echo $weights['category'] ?>; }

		/* grid */
		.pure-g { max-width: 40em; margin: auto; }
		.item { text-align: right; }

		@media screen and (max-width: 55em) {
			.pure-g { display: block; }
			.item { text-align: left; }
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
		.item::after { content: "–"; padding: 0 .5em; }
		.category { font-weight: <?php echo $weights['category'] ?>; margin-top: 1em; padding: 0px; }

		/* transitions */
		body, .header, a:link { transition: all 5s linear; }
	</style>
	<script defer type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script defer type="text/javascript" src="/script.js"></script>
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
			Hi, I&rsquo;m Vít from the Czech Republic, my go-playing friends sometimes call me tasuki.
			I came up with this nickname when registering for the KGS go server in 2001. Seems to have stuck.
		</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">I, me, mine</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item">Contact</div></div>
		<div class="pure-u-md-3-4">you can contact me at vit.brunner @ the ever popular gmail</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://gallery.tasuki.org/">Photo gallery</a></div></div>
		<div class="pure-u-md-3-4">an avid amateur photographer</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://blog.tasuki.org/">Awesome blog</a></div></div>
		<div class="pure-u-md-3-4">personal blog, mostly forgotten</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://cv.tasuki.org/">Curriculum vit&aelig;</a></div></div>
		<div class="pure-u-md-3-4">you can have my enthusiasm, skills &amp; time</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Useful/interesting stuff on tasuki.org</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://tsumego.tasuki.org/">Tsumego Collections</a></div></div>
		<div class="pure-u-md-3-4">collections of go problems in pdf format</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://masonry-ordered.tasuki.org/">Masonry Ordered</a></div></div>
		<div class="pure-u-md-3-4">alternative layout strategy for jQuery Masonry</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://ttc.tasuki.org/">Tao Te Ching</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of the Tao Te Ching</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://enchiridion.tasuki.org/">Enchiridion</a></div></div>
		<div class="pure-u-md-3-4">comparison of different translations of Epictetus&rsquo; Enchiridion</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://fonts.tasuki.org/">Fonts</a></div></div>
		<div class="pure-u-md-3-4">interactive comparison of my favourite Google Web Fonts</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Me elsewhere</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://github.com/tasuki">GitHub</a></div></div>
		<div class="pure-u-md-3-4">code a little in my spare time</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://keybase.io/tasuki">Keybase</a></div></div>
		<div class="pure-u-md-3-4">if you&rsquo;re into all that security and encryption stuff</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://www.linkedin.com/in/vit-brunner/">LinkedIn</a></div></div>
		<div class="pure-u-md-3-4">deleted my account and ended up regretting it, so here it is again</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://www.facebook.com/vit.brunner">Facebook</a></div></div>
		<div class="pure-u-md-3-4">haven&rsquo;t deleted it yet, but don&rsquo;t visit often</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="https://www.littlegolem.net/jsp/info/player.jsp?plid=5460">Little Golem</a></div></div>
		<div class="pure-u-md-3-4">love abstract board games, but somehow stopped playing</div>
	</div>
</div>

</body>
</html>
