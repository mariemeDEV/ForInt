<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>VERTE</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
    <style>
         @page {
            size: auto;  
            margin: 0;  
         }
       .container{
        margin-top: 273px;
        font-size: 9px;
        position: relative;
        left: 63px;
       }
       .greenTable{
        position: absolute;
        left: 6px;
       }
    </style>
</head>
<body onload="window.print()">
<div class="container">
    <table cellspacing="0" border="0" class='greenTable'>
        <colgroup span="8" width="99"></colgroup>
        <tr>
            <td colspan=3 height="20" align="center" valign=top><font face="Arial" style='position:relative;top:30px'><?php echo $prenomAssure." "."$nomAssure"; ?></font></td>
            <td colspan=3 rowspan=3 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial" style='position: absolute;top:32px;left:67em;width: 44%;'><?php echo $prenomAssure." "."$nomAssure"; ?></font></td>
            </tr>
        <tr>
            <td colspan=3 height="20" align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial"><br></font></td>
            </tr>
        <tr>
            <td colspan=3 height="20" align="center" valign=top><font face="Arial" style='position:relative;top:13px'><?php echo $adresseAssure ?></font></td>
            <td colspan=5 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top: 57px;'><?php echo $adresseAssure ?></font></td>
            </tr>
        <tr>
            <td colspan=3 rowspan=6 height="120" align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top:191px;'><?php echo $type ?></font></td>
            <td rowspan=7 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 rowspan=6 align="left" valign=top><font face="Arial"><br></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 67em;top:211px;'><?php echo $marque ?></font></td>
            </tr>
        <tr>
            <!--td colspan=2 align="left" valign=top sdval="0" sdnum="1036;"><font face="Arial" style="position: absolute;top: 114px;left: 361px;">type</font></td-->
        </tr>
        <tr>
            <td colspan=2 align="left" valign=top sdnum="1036;0;#&nbsp;##0" style='position: absolute;left: 67em;width:9%;top: 192px;'><font face="Arial" style='position: relative;top: 42px;'><?php echo $immatriculation ?></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;left: 66em;top: 256px;'><?php echo $codePolice?></font></td>
            </tr>
        <tr>
            <td colspan=2 align="left" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA" style=''><font face="Arial" style='position: absolute;left: 67em;width: 10%;top:300px;'><?php echo($debut)
            ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top><font face="Arial" style='position: absolute;left: 85px;top: 192px;'><?php echo $type ?></font></td>
            <td rowspan=7 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 67em;width: 10%;top: 277px;'><?php echo($fin)?></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='    position: absolute;top:96px;left:361px;'><?php echo $type ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="center" valign=top><font face="Arial" style='position: absolute;left: 78px;top:212px;'><?php echo $marque ?></font></td>
            <td colspan=3 rowspan=6 align="left" valign=top><font face="Arial"><br></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;top:117px;left: 351px;'><?php echo $marque ?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top sdnum="1036;0;@"><font face="Arial"><br></font></td>
            <!--td colspan=2 align="left" valign=top sdval="0" sdnum="1036;"><font face="Arial" style='position: absolute;top: 161px;left: 87px;'>type</font></td-->
            </tr>
        <tr>
            <td colspan=2 height="20" align="center" valign=top sdnum="1036;0;#&nbsp;##0,00 &quot;€&quot;;[RED]-#&nbsp;##0,00 &quot;€&quot;"><font face="Arial" style='position: absolute;left: 75px;top: 234px;'><?php echo $immatriculation ?></font></td>
            <td align="left" valign=top><font color="#000000"><br></font></td>
            <td align="right" valign=top sdnum="1036;0;#&nbsp;##0"><font face="Arial" style='position: absolute;left: 349px;top: 138px;'><?php echo $immatriculation ?></font></td>
        </tr>
        <tr>
            <td colspan=2 height="20" align="left" valign=top><font face="Arial" style='position: absolute;left: 69px;top: 257px;'><?php echo $codePolice?></font></td>
            <td colspan=2 align="left" valign=top><font face="Arial" style='position: absolute;top: 160px;left: 344px;'><?php echo $codePolice?></font></td>
            </tr>
        <tr>
            <td colspan=2 height="20" align="right" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 75px;top: 278px;'><?php echo($debut);?>
                </font></td>
            <!--td colspan=2 align="left" valign=top sdval="42948" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial">polo</font></td-->
            </tr>
        <tr>
            <td colspan=2 height="20" align="right" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='position: absolute;left: 74px;top: 300px;'><?php echo($fin);?>
            </font></td>
            <td colspan=2 align="left" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='    position: absolute;left: 352px;top: 180px;'><?php echo($debut) ?>
                </font>
            </td>
            <td colspan=2 height="20" align="right" valign=top sdval="43128" sdnum="1036;1036;JJ/MM/AAAA"><font face="Arial" style='    position: absolute;left: 352px;top: 199px;'><?php echo($fin);?>
            </font></td>
        </tr>
        
    </table>

    </body>
</div>
</html>