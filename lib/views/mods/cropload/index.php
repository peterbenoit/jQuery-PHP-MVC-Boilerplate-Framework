<?php
	$folder = 'images/';
	$orig_w = 500;
	
	if( isset($_POST['submit']) )
	{
		$imageFile = $_FILES['image']['tmp_name'];
		$filename = basename( $_FILES['image']['name']);
		
		list($width, $height) = getimagesize($imageFile);
		
		$src = imagecreatefromjpeg($imageFile);
		$orig_h = ($height/$width)* $orig_w;
		
		$tmp = imagecreatetruecolor($orig_w, $orig_h);
		imagecopyresampled($tmp, $src, 0,0,0,0,$orig_w,$orig_h,$width,$height);
		imagejpeg($tmp, $folder.$filename,100);
		
		imagedestroy($tmp);
		imagedestroy($src);
		
		$filename = urlencode($filename);
		header("Location: crop.php?filename=$filename&height=$orig_h");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<title>Using the JQuery JCrop Plugin, and PHP for Image Uploads</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>

		<h1>PHP Image Upload Form</h1>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
			<p>
				<label for="image">Image:</label>
					<input type="file" name="image" id="image" /><br />
			</p>
			<p>
				<input type="submit" name="submit" value="Upload Image!" />
			</p>
		</form>
    </body>
</html>