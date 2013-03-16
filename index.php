<?php
$background = 'CCC';
$text = '222';

// the fuck is this shit?
function item($name, $value) {
	echo '<div><span class="left">' . $name . '<span class="separator">&ndash;</span></span><span class="right">' . $value . '</span></div>';
}
function items(array $items) {
	foreach ($items as $name => $value)
		item($name, $value);
}


$font = 'Titillium Web';
$weights = array(
	'body'     => '300',
	'category' => '600',
	'title'    => '900',
	'italic'   => '300italic',
	'welcome'  => '200',
);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>tasuki.org</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Tasuki is diagonal fuseki (opening) in the game of go. It leads to fierce games full of fighting." />
	<link href="http://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>:<?php echo join(',', $weights) ?>" rel="stylesheet" type="text/css" />
	<style type="text/css">
		* { margin: 0px; padding: 0px; }
		body { background-color: #<?php echo $background ?>; color: #<?php echo $text ?>; font-family: "<?php echo $font ?>", serif; font-weight: <?php echo $weights['body'] ?>; font-size: 16px; line-height: 24px; }
		div { clear: both; }
		#wrap { width: 720px; padding: 5px 20px 50px 20px; margin-left: 10px; }
		.notice { font-style: italic; margin-bottom: 24px; }
		.right { float: right; width: 500px; text-align: left; }
		.left { float: left; width: 220px; text-align: right; }
		.separator { padding: 0px 8px; }
		h1, h4 { background-color: #<?php echo $text ?>; color: #<?php echo $background ?>; padding-left: 250px; }
		h4 { font-size: 18px; font-weight: <?php echo $weights['welcome'] ?>; line-height: 18px; letter-spacing: -1px; padding-top: 50px; margin-bottom: -10px; }
		h1 { font-size: 45px; font-weight: <?php echo $weights['title'] ?>; line-height: 45px; }
		h1 .org { font-size: 20px; position: relative; bottom: 10px; left: -12px; }
		p { clear: both; padding: 5px 0px; }
		.category { font-weight: <?php echo $weights['category'] ?>; margin-top: 24px; padding: 0px; }
		a:link, a:visited { color: #<?php echo $text ?>; }
		a:hover { text-decoration: none; }
		a strong { font-weight: <?php echo $weights['category'] ?>; }
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script>
		$(document).ready(function() {
			function reanimate() {
				var timeout = 10000,  low = 200, high = 255, dark = light = '';
				for (i = 0; i < 3; i++) {
					color = Math.floor(Math.random() * (high - low)) + low;
					light += color.toString(16);
					dark += ("0" + (color - low).toString(16)).slice(-2);
				}
				light = "#" + light;
				dark = "#" + dark;

				$("h1, h4").animate({ backgroundColor: dark, color: light }, timeout);
				$("body").animate({ backgroundColor: light, color: dark }, timeout);
				$("a").animate({ color: dark }, timeout, function() {
					reanimate();
				});
			}
			reanimate();
		});
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2554217-7']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>

<h4 class="welcome">Welcome to</h4>
<h1>tasuki.<span class="org">org</span></h1>

<div id="wrap">

<div class="right notice">If it appears the colours are changing, please restart your monitor.<br />
This is a known bug and will be fixed next week.</div>
<div class="right">Hi, you've found my home on the interwebs. I am Vít from Czechia, but my Polish and internet friends sometimes call me tasuki.</div>

<div class="right category">I, me, mine</div>
<?php items(array(
	'contact' => 'you can contact me at vit.brunner at the ever popular gmail',
	'<a href="http://gallery.tasuki.org/"><strong>photo gallery</strong></a>' => 'I am an avid amateur photographer',
	'<a href="http://blog.tasuki.org/"><strong>awesome blog</strong></a>' => 'my personal blog, mostly about various things and stuff',
	'<a href="http://cv.tasuki.org/">curriculum vitae</a>' => 'sometimes I exchange my skills &amp; time for money',
)); ?>

<div class="right category">Me elsewhere</div>
<?php items(array(
	'<a href="http://www.flickr.com/photos/tasuki/">flickr</a>' => 'better photos end up on flickr',
	'<a href="http://github.com/tasuk">github</a>' => 'code a little in my spare time',
	'<a href="http://www.facebook.com/vit.brunner">facebook</a>' => 'trying not to waste time there; failing',
	'<a href="http://tasukisempai.deviantart.com/">deviantart</a>' => 'povray and random gfx',
	'<a href="http://www.littlegolem.net/jsp/info/player.jsp?plid=5460">little golem</a>' => 'I love abstract board games',
)); ?>

<div class="right category">Other useful/interesting stuff here</div>
<?php items(array(
	'<a href="http://masonry-ordered.tasuki.org/">Masonry Ordered</a>' => 'alternative layout strategy for jQuery Masonry',
	'<a href="http://tsumego.tasuki.org/">Tsumego Collections</a>' => 'collections of go problems in pdf format',
	'<a href="http://golem.tasuki.org/">Golem Monster Ratings</a>' => 'summary ratings for <a href="http://littlegolem.net/">littlegolem</a>',
	//'<a href="http://fuytayblees.tasuki.org/">Fuytayblees</a>' => 'an online game that no one plays anymore',
	//'<a href="http://eygml.tasuki.org/">EYGML</a>' => 'homepage of European Youth Go Masters League',
	'<a href="http://tasuki.org/board-games-and-the-internet/">Board Games &amp; Internet</a>' => 'PartyPoker buys me cake',
)); ?>

<div></div>

</div>

</body>
</html>
