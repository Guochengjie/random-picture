<?php


$folder = $_GET['folder'] ? $_GET['folder'] : '/txt/'; // 存放txt文件的位置
$path = $_SERVER['DOCUMENT_ROOT']."/".$folder;
$files = array();
if ($handle = opendir("$path")) {
  while (false !== ($file = readdir($handle))) {
    if ($file != "." && $file != "..") {
      if (substr($file, -3) == 'txt' {
        $files[count($files)] = $file;
      }
    }
  }
}
closedir($handle);

$random = rand(0, count($files) - 1);

header("Content-type: text/xml");

readfile("$path/$files[$random]");
