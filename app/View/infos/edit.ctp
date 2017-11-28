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
                'url' => Router::url(array(
                    'controller' => 'infos', 'action' => 'edit',
                )),
                'novalidate' => true                  
            ));
        ?>
          <tr>
            <td colspan="2" class="col_3">タイトル</td>
            <td>
              <?php echo $this->Form->input('info_title', array(
                    'label'       => false,
                    'type'        => 'text',
                    'size'        => 60,
                )); ?>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">情報登録日</td>
            <td><select name="select7" id="select11">
              <option>----年</option>
            </select>
              <select name="select7" id="select12">
                <option>--月</option>
              </select>
              <select name="select7" id="select13">
                <option>--日</option>
              </select>
              <select name="input_date_hh" >
                <option value=""  selected>--時</option>
                <option value="00" >00時</option>
                <option value="01" >01時</option>
                <option value="02" >02時</option>
                <option value="03" >03時</option>
                <option value="04" >04時</option>
                <option value="05" >05時</option>
                <option value="06" >06時</option>
                <option value="07" >07時</option>
                <option value="08" >08時</option>
                <option value="09" >09時</option>
                <option value="10" >10時</option>
                <option value="11" >11時</option>
                <option value="12" >12時</option>
                <option value="13" >13時</option>
                <option value="14" >14時</option>
                <option value="15" >15時</option>
                <option value="16" >16時</option>
                <option value="17">17時</option>
                <option value="18" >18時</option>
                <option value="19" >19時</option>
                <option value="20" >20時</option>
                <option value="21" >21時</option>
                <option value="22" >22時</option>
                <option value="23" >23時</option>
              </select>
              <select name="input_date_ii" >
                <option value="" selected>--分</option>
                <option value="00" >00分</option>
                <option value="01" >01分</option>
                <option value="02">02分</option>
                <option value="03" >03分</option>
                <option value="04" >04分</option>
                <option value="05" >05分</option>
                <option value="06" >06分</option>
                <option value="07" >07分</option>
                <option value="08" >08分</option>
                <option value="09" >09分</option>
                <option value="10" >10分</option>
                <option value="11" >11分</option>
                <option value="12" >12分</option>
                <option value="13" >13分</option>
                <option value="14" >14分</option>
                <option value="15" >15分</option>
                <option value="16" >16分</option>
                <option value="17" >17分</option>
                <option value="18" >18分</option>
                <option value="19" >19分</option>
                <option value="20" >20分</option>
                <option value="21" >21分</option>
                <option value="22" >22分</option>
                <option value="23" >23分</option>
                <option value="24" >24分</option>
                <option value="25" >25分</option>
                <option value="26" >26分</option>
                <option value="27" >27分</option>
                <option value="28" >28分</option>
                <option value="29" >29分</option>
                <option value="30" >30分</option>
                <option value="31" >31分</option>
                <option value="32" >32分</option>
                <option value="33" >33分</option>
                <option value="34" >34分</option>
                <option value="35" >35分</option>
                <option value="36" >36分</option>
                <option value="37" >37分</option>
                <option value="38" >38分</option>
                <option value="39" >39分</option>
                <option value="40" >40分</option>
                <option value="41" >41分</option>
                <option value="42" >42分</option>
                <option value="43" >43分</option>
                <option value="44" >44分</option>
                <option value="45" >45分</option>
                <option value="46" >46分</option>
                <option value="47" >47分</option>
                <option value="48" >48分</option>
                <option value="49" >49分</option>
                <option value="50" >50分</option>
                <option value="51" >51分</option>
                <option value="52" >52分</option>
                <option value="53" >53分</option>
                <option value="54" >54分</option>
                <option value="55" >55分</option>
                <option value="56" >56分</option>
                <option value="57" >57分</option>
                <option value="58" >58分</option>
                <option value="59" >59分</option>
              </select>


              <span class="caution">※この日時の順に表示されます（一般側画面には時間は表示されません）。<br />
            ※指定しない場合は、現在の日時が自動的に選択されます。</span>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">タイプ</td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tbody>
                <tr>
                  <td width="1%"><input type="radio" name="data['Info']['info_type']" id="info_type1" value="1"
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 1)
                      echo "checked";?>
                    ></td>
                  <td>タイプ1：タイトルをクリックすると指定URLを表示</td>
                </tr>
                <tr>
                  <td width="1%"><input type="radio" name="data['Info']['info_type']" id="info_type2" value="2" 
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 2)
                      echo "checked";?>
                    ></td>
                  <td>タイプ2：タイトルをクリックすると指定ファイルを表示</td>
                  </tr>
                <tr>
                  <td width="1%"><input type="radio" name="data['Info']['info_type']" id="info_type3" value="3"
                    <?php if(isset($this->request->data['Info']['info_type']) && $this->request->data['Info']['info_type'] == 3)
                      echo "checked";?>
                    ></td>
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
            <td><input type="radio" name="prmFileMode0" value="replace" >
新しいファイルに置き換える　  
  <input type="file" name="fileField" id="fileField">
  <br>
  <input type="radio" name="prmFileMode0" value="nowuse" checked>
すでにアップロード済みのファイルを使う
              （<a href="#" target="_blank">表示</a>）<br>
              <input type="radio" name="prmFileMode0" value="replace" >
アップロード済みファイルを削除する</td>
          </tr>
          <tr>
            <td width="10%" rowspan="6" class="col_3">タイプ3</td>
            <td width="15%" class="col_3">詳細</td>
            <td>
              <?php echo $this->Form->input('info3_contents', array(
                    'label'       => false,
                    'type'        => 'textarea',
                    'rows'        => 10,
                )); ?>
                
              </td>
          </tr>
          <tr>
            <td width="18%" class="col_3">画像</td>
            <td><input type="radio" name="prmFileMode1" value="replace" >
                新しい画像に置き換える　
                  <input type="file" name="fileField2" id="fileField2">
              <br>
              <input type="radio" name="prmFileMode1" value="nowuse" checked>
すでにアップロード済みの画像を使う
              （<a href="#" target="_blank">表示</a>）<br>
              <input type="radio" name="prmFileMode1" value="replace" >
              アップロード済み画像を削除する</td>
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
            <td width="15%" class="col_3">関連ファイル</td>
            <td><input type="radio" name="prmFileMode6" value="replace" >
新しいファイルに置き換える　
  <input type="file" name="fileField3" id="fileField3">
  <br>
  <input type="radio" name="prmFileMode6" value="nowuse" checked>
すでにアップロード済みのファイルを使う
              （<a href="#" target="_blank">表示</a>）<br>
              <input type="radio" name="prmFileMode6" value="replace" >
アップロード済みファイルを削除する</td>
          </tr>
          <tr>
            <td class="col_3">　└関連ファイル名</td>
            <td><input name="textfield3" type="text" id="textfield3" size="60"></td>
          </tr>
          <tr>
            <td colspan="2" class="col_3">表示／非表示</td>
            <td><input type="checkbox" name="checkbox" id="checkbox">              一時的に非表示にする</td>
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