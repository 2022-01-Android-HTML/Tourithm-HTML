<html>
<head>
    <meta charset="utf-8" />
    <title>지도 길찾기</title>
    <link href="App.css" rel="stylesheet" />
</head>
<body>


    <div class="jumbotron">
        <div class="container-fluid">
            <h2>길찾기</h2>
            <h3>입력칸에 뭐 입력하지말고 바로 버튼 누르기</h3>
            <form class="form-horizontal">
                <div class="form-group">
                    <div>
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
               </div>
               <div>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                 </div>

            </form>

            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg " onclick="calcRoute();">button<i class="fas fa-map-signs"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output"></div>

            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&libraries=places"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Main.js"></script>
</body>
</html>



<style>
body {
  color: #5bc0de;
  font-family: "Poppins", sans-serif;
}

.fa-map-marker-alt,
.fa-dot-circle {
  color: #5bc0de;
}

/*Jumbotron*/
.jumbotron {
  background-color: transparent;
  margin: 0;
  padding: 10px;
}

.jumbotron h1 {
  letter-spacing: 2.5px;
  font-size: 3.5em;
}

.jumbotron h1,
.jumbotron p {
  text-align: center;
}

/*map*/
#googleMap {
  width: 80%;
  height: 400px;
  margin: 10px auto;
}

/*output box*/
#output {
  text-align: center;
  font-size: 2em;
  margin: 20px auto;
}

#mode {
  color: black;
}
</style>



<script>
//javascript.js
//set map options
var myLatLng = { lat: 35.151820, lng: 129.035571 };
var mapOptions = {
    center: myLatLng,
    zoom: 15,
  //  mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//경로 방법을 사용할 DirectionsService 개체를 만들고 요청에 대한 결과를 가져옵
var directionsService = new google.maps.DirectionsService();

//경로를 표시하는 데 사용할 DirectionsRenderer 개체
var directionsDisplay = new google.maps.DirectionsRenderer();

//지도에 방향 렌더러를 바인딩
//directionsDisplay.setMap(map);


function calcRoute() {
    var request = {
        origin: { lat:35.151753, lng:129.033692 }, // 시작
        destination: { lat:35.1681759, lng:129.0571458 }, // 도착
        travelMode: google.maps.TravelMode.TRANSIT, //WALKING, BYCYCLING, TRANSIT, DRIVING
        //unitSystem: google.maps.UnitSystem.METRIC,

    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            //Get distance and time
            const output = document.querySelector('#output');
            output.innerHTML = "<br /> Driving distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text
            + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text ;

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map
            map.setCenter(myLatLng);
            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
        }
    });

}

</script>
