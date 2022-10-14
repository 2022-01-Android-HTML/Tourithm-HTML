<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://apis.openapi.sk.com/tmap/jsv2?version=1&appKey=l7xx7807c8cd9d1044f4862405a9a166bbca"></script>
		<script type="text/javascript">

			var map;

			var marker_s, marekr_e, waypoint;
			var resultMarkerArr = [];
			//경로그림정보
			var drawInfoArr = [];
			var resultInfoArr = [];

			//var locaAr0 = [];
			var locaAr0 = result[0].split('/');
			var locaAr1 = result[1].split('/');
			var locaAr2 = result[2].split('/');
			var locaAr3 = result[3].split('/');
			var locaAr4 = result[4].split('/');

			function initTmap(){
				resultMarkerArr = [];

			 	// 1. 지도 띄우기
				map = new Tmapv2.Map("map_div", {
					center: new Tmapv2.LatLng(locaAr0[1], locaAr0[2]),
					width : "100%",
					height : "400px",
					zoom : 12,
					zoomControl : true,
					scrollwheel : true

				});

				// 2. 시작 심볼찍기
				// 시작
				marker_s = new Tmapv2.Marker({
					//icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_s.png",
          position : new Tmapv2.LatLng(locaAr0[1], locaAr0[2]),
					icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_s.png",
					iconSize : new Tmapv2.Size(24, 38),
					map:map
				});
				resultMarkerArr.push(marker_s);
				// 도착
				marker_e = new Tmapv2.Marker({
					position : new Tmapv2.LatLng(locaAr4[1], locaAr4[2]),
					icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_5.png",
					//icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_e.png",
					iconSize : new Tmapv2.Size(24, 38),
					map:map
				});
				resultMarkerArr.push(marker_e);


				// 3. 경유지 심볼 찍기
				marker = new Tmapv2.Marker({
					position : new Tmapv2.LatLng(locaAr1[1], locaAr1[2]),
					icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_2.png",
					iconSize : new Tmapv2.Size(24, 38),
					map:map
				});
				resultMarkerArr.push(marker);

				marker = new Tmapv2.Marker({
					position : new Tmapv2.LatLng(locaAr2[1], locaAr2[2]),
					icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_3.png",
					iconSize : new Tmapv2.Size(24, 38),
					map:map
				});
				resultMarkerArr.push(marker);

				marker = new Tmapv2.Marker({
					position : new Tmapv2.LatLng(locaAr3[1], locaAr3[2]),
					icon : "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_4.png",
					iconSize : new Tmapv2.Size(24, 38),
					map:map
				});
				resultMarkerArr.push(marker);


				// 4. 경로탐색 API 사용요청
				var routeLayer;

					var headers = {};
					headers["appKey"]="l7xx7807c8cd9d1044f4862405a9a166bbca";
					headers["Content-Type"]="application/json";

					var param = JSON.stringify({
						"startName" : "출발",
						"startX" : locaAr0[2],
						"startY" : locaAr0[1],
						"startTime" : "202206060703",
						"endName" : "도착",
						"endX" : locaAr4[2],
						"endY" : locaAr4[1],
						"viaPoints" :
							[
							 {
								 "viaPointId" : "test01",
								 "viaPointName" : "name01",
								 "viaX" : locaAr1[2],
								 "viaY" : locaAr1[1]
							 },
							 {
								 "viaPointId" : "test02",
								 "viaPointName" : "name02",
								 "viaX" : locaAr2[2],
								 "viaY" : locaAr2[1]
							 },
							 {
								 "viaPointId" : "test03",
								 "viaPointName" : "name03",
								 "viaX" : locaAr3[2],
								 "viaY" : locaAr3[1]
							 }
							],
						"reqCoordType" : "WGS84GEO",
						"resCoordType" : "EPSG3857",
						"searchOption": "0"
					});

					$.ajax({
							method:"POST",
							url:"https://apis.openapi.sk.com/tmap/routes/routeSequential100?version=1&format=json",//
							//url:"https://apis.openapi.sk.com/tmap/routes/routeOptimization10?version=1&callback=function",
							headers : headers,
							async: false,
							data:param,
							success:function(response){

								var resultData = response.properties;
								var resultFeatures = response.features;

								// 결과 출력
								var tDistance = "총 거리 : " + (resultData.totalDistance/1000).toFixed(1) + "km,  ";
								var tTime = "총 시간 : " + (resultData.totalTime/60).toFixed(0) + "분,  ";
								var tFare = "총 요금 : " + resultData.totalFare + "원";

								$("#result").text(tDistance+tTime+tFare);

								//기존 라인 초기화

								if(resultInfoArr.length>0){
									for(var i in resultInfoArr){
										resultInfoArr[i].setMap(null);
									}
									resultInfoArr=[];
								}

								for(var i in resultFeatures) {
									var geometry = resultFeatures[i].geometry;
									var properties = resultFeatures[i].properties;
									var polyline_;

									drawInfoArr = [];

									if(geometry.type == "LineString") {
										for(var j in geometry.coordinates){
											// 경로들의 결과값(구간)들을 포인트 객체로 변환
											var latlng = new Tmapv2.Point(geometry.coordinates[j][0], geometry.coordinates[j][1]);
											// 포인트 객체를 받아 좌표값으로 변환
											var convertPoint = new Tmapv2.Projection.convertEPSG3857ToWGS84GEO(latlng);
											// 포인트객체의 정보로 좌표값 변환 객체로 저장
											var convertChange = new Tmapv2.LatLng(convertPoint._lat, convertPoint._lng);

											drawInfoArr.push(convertChange);
										}

										polyline_ = new Tmapv2.Polyline({
											path : drawInfoArr,
											strokeColor : "#FF0000",
											strokeWeight: 3,
											map : map
										});
										resultInfoArr.push(polyline_);

									}else{
										var markerImg = "";
										var size = "";			//아이콘 크기 설정합니다.

										if(properties.pointType == "S"){	//출발지 마커
											markerImg = "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_r_m_s.png";
											size = new Tmapv2.Size(24, 38);
										}else if(properties.pointType == "E"){	//도착지 마커
											markerImg = "http://tmapapi.sktelecom.com/upload/tmap/marker/pin_b_m_5.png";
											size = new Tmapv2.Size(24, 38);
										}else{	//각 포인트 마커
											markerImg = "http://topopen.tmap.co.kr/imgs/point.png";
											size = new Tmapv2.Size(8, 8);
										}

										// 경로들의 결과값들을 포인트 객체로 변환
										var latlon = new Tmapv2.Point(geometry.coordinates[0], geometry.coordinates[1]);
										// 포인트 객체를 받아 좌표값으로 다시 변환
										var convertPoint = new Tmapv2.Projection.convertEPSG3857ToWGS84GEO(latlon);

									  	marker_p = new Tmapv2.Marker({
									  		position: new Tmapv2.LatLng(convertPoint._lat, convertPoint._lng),
									  		icon : markerImg,
									  		iconSize : size,
									  		map:map
									  	});

									  	resultMarkerArr.push(marker_p);
									}
								}
							},
							error:function(request,status,error){
								console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
							}
						});
			}

			function addComma(num) {
				  var regexp = /\B(?=(\d{3})+(?!\d))/g;
				   return num.toString().replace(regexp, ',');
			}
		</script>
	</head>
	<body onload="initTmap()"><!-- 맵 생성 실행 -->
	<p id="result"></p>
		<div id="map_wrap" class="map_wrap">
			<div id="map_div"></div>
		</div>
	</body>
</html>
