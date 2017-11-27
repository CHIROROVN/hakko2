<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="150%" class="col_1">■八幸 Website 管理画面　＞　「新着情報」管理　＞　新規登録</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <?php 
        echo $this->Form->create('Info', array(          
            'url' => Router::url(array(
                'controller' => 'infos', 'action' => 'regist',
            )),
            'novalidate' => true
              
        ));

    ?>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
          <tbody>
            <tr>
              <td colspan="2" class="col_3">タイトル <span class="f_caution">[*]</span></td>
              <td>
                <?php echo $this->Form->input('info_title', array('label'=>false, 'type'=>'text', 'size'=>60)); ?>
                <!-- <input name="textfield" type="text" id="textfield" size="60"> -->
              </td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">情報登録日 <span class="f_caution">[*]</span></td>
              <td>
                <?php echo $this->Form->year('info_year', date('Y'), date('Y')+3, array('orderYear' => 'asc', 'empty'=>'----年'));?>

                <?php echo $this->Form->month('info_month', array('orderMonth' => 'asc', 'empty'=>'--月', 'monthNames'=>false));?>

                <?php echo $this->Form->day('info_day', array('orderDay' => 'asc', 'empty'=>'--日'));?>

                <?php echo $this->Form->hour('info_hour', true, array('orderHour' => 'asc', 'empty'=>'--時'));?>

                <?php echo $this->Form->minute('info_minute', array('orderMinute' => 'asc', 'empty'=>'--分'));?>


                <?php
                  echo $this->Form->error('Info.info_year', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_month', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_day', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_hour', null, array('class' => 'error-message'));
                  echo $this->Form->error('Info.info_minute', null, array('class' => 'error-message'));
                ?>

                <span class="caution">※この日時の順に表示されます（一般側画面には時間は表示されません）。<br />
                ※指定しない場合は、現在の日時が自動的に選択されます。</span></td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">タイプ <span class="f_caution">[*]</span></td>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
                  <tbody>
                    <tr>
                      <td width="1%"><input type="radio" name="radio" id="radio" value="radio"></td>
                      <td>タイプ1：タイトルをクリックすると指定URLを表示</td>
                    </tr>
                    <tr>
                      <td width="1%"><input type="radio" name="radio" id="radio2" value="radio"></td>
                      <td>タイプ2：タイトルをクリックすると指定ファイルを表示</td>
                    </tr>
                    <tr>
                      <td width="1%"><input type="radio" name="radio" id="radio3" value="radio"></td>
                      <td>タイプ3：タイトルをクリックすると詳細ページを表示</td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td width="10%" class="col_3">タイプ1</td>
              <td width="15%" class="col_3">リンク先URL</td>
              <td><input name="textfield2" type="text" id="textfield2" size="60"></td>
            </tr>
            <tr>
              <td width="10%" class="col_3">タイプ2</td>
              <td width="15%" class="col_3">表示ファイル</td>
              <td><input type="file" name="fileField" id="fileField"></td>
            </tr>
            <tr>
              <td width="10%" rowspan="6" class="col_3">タイプ3</td>
              <td width="15%" class="col_3">詳細</td>
              <td><textarea name="textarea" rows="8" id="textarea"></textarea></td>
            </tr>
            <tr>
              <td width="15%" class="col_3">画像</td>
              <td><input type="file" name="fileField2" id="fileField2"></td>
            </tr>
            <tr>
              <td class="col_3">関連リンクURL</td>
              <td><input name="textfield4" type="text" id="textfield4" size="60"></td>
            </tr>
            <tr>
              <td class="col_3">関連メールアドレス</td>
              <td><input name="textfield5" type="text" id="textfield5" size="60"></td>
            </tr>
            <tr>
              <td width="18%" class="col_3">関連ファイル</td>
              <td><input type="file" name="fileField3" id="fileField3"></td>
            </tr>
            <tr>
              <td class="col_3">　└関連ファイル名</td>
              <td><input name="textfield3" type="text" id="textfield3" size="60"></td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">表示／非表示</td>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                一時的に非表示にする</td>
            </tr>
            <tr>
              <td colspan="2" class="col_3">TOP表示設定</td>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                常にTOPに表示する</td>
            </tr>
            <tr>
              <td width="10%" rowspan="2" class="col_3">タイマー</td>
              <td width="15%" class="col_3">開始日時：</td>
              <td><select name="select" id="select">
                  <option>----年</option>
                </select>
                <select name="select2" id="select2">
                  <option>--月</option>
                </select>
                <select name="select3" id="select3">
                  <option>--日</option>
                </select>
                <select name="select4" id="select4">
                  <option>--時</option>
                </select>
                <select name="select5" id="select5">
                  <option>--分</option>
                </select>
                <br></td>
            </tr>
            <tr>
              <td width="15%" class="col_3">終了日時：</td>
              <td><select name="select6" id="select6">
                  <option>----年</option>
                </select>
                <select name="select6" id="select7">
                  <option>--月</option>
                </select>
                <select name="select6" id="select8">
                  <option>--日</option>
                </select>
                <select name="select6" id="select9">
                  <option>--時</option>
                </select>
                <select name="select6" id="select10">
                  <option>--分</option>
                </select></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">
        <input type="submit" value="登録する">
        <input type="reset" name="reset" id="reset" value="クリア"></td>
    </tr>
    <?php echo $this->Form->end(); ?>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="button" onClick="location.href='info_list.html'" value="「新着情報」一覧に戻る"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>