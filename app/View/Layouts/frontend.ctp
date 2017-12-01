<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="Description" content="有限会社八幸は岡山県倉敷市でセブンイレブンのフランチャイズ経営を行っています。セブン-イレブンのお届けサービス、セブンミールについて。">
<meta name="Keywords" content="セブンイレブン,セブンミール,配達,倉敷,アルバイト,パート,独立">
<title>有限会社八幸 ～ 8 of happiness ～</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php echo $this->Html->script('function.js');?>
<?php echo $this->Html->script('jquery.sliderPro.min.js');?>
<?php echo $this->Html->script('top.js');?>
<?php echo $this->Html->css(array('slider-pro.min.css', 'import.css'));?>
</head>
<body>
<div id="header">
  <header>
    <h1><a href="<?php echo $this->Html->url(array('controller'=>'home','action'=>'index')) ?>">有限会社八幸 ～ 8 of happiness ～</a></h1>
  </header>
  <nav class="menusp">
    <ul class="clear">
      <li><a href="<?php echo $this->Html->url(array('controller'=>'home','action'=>'index')) ?>" class="now">ホーム</a></li>
      <li><a href="business/">事業案内</a></li>
      <li><a href="company/">会社概要</a></li>
      <li><a href="recruit/">採用情報</a></li>
      <li><a href="wn/">新着情報</a></li>
      <li><a href="contact/">お問い合わせ</a></li>
    </ul>
  </nav>
<?php echo $this->fetch('content'); ?>
<div class="pagetop"><a href="#header"><?php echo $this->Html->image('pagetop.png', array('class' => 'pc','width'=>'280','height'=>'46', 'alt'=>'このページのトップへ'));?><?php echo $this->Html->image('pagetop_sp.png', array('class' => 'sp','width'=>'280','height'=>'46', 'alt'=>'このページのトップへ'));?></a></div>
<div class="tel"><a href="tel:"><?php echo $this->Html->image('tel.png', array('class' => 'sp', 'alt'=>'電話:086-427-7677'));?></a></div>
<div id="footer">
<footer>
  <div class="clear">
    <div class="logo"><p><?php echo $this->Html->image('footer_logo.png', array('class' => 'pc','width'=>'192','height'=>'80', 'alt'=>'有限会社八幸'));?></p>
    </div>
    <div class="nav pc"><p><a href="index.html">ホーム</a>｜<a href="business/">事業案内</a>｜<a href="company/">会社概要</a>｜<a href="recruit/">採用情報</a>｜<a href="contact/">お問い合わせ</a>｜<a href="wn/">新着情報</a>｜<a href="sitemap/">サイトマップ</a></p>
      <p>〒710-0841 岡山県倉敷市堀南852-1　TEL／FAX 086-427-7677</p>
    </div>
    <div class="navsp sp"><a href="index.html">ホーム</a><a href="business/">事業案内</a><a href="company/">会社概要</a><a href="recruit/">採用情報</a><a href="contact/">お問い合わせ</a><a href="wn/">新着情報</a>
    </div>
  </div>
  <a class="nav-sitemap" href="sitemap/">サイトマップ</a>
  <p class="sp address"><strong>有限会社八幸</strong><br />〒710-0841 岡山県倉敷市堀南852-1<br />TEL／FAX 086-427-7677</p>
  <p class="copy">&copy; 2017 HAKKO. Co., LTD. All Rights Reserved.</p>
</footer>
</div>
</body>
</html>
