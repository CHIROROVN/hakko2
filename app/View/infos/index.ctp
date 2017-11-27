<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="150%" class="col_1">■八幸 Website 管理画面　＞　「新着情報」管理　＞　一覧</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
          <tr>
            <td><input type="button" onClick="location.href='info_delete.html'" value="削除"></td>
            <td align="center">－</td>
            <td>ホームページをリニューアルしました</td>
            <td>2017/06/30</td>
            <td><input type="button" onClick="location.href='info_detail.html'" value="詳細・変更"></td>
          </tr>
          <tr>
            <td><input type="button" onClick="location.href='info_delete.html'" value="削除"></td>
            <td align="center"><span class="f_blue">○</span></td>
            <td>セブン-イレブンのイベントがはじまります</td>
            <td>2017/03/15</td>
            <td><input type="button" onClick="location.href='info_detail.html'" value="詳細・変更"></td>
          </tr>
          <tr>
            <td><input type="button" onClick="location.href='info_delete.html'" value="削除"></td>
            <td align="center"><span class="f_blue">○</span></td>
            <td>お得な情報</td>
            <td>2017/03/10</td>
            <td><input type="button" onClick="location.href='info_detail.html'" value="詳細・変更"></td>
          </tr>
          <tr>
            <td><input type="button" onClick="location.href='info_delete.html'" value="削除"></td>
            <td align="center"><span class="f_blue">○</span></td>
            <td>送迎サービスについて</td>
            <td>2017/03/04</td>
            <td><input type="button" onClick="location.href='info_detail.html'" value="詳細・変更"></td>
          </tr>
          <tr>
            <td><input type="button" onClick="location.href='info_delete.html'" value="削除"></td>
            <td align="center"><span class="f_red">×</span></td>
            <td>お得な情報のタイトル</td>
            <td>2017/02/20</td>
            <td><input type="button" onClick="location.href='info_detail.html'" value="詳細・変更"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;"><input type="button" onclick="#" name="submit" id="submit" value="前の20件を表示" disabled><input type="button" onclick="#" id="submit2" value="次の20件を表示" disabled></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>