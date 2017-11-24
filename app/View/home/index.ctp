  <div class="menubt">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
    <p class="sp">メニュー</p>
  </div>
</div>
<div id="slideBox">
  <div id="slide">
    <div class="sp-slides">
      <div class="sp-slide"><?php echo $this->Html->image('common/image/slide-01.jpg');?></div>
      <div class="sp-slide"><?php echo $this->Html->image('common/image/slide-02.jpg');?></div>
    </div>
  </div>
</div>
<div id="index">
  <h2><span class="jpn">事業案内</span><span class="en">Business</span></h2>
  <div class="mbbg">
  <div class="mainBusiness">
    <div class="text">
      <h3>セブン‐イレブン経営</h3>
      <p>有限会社八幸は岡山県倉敷市でセブンイレブンのフランチャイズ経営を行っています。<br>将来、独立をお考えの方もお気軽にお問い合わせください。<br>
        パート・アルバイトの募集も随時行っております。</p>
    </div>
  </div>
  </div>
  <div class="shopBox clear">
    <div class="horinan">
      <p><?php echo $this->Html->image('common/image/horinan.png', array('class' => 'alignright','width'=>'400','height'=>'240'));?></p>
      <dl>
        <dt>倉敷堀南店</dt>
        <dd>〒710-0841 倉敷市堀南852-1<br>
          TEL／FAX 086-427-7677</dd>
      </dl>
      <div class="btn"><a href="#" target="_blank">Googleマップを見る</a></div>
    </div>
    <div class="nishi">
      <p><?php echo $this->Html->image('common/image/horinan.png', array('class' => 'alignright','width'=>'400','height'=>'240'));?></p>
      <dl>
        <dt>倉敷西中新田店</dt>
        <dd>〒710-0833 倉敷市西中新田86-1<br>
        TEL／FAX 086-427-2035</dd>
      </dl>
      <div class="btn"><a href="https://goo.gl/maps/v8c9FiTw9gA2" target="_blank">Googleマップを見る</a></div>
    </div>
  </div>
  <p class="meal"><a href="business/meal.html" title="セブンイレブンのお届けサービス「セブンミール」"><?php echo $this->Html->image('common/image/meal.png', array('class' => 'alignright','width'=>'902','height'=>'142', 'alt'=>'セブンイレブンのお届けサービス「セブンミール」'));?></a></p>
  <div class="btn"><a href="business/">事業内容を見る</a></div>
  <h2><span class="jpn">新着情報</span><span class="en">What's new?</span></h2>
  <ul class="wnList">
    <?php if(count($arrInfo) >0) { foreach ($arrInfo as $info): ?>
    <li> <?php if($info['Info']['info_type'] ==3){?>
         <a href="<?php echo $this->Html->url(array("controller" => "news", "action" => "view","id"=>$info['Info']['info_id']));?>">
         <?php }else{?> <a href="<?php echo ($info['Info']['info_type'] ==1)?$info['Info']['info1_url']:$info['Info']['info2_file']?>" target="_blank"><?php }?><span> <?php echo date("Y年m月d日",strtotime($info['Info']['info_date']))?> </span><?php echo $info['Info']['info_title']; ?></a></li>
    <?php endforeach; } ?>   

  </ul>
  <div class="btn"><?php echo $this->Html->link('新着情報一覧を見る','/news');?></div>
</div>