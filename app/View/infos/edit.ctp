<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="150%" class="col_1">■八幸 Website 管理画面　＞　「新着情報」管理　＞　登録済み情報の変更</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
        <tbody>
      <?php 
            echo $this->Form->create('Info', array(
            'url' => Router::url('/cts-adm/infos/edit/'.$id),
            'enctype' => 'multipart/form-data',
            'novalidate' => true
        ));
        ?>
          <tr>
            <td colspan="2" class="col_3">タイトル <span class="f_caution">[*]</span></td>
            <td>
              <?php echo $this->Form->input('info_title', array(
                    'label'       => false,
                    'type'        => 'text',
                    'size'        => 60,
                )); ?>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">情報登録日 <span class="f_caution">[*]</span></td>
            <td>
                <?php
                  $opt_yd = array(date('Y')=>date('Y').'年', date('Y')+1=>(date('Y')+1).'年', date('Y')+2=>(date('Y')+2).'年');
                  echo $this->Form->input('info_year', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_yd,
                    'selected' => @$this->Hakko->split_date($this->request->data['Info']['info_date'], 'Y'),
                    'empty' => '----年',
                    'div' => false,
                    'error' => false
                    ));
                ?>

               <?php
                  $opt_md = array('01'=>'01'.'月', '02'=>'02'.'月', '03'=>'03'.'月', '04'=>'04'.'月', '05'=>'05'.'月', '06'=>'06'.'月', '07'=>'07'.'月', '08'=>'08'.'月', '09'=>'09'.'月', '10'=>'10'.'月', '11'=>'11'.'月', '12'=>'12'.'月');
                  echo $this->Form->input('info_month', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_md,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_date'], 'm'),
                    'empty' => '--月',
                    'div' => false,
                    'error' => false
                    ));
                ?>
               <?php
                  $opt_dd = array('01'=>'01'.'日', '02'=>'02'.'日', '03'=>'03'.'日', '04'=>'04'.'日', '05'=>'05'.'日', '06'=>'06'.'日', '07'=>'07'.'日', '08'=>'08'.'日', '09'=>'09'.'日', '10'=>'10'.'日', '11'=>'11'.'日', '12'=>'12'.'日', '13'=>'13'.'日', '14'=>'14'.'日', '15'=>'15'.'日', '16'=>'16'.'日', '17'=>'17'.'日', '18'=>'18'.'日', '19'=>'19'.'日', '20'=>'20'.'日', '21'=>'21'.'日', '22'=>'22'.'日', '23'=>'23'.'日', '24'=>'24'.'日', '25'=>'25'.'日', '26'=>'26'.'日', '27'=>'27'.'日', '28'=>'28'.'日', '29'=>'29'.'日', '30'=>'30'.'日', '31'=>'31'.'日');
                  echo $this->Form->input('info_day', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_dd,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_date'], 'd'),
                    'empty' => '--日',
                    'div' => false,
                    'error' => false
                    ));
                ?>

                <?php
                  $opt_hd = array();
                  for($hd=0; $hd<=23; $hd++){
                    $opt_hd[$this->Hakko->c2Digit($hd)] = $this->Hakko->c2Digit($hd).'時';
                  }

                  echo $this->Form->input('info_hour', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_hd,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_date'], 'H'),
                    'empty' => '--時',
                    'div' => false,
                    'error' => false
                    ));
                ?>

                <?php
                  $opt_md = array();
                  for($md=0; $md<=59; $md++){
                    $opt_md[$this->Hakko->c2Digit($md)] = $this->Hakko->c2Digit($md).'分';
                  }

                  echo $this->Form->input('info_minute', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_md,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_date'], 'i'),
                    'empty' => '--分',
                    'div' => false,
                    'error' => false
                    ));
                ?>
                <input type="button" name="btn_now" id="btn_now" value="今日">
                <?php
                  echo $this->Form->error('Info.info_year', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_month', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_day', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_hour', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_minute', null, array('class' => 'error-message'));
                 ?>

                <br>
                <!-- <span class="caution">※この日時の順に表示されます（一般側画面には時間は表示されません）。<br />
                ※指定しない場合は、現在の日時が自動的に選択されます。</span> -->
              </td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">タイプ <span class="f_caution">[*]</span></td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tbody>
                <tr>
                  <td width="1%"><input type="radio" name="data[Info][info_type]" id="info_type1" value="1"
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 1)
                      echo "checked";?>
                    ></td>
                  <td>タイプ1：タイトルをクリックすると指定URLを表示</td>
                </tr>
                <tr>
                  <td width="1%"><input type="radio" name="data[Info][info_type]" id="info_type2" value="2" 
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 2)
                      echo "checked";?>
                    ></td>
                  <td>タイプ2：タイトルをクリックすると指定ファイルを表示</td>
                  </tr>
                <tr>
                  <td width="1%"><input type="radio" name="data[Info][info_type]" id="info_type3" value="3"
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 3)
                      echo "checked";?>
                    ></td>
                  <td>タイプ3：タイトルをクリックすると詳細ページを表示</td>

                  </tr>
                  <tr>
                    <td colspan="2">
                       <?php             
                        echo $this->Form->error('Info.info_type', null, array('class' => 'error-message'));
                        ?>
                    </td>
                  </tr>
                </tbody>
              </table>              
            </td>
          </tr>
          <tr>
            <td width="10%" class="col_3">タイプ1</td>
            <td width="15%" class="col_3">リンク先URL</td>
            <td><?php echo $this->Form->input('info1_url', array('label'=>false, 'type'=>'text', 'size'=>60)); ?></td>
          </tr>
          <tr>
            <td width="10%" class="col_3">タイプ2</td>
            <td width="15%" class="col_3">表示ファイル</td>
            <td>
              <input type="radio" name="data[Info][info2_file_radio]" id="info2_file_radio1" value="1" >
                新しいファイルに置き換える
              <?php echo $this->Form->input('info2_file',array('type' => 'file', 'label'=>false, 'id'=>'info2_file', 'div' => false, 'error'=>false)); ?>
              <input type="button" id="info2_file_del" class="btn-reset" value="X" title="リセット">
                <br>
              <input type="radio" name="data[Info][info2_file_radio]" id="info2_file_radio2" value="2" checked >
                すでにアップロード済みのファイルを使う
                <?php
                  if(!empty($this->request->data['Info']['info2_file'])) : ?>
                  &nbsp;（ <a href="<?php echo $this->Html->url($this->webroot . $this->request->data['Info']['info2_file']) ?>" target="_blank">表示</a> ）<br>
                <?php else : ?>
                   &nbsp;（画像なし） <br>
                <?php endif; ?>
                <input type="radio" name="data[Info][info2_file_radio]" id="info2_file_radio3" value="3" >
                アップロード済みファイルを削除する
                <input type="hidden" name="data[Info][info2_file_old]" value="<?php echo $this->request->data['Info']['info2_file'];?>">
                <?php
                  echo $this->Form->error('Info.info2_file', null, array('class' => 'error-message'));
                ?>
            </td>
          </tr>
          <tr>
            <td width="10%" rowspan="6" class="col_3">タイプ3</td>
            <td width="15%" class="col_3">詳細 <span class="f_caution">[*]</span></td>
            <td>              
                <?php echo $this->Form->input('info3_contents', array('label'=>false, 'type'=>'textarea', 'rows'=>"8")); ?>
              </td>
          </tr>
          <tr>
            <td width="18%" class="col_3">画像</td>
            <td>
              <input type="radio" name="data[Info][info3_img_radio]" id="info3_img_radio1" value="1" >
                新しい画像に置き換える
              <?php echo $this->Form->input('info3_img',array('type' => 'file', 'label'=>false, 'id'=>'info3_img', 'div' => false, 'error'=>false)); ?>
              <input type="button" id="info3_img_del" class="btn-reset" value="X" title="リセット">
                <br>
              <input type="radio" name="data[Info][info3_img_radio]" id="info3_img_radio2" value="2" checked >
                すでにアップロード済みの画像を使う
                <?php
                  if(!empty($this->request->data['Info']['info3_img'])) : ?>
                  &nbsp;（ <a href="<?php echo $this->Html->url($this->webroot . $this->request->data['Info']['info3_img']) ?>" target="_blank">表示</a> ）<br>                  
                <?php else : ?>
                   &nbsp;（画像なし） <br>
                <?php endif; ?>
              <input type="radio" name="data[Info][info3_img_radio]" id="info3_img_radio3" value="3" >
              <input type="hidden" name="data[Info][info3_img_old]" value="<?php echo $this->request->data['Info']['info3_img'];?>">
                アップロード済み画像を削除する
                <?php
                  echo $this->Form->error('Info.info3_img', null, array('class' => 'error-message'));
                ?>
            </td>
          </tr>
          <tr>
            <td class="col_3">関連リンクURL</td>
            <td><?php echo $this->Form->input('info3_url', array('label'=>false, 'type'=>'text', 'size'=>60)); ?></td>
          </tr>
          <tr>
            <td class="col_3">関連メールアドレス</td>
            <td><?php echo $this->Form->input('info3_mail', array('label'=>false, 'type'=>'text', 'size'=>60)); ?></td>
          </tr>
          <tr>
            <td width="15%" class="col_3">関連ファイル</td>
            <td>
              <input type="radio" name="data[Info][info3_file_radio]" id="info3_file_radio1" value="1" >
                新しいファイルに置き換える
              <?php echo $this->Form->input('info3_file',array('type' => 'file', 'label'=>false, 'id'=>'info3_file', 'div' => false, 'error'=>false)); ?>
              <input type="button" id="info3_file_del" class="btn-reset" value="X" title="リセット">
                <br>
              <input type="radio" name="data[Info][info3_file_radio]" id="info3_file_radio2" value="2" checked >
                すでにアップロード済みのファイルを使う
                <?php
                  if(!empty($this->request->data['Info']['info3_file'])) : ?>
                  &nbsp;（ <a href="<?php echo $this->Html->url($this->webroot . $this->request->data['Info']['info3_file']) ?>" target="_blank">表示</a> ）<br>
                <?php else : ?>
                   &nbsp;（画像なし） <br>
                <?php endif; ?>
              <input type="radio" name="data[Info][info3_file_radio]" id="info3_file_radio3" value="3" >
                アップロード済みファイルを削除する
                <?php
                  echo $this->Form->error('Info.info3_file', null, array('class' => 'error-message'));
                ?>
                <input type="hidden" name="data[Info][info3_file_old]" value="<?php echo $this->request->data['Info']['info3_file'];?>">
            </td>
          </tr>
          <tr>
            <td class="col_3">　└関連ファイル名</td>
            <td><?php echo $this->Form->input('info3_filename', array('label'=>false, 'type'=>'text', 'size'=>60)); ?></td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">表示／非表示</td>
            <td><?php echo $this->Form->input('info_dspl_flag', 
                    array(
                      'label'=>false, 
                      'type'=>'checkbox',
                      'after' => '一時的に非表示にする', 
                      'div' => false
                 )); ?></td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">TOP表示設定</td>
            <td><?php echo $this->Form->input('info_top_flag', 
                    array(
                      'label'=>false, 
                      'type'=>'checkbox',
                      'after' => '常にTOPに表示する', 
                      'div' => false
                 )); ?></td>
          </tr>
          <tr>
            <td width="10%" rowspan="2" class="col_3">タイマー</td>
            <td width="15%" class="col_3">開始日時：</td>
            <td>
              <?php
                  $opt_ys = array(date('Y')=>date('Y').'年', date('Y')+1=>(date('Y')+1).'年', date('Y')+2=>(date('Y')+2).'年');
                  echo $this->Form->input('year_start', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_ys,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_start'], 'Y'),
                    'empty' => '----年',
                    'div' => false
                    ));
                ?>

               <?php
                  $opt_ms = array('01'=>'01'.'月', '02'=>'02'.'月', '03'=>'03'.'月', '04'=>'04'.'月', '05'=>'05'.'月', '06'=>'06'.'月', '07'=>'07'.'月', '08'=>'08'.'月', '09'=>'09'.'月', '10'=>'10'.'月', '11'=>'11'.'月', '12'=>'12'.'月');
                  echo $this->Form->input('month_start', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_ms,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_start'], 'm'),
                    'empty' => '--月',
                    'div' => false
                    ));
                ?>
               <?php
                  $opt_ds = array('01'=>'01'.'日', '02'=>'02'.'日', '03'=>'03'.'日', '04'=>'04'.'日', '05'=>'05'.'日', '06'=>'06'.'日', '07'=>'07'.'日', '08'=>'08'.'日', '09'=>'09'.'日', '10'=>'10'.'日', '11'=>'11'.'日', '12'=>'12'.'日', '13'=>'13'.'日', '14'=>'14'.'日', '15'=>'15'.'日', '16'=>'16'.'日', '17'=>'17'.'日', '18'=>'18'.'日', '19'=>'19'.'日', '20'=>'20'.'日', '21'=>'21'.'日', '22'=>'22'.'日', '23'=>'23'.'日', '24'=>'24'.'日', '25'=>'25'.'日', '26'=>'26'.'日', '27'=>'27'.'日', '28'=>'28'.'日', '29'=>'29'.'日', '30'=>'30'.'日', '31'=>'31'.'日');
                  echo $this->Form->input('day_start', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_ds,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_start'], 'd'),
                    'empty' => '--日',
                    'div' => false
                    ));
                ?>

                <?php
                  $opt_hs = array();
                  for($hs=0; $hs<=23; $hs++){
                    $opt_hs[$this->Hakko->c2Digit($hs)] = $this->Hakko->c2Digit($hs).'時';
                  }

                  echo $this->Form->input('hour_start', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_hs,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_start'], 'H'),
                    'empty' => '--時',
                    'div' => false
                    ));
                ?>

                <?php
                  $opt_ms = array();
                  for($ms=0; $ms<=59; $ms++){
                    $opt_ms[$this->Hakko->c2Digit($ms)] = $this->Hakko->c2Digit($ms).'分';
                  }

                  echo $this->Form->input('minute_start', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_ms,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_start'], 'i'),
                    'empty' => '--分',
                    'div' => false
                    ));
                ?>

              <br></td>
          </tr>

          <tr>
            <td width="15%" class="col_3">終了日時：</td>
            <td>

              <?php
                  $opt_ye = array(date('Y')=>date('Y').'年', date('Y')+1=>(date('Y')+1).'年', date('Y')+2=>(date('Y')+2).'年');
                  echo $this->Form->input('year_end', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_ye,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_end'], 'Y'),
                    'empty' => '----年',
                    'div' => false
                    ));
                ?>

               <?php
                  $opt_me = array('01'=>'01'.'月', '02'=>'02'.'月', '03'=>'03'.'月', '04'=>'04'.'月', '05'=>'05'.'月', '06'=>'06'.'月', '07'=>'07'.'月', '08'=>'08'.'月', '09'=>'09'.'月', '10'=>'10'.'月', '11'=>'11'.'月', '12'=>'12'.'月');
                  echo $this->Form->input('month_end', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_me,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_end'], 'm'),
                    'empty' => '--月',
                    'div' => false
                    ));
                ?>
               <?php
                  $opt_de = array('01'=>'01'.'日', '02'=>'02'.'日', '03'=>'03'.'日', '04'=>'04'.'日', '05'=>'05'.'日', '06'=>'06'.'日', '07'=>'07'.'日', '08'=>'08'.'日', '09'=>'09'.'日', '10'=>'10'.'日', '11'=>'11'.'日', '12'=>'12'.'日', '13'=>'13'.'日', '14'=>'14'.'日', '15'=>'15'.'日', '16'=>'16'.'日', '17'=>'17'.'日', '18'=>'18'.'日', '19'=>'19'.'日', '20'=>'20'.'日', '21'=>'21'.'日', '22'=>'22'.'日', '23'=>'23'.'日', '24'=>'24'.'日', '25'=>'25'.'日', '26'=>'26'.'日', '27'=>'27'.'日', '28'=>'28'.'日', '29'=>'29'.'日', '30'=>'30'.'日', '31'=>'31'.'日');
                  echo $this->Form->input('day_end', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_de,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_end'], 'd'),
                    'empty' => '--日',
                    'div' => false
                    ));
                ?>

                <?php
                  $opt_he = array();
                  for($he=0; $he<=23; $he++){
                    $opt_he[$this->Hakko->c2Digit($he)] = $this->Hakko->c2Digit($he).'時';
                  }

                  echo $this->Form->input('hour_end', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_he,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_end'], 'H'),
                    'empty' => '--時',
                    'div' => false
                    ));
                ?>

                <?php
                  $opt_me = array();
                  for($me=0; $me<=59; $me++){
                    $opt_me[$this->Hakko->c2Digit($me)] = $this->Hakko->c2Digit($me).'分';
                  }

                  echo $this->Form->input('minute_end', array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$opt_me,
                    'selected'=> @$this->Hakko->split_date($this->request->data['Info']['info_end'], 'i'),
                    'empty' => '--分',
                    'div' => false
                    ));
                ?>

            </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">
        <input type="submit" value="変更する">
        <input type="reset" name="reset" id="reset" value="もどる" onclick="javascript:window.history.back(-1);return false;">
      </td>
    </tr>
    <?php echo $this->Form->end(); ?>
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
  <script>
$(document).ready(function(){
  $('.btn-reset').addClass('btn-hide');

    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var hour = date.getHours();
    var minute = date.getMinutes();

    $("#btn_now").click(function(){
        $('#InfoInfoYear option[value="' + year + '"]').prop('selected', true);
        $('#InfoInfoMonth option[value="' + c2Digit(month) + '"]').prop('selected', true);
        $('#InfoInfoDay option[value="' + c2Digit(day) + '"]').prop('selected', true);
        $('#InfoInfoHour option[value="' + c2Digit(hour) + '"]').prop('selected', true);
        $('#InfoInfoMinute option[value="' + c2Digit(minute) + '"]').prop('selected', true);
    });
});

  $('#info2_file').change(function(){
    $( "#info2_file_radio1" ).prop( "checked", true );
    if($(this).length > 0){
      $('#info2_file_del').removeClass('btn-hide');
    }    
  });
  $('#info2_file_del').click(function(){
    var $el = $('#info2_file');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    $('#info2_file_del').addClass('btn-hide');
    $('#info2_file').val('');
  });

  $('#info3_img').change(function(){
    $( "#info3_img_radio1" ).prop( "checked", true );
    if($(this).length > 0){
      $('#info3_img_del').removeClass('btn-hide');
    }    
  });
  $('#info3_img_del').click(function(){
    var $el = $('#info3_img');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    $('#info3_img_del').addClass('btn-hide');
    $('#info3_img').val('');
  });

  $('#info3_file').change(function(){
    $( "#info3_file_radio1" ).prop( "checked", true );
    if($(this).length > 0){
      $('#info3_file_del').removeClass('btn-hide');
    }    
  });
  $('#info3_file_del').click(function(){
    var $el = $('#info3_file');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    $('#info3_file_del').addClass('btn-hide');
    $('#info3_file').val('');
  });

  function c2Digit(num){
    return (num < 10? '0' : '') + num;
  }
</script>

<script>
  tinymce.init({
    selector: '#InfoInfo3Contents',
    language: 'ja',
    height: 320,
    menubar: false,
    forced_root_block : "", 
    force_br_newlines : false,
    force_p_newlines : false,
    fontsize_formats: "8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 17pt 18pt 19pt 20pt 21pt 22pt 23pt 24pt 25pt 26pt 27pt 28pt 29pt 30pt 31pt 32pt",

    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern',

    toolbar: 'bold italic | strikethrough forecolor backcolor | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | imageupload',
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
    ],
    setup: function(editor) {
            var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
            $(editor.getElement()).parent().append(inp);

            inp.on("change",function(){
                var input = inp.get(0);
                var file = input.files[0];
                var fr = new FileReader();
                fr.onload = function() {
                    var img = new Image();
                    img.src = fr.result;
                    editor.insertContent('<img src="'+img.src+'"/>');
                    inp.val('');
                }
                fr.readAsDataURL(file);
            });

            editor.addButton( 'imageupload', {
                text:"画像",
                icon: false,
                title:"画像を挿入する",
                onclick: function(e) {
                    inp.trigger('click');
                }
            });
        },

  });
</script>