<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ѡ�����ݿ�</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function DoDrop(dbname)
{
	var ok;
	var oktwo;
	var okthree;
	ok=confirm("ȷ��Ҫɾ�������ݿ�?");
	if(ok==false)
	{
		return false;
	}
	oktwo=confirm("�ٴ�ȷ��Ҫɾ�������ݿ�?");
	if(oktwo==false)
	{
		return false;
	}
	okthree=confirm("���ȷ��Ҫɾ�������ݿ�?");
	if(okthree==false)
	{
		return false;
	}
	if(ok&&oktwo&&okthree)
	{
		self.location.href='phome.php?phome=DropDb&mydbname='+dbname;
	}
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ�ã��������� -&gt; <a href="ChangeDb.php">ѡ�����ݿ�</a></td>
  </tr>
  <tr>
    <td height="25"><div align="center">���ݲ��裺<font color="#FF0000">ѡ�����ݿ�</font> 
        -&gt; ѡ��Ҫ���ݵı� -&gt; ��ʼ���� -&gt; ���</div></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="56%" height="25"> 
    <div align="center">���ݿ���</div></td>
    <td width="44%" height="25"> 
    <div align="center">����</div></td>
  </tr>
  <?php
  $i=0;
  while($r=$empire->fetch($sql))
  {
	$i++;
	if($i%2==0)
	{
		$bgcolor="#DBEAF5";
	}
	else
	{
		$bgcolor="#ffffff";
	}
	if($ebak_set_hidedbs&&stristr(','.$ebak_set_hidedbs.',',','.$r[0].','))
	{
		continue;
	}
  ?>
  <tr bgcolor="<?=$bgcolor?>"> 
    <td height="25"> 
      <div align="center"><strong><?=$r[0]?></strong></div></td>
    <td height="25"> 
      <div align="center"> 
        <input type="button" name="Submit" value="��������" onclick="self.location.href='ChangeTable.php?mydbname=<?=$r[0]?>';">
        &nbsp;&nbsp;&nbsp;<input type="button" name="Submit" value="ִ��SQL" onclick="self.location.href='DoSql.php?mydbname=<?=$r[0]?>';">
		&nbsp;&nbsp;&nbsp;<input type="button" name="Submit3" value="ɾ�����ݿ�" onclick="javascript:DoDrop('<?=$r[0]?>')">
      </div></td>
  </tr>
  <?
  }
  ?>
  </table>
  <br>
  <br>
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
		<form name="form1" method="post" action="phome.php">
          <tr class="header"> 
            <td height="25">�������ݿ�
              <input name="phome" type="hidden" id="phome" value="CreateDb">
              </td>
          </tr>
          <tr> 
            <td bgcolor="#FFFFFF">���ݿ����� 
              <input name="mydbname" type="text" id="mydbname">
              <select name="mydbchar" id="mydbchar">
                <option value="">Ĭ�ϱ���</option>
                <?php
				echo Ebak_ReturnDbCharList('');
				?>
              </select>
              <input type="submit" name="Submit2" value="����">            </td>
          </tr>
		  </form>
        </table>
		<br>
</body>
</html>