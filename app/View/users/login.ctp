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
<table width="960" border="0" align="center" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <td class="col_1">■八幸 Website 管理画面　＞　ログイン</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>

   <!--  <tr>
      <td>
        <div id="error" class="message">
            <a id="close" title="Message"  href="#" onClick="document.getElementById('error').setAttribute('style','display: none;');">&times;</a>
            <span></span>
        </div>
        </td>
    </tr> -->
  

    <?php 
      echo $this->Form->create('User', array(          
          'url' => Router::url(array(
              'controller' => 'users', 'action' => 'login',
          )),
          'novalidate' => true
            
      ));

  ?>



    <tr>
      <td align="center"><table width="60%" border="1" cellspacing="0" cellpadding="5">
        <tbody>
          <tr>
            <td width="40%" class="col_3">ログインID</td>
            <td>
              <?php echo $this->Form->input('u_login', array('label'=>false, 'type'=>'text')); 
              //echo $this->Form->error('User.u_login', null, array('class' => 'error-message'));
              ?>
            </td>
          </tr>
          <tr>
            <td width="40%" class="col_3">パスワード</td>
            <td>
              <?php echo $this->Form->input('u_passwd', array('label'=>false, 'type'=>'password')); 
              //echo $this->Form->error('User.u_passwd', null, array('class' => 'error-message'));
              ?>
            </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" value="ログイン">
      　　　　　
      <input type="reset" name="reset" id="reset" value="クリア"></td>
    </tr>
    <?php echo $this->Form->end(); ?>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
