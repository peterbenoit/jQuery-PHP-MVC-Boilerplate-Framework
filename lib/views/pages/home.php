<aside class="width_12 col">
<article>
<p>there's no place like: home</p>
</article>
</aside>
<?php
	global $db;
	if($user->is_logged()){
		$q = $db->query("select * from users");
		while($r=$q->fetch_assoc()) {
			print_r($r);
		}
	}
	
	//$db->query("delete from users");
	
?>

<?php
	if(1==2){
?>
<iframe id="uploader" name="uploader" style="min-width:400px;min-height:400px;overflow:visible;padding:10px" src="lib/views/mods/cropload/index.php"></iframe>
<script>
/*
	$('iframe').load(function(){
		$('iframe').contents().find('head').append('<link rel="stylesheet" type="text/css" href="../../../min/g=css">');
		//$('iframe').contents().find('body').css({"min-height": "100", "overflow" : "hidden"});
		//setInterval( "$('iframe').height($('iframe').contents().find('body').height() + 20)", 1 );
			$(this).height($(this).contents().height() + 60);	
			$(this).width($(this).contents().width() + 60);	
		setInterval(function(){
			$(this).height($(this).contents().height());	
			$(this).width($(this).contents().width());		
		}, 100);
	});
*/

$(function(){
  // Append an iFrame to the page.
  var iframe = $('iframe');
  
  // Called once the Iframe's content is loaded.
  iframe.load(function(){
    // The Iframe's child page BODY element.
    var iframe_content = iframe.contents();
    iframe.contents().find('head').append('<link rel="stylesheet" type="text/css" href="../../../min/g=css">');
	
    // Bind the resize event. When the iframe's size changes, update its height as
    // well as the corresponding info div.
    iframe_content.resize(function(){
      var elem = $(this);
      
      // Resize the IFrame.
      //iframe.css({ height: elem.outerHeight( true ) });
	  iframe.height(elem.height() + 100);
	  iframe.width(elem.width()+ 100);
    });
    
    // Resize the Iframe and update the info div immediately.
    iframe_content.resize();
  });
});
</script>
<?php } ?>