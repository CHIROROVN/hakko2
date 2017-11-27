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
<?php $paginator = $this->Paginator;//echo $this->Paginator->numbers();
    // echo '<pre>';       print_r($paginator );       echo '</pre>';?>
<div id="second" class="wn">
  <ul class="wnList">
   <?php  foreach ($arrInfo as $info): ?>
    
    <li><?php if($info['info']['info_type'] ==3){?>
         <a href="<?php echo $this->Html->url(array("controller" => "news", "action" => "view","id"=>$info['info']['info_id']));?>">
         <?php }else{?> <a href="<?php echo ($info['info']['info_type'] ==1)?$info['info']['info1_url']:$info['info']['info2_file']?>" target="_blank"><?php }?><span> <?php echo date("Y年m月d日",strtotime($info['info']['info_date']))?> </span><?php echo $info['info']['info_title']; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div class="pager_wrap">
    <ul class="pager">
     <?php if($paginator->hasPrev()){?>
      <li><?php echo $paginator->prev("« 前へ");?></li>
      <?php }?>       
      <?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li' ,'currentClass' => 'active', 'currentTag' => '' , 'escape' => false));?>     
      <?php if($paginator->hasNext()){?>
      <li><?php echo $paginator->next("次へ »");?><!--<a href="#">次へ »</a>--></li>
      <?php }?>
    </ul>
  </div>
</div>