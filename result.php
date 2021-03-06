<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans" class="results">
<head>
	<meta charset="UTF-8">
	<title>Anyway.Post 安妮薇邮报</title>
	<meta name="author" content="JJ Ying" />
	<meta name="description" content="来自 Anyway.FM 的双周发行邮件组，内容包括设计行业相关的职业信息、业内新闻等" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="icon" href="https://s.anw.red/anyway.fm/favicon-16.png" sizes="16x16">
	<link rel="icon" href="https://s.anw.red/anyway.fm/favicon-32.png" sizes="32x32">
	<link rel="icon" href="https://s.anw.red/anyway.fm/favicon-96.png" sizes="96x96">
	<link rel="apple-touch-icon" href="https://s.anw.red/anyway.fm/apple-touch-icon-precomposed.png">
	<link rel="mask-icon" href="https://s.anw.red/anyway.fm/mask-icon.svg" color="#ffe324">
	
	<link rel="stylesheet" rev="stylesheet" href="assets/main.css" type="text/css" media="all" />
	<link rel="stylesheet" rev="stylesheet" href="assets/fonts.css" type="text/css" media="all" />

</head>
<?php
	if ($_GET['email']) {
		$email = $_GET['email'];
		if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			if (preg_match("/^angelina@mydomain.com/",$email)) {
				$content="没啥可显示的，就这样吧……";
			}
			else {
				$logFile = fopen('address.txt', "a");
				fwrite($logFile, $email."\n");
				fclose($logFile);
				$content="
					<h1>&nbsp&nbsp订阅成功！</h1>
					<p>感谢你的支持~ <strong> " . $email . " </strong> 已经加入订阅列表中了，敬请期待下一期的发布~ 第 12 期开始的过往内容可<a href='https://github.com/JJYing/Anyway-Post/tree/master/Posts/Markdown' target='_blank'>在此查看</a>。<br /><br />
					友情提示：因为所使用邮件组服务的局限性，有时候也有可能会出现在垃圾邮箱里哦~ 建议在你的邮箱设置里面把以下三个域名 <strong>anyway.fm</strong>、<strong>tinyletter.com</strong>、<strong>tinyletterapp.com</strong> 加到邮箱的白名单中以确保收到我们的邮件~</p>


					<a href='https://Anyway.FM' class='go-back'>☜ 返回 Anyway.FM 官网</a>
					";
			}
		}
		else {
			$content="
				<h1>地址好像有问题啊亲</h1>
				你刚刚填的 <strong> " . $email . " </strong> 似乎不是一个合法的邮箱地址~ 请重新提交~

				<form class='submit-form' action='result.php' method='get'>
					<div class='subscribe'><input type='text' name='email' id='tlemail' class='input-box'/><input type='submit' value='提 交  ✓' class='btn'/></div>
				</form>
			";
		}
	}

	else {
		$content="<h1>啊！你肿么能手动删掉参数呢！</h1>";
	}

?>
<body>
	<header class="responsive">
		<img class="logo" src="assets/anyway-post-logo.svg" alt="Anyway.Post 安妮薇邮报" />
	</header>

	<nav class="responsive">
		<span class="nav-1">订阅费 ￥0.00</span>
		<span class="nav-2">创刊于二〇一七年二月</span>
		<span class="nav-3">Anyway.FM<span class="mobile-hide"> 旗下产品</span></span>
	</nav>

	<main class="responsive">
		<section class="tagline">
			<?php echo($content);?>
		</section>
	</main>

	<footer class="responsive">
		<div class="inner">
			© 2017 <a href="https://anyway.fm">Anyway.FM</a> 保留所有权利</a>
		</div>
	</footer>

	<div class="mask mt"></div><div class="mask mb"></div><div class="mask mv ml"></div><div class="mask mv mr"></div><div class="mask mv ml2"></div><div class="mask mv mr2"></div>

	<div class="badget">
		<div class="inner">
			<div>
				<span>F</span><span>R</span><span>E</span><span>E</span>
			</div>
			<p>Till Hell Freezes</p>
		</div>
	</div>

<!-- ~Baidu Analytics -->
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?d6fc362c05908e5ce8d17df52dbc2586";
	  var s = document.getElementsByTagName("script")[0];
	  s.parentNode.insertBefore(hm, s);
	})();
</script>
</body>
</html>
