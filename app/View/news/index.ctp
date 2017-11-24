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
    <li><?php if($info['Info']['info_type'] ==3){?>
         <a href="<?php echo $this->Html->url(array("controller" => "news", "action" => "view","id"=>$info['Info']['info_id']));?>">
         <?php }else{?> <a href="<?php echo ($info['Info']['info_type'] ==1)?$info['Info']['info1_url']:$info['Info']['info2_file']?>" target="_blank"><?php }?><span> <?php echo date("Y年m月d日",strtotime($info['Info']['info_date']))?> </span><?php echo $info['Info']['info_title']; ?></a></li>
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