<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<?php
$canconnectdbtype=Ebak_ReturnMysqlConnectType();

$mrexp='|ebak|';
$mfexp='!ebak!';
$moredbserver_r=explode($mrexp,$ebak_set_moredbserver);
$moredbcount=count($moredbserver_r);
if(empty($ebak_set_moredbserver))
{
	$moredbcount=0;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeSet(cset){
	if(cset=="setuser")
	{
		setdb.style.display="none";
		setuser.style.display="";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="none";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#DBEAF5";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#ffffff";
	}
	else if(cset=="setck")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="none";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#DBEAF5";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#ffffff";
	}
	else if(cset=="setlang")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="none";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#ffffff";
	}
	else if(cset=="setother")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="";
		setmdbs.style.display="none";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#DBEAF5";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#ffffff";
	}
	else if(cset=="setmdbs")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#DBEAF5";
		setebmabg.style.backgroundColor="#ffffff";
	}
	else if(cset=="setebma")
	{
		setdb.style.display="none";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="none";
		setebma.style.display="";

		setdbbg.style.backgroundColor="#ffffff";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#DBEAF5";
	}
	else
	{
		setdb.style.display="";
		setuser.style.display="none";
		setck.style.display="none";
		//setlang.style.display="none";
		setother.style.display="none";
		setmdbs.style.display="none";
		setebma.style.display="none";

		setdbbg.style.backgroundColor="#DBEAF5";
		setuserbg.style.backgroundColor="#ffffff";
		setckbg.style.backgroundColor="#ffffff";
		setotherbg.style.backgroundColor="#ffffff";
		setmdbsbg.style.backgroundColor="#ffffff";
		setebmabg.style.backgroundColor="#ffffff";
	}
}

function eGetChangeMysqlVer(){
	var dbver='';
	var radios=document.getElementsByName('mysqlver');
	for(var i=0;i<radios.length;i++)
	{
		if(radios[i].checked)
		{
			dbver=radios[i].value;
		}
	}
	return dbver;
}

//���Ĭ�����ݿ����
function EbakCheckDefDbServer(){
	var mdbver='';
	mdbver=eGetChangeMysqlVer();
	document.checkdbconnectform.checkdbserverid.value=0;
	document.checkdbconnectform.checkdbver.value=mdbver;
	document.checkdbconnectform.checkdbhost.value=document.form1.dbhost.value;
	document.checkdbconnectform.checkdbport.value=document.form1.dbport.value;
	document.checkdbconnectform.checkdbuser.value=document.form1.dbusername.value;
	document.checkdbconnectform.checkdbpass.value=document.form1.dbpassword.value;
	document.checkdbconnectform.checkdbname.value=document.form1.dbname.value;
	document.checkdbconnectform.checkdbtbpre.value=document.form1.sbaktbpre.value;
	document.checkdbconnectform.checkdbchar.value=document.form1.dbchar.value;
	document.checkdbconnectform.submit();
}

//������ݿ����
function EbakCheckDbServer(serverid){
	document.checkdbconnectform.checkdbserverid.value=serverid;
	document.checkdbconnectform.checkdbver.value=document.getElementById('moredbver'+serverid).value;
	document.checkdbconnectform.checkdbhost.value=document.getElementById('moredbhost'+serverid).value;
	document.checkdbconnectform.checkdbport.value=document.getElementById('moredbport'+serverid).value;
	document.checkdbconnectform.checkdbuser.value=document.getElementById('moredbuser'+serverid).value;
	document.checkdbconnectform.checkdbpass.value=document.getElementById('moredbpass'+serverid).value;
	document.checkdbconnectform.checkdbname.value=document.getElementById('moredbname'+serverid).value;
	document.checkdbconnectform.checkdbtbpre.value=document.getElementById('moredbtbpre'+serverid).value;
	document.checkdbconnectform.checkdbchar.value=document.getElementById('moredbchar'+serverid).value;
	document.checkdbconnectform.submit();
}

//�������ݿ������
function EbakShowAddDbServer(){
	var i;
	var str="";
	var oldi=0;
	var j=0;
	oldi=parseInt(document.form1.dbservernum.value);
	j=oldi+1;
	str=str+"<table width='100%' border=0 cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td bgcolor='#FFFFFF' width='3%'><div align=center>"+j+"</div></td><td height=25 bgcolor='#FFFFFF' width='10%'><select name=moredbver[] id='moredbver"+j+"'><option value='5.0'>5.0������</option><option value='4.1'>4.1</option><option value='4.0'>4.0.*/3.*</option></select></td><td bgcolor='#FFFFFF' width='34%'><input name=moredbhost[] type=text id='moredbhost"+j+"'> <a href='#empirebak' onclick=EbakCheckDbServer('"+j+"')>[����]</a></td><td bgcolor='#FFFFFF' width='7%'><input name=moredbport[] type=text id='moredbport"+j+"' size=6></td><td bgcolor='#FFFFFF' width='10%'><input name=moredbuser[] type=text id='moredbuser"+j+"' size=12></td><td bgcolor='#FFFFFF' width='10%'><input name=moredbpass[] type=password id='moredbpass"+j+"' size=12></td><td bgcolor='#FFFFFF' width='9%'><input name=moredbname[] type=text id='moredbname"+j+"' size=12></td><td bgcolor='#FFFFFF' width='9%'><input name=moredbtbpre[] type=text id='moredbtbpre"+j+"' size=10></td><td bgcolor='#FFFFFF' width='8%'><input name=moredbchar[] type=text id='moredbchar"+j+"' size=8></td></tr></table>";
	document.getElementById("adddbserverdiv").innerHTML+=str;
	document.form1.dbservernum.value=oldi+1;
}

//��֤Ĭ��
function EbakCheckIsDefPass(obj){
	<?php
	if(empty($phome_db_ver))
	{
	?>
	var defpass='';
	var defloginrnd='EmpireCMS-EmpireBak-EmpireDown';
	var thispass=obj.adminpassword.value;
	var thisloginrnd=obj.adminloginrnd.value;
	if(thispass=='')
	{
		alert('���޸�Ĭ�ϵĹ����������֤����� (����Ա����)');
		return false;
	}
	if(defloginrnd==thisloginrnd)
	{
		alert('���޸�Ĭ�ϵĹ����������֤����� (����Ա����)');
		return false;
	}
	<?php
	}
	?>
	return true;
}

//��֤��
function EbakCheckForm(obj){
	var isok;
	if(obj.adminpassword.value!=obj.adminrepassword.value)
	{
		alert('��������ι���Ա���벻һ�� (����Ա����)');
		return false;
	}
	isok=EbakCheckIsDefPass(obj);
	return isok;
}

</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ�ã�<a href="SetDb.php">ȫ�ֲ�������</a></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr bgcolor="#FFFFFF"> 
    <td width="18%" height="23" id="setdbbg" onmouseover="ChangeSet('setdb');" bgcolor="#DBEAF5"> 
      <div align="center"><strong><a href="#ebak">���ݿ�����</a></strong></div></td>
    <td width="18%" id="setuserbg" onmouseover="ChangeSet('setuser');"> 
      <div align="center"><strong><a href="#ebak">����Ա����</a></strong></div></td>
    <td width="16%" id="setckbg" onmouseover="ChangeSet('setck');"> 
      <div align="center"><strong><a href="#ebak">COOKIE����</a></strong></div></td>
	<td width="16%" id="setmdbsbg" onmouseover="ChangeSet('setmdbs');"> 
      <div align="center"><strong><a href="#ebak">�����������</a></strong></div></td>
	<td width="16%" id="setebmabg" onmouseover="ChangeSet('setebma');"<?=$haveebma==0?' style="display:none"':''?>> 
      <div align="center"><strong><a href="#ebak">EBMA����</a></strong></div></td>
    <td width="16%" id="setotherbg" onmouseover="ChangeSet('setother');"> 
      <div align="center"><strong><a href="#ebak">��������</a></strong></div></td>
  </tr>
</table>

<form name="form1" method="post" action="phome.php" onsubmit="return EbakCheckForm(document.form1);">
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setdb">
    <tr class="header"> 
      <td height="25" colspan="2">���ݿ����� 
        <input name="phome" type="hidden" id="phome" value="SetDb">        </td>
    </tr>
	<tr> 
      <td height="25" bgcolor="#FFFFFF">MYSQL�ӿ�����</td>
      <td height="25" bgcolor="#FFFFFF">
		<select name="dbtype">
		<?php
		if($canconnectdbtype==1||$canconnectdbtype==3||$canconnectdbtype==0)
		{
		?>
          <option value="mysql"<?=$phome_db_dbtype=='mysql'||$phome_db_dbtype==''?' selected':''?>>mysql</option>
		<?php
		}
		if($canconnectdbtype==2||$canconnectdbtype==3)
		{
		?>
		  <option value="mysqli"<?=$phome_db_dbtype=='mysqli'?' selected':''?>>mysqli</option>
		<?php
		}
		?>
        </select>
      </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>MYSQL�汾</strong></td>
      <td height="25" bgcolor="#FFFFFF"><p> 
          <input type="radio" name="mysqlver" id="mysqlver" value="5.0"<?=$phome_db_ver>='5.0'?' checked':''?>>
          MYSQL5.*������&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" id="mysqlver" value="4.1"<?=$phome_db_ver=='4.1'?' checked':''?>>
          MYSQL 4.1.*&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" id="mysqlver" value="4.0"<?=$phome_db_ver=='4.0'?' checked':''?>>
          MYSQL 4.0.*/3.*&nbsp;&nbsp; 
          <input type="radio" name="mysqlver" id="mysqlver" value="auto"<?=$phome_db_ver==''?' checked':''?>>
          �Զ�ѡ��</p></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF"><strong>���ݿ������</strong></td>
      <td width="76%" height="25" bgcolor="#FFFFFF"><input name="dbhost" type="text" id="dbhost" value="<?=$phome_db_server?>"> 
        <font color="#666666">(���磺localhost)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">���ݿ�������˿�</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbport" type="text" id="dbport" value="<?=$phome_db_port?>"> 
        <font color="#666666">(һ�������Ϊ�ռ���)</font> </td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>���ݿ��û���</strong></td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbusername" type="text" id="dbusername" value="<?=$phome_db_username?>"> 
        <font color="#666666">(���磺root)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><strong>���ݿ�����</strong></td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbpassword" type="password" id="dbpassword">
        (<font color="#FF0000">�����޸������ա��������á�null����ʾ</font>)</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">Ĭ�ϱ��ݵ����ݿ�</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbname" type="text" id="dbname" value="<?=$phome_db_dbname?>"> 
        <font color="#666666">(��Ϊ��,���������ݿ���,����ֱ��ת�������.) </font></td>
    </tr>
	<tr>
      <td height="25" bgcolor="#FFFFFF">Ĭ�ϱ������ݱ��ǰ׺</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbaktbpre" type="text" id="sbaktbpre" value="<?=$baktbpre?>">
        <font color="#666666">(��Ϊ�г��������ݱ�.)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">Ĭ�ϱ���</td>
      <td height="25" bgcolor="#FFFFFF"><input name="dbchar" type="text" id="dbchar" value="<?=$phome_db_char?>"> 
        <font color="#666666"> 
        <select name="selectchar" onchange="document.form1.dbchar.value=this.value">
          <option value="">ѡ��</option>
          <?php
				echo Ebak_ReturnDbCharList('');
				?>
        </select>
        (һ�������Ϊ�ռ���) </font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
      <td height="25" bgcolor="#FFFFFF"><strong>[<a href="#empirebak" onclick="EbakCheckDefDbServer();">�������ݿ���Ϣ</a>]</strong>&nbsp;&nbsp;<font color="#666666">(��д���ݿ�����󣬿��Ե����������Ĳ����Ƿ���ȷ)</font></td>
    </tr>
  </table>
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setuser" style="display:none">
    <tr class="header"> 
      <td height="25" colspan="2">����Ա����</td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">�û���</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="adminusername" type="text" id="adminusername" value="<?=$set_username?>">
        <font color="#666666">(�޸ĺ�Ҫ���µ�¼��8~30���ַ�)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">����</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="adminpassword" type="password" id="adminpassword"> 
        <font color="#666666">(�����޸�������, �޸ĺ�Ҫ���µ�¼��8~30���ַ������ִ�Сд)</font></td>
    </tr>
	<tr> 
      <td height="25" bgcolor="#FFFFFF">�ظ�����</td>
      <td height="25" bgcolor="#FFFFFF"> <input name="adminrepassword" type="password" id="adminrepassword"> 
        <font color="#666666">(�����޸�������)</font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">��֤��</td>
      <td height="25" bgcolor="#FFFFFF"><input name="adminloginauth" type="password" id="adminloginauth" value="<?=$set_loginauth?>">
        <font color="#666666">(��������,��Ϊ�����ã������ַ���)</font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">��֤�����</td>
      <td height="25" bgcolor="#FFFFFF"><input name="adminloginrnd" type="text" id="adminloginrnd" value="<?=$set_loginrnd?>">
        <font color="#666666">
        <input type="button" name="Submit3" value="���" onclick="document.form1.adminloginrnd.value='<?=$loginauthrnd?>';">
        (�޸ĺ�Ҫ���µ�¼�������ַ���)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">��ʱ����</td>
      <td height="25" bgcolor="#FFFFFF"><input name="outtime" type="text" id="outtime" value="<?=$set_outtime?>">
        ����</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">��¼�Ƿ���Ҫ��֤��</td>
      <td height="25" bgcolor="#FFFFFF"><input type="radio" name="loginkey" value="0"<?=$set_loginkey==0?' checked':''?>>
        �� 
        <input type="radio" name="loginkey" value="1"<?=$set_loginkey==1?' checked':''?>>
        ��</td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">��֤�����ʱ��</td>
      <td height="25" bgcolor="#FFFFFF"><input name="keytime" type="text" id="keytime" value="<?=$ebak_set_keytime?>">
        �� <font color="#666666">(ʱ��Խ��Ч��Խ��)</font></td>
    </tr>
	<tr>
      <td rowspan="2" valign="top" bgcolor="#FFFFFF">��̨���ʵ�UserAgent����</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckuseragent" type="text" id="ckuseragent" value="<?=$ebak_set_ckuseragent?>" size="50"></td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#FFFFFF"><font color="#666666">(���ִ�Сд������á�||�����˫���߸��������ú�UserAgent��Ϣ����ͬʱ������Щ�ַ����ܷ��ʺ�̨)</font></td>
    </tr>
  </table>
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setck" style="display:none">
    <tr class="header"> 
      <td height="25" colspan="2">COOKIE����(ͨ������Ҫ�޸�)</td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">COOKIE������</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckdomain" type="text" id="ckdomain" value="<?=$phome_cookiedomain?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">COOKIE����·��</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckpath" type="text" id="ckpath" value="<?=$phome_cookiepath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">COOKIE����ǰ׺</td>
      <td height="25" bgcolor="#FFFFFF"><input name="ckvarpre" type="text" id="ckvarpre" value="<?=$phome_cookievarpre?>"></td>
    </tr>
  </table>	
		
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setmdbs" style="display:none">
    <tr class="header"> 
      <td height="25">�����ݿ����������(����ͬʱ���ݶ�̨�����������ݿ�)</td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <input name="dbservernum" type="hidden" id="dbservernum" value="<?=$moredbcount?>">
        <tr>
          <td width="3%"><div align="center"></div></td>
          <td width="10%" height="25">MYSQL�汾</td>
          <td width="34%">���ݿ���������ӵ�ַ</td>
          <td width="7%">�˿�</td>
          <td width="10%">�û���</td>
          <td width="10%">����</td>
          <td width="9%">Ĭ�����ݿ���</td>
          <td width="9%">Ĭ�ϱ�ǰ׺</td>
          <td width="8%">Ĭ�ϱ���</td>
        </tr>
		</table>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <tbody id="havedbserverdiv">
          <?php
if($ebak_set_moredbserver)
{
	for($mdi=0;$mdi<$moredbcount;$mdi++)
	{
		$moredbserver_fr=explode($mfexp,$moredbserver_r[$mdi]);
		$dbserverid=$mdi+1;
	?>
          <tr>
            <td bgcolor="#FFFFFF" width="3%"><div align="center">
              <?=$dbserverid?>
            </div></td>
            <td height="25" bgcolor="#FFFFFF" width="10%"><select name="moredbver[]" id="moredbver<?=$dbserverid?>">
                <option value="5.0"<?=$moredbserver_fr[0]>='5.0'?' selected':''?>>5.0������</option>
                <option value="4.1"<?=$moredbserver_fr[0]=='4.1'?' selected':''?>>4.1.*</option>
                <option value="4.0"<?=$moredbserver_fr[0]=='4.0'?' selected':''?>>4.0.*/3.*</option>
              </select>
            </td>
            <td bgcolor="#FFFFFF" width="34%"><input name="moredbhost[]" type="text" id="moredbhost<?=$dbserverid?>" value="<?=$moredbserver_fr[1]?>"> <a href="#empirebak" onclick="EbakCheckDbServer('<?=$dbserverid?>');">[����]</a>
                <input name="dbserverid[]" type="hidden" id="dbserverid<?=$dbserverid?>" value="<?=$dbserverid?>">
            </td>
            <td bgcolor="#FFFFFF" width="7%"><input name="moredbport[]" type="text" id="moredbport<?=$dbserverid?>" value="<?=$moredbserver_fr[2]?>" size="6"></td>
            <td bgcolor="#FFFFFF" width="10%"><input name="moredbuser[]" type="text" id="moredbuser<?=$dbserverid?>" value="<?=$moredbserver_fr[3]?>" size="12"></td>
            <td bgcolor="#FFFFFF" width="10%"><input name="moredbpass[]" type="password" id="moredbpass<?=$dbserverid?>" value="<?=$moredbserver_fr[4]?>" size="12"></td>
            <td bgcolor="#FFFFFF" width="9%"><input name="moredbname[]" type="text" id="moredbname<?=$dbserverid?>" value="<?=$moredbserver_fr[5]?>" size="12"></td>
            <td bgcolor="#FFFFFF" width="9%"><input name="moredbtbpre[]" type="text" id="moredbtbpre<?=$dbserverid?>" value="<?=$moredbserver_fr[6]?>" size="10"></td>
            <td bgcolor="#FFFFFF" width="8%"><input name="moredbchar[]" type="text" id="moredbchar<?=$dbserverid?>" value="<?=$moredbserver_fr[7]?>" size="8"></td>
          </tr>
          <?php
	}
}
?>
		</tbody>
		</table>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td id="adddbserverdiv"></td>
		</tr>
		</table>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
        <tr>
          <td height="25" colspan="9" bgcolor="#FFFFFF"><strong><a href="#empirebak" onclick="EbakShowAddDbServer();"><font color="#FF9900">[+]���ӷ�����</font></a></strong></td>
        </tr>
        <tr>
          <td height="25" colspan="9" bgcolor="#FFFFFF"><font color="#666666">���Ҫɾ����������ֻ��ѡ���������ַ������Ϊ�ա���д���ݿ���Ϣ����Ե㡰[����]�������Ϣ�Ƿ���ȷ�����·���������ˢ�º�̨�������Ա���ʾ���¡�</font></td>
        </tr>
      </table></td>
    </tr>
  </table>		
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setother" style="display:none">
    <tr class="header"> 
      <td height="25" colspan="2">��������</td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">���ݱ���Ŀ¼</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbakpath" type="text" id="sbakpath" value="<?=$bakpath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">ѹ�������Ŀ¼</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sbakzippath" type="text" id="sbakzippath" value="<?=$bakzippath?>"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">�ļ�����Ȩ������</td>
      <td height="25" bgcolor="#FFFFFF"><input type="radio" name="sfilechmod" value="0"<?=$filechmod0?>>
        0777 
        <input type="radio" name="sfilechmod" value="1"<?=$filechmod1?>>
        ������<font color="#666666">(����ռ䲻֧������0777��.php�ļ�,ѡ�����Ƽ���.)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">PHP�����ڰ�ȫģʽ</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sphpsafemod" type="checkbox" id="sphpsafemod" value="1"<?=$phpsafemod==1?' checked':''?>>
        ��<font color="#666666">(��������ڰ�ȫģʽ���������ݾ����ݵ�bdata/safemodĿ¼)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">PHP��ʱʱ������</td>
      <td height="25" bgcolor="#FFFFFF"><input name="sphp_outtime" type="text" id="sphp_outtime" value="<?=$php_outtime?>" size="6">
        �� <font color="#666666">(һ�㲻��Ҫ���ã���Ҫset_time_limit()֧�ֲ���Ч)</font></td>
    </tr>
    <tr> 
      <td rowspan="2" bgcolor="#FFFFFF"> <p>MYSQL֧�ֲ�ѯ��ʽ</p></td>
      <td height="25" bgcolor="#FFFFFF"><input name="slimittype" type="checkbox" id="slimittype" value="1"<?=$checklimittype?>>
        ֧�� <font color="#666666">(�������ʱ�����������,�뽫��ȥ�����ɽ��)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><font color="#FF0000">You have an error 
        in your SQL syntax; check the manual that corresponds to your MySQL server 
        version for the right syntax to use near '-1' at line 1</font></td>
    </tr>
	<tr>
      <td height="25" bgcolor="#FFFFFF">�ռ䲻֧�����ݿ��б�</td>
      <td height="25" bgcolor="#FFFFFF"><input name="scanlistdb" type="checkbox" id="scanlistdb" value="1"<?=$canlistdb==1?' checked':''?>>
        ��֧��<font color="#666666">(����ռ䲻�����г����ݿ�,��򹴣�����Ҫ����Ĭ�ϱ��ݵ����ݿ�)</font></td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#FFFFFF">�������ݿ���ʾ</td>
	  <td height="25" bgcolor="#FFFFFF"><input name="shidedbs" type="text" id="shidedbs" value="<?=$ebak_set_hidedbs?>">
        <font color="#666666">(������ݿ����ð�Ƕ���&quot;,&quot;���������磺dbname1,dbname2)</font></td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#FFFFFF">�������ݴ�����</td>
	  <td height="25" bgcolor="#FFFFFF"><select name="sescapetype" id="sescapetype">
        <option value="1"<?=$ebak_set_escapetype==1?' selected':''?>>addslashes()</option>
        <option value="2"<?=$ebak_set_escapetype==2?' selected':''?>>mysql_real_escape_string()</option>
      </select>
        <font color="#666666">(ͨ����Ĭ�ϼ���)</font></td>
    </tr>
  </table>		
	
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder" id="setebma" style="display:none">
	<tr class="header">
	  <td height="25" colspan="2"><strong>EBMA���� </strong>(<strong>E</strong>mpire<strong>B</strong>ak+php<strong>M</strong>y<strong>A</strong>dmin)</td>
    </tr>
	<tr>
	  <td width="24%" height="25" bgcolor="#FFFFFF">�Ƿ���phpmyadmin</td>
	  <td height="25" bgcolor="#FFFFFF"><input type="radio" name="ebmaopen" value="1"<?=$ebak_ebma_open==1?' checked':''?>>����
        <input type="radio" name="ebmaopen" value="0"<?=$ebak_ebma_open==0?' checked':''?>>�ر�
      <font color="#666666">(����Ҫʹ��ʱ��������ʹ��ʱ�ر�)</font></td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#FFFFFF">phpmyadminĿ¼</td>
	  <td height="25" bgcolor="#FFFFFF">eapi/
      <input name="ebmapath" type="text" id="ebmapath" value="<?=$ebak_ebma_path?>">
      <font color="#666666">(�޸�Ŀ¼����������eapi/phpmyadminĿ¼��Ȼ�����޸�����)</font></td>
    </tr>
	<tr>
	  <td height="25" bgcolor="#FFFFFF">����phpmyadmin������֤</td>
	  <td height="25" bgcolor="#FFFFFF"><input type="radio" name="ebmacklogin" value="0"<?=$ebak_ebma_cklogin==0?' checked':''?>>����
          <input type="radio" name="ebmacklogin" value="1"<?=$ebak_ebma_cklogin==1?' checked':''?>>�ر� <font color="#666666">(�����󣬽���phpmyadmin��Ҫ�ٴε�¼���ݿ⣬�����۹���������֤+PMA����˫����֤)</font>	  
	  </td>
    </tr>
  </table>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tableborder">
	<?php
	if(empty($phome_db_ver))
	{
	?>
    <tr>
      <td height="30" colspan="2" bgcolor="#FFFFFF"><font color="#FF0000">�״ΰ�װ�۹������������޸�<strong>����Ա����</strong>���Ĭ��<strong>��������</strong>��<strong>��֤�����</strong>���޸ĺ���Ҫ���µ�¼��̨��(����Ĭ��<strong>�û���</strong>��ǿ�ƣ����ٷ��Ƽ�Ҳ�޸�)</font></td>
    </tr>
	<?php
	}
	?>
    <tr> 
      <td height="25" colspan="2" bgcolor="#FFFFFF"> <div align="left"> 
          <input type="submit" name="Submit" value=" ���� ">&nbsp;&nbsp;
          <input type="reset" name="Submit2" value="����">
        </div></td>
    </tr>
  </table>
</form>

  <table width="100%" border="0" cellspacing="1" cellpadding="3" style="display:none">
  <form name="checkdbconnectform" id="checkdbconnectform" method="post" action="phome.php" target="checkpostdataiframe">
    <tr>
      <td>
	  	<input name="phome" type="hidden" id="phome" value="CheckConnectDbServer">
		<input name="checkdbserverid" type="hidden" id="checkdbserverid" value="">
		<input name="checkdbver" type="hidden" id="checkdbver" value="">
		<input name="checkdbhost" type="hidden" id="checkdbhost" value="">
		<input name="checkdbport" type="hidden" id="checkdbport" value="">
		<input name="checkdbuser" type="hidden" id="checkdbuser" value="">
		<input name="checkdbpass" type="hidden" id="checkdbpass" value="">
		<input name="checkdbname" type="hidden" id="checkdbname" value="">
		<input name="checkdbtbpre" type="hidden" id="checkdbtbpre" value="">
		<input name="checkdbchar" type="hidden" id="checkdbchar" value="">
	  </td>
    </tr>
	<iframe name="checkpostdataiframe" id="checkpostdataiframe" style="display: none" src="blank.html"></iframe>
  </form>
  </table>

</body>
</html>