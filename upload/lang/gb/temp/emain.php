<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�۹�������</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr> 
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25">�ҵ�״̬</td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF"> 
                <td height="25"> <div align="left">��¼��:&nbsp;<b> 
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
<div align="center"><a href="http://www.phome.net/ecms72/" target="_blank"><strong><font color="#0000FF" size="3">�۹���վ����ϵͳȫ�濪Դ 
              �� �ȫ�����ȶ��Ŀ�ԴCMSϵͳ</font></strong></a></div></td>
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
                <td width="50%" height="16"><strong><font color="#FFFFFF">�۹�������(EmpireBak)��Ȩ����</font></strong></td>
                <td><div align="right"><strong><a href="http://ebak.phome.net" target="_blank"><font color="#FFFFFF">EBMAϵͳ�ٷ���վ</font></a></strong></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"> <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
              <tr> 
                <td><strong>�������ʹ�ñ�ϵͳ(�����۹�������)������ϸ�Ķ��������ֻ���ڽ����������������������ſ���ʹ�ñ�ϵͳ��</strong></td>
              </tr>
              <tr> 
                <td>1��������Ϊ��Ѵ���,�ṩ������վ���ʹ�ã�����Ƿ��޸ġ�ת�ء�ɢ��������������ͼ����Ϊ��������ɾ����Ȩ������</td>
              </tr>
              <tr> 
                <td>2��������Ϊ��Ѵ���,�û�����ѡ���Ƿ�ʹ�ã���ʹ���г����κ��������ɵ���ʧ<strong><a href="http://www.phome.net" target="_blank">�۹����</a></strong>�����κ����Ρ� 
                </td>
              </tr>
              <tr> 
                <td>3��������������û������֪ͨ�������������ҵ��;����������Ҫ������ҵ��;�����<a href="http://www.phome.net" target="_blank"><u>������ϵ</u></a>���Ի����ҵʹ��Ȩ�� 
                </td>
              </tr>
              <tr> 
                <td>4�����Υ���������<strong><a href="http://www.phome.net" target="_blank">�۹����</a></strong>�Դ˱���һ�з���׷����Ȩ����</td>
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
                <td width="50%" height="16"><strong><a href="phpinfo.php" target="_blank"><font color="#FFFFFF">ϵͳ��Ϣ</font></a></strong></td>
                <td><div align="right"><strong><a href="http://www.phome.net/edown25/" target="_blank"><font color="#FFFFFF">�۹�����ϵͳ</font></a></strong></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF"> 
                <td width="40%" height="26">���������: 
                  <?=EGInfo_GetUseWebServer()?>                </td>
                <td width="60%" height="26">����ϵͳ&nbsp;&nbsp;:
				<?=EGInfo_GetUseSys()?></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">PHP�汾&nbsp;&nbsp; : <?=EGInfo_GetPHPVersion()?></td>
                <td height="25">MYSQL�汾&nbsp;:
				<?php
				$mysqlver=EGInfo_GetMysqlVersion();
				echo $mysqlver?$mysqlver:'δ֪';
				?>
				</td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">ȫ�ֱ���&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPRGlobals()?'��':'�ر�'?>
                </td>
                <td height="25">�ϴ��ļ�&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPFileUploads()?'����':'������'?>
                </td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">��¼��IP&nbsp;&nbsp;:
				<?=EGInfo_GetUserIP()?></td>
                <td height="25">��ǰʱ��&nbsp;&nbsp;:
				<?=EGInfo_GetDatetime()?></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">����汾&nbsp;&nbsp;: <a href="http://www.phome.net" target="_blank"><strong><font color="#07519A">EmpireBak</font></strong> 
                  <font color="#FF9900"><strong>5.1</strong></font></a> <font color="#666666">[��Դ��]</font></td>
                <td height="25">��ȫģʽ&nbsp;&nbsp;: 
                  <?=EGInfo_GetPHPSafemod()?'PHP�����ڰ�ȫģʽ':'����ģʽ'?>
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
          <td height="25" colspan="2">�������������Ϣ</td>
        </tr>
        <tr> 
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1">
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�ٷ���ҳ: <a href="http://www.phome.net" target="_blank">http://www.phome.net</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�ٷ���̳: <a href="http://bbs.phome.net" target="_blank">http://bbs.phome.net</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">��˾��վ��<a href="http://www.digod.com" target="_blank">http://www.digod.com</a></td>
              </tr>
              <tr bgcolor="#FFFFFF"> 
                <td height="25">�۹���Ʒ��<a href="http://www.phome.net/product" target="_blank">http://www.phome.net/product</a></td>
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