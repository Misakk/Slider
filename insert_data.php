<?php
	function addImage($cnct){
		$sql = "INSERT INTO img (url)
		VALUES	('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbdaQbswEODYUyW8BWXFQamp_L25b3CS4SPTtWjJwSY0MRsp2N7A'),
				('https://static.pexels.com/photos/36764/marguerite-daisy-beautiful-beauty.jpg'),
				('https://www.planwallpaper.com/static/images/6a98d1d4bf37df099b6c74fdf5ee338f--iphone-wallpaper-dark-colors-galaxies-wallpaper.jpg')";
		$cnct->query($sql);
	}
?>