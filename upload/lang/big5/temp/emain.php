<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�Ұ�ƥ���</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr> 
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25">�ڪ����A</td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF"> 
                <td height="25"> <div align="left">�n����:&nbsp;<b> 
                    <?=$loginin?>
                    </b></div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>
        <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
          <tr>             
          <td height="38" bgcolor="#FFFFFF">
<div align="center"><a href="http://www.phome.net/ecms72/" target="_blank"><strong><font color="#0000FF" size="3">�Ұ�����޲z�t�Υ����}�� 
              �� �̦w���B��í�w���}��CMS�t��</font></strong></a></div></td>
          </tr>
        </table>
      </td>
  </tr>
  <tr> 
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%" height="16"><strong><font color="#FFFFFF">�Ұ�ƥ���(EmpireBak)���v�n��</font></strong></td>
                <td><div align="right"><strong><a href="http://ebak.phome.net" target="_blank"><font color="#FFFFFF">EBMA�t�Ωx�����</font></a></strong></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"> <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
              <tr> 
                <td><strong>�p�G�z�Q�ϥΥ��t��(�Y�G�Ұ�ƥ���)�A�иԲӾ\Ū�H�U���ڡA�u���b�����F�H�U���ڪ����p�U�z�~�i�H�ϥΥ��t�ΡG</strong></td>
              </tr>
              <tr> 
                <td>1�B���{�Ǭ��K�O�N�X,���ѭӤH�����K�O�ϥΡA�ФūD�k�ק�B����B�����B�ΥΩ��L�ϧQ�欰�A�ýФŧR�����v�n���C</td>
              </tr>
              <tr> 
                <td>2�B���{�Ǭ��K�O�N�X,�Τ�ۥѿ�ܬO�_�ϥΡA�b�ϥΤ��X�{������D�ӳy�����l��<strong><a href="http://www.phome.net" target="_blank">�Ұ�n��</a></strong>���t����d���C 
                </td>
              </tr>
              <tr> 
                <td>3�B���{�Ǥ����\�b�S���ƥ��q�������p�U�Ω�ӷ~�γ~�A���p�z�ݭn�Ω�ӷ~�γ~�A�ЩM<a href="http://www.phome.net" target="_blank"><u>�ڭ��pô</u></a>�A�H��o�ӷ~�ϥ��v�C 
                </td>
              </tr>
              <tr> 
                <td>4�B�p�G�H�ϥH�W���ڡA<strong><a href="http://www.phome.net" target="_blank">�Ұ�n��</a></strong>�惡�O�d�@���k�߰l�s���v�Q�C</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%" height="16"><strong><a href="phpinfo.php" target="_blank"><font color="#FFFFFF">�t�ΫH��</font></a></strong></td>
                <td><div align="right"><strong><a href="http://www.phome.net/edown25/" target="_blank"><font color="#FFFFFF">�Ұ�U���t��</font></a></strong></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF"> 
                <td width="40%" height="26">�A�Ⱦ��n��: 
                  <?=EGInfo_GetUseWebServer()?>                </td>
                <td width="60%" height="26">�ާ@�t��&nbsp;&nbsp;:
				<?=EGInfo_GetUseSys()?></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">PHP����&nbsp;&nbsp; : <?=EGInfo_GetPHPVersion()?></td>
                <td height="25">MYSQL����&nbsp;:
				<?php
				$mysqlver=EGInfo_GetMysqlVersion();
				echo $mysqlver?$mysqlver:'����';
				?>
				</td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�����ܶq&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPRGlobals()?'���}':'����'?>
                </td>
                <td height="25">�W�Ǥ��&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPFileUploads()?'�i�H':'���i�H'?>
                </td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�n����IP&nbsp;&nbsp;:
				<?=EGInfo_GetUserIP()?></td>
                <td height="25">��e�ɶ�&nbsp;&nbsp;:
				<?=EGInfo_GetDatetime()?></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�{�Ǫ���&nbsp;&nbsp;: <a href="http://www.phome.net" target="_blank"><strong><font color="#07519A">EmpireBak</font></strong> 
                  <font color="#FF9900"><strong>5.1</strong></font></a> <font color="#666666">[�}����]</font></td>
                <td height="25">�w���Ҧ�&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPSafemod()?'PHP�B���w���Ҧ�':'���`�Ҧ�'?>
                </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25" colspan="2">�{�Ǩ䥦�����H��</td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1">
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�x��D��: <a href="http://www.phome.net" target="_blank">http://www.phome.net</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�x��׾�: <a href="http://bbs.phome.net" target="_blank">http://bbs.phome.net</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">���q�����G<a href="http://www.digod.com" target="_blank">http://www.digod.com</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�Ұ겣�~�G<a href="http://www.phome.net/product" target="_blank">http://www.phome.net/product</a></td>
              </tr>
            </table></td>
          <td width="60%" height="125" valign="top" bgcolor="#FFFFFF">
<IFRAME frameBorder="0" name="getinfo" scrolling="no" src="ginfo.php" style="HEIGHT:100%;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2"></IFRAME></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td height="32" valign="bottom"> 
      <div align="center">Powered by <a href="http://www.phome.net" target="_blank"><strong><font color="#07519A">EmpireBak</font></strong> 
        <font color="#FF9900"><strong>5.1</strong></font></a></div></td>
  </tr>
</table>
</body>
</html>