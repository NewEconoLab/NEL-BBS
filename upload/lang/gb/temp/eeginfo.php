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
		echo"<br>���Խ����<b>֧�ֲɼ�</b>";
	}
	else
	{
		echo"<br>���Խ����<b>��֧�ֲɼ�</b>";
	}
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�۹�PHP̽��</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function DoHiddenShowInfo(){
	var str='[������]';
	document.getElementById('showabspath').innerHTML=str;
	document.getElementById('showuserip').innerHTML=str;
	document.getElementById('showdomain').innerHTML=str;
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="8">
  <tr>
    <td height="25">λ�ã�<a href="eginfo.php">�۹�PHP̽��</a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
    <td width="50%" height="25" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="27" colspan="2"><div align="center">��������Ϣ</div></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td width="35%">����ϵͳ:</td>
        <td width="65%" height="27"><?=EGInfo_GetUseSys()?></td>
        </tr>
      <tr bgcolor="#FFFFFF">
        <td>���������:</td>
        <td height="27"><?=EGInfo_GetUseWebServer()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP�汾:</td>
        <td height="27"><?=EGInfo_GetPHPVersion()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>MYSQL�汾:</td>
        <td height="27">
		<?php
		$mysqlver=EGInfo_GetMysqlVersion();
		echo $mysqlver?$mysqlver:'δ֪';
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>��ǰĿ¼:</td>
        <td height="27" id="showabspath"><?=EGInfo_GetAbsPath()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>��¼��IP:</td>
        <td height="27" id="showuserip"><?=EGInfo_GetUserIP()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>ʹ������:</td>
        <td height="27" id="showdomain"><?=EGInfo_GetDomain()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>������ʱ��:</td>
        <td height="27"><?=EGInfo_GetDatetime()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP����ģʽ:</td>
        <td height="27"><?=EGInfo_GetPhpMod()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�Ƿ�֧��ZEND:</td>
        <td height="27">
		<?php
		$getzend=EGInfo_GetZend();
		if($getzend==1)
		{
			echo'֧��';
		}
		elseif($getzend==-1)
		{
			echo'δ֪';
		}
		else
		{
			echo'��֧��';
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
        <td height="27" colspan="2"><div align="center">PHP������Ϣ</div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="35%">PHP��ȫģʽ:</td>
        <td width="65%" height="27"><?=EGInfo_GetPHPSafemod()?'PHP�����ڰ�ȫģʽ':'����ģʽ'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>ȫ�ֱ���:</td>
        <td height="27"><?=EGInfo_GetPHPRGlobals()?'��':'�ر�'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>ħ������:</td>
        <td height="27"><?=EGInfo_GetPHPMagicQuotes()?'����':'�ر�'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>PHP�̱�ǩ:</td>
        <td height="27"><?=EGInfo_GetPHPShortTag()?'֧��':'��֧��'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�Ƿ�֧�ֲɼ�:</td>
        <td height="27">
		<?=EGInfo_GetCj()?'֧��':'��֧��'?>
		 &nbsp;&nbsp;&nbsp;&nbsp;(<a href="#eginfo" onclick="window.open('eginfo.php?phome=TestCj','','width=200,height=80');"><u>������Բɼ�</u></a>)</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>MYSQL�ӿ�֧������:</td>
        <td height="27">
		<?php
		$mysqlconnecttype=EGInfo_GetMysqlConnectType();
		echo $mysqlconnecttype;
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�Ƿ�֧��GD��:</td>
        <td height="27"><?=EGInfo_GetPHPGd()?'֧��':'��֧��'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�Ƿ�֧��ICONV���:</td>
        <td height="27"><?=EGInfo_GetIconv()?'֧��':'��֧��'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>���ύ�������:</td>
        <td height="27"><?=EGInfo_GetPHPMaxPostSize()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>������������:</td>
        <td height="27">
		<?php
		$maxinputvars=EGInfo_GetPHPMaxInputVars();
		echo $maxinputvars?$maxinputvars:'����';
		?>		</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>�Ƿ������ϴ��ļ�:</td>
        <td height="27"><?=EGInfo_GetPHPFileUploads()?'����':'������'?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>����ϴ��ļ���С:</td>
        <td height="27"><?=EGInfo_GetPHPMaxUploadSize()?></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>��file��������:</td>
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
    <td><div align="center">[<a href="eginfo.php?phome=ShowPHPInfo" target="_blank">�������鿴PHPINFO��Ϣ</a>] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a href="#empirebak" onclick="DoHiddenShowInfo();">�����������������Ϣ��ʾ</a>]</div></td>
  </tr>
</table>
</body>
</html>