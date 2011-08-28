<?php
	$folder = './assets/uploads/';
	$orig_w = 500;
	$form = "upload";
	$targ_w = 120;
	$targ_h = 100;
	$ratio = $targ_w / $targ_h;
		
	if( isset($_POST['upload']) )
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
		$form = "crop";
	} elseif( isset($_POST['submit'])) {
		 $filename = $_POST['filename'];
		 $orig_h = $_POST['height'];

		 $src = imagecreatefromjpeg($folder.$filename);
		 $tmp = imagecreatetruecolor($targ_w, $targ_h);
		 
		 
		 imagecopyresampled($tmp, $src, 0,0,$_POST['x'],$_POST['y'],$targ_w,$targ_h,$_POST['w'],$_POST['h']);
		 imagejpeg($tmp, $folder.'t_'.$filename,100);
		
		 imagedestroy($tmp);
		 imagedestroy($src);
		
		 echo "<h1>Saved Thumbnail</h1><img src=\"$folder/t_$filename\"/>";
	}
?>


	<style type="text/css">
		#preview
		{
			width: <?php echo $targ_w?>px;
			height: <?php echo $targ_h?>px;
			overflow:hidden;
		}
	</style>
<?php if($form == "upload") { ?>
<h1>Upload Form</h1>
<form action="./upload" method="post" enctype="multipart/form-data">
	<p>
		<label for="image">Image:</label>
			<input type="file" name="image" id="image" /><br />
	</p>
	<p>
		<input type="submit" name="upload" value="Upload Image!" />
	</p>
</form>
<?php } else { ?>
	<script type="text/javascript" src="./assets/js/jquery.pack.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.Jcrop.pack.js"></script>
	<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css" />
	<script type="text/javascript">
		$(function(){
			$('#cropbox').Jcrop({
				aspectRatio: <?php echo $ratio?>,
				setSelect: [0,0,<?php echo $orig_w.','.$orig_h;?>],
				onSelect: updateCoords,
				onChange: updateCoords
			});
		});
		
		function updateCoords(c)
		{
			showPreview(c);
			$("#x").val(c.x);
			$("#y").val(c.y);
			$("#w").val(c.w);
			$("#h").val(c.h);
		}
		
		function showPreview(coords)
		{
			var rx = <?php echo $targ_w;?> / coords.w;
			var ry = <?php echo $targ_h;?> / coords.h;
			
			$("#preview img").css({
				width: Math.round(rx*<?php echo $orig_w;?>)+'px',
				height: Math.round(ry*<?php echo $orig_h;?>)+'px',
				marginLeft:'-'+  Math.round(rx*coords.x)+'px',
				marginTop: '-'+ Math.round(ry*coords.y)+'px'
			});
		}
	</script>
		<table>
			<tr>
				<td>
					<img src="<?php echo $folder.$filename?>" id="cropbox" alt="cropbox" />
					
				</td>
				<td>
					Thumb Preview:
					<div id="preview">
						<img src="<?php echo $folder.$filename?>" alt="thumb" />
					</div>
				</td>
			</tr>
		</table>
		
		<form action="./upload" method="post">
			<p>
				<input type="hidden" id="x" name="x" />
				<input type="hidden" id="y" name="y" />
				<input type="hidden" id="w" name="w" />
				<input type="hidden" id="h" name="h" />
				<input type="hidden" id="filename" name="filename" value="<?php echo $filename?>" />
				<input type="hidden" id="height" name="height" value="<?php echo $orig_h?>" />
				<input type="submit" id="submit" name="submit" value="Crop Image!" />
			</p>
		</form>
<?php } ?>
