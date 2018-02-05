<?php

function getImage($cnct){
	$urlArray = array();
	$sql = "SELECT url FROM img";
	$result = $cnct->query($sql);



	while($row = mysqli_fetch_assoc($result))
		$urlArray[] = $row["url"];

	$a = (json_encode($urlArray));

	echo " <script type='text/javascript'>
	var images = $a;
	var imageId = document.getElementById('imageId');

	var index = 0;
	imageId.src = images[index];
			

	setInterval(function(){
		index++;
		if(index == images.length)
			index = 0;
		imageId.src = images[index];
	},3000);

	var leftcircle = document.getElementById('ileft');
	var rightcircle = document.getElementById('iright');

	leftcircle.onclick = function() {
		index--;
		if(index == -1)
			index = images.length - 1;

		imageId.src = images[index];
	}

	rightcircle.onclick = function() {
		index++;
		if(index == images.length)
			index = 0;
		imageId.src = images[index];
	}


	</script>
	";


}

?>