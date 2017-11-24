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
<div id="second">
  <h3 class="wnTitle"><?php echo $info['Info']['info_title']?></h3>
  <p><?php echo date("Y年m月d日",strtotime($info['Info']['info_date']));?></p>
  <div class="clear wnCont">
    <p><?php if(!empty($info['Info']['info3_img'])){?><?php echo $this->Html->image($info['Info']['info3_img'], array('class' => 'alignright','width'=>'300','height'=>'205', 'alt'=>$info['Info']['info_title']));?><!--<img src="/<?php echo $info['Info']['info3_img'];?>" width="300" height="205" class="alignright">--><?php }?><?php  echo $info['Info']['info3_contents'];?></p>
  </div>
  <ul class="wnDetail">
    <li><a href="<?php  echo $info['Info']['info3_url'];?>" target="_blank"><?php  echo $info['Info']['info3_url'];?></a></li>
    <li><a href="mailto:<?php  echo $info['Info']['info3_mail'];?>"><?php  echo $info['Info']['info3_mail'];?></a></li>
    <li><a href="<?php  echo $info['Info']['info3_file'];?>" target="_blank"><?php  echo $info['Info']['info3_filename'];?></a></li>
  </ul>
  <div class="btn"> <a href="<?php echo $this->Html->url(array("controller" => "news", "action" => "index"));?>">新着情報一覧を見る</a></div>
</div>