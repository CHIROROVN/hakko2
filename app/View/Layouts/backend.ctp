<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理画面 | 八幸</title>
<?php 
  echo $this->Html->css('style');
  echo $this->Html->script('jquery-1.11.3.min');
?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr>
      <td width="50%" align="left"><input type="button" onClick="location.href='menu.html'" value="管理者メニューへ"></td>
      <td width="50%" align="right"><input type="button" onClick="location.href='logout.html'" value="ログアウト"></td>
    </tr>
  </tbody>
</table>
<hr noshade>

<?php echo $this->fetch('content'); ?>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
