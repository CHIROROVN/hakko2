<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td width="99%" class="col_1">■八幸 Website 管理画面　＞　メニュー</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="col_2">▼「新着情報」管理</td>
    </tr>
    <tr>
      <td>　●
        <?php
          echo $this->Html->link('「新着情報」の新規登録／一覧／変更／削除', array(
             'controller' => 'infos',
             'action'     => 'index',
          ));
        ?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>