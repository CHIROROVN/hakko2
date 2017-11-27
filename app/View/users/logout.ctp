<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>管理画面 | 八幸</title>
<?php 
  echo $this->Html->css('style');
  echo $this->Html->script('jquery-1.11.3.min');
?>
</head>

<body>
<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td class="col_1">■八幸 Website 管理画面　＞　ログアウト</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">ログアウトしました。</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">
        <?php echo $this->Html->link(
              'ログイン画面へ',
              array(
              'controller' => 'users',
              'action' => 'login' )); 
        ?>
        
      </td>

    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
