<?php
header('Content-type: application/vnd.ms-excel; name=\'excel\'');
header('Content-Disposition: filename=arquivoExcel.xls');
header('Pragma: no-cache');
header('Expires: 0');
//var_dump($_POST);
//$datos_recebido = iconv('utf-8','iso-8859-1', $_POST['datos_a_enviar']);
echo $_POST['datos_a_enviar'];