<?php
if(isset($_POST["submit"]))
{
  $f_name = $_FILES["myfile"]["name"];
	$f_tmp = $_FILES["myfile"]["tmp_name"];
  $f_size= $_FILES["myfile"]["size"];
  $f_extension= explode(".","$f_name");
  $f_extension=strtolower(end($f_extension));
  $f_newfile=uniqid().".".$f_extension;
  $store = "uploads/".$f_newfile;
  if($f_extension=="jpg"||$f_extension=="gif"||$f_extension="png")
  {
	   if($f_size>=1000000000000000000)
	    {
		      echo "Max size exceeded";
	       }
	    else
	     {
		       if(move_uploaded_file($f_tmp,$store))
		         {
			            echo "Your file has been uploaded";
		              }
        }
	 }
	 else
	 {
		 echo "File extension is not correct";
   }
}
?>
<html>
<head>
<title>File_Uploading</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<p><input type="file" name="myfile"/></p>
<p><input type="submit" value="upload" name="submit" /></p>
</form>
</body>
</html>
