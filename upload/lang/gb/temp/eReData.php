<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ָ�����</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ�ã�<a href="ReData.php">�ָ�����</a></td>
  </tr>
</table>
<br>
  <table width="70%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="ebakredata" method="post" action="phomebak.php" onsubmit="return confirm('ȷ��Ҫ�ָ���');">
    <tr class="header"> 
      <td height="25" colspan="2">�ָ����� 
        <input name="phome" type="hidden" id="phome" value="ReData"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="34%" height="25">�ָ�����ԴĿ¼��</td>
      <td width="66%" height="25"> 
        <?=$bakpath?>
        / 
        <input name="mypath" type="text" id="mypath" value="<?=$mypath?>"> <input type="button" name="Submit2" value="ѡ��Ŀ¼" onclick="javascript:window.open('ChangePath.php?change=1','','width=750,height=500,scrollbars=yes');"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" valign="top">Ҫ��������ݿ⣺</td>
      <td height="25"> <select name="add[mydbname]" size="23" id="add[mydbname]" style="width:300">
          <?=$db?>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">�ָ�ѡ�</td>
      <td height="25">ÿ��ָ������ 
        <input name="add[waitbaktime]" type="text" id="add[waitbaktime]" value="0" size="2">
        ��</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="2"> <div align="left"> 
          <input type="submit" name="Submit" value="��ʼ�ָ�">
        </div></td>
    </tr>
	</form>
  </table>

</body>
</html>