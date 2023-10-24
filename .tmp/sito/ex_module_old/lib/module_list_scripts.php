<?php
echo <<<EOD
<script type="text/javascript">
	for(var i=0; i < document.getElementsByTagName('a').length; i++){
		if(document.getElementsByTagName('a')[i].target == '_self'){
		console.log(document.getElementsByTagName('a')[i].classList.add('iframe'));
		}
	}
	$(".iframe").modaal({
		type:'iframe', 
		width: 1000, 
		height:800,
		after_close: function() {
			location.reload();
		} 
		
	});
</script>
EOD;
?>