<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="150%" class="col_1">■八幸 Website 管理画面　＞　「新着情報」管理　＞　登録済み情報の削除</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
          <tbody>
            <tr>
              <td colspan="2" class="col_3">タイトル</td>
              <td><?php echo h($info['Info']['info_title']);?></td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">情報登録日</td>
              <td><?php echo $this->Hakko->date_jp($info['Info']['info_date']); ?></td>
            </tr>

            <tr>
              <td colspan="2" class="col_3">タイプ</td>
              <td>
                <?php if($info['Info']['info_type'] == 1) : ?>
                  タイプ1：タイトルをクリックすると指定URLを表示
                <?php elseif($info['Info']['info_type'] == 2) : ?>
                  タイプ2：タイトルをクリックすると指定ファイルを表示
                <?php else : ?>
                  タイプ3：タイトルをクリックすると詳細ページを表示
                <?php endif; ?>
              </td>
            </tr>
            <?php if($info['Info']['info_type'] == 1):?>
            <tr>
              <td colspan="2" class="col_3">タイプ1</td>
              <td>
                <?php
                  echo $this->Html->link($info['Info']['info1_url'], $info['Info']['info1_url'] , array(
                     'target'=>'_blank',
                      'escape'=>false
                  ));
                ?>
              </td>
            </tr>
            <?php elseif($info['Info']['info_type'] == 2):?>
            <tr>
              <td colspan="2" class="col_3">タイプ2</td>
              <td>
                <?php
                  if(!empty($info['Info']['info2_file'])){
                  echo $this->Html->link('表示', $this->webroot . $info['Info']['info2_file'] , array(
                     'target'=>'_blank',
                      'escape'=>false
                  ));
                  }else{ echo 'なし';}
                ?>
              </td>
              <td>&nbsp;</td>
            </tr>

            <?php else : ?>
            <tr>
              <td width="10%" rowspan="6" class="col_3">タイプ3</td>
              <td width="15%" class="col_3">詳細</td>
              <td><?php echo nl2br($info['Info']['info3_contents']) ;?></td>
            </tr>            
            <tr>
              <td width="15%" class="col_3">画像</td>
              <td>
                <?php
                if(!empty($info['Info']['info3_img'])){
                  echo $this->Html->link('表示', $this->webroot . $info['Info']['info3_img'] , array(
                     'target'=>'_blank',
                      'escape'=>false
                  ));
                  }else{ echo 'なし';}
                ?>                
              </td>
            </tr>
            <tr>
              <td class="col_3">関連リンクURL</td>
              <td><?php echo h($info['Info']['info3_url']) ?></td>
            </tr>
            <tr>
              <td class="col_3">関連メールアドレス</td>
              <td><?php echo h($info['Info']['info3_mail']) ?></td>
            </tr>
            <tr>
              <td width="18%" class="col_3">関連ファイル</td>
              <td>
                <?php
                if(!empty($info['Info']['info3_file'])){
                  echo $this->Html->link('表示', $this->webroot . $info['Info']['info3_file'] , array(
                     'target'=>'_blank',
                      'escape'=>false
                  ));
                  }else{ echo 'なし';}
                ?>
              </td>
            </tr>
            <tr>
              <td class="col_3">　関連ファイル名</td>
              <td><?php echo h($info['Info']['info3_filename']); ?></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td colspan="2" class="col_3">表示／非表示</td>
              <td>
                <?php if(empty($info['Info']['info_dspl_flag'])) : ?>
                  表示する
                <?php else : ?>
                  表示しない
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">TOP表示設定</td>
              <td>
                <?php if($info['Info']['info_top_flag'] == 1) : ?>
                  TOPに表示
                <?php else : ?>
                  設定なし
                <?php endif; ?>               

              </td>
            </tr>
            <tr>
              <td width="10%" rowspan="2" class="col_3">タイマー</td>
              <td width="15%" class="col_3">開始日時：</td>
              <td><?php echo $this->Hakko->date_jp($info['Info']['info_end']); ?><br></td>
            </tr>
            <tr>
              <td width="15%" class="col_3">終了日時：</td>
              <td><?php echo $this->Hakko->date_jp($info['Info']['info_end']); ?></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">
        <input type="button" name="btn-delete" id="btn-delete" value="削除する（確認済み）" 
        onClick="location.href='<?php echo $this->Html->url(array('controller'=>'infos','action'=>'delete_save', 'id'=>$info['Info']['info_id'])) ?>'">
      <input type="button" name="button" id="button" value="もどる" onclick="javascript:window.history.back(-1);return false;"></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="button" onClick="location.href='<?php echo $this->Html->url(array('controller'=>'infos','action'=>'index')) ?>'" value="「新着情報」一覧に戻る"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>