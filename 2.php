<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head>
</head> 
  <script language="JavaScript" type="text/javascript"> 
function win(){

window.opener.document.all.text1.innerText=document.getElementById("filename").value;

window.close();
} 
  </script> 
<?php
session_start();

//生成随机数
$randomnum=NULL;
       

for($j=0;$j<=5;$j++)//随机数字的长度，本例随机数长度为6
{
srand((double)microtime()*1000000);
$randomnumber=rand(!$j ? 1: 0,9);//产生随机数，不以0为第一个数，有些特殊的地方0开头被系统省略
$randomnum.=$randomnumber;
}
$uploaddir = 'image/'; //上传的目录
 if(!is_dir($uploaddir)){mkdir($uploaddir,0777); }
$uploadfile1 = $uploaddir.$randomnum.$_FILES['upfile']['name'];

if($_FILES['upfile']['name']==""){
  echo "视频名不能为空！";
   exit;
}
//判断上传类型
$uptypes=array(
    'avi video/x-msvideo',
    'video/vnd.vivo',
    'video/x-ms-DV-AVI',
    'video/vnd.rn-realvideo',
    'video/mpeg',
    'audio/x-wav',
    'video/x-ms-wmv',
  'video/x-ms-RM',
  'application/x-shockwave-flash',
  'video/x-ms-asf',
  'video/avi'
  
  
);

if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile1))
  {
    echo "图片上传成功";

  }else
  {
     echo "图片超过限制！";
   exit;
   
  }
  $_SESSION['filename']=$uploadfile1;
  header("location: http://localhost/imagehandle/demo/3.php");
?>


<input type="text" name="filename" value="<?php echo  $uploadfile1?>"
/>

  <script language="JavaScript" type="text/javascript"> 

window.opener.document.all.text1.innerText=document.getElementById("filename").value;

window.close();

  </script> 

</body> 
</html>

