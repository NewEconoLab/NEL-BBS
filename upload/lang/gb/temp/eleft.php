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
		$dbservername.='<br>('.$dbserverr['dbname'].')';
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�˵�</title>
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
      ��ǰ������<?=$dbserverno?></div></td>
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
    <td height="27"><div align="center">��̨��ҳ</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="main.php" target="ebakmain">��̨��ҳ</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="admin.php" target="_parent">ˢ�º�̨������</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="doc.html" target="ebakmain">˵���ĵ�</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="http://bbs.phome.net" target="_blank">����֧��</a></div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td height="27"><div align="center">������ָ����ݿ�</div></td>
  </tr>
  
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="SetDb.php" target="ebakmain">ȫ�ֲ�������</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="ChangeDb.php" target="ebakmain">��������</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="ListSetbak.php" target="ebakmain">����������</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"> <div align="center"><a href="ReData.php" target="ebakmain">�ָ�����</a></div></td>
  </tr>
  <tr> 
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="ChangePath.php" target="ebakmain">������Ŀ¼</a></div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">�������</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="RepFiletext.php" target="ebakmain">�滻Ŀ¼�ļ�</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="DoSql.php" target="ebakmain">ִ��SQL���</a></div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="eginfo.php" target="ebakmain">�۹�PHP̽��</a></div></td>
  </tr>
</table>
<?php
if($ebak_ebma_path&&file_exists('eapi/'.$ebak_ebma_path))
{
?>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27" title="EmpireBak+phpMyAdmin+�߰�ȫ"><div align="center">EBMAϵͳ</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="goebma.php" title="��EBMA����ͱ���MYSQL����ȫ��" target="ebakmain">ʹ��phpMyAdmin</a></div></td>
  </tr>
</table>
<?php
}
?>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header">
    <td height="27"><div align="center">�˳�ϵͳ</div></td>
  </tr>
  <tr>
    <td height="27" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#DBEAF5'"><div align="center"><a href="phome.php?phome=exit" onclick="return confirm('ȷ��Ҫ�˳�ϵͳ��');" target="_parent">�˳�ϵͳ</a></div></td>
  </tr>
</table>
</body>
</html>