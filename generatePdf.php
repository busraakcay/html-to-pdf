<?php

namespace Dompdf;

require_once "dompdf/autoload.inc.php";

if (isset($_POST['submit_val'])) {
    $dompdf = new Dompdf();
    $html = '
<table border=1  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;" align=center width=400>
<tr  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;"><td  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;">Name : </td><td>' . $_POST['name'] . '</td></tr>
<tr  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;"><td  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;">Email : </td><td>' . $_POST['email'] . '</td></tr>
<tr  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;"><td  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;">Age : </td><td>' . $_POST['age'] . '</td></tr>
<tr  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;"><td  style="font-family: arial, opensans-regular, DejaVu Sans, sans-serif;">Country : </td><td>' . $_POST['country'] . '</td></tr>
</table>
';
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4');
    $dompdf->render();
    $dompdf->stream("", array("Attachment" => false));
    exit(0);
}
