<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<?php
if($phome=='TestCj')
{
	if($testcjst)
	{
		echo"<br>���յ��G�G<b>����Ķ�</b>";
	}
	else
	{
		echo"<br>���յ��G�G<b>������Ķ�</b>";
	}
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�Ұ�PHP���w</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function DoHiddenShowInfo(){
	var str='[�w����]';
	document.getElementById('showabspath').innerHTML=str;
	document.getElementById('showuserip').innerHTML=str;
	document.getElementById('showdomain').innerHTML=str;
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="8">
  <tr>
    <td height="25">��m�G<a href="eginfo.php">�Ұ�PHP���w</a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td width="50%" height="25" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="27" colspan="2"><div align="center">�A�Ⱦ��H��</div></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td width="35%">�ާ@�t��:</td>
        <td width="65%" height="27"><?=EGInfo_GetUseSys()?></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td>�A�Ⱦ��n��:</td>
        <td height="27"><?=EGInfo_GetUseWebServer()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP����:</td>
        <td height="27"><?=EGInfo_GetPHPVersion()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>MYSQL����:</td>
        <td height="27">
		<?php
		$mysqlver=EGInfo_GetMysqlVersion();
		echo $mysqlver?$mysqlver:'����';
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>��e�ؿ�:</td>
        <td height="27" id="showabspath"><?=EGInfo_GetAbsPath()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�n����IP:</td>
        <td height="27" id="showuserip"><?=EGInfo_GetUserIP()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�ϥΰ�W:</td>
        <td height="27" id="showdomain"><?=EGInfo_GetDomain()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�A�Ⱦ��ɶ�:</td>
        <td height="27"><?=EGInfo_GetDatetime()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP�B��Ҧ�:</td>
        <td height="27"><?=EGInfo_GetPhpMod()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�O�_���ZEND:</td>
        <td height="27">
		<?php
		$getzend=EGInfo_GetZend();
		if($getzend==1)
		{
			echo'���';
		}
		elseif($getzend==-1)
		{
			echo'����';
		}
		else
		{
			echo'�����';
		}
		?>
		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td height="27">&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td height="27">&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td height="27">&nbsp;</td>
      </tr>
    </table></td>
    <td width="50%" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="27" colspan="2"><div align="center">PHP�t�m�H��</div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="35%">PHP�w���Ҧ�:</td>
        <td width="65%" height="27"><?=EGInfo_GetPHPSafemod()?'PHP�B���w���Ҧ�':'���`�Ҧ�'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�����ܶq:</td>
        <td height="27"><?=EGInfo_GetPHPRGlobals()?'���}':'����'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�]�N�ޥ�:</td>
        <td height="27"><?=EGInfo_GetPHPMagicQuotes()?'�}��':'����'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP�u����:</td>
        <td height="27"><?=EGInfo_GetPHPShortTag()?'���':'�����'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�O�_����Ķ�:</td>
        <td height="27">
		<?=EGInfo_GetCj()?'���':'�����'?>
		 &nbsp;&nbsp;&nbsp;&nbsp;(<a href="#eginfo" onclick="window.open('eginfo.php?phome=TestCj','','width=200,height=80');"><u>�I�����ձĶ�</u></a>)</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>MYSQL���f�������:</td>
        <td height="27">
		<?php
		$mysqlconnecttype=EGInfo_GetMysqlConnectType();
		echo $mysqlconnecttype;
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�O�_���GD�w:</td>
        <td height="27"><?=EGInfo_GetPHPGd()?'���':'�����'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�O�_���ICONV�ե�:</td>
        <td height="27"><?=EGInfo_GetIconv()?'���':'�����'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>��洣��̤j�ƾ�:</td>
        <td height="27"><?=EGInfo_GetPHPMaxPostSize()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>����ܶq�ƭ���:</td>
        <td height="27">
		<?php
		$maxinputvars=EGInfo_GetPHPMaxInputVars();
		echo $maxinputvars?$maxinputvars:'����';
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�O�_���\�W�Ǥ��:</td>
        <td height="27"><?=EGInfo_GetPHPFileUploads()?'�i�H':'���i�H'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�̤j�W�Ǥ��j�p:</td>
        <td height="27"><?=EGInfo_GetPHPMaxUploadSize()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>���file�ƶq����:</td>
        <td height="27">
		<?php
		$maxuploadfilenum=EGInfo_GetPHPMaxUploadFileNum();
		echo $maxuploadfilenum?$maxuploadfilenum:'����';
		?>		</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td><div align="center">[<a href="eginfo.php?phome=ShowPHPInfo" target="_blank">�I���o�̬d��PHPINFO�H��</a>] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a href="#empirebak" onclick="DoHiddenShowInfo();">�I���o�����ñӷP�H�����</a>]</div></td>
  </tr>
</table>
</body>
</html>