<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<?php
$dbserverr=Ebak_SetUseMoreDbServer();
if(empty($dbserverr['serverid']))
{
	$dbserverno=' ('.$dbserverr['serverid'].')';
	$dbservername='<strong>Ĭ�Ϸ�����</strong>';
}
else
{
	$dbserverno=' ('.$dbserverr['serverid'].')';
	$dbservername='<strong>'.$dbserverr['dbhost'].'</strong>';
	if($dbserverr['dbname'])
	{
		$dbservername.=' ('.$dbserverr['dbname'].')';
	}
}
$pmaurl='eapi/'.$ebak_ebma_path.'/';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ʹ��EBMAϵͳ</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ�ã�<a href="goebma.php">EBMAϵͳ������ȫ��MYSQL����ͱ���ϵͳ��</a></td>
    <td width="50%"><div align="right">EBMAϵͳ�ٷ���վ��<a href="http://ebak.phome.net" target="_blank">http://ebak.phome.net</a>&nbsp;&nbsp;</div></td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td><div align="center"><strong> 
        </strong>
        <h3><strong>��ӭʹ�ø���ȫ��EBMAϵͳ (<font color="#FF0000">E</font>mpire<font color="#FF0000">B</font>ak+php<font color="#FF0000">M</font>y<font color="#FF0000">A</font>dmin+�߰�ȫ)</strong></h3>
        <strong></strong></div></td>
  </tr>
</table>
<br>
<br>
<br>
<table width="650" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header">
      <td height="25" colspan="2"><div align="center">����phpMyAdmin����MYSQL</div></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="28%" height="32">��ǰ������<strong><?=$dbserverno?></strong>��</td>
      <td width="72%" height="25"><?=$dbservername?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="32">����phpMyAdmin��</td>
      <td height="25">
	  <?php
	  if($ebak_ebma_open)
	  {
	  ?>
	  <strong><a href="<?=$pmaurl?>" target="_blank">�������phpMyAdmin</a></strong>
	  <?php
	  }
	  else
	  {
	  ?>
	  ��ǰphpMyAdmin�ѹرգ�Ҫʹ���뵽<a href="SetDb.php"><strong>ȫ�ֲ�������</strong></a>�п�����
	  <?php
	  }
	  ?>	  </td>
    </tr>
    <?php
	if($ebak_ebma_cklogin)
	{
	?>
    <tr bgcolor="#FFFFFF">
      <td height="32" colspan="2"><div align="center"><font color="#009900"><strong>��ǰphpMyAdmin���ܵ۹���������ȫ��֤������</strong></font></div></td>
    </tr>
	<?php
	}
	else
	{
	?>
    <tr bgcolor="#FFFFFF">
      <td height="32" colspan="2"><div align="center"><font color="#009900"><strong>��ǰphpMyAdmin���ܵ۹���������ȫ��֤+phpMyAdmin����˫�ذ�ȫ��֤������</strong></font></div></td>
    </tr>
	<?php
	}
	?>
    <tr bgcolor="#FFFFFF">
      <td height="25" colspan="2">(ע�����ʹ�ù������벻Ҫ�л�������.)</td>
    </tr>
</table>
<br>
<br>
<br>
<table width="420" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td height="38"><div align="center">Powered by <a href="http://ebak.phome.net" target="_blank"><strong>EBMA</strong></a></div></td>
  </tr>
</table>
</body>
</html>