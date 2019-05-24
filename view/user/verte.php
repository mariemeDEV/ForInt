<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Saham Assurance SN</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <style>
         @page {
            size: auto;  
            margin: 0;  
         }
       .container{
            margin-top: 19em;
            font-size: 9px;
       }
       .greenTable{
        position: absolute;
        left: 6px;
       }
    </style>
</head>
<body>
<div class="container">
    <table cellspacing="0" border="0" class='greenTable'>
        <colgroup span="8" width="99"></colgroup>
        <tr>
            <td colspan=3 height="20" align="center" valign=top><font face="Arial"><?php echo $prenomAssure." "."$nomAssure"; ?></font></td>
            <td colspan=3 rowspan=3 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial" style='position: absolute;left:67em;width: 44%;'><?php echo $prenomAssure." "."$nomAssure"; ?></font></td>
            </tr>
        <tr>
            <td colspan=3 height="20" align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial"><br></font></td>
            </tr>
        <tr>
            <td colspan=3 height="20" align="center" valign=top><font face="Arial"><?php echo $adresseAssure ?></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top: 45px;'><?php echo $adresseAssure ?></font></td>
            </tr>
        <tr>
            <td colspan=3 rowspan=6 height="120" align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top: 146px;'><?php echo $type ?></font></td>
            <td rowspan=7 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 rowspan=6 align="left" valign=top><font face="Arial"><br></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top: 170px;'><?php echo $marque ?></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top sdval="0" sdnum="1036;"><font face="Arial" style="position: absolute;top: 114px;left: 361px;">type</font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top sdnum="1036;0;#&nbsp;##0" style='position: absolute;left: 67em;width:9%;top: 192px;'><font face="Arial"><?php echo $immatriculation ?></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 66em;top: 216px;'><?php echo $codePolice?></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA" style=''><font face="Arial" style='position: absolute;left: 67em;width: 10%;top: 232px;'><?php echo($debut)
            ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top><font face="Arial" style='position: absolute;left: 66px;top: 123px;'><?php echo $type ?></font></td>
            <td rowspan=7 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 67em;width: 10%;top: 251px;'><?php echo($fin)?></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='    position: absolute;top: 78px;left:361px;'><?php echo $type ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="center" valign=top><font face="Arial" style='position: absolute;left: 78px;top: 170px;'><?php echo $marque ?></font></td>
            <td colspan=3 rowspan=6 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;top: 96px;left: 355px;'><?php echo $marque ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top sdnum="1036;0;@"><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top sdval="0" sdnum="1036;"><font face="Arial" style='position:absolute;top: 144px;left:67px'>type</font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="center" valign=top sdnum="1036;0;#&nbsp;##0,00 &quot;€&quot;;[RED]-#&nbsp;##0,00 &quot;€&quot;"><font face="Arial" style='position: absolute;left: 75px;top: 192px;'><?php echo $immatriculation ?></font></td>
            <td align="left" valign=top><font color="#000000"><br></font></td>
            <td align="right" valign=top sdnum="1036;0;#&nbsp;##0"><font face="Arial" style='position: absolute;left: 349px;top: 138px;'><?php echo $immatriculation ?></font></td>
        </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top><font face="Arial" style='position: absolute;left: 69px;top: 212px;'><?php echo $codePolice?></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;top: 160px;left: 344px;'><?php echo $codePolice?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="right" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 75px;top: 233px;'><?php echo($debut);?>
                </font></td>
            <!--td colspan=2 align="left" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial">polo</font></td-->
            </tr>
        <tr>
            <td colspan=2 height="20" align="right" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 74px;top: 253px;'><?php echo($fin);?>
            </font></td>
            <td colspan=2 align="left" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='    position: absolute;left: 352px;top: 180px;'><?php echo($debut) ?>
                </font>
            </td>
            <td colspan=2 height="20" align="right" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='    position: absolute;left: 352px;top: 198px;'><?php echo($fin);?>
            </font></td>
        </tr>
        
    </table>

    </body>
</div>
</html>