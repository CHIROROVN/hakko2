<div class="menubt">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
    <p class="sp">メニュー</p>
  </div>
</div>
<div id="secondTitle">
  <div class="wn">
    <h2><span class="jpn">新着情報</span><span class="en">What's new?</span></h2>
    <ul class="clear">
      <li><a href="../">ホーム</a>&nbsp;&gt;&nbsp;</li>
      <li>新着情報</li>
    </ul>
  </div>
</div>
<div id="second" class="wn">
  <ul class="wnList">
   <?php foreach ($arrInfo as $info): ?>
    <li><a href="<?php echo $this->Html->url(array("controller" => "news", "action" => "view",$info['Info']['info_id']));?>"><span> <?php echo date("Y年m月d日",strtotime($info['Info']['info_date']))?> </span><?php echo $info['Info']['info_title']; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div class="pager_wrap">
    <ul class="pager">
      <li><a href="#">« 前へ</a></li>
      <li class="active">1</li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">次へ »</a></li>
    </ul>
  </div>
</div>