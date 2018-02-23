var map = new naver.maps.Map('map',
 {
	center: new naver.maps.LatLng(36.621401, 127.286414),
	zoom:12
});
var marker = new naver.maps.Marker({
 	position: new naver.maps.LatLng(36.621401,127.286414),
	map:map
});

