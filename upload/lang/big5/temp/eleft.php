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
		$dbservername.='<br>('.$dbserverr['dbname'].')';
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>���</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>
<body topmargin="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="65"> 
        <div align="center"><a href="http://www.phome.net" target="_blank"><img src="images/logo.gif" alt="Empire Soft" width="151" height="58" border="0"></a></div></td>
    </tr>
  </table>
  <br>
</div>
<?php
if($ebak_set_moredbserver)
{
?>
<table width="100%" border="0" cellspacing="1" cellpadding="3" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">
      ��e�A�Ⱦ�<?=$dbserverno?></div></td>
  </tr>
  <tr>
    <td height="27"><div align="center"><?=$dbservername?></div></td>
  </tr>
</table>
<br>
<?php
}
?>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">��x����</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="main.php" target="ebakmain">��x����</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="admin.php" target="_parent">��s��x�D�ɭ�</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="doc.html" target="ebakmain">��������</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="http://bbs.phome.net" target="_blank">�޳N���</a></div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td height="27"><div align="center">�ƥ��P��_�ƾڮw</div></td>
  </tr>
  
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="SetDb.php" target="ebakmain">�����ѼƳ]�m</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="ChangeDb.php" target="ebakmain">�ƥ��ƾ�</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="ListSetbak.php" target="ebakmain">�޲z�ƥ��]�m</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="ReData.php" target="ebakmain">��_�ƾ�</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="ChangePath.php" target="ebakmain">�޲z�ƥ��ؿ�</a></div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">���[�ե�</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="RepFiletext.php" target="ebakmain">�����ؿ����</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="DoSql.php" target="ebakmain">����SQL�y�y</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="eginfo.php" target="ebakmain">�Ұ�PHP���w</a></div></td>
  </tr>
</table>
<?php
if($ebak_ebma_path&&file_exists('eapi/'.$ebak_ebma_path))
{
?>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27" title="EmpireBak+phpMyAdmin+���w��"><div align="center">EBMA�t��</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="goebma.php" title="��EBMA�޲z�M�ƥ�MYSQL��w���C" target="ebakmain">�ϥ�phpMyAdmin</a></div></td>
  </tr>
</table>
<?php
}
?>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">�h�X�t��</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="phome.php?phome=exit" onclick="return confirm('�T�{�n�h�X�t�ΡH');" target="_parent">�h�X�t��</a></div></td>
  </tr>
</table>
</body>
</html>