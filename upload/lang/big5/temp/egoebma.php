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
	$dbservername='<strong>�q�{�A�Ⱦ�</strong>';
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
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥ�EBMA�t��</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>��m�G<a href="goebma.php">EBMA�t�ΡG��w����MYSQL�޲z�M�ƥ��t�ΡC</a></td>
    <td width="50%"><div align="right">EBMA�t�Ωx������G<a href="http://ebak.phome.net" target="_blank">http://ebak.phome.net</a>&nbsp;&nbsp;</div></td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td><div align="center"><strong> 
        </strong>
        <h3><strong>�w��ϥΧ�w����EBMA�t�� (<font color="#FF0000">E</font>mpire<font color="#FF0000">B</font>ak+php<font color="#FF0000">M</font>y<font color="#FF0000">A</font>dmin+���w��)</strong></h3>
        <strong></strong></div></td>
  </tr>
</table>
<br>
<br>
<br>
<table width="650" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr class="header">
      <td height="25" colspan="2"><div align="center">�i�JphpMyAdmin�޲zMYSQL</div></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="28%" height="32">��e�A�Ⱦ�<strong><?=$dbserverno?></strong>�G</td>
      <td width="72%" height="25"><?=$dbservername?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="32">�i�JphpMyAdmin�G</td>
      <td height="25">
	  <?php
	  if($ebak_ebma_open)
	  {
	  ?>
	  <strong><a href="<?=$pmaurl?>" target="_blank">�I���i�JphpMyAdmin</a></strong>
	  <?php
	  }
	  else
	  {
	  ?>
	  ��ephpMyAdmin�w�����A�n�ϥνШ�<a href="SetDb.php"><strong>�����ѼƳ]�m</strong></a>���}�ҡC
	  <?php
	  }
	  ?>	  </td>
    </tr>
    <?php
	if($ebak_ebma_cklogin)
	{
	?>
    <tr bgcolor="#FFFFFF">
      <td height="32" colspan="2"><div align="center"><font color="#009900"><strong>��ephpMyAdmin�����Ұ�ƥ����w���{�ҫO�@�C</strong></font></div></td>
    </tr>
	<?php
	}
	else
	{
	?>
    <tr bgcolor="#FFFFFF">
      <td height="32" colspan="2"><div align="center"><font color="#009900"><strong>��ephpMyAdmin�����Ұ�ƥ����w���{��+phpMyAdmin���������w���{�ҫO�@�C</strong></font></div></td>
    </tr>
	<?php
	}
	?>
    <tr bgcolor="#FFFFFF">
      <td height="25" colspan="2">(�`�N�ƶ��G�ϥιL�{���Ф��n�����A�Ⱦ�.)</td>
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