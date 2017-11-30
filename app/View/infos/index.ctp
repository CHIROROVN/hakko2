<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="150%" class="col_1">■八幸 Website 管理画面　＞　「新着情報」管理　＞　一覧</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><?php echo $this->Flash->render('flash') ?></td>
    </tr>
    <tr>
      <td align="right"><input type="button" onClick="location.href='<?php echo $this->Html->url(array('controller'=>'infos','action'=>'regist')) ?>'" value="新規登録"></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
        <tbody>
          <tr class="col_3">
            <td width="1%" align="center">削除</td>
            <td width="6%" align="center">表示</td>
            <td align="center">タイトル</td>
            <td width="12%" align="center">日付</td>
            <td width="1%" align="center">詳細・変更</td>
          </tr>

        <?php foreach ($infos as $info): ?>
          <tr>
            <td>
              <input type="button" onClick="location.href='<?php echo $this->Html->url(array('controller'=>'infos','action'=>'delete', 'id'=>$info['Info']['info_id'])) ?>'" value="削除"></td>
            <td align="center">
            <?php 
                $now = date('Y-m-d H:i:s');
                $start = $info['Info']['info_start'];
                $end = $info['Info']['info_end'];
              if(empty($info['Info']['info_dspl_flag'])) : 
                if($start <= $now && ($end >= $now || empty($end)) || empty($start) && ($end >= $now || empty($end))) : ?>
                  <span class="f_blue">○</span>
                <?php else : ?>
                  -
                <?php endif; ?>              
              <?php else : ?>
                <span class="f_red">x</span>
              <?php endif; ?>              
            </td>
            <td><?php echo h($info['Info']['info_title']); ?></td>
            <td><?php echo h($this->Hakko->format_date($info['Info']['info_date'], '/')); ?></td>
            <td>
              <input type="button" onClick="location.href='<?php echo $this->Html->url(array('controller'=>'infos','action'=>'detail', 'id'=>$info['Info']['info_id'])) ?>'" value="詳細・変更">
            </td>
          </tr>

        <?php endforeach; ?>

        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;">
      <?php
        $paginator = $this->Paginator;
        $paginator->options(array('url' => array('cts-adm' => true)));
        $lbl_prev = '前の'.LIMIT_PAGE.'件を表示';
        $lbl_next = '次の'.LIMIT_PAGE.'件を表示';  
      ?>
        <div class="paging">
          <?php echo $paginator->prev($lbl_prev,array('tag'=>'li', 'class'=>'lnkbtn'),null, 
          array('class' => 'disabled','tag'=>'li'));
          ?>
          &nbsp;&nbsp;
          <?php echo $paginator->next($lbl_next, array('tag'=>'li', 'class'=>'lnkbtn'), null, 
          array('class' => 'disabled','tag'=>'li'));
          ?>        
        </div>
      </td>
    </tr>
  </tbody>
</table>