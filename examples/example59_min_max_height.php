<?php



$html = '
<style>
table { border-collapse: collapse; margin-top: 0; text-align: center; }
td { padding: 0.5em; }
h1 { margin-bottom: 0; }
</style>
<h1>mPDF Images</h1>

<table>
<tr>
<td colspan="2" style="text-align: left" ><h4>max-height & max-width</h4></td>
</tr>
<tr>
<td>max-height 165px</td>
<td>max-width 0.35em</td>
</tr>
<tr>
<td><img style="vertical-align: top; max-height:165px;" src="tiger.gif" /></td>
<td><img style="vertical-align: top; max-width:0.35em;" src="tiger.gif" /></td>
</tr>
<tr>
<td colspan="2"><img style="vertical-align: top; " src="tiger.gif" /></td>
</tr>
</table>


';
//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('c'); 

$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================


?>
