@extends('layout')

@section('content')

    {{-- <h2>Merk : {{ $tool->nama_alat }}</h2> --}}
    <h2>{{ 'Kordinat Lat : ' . $latlong[0] . ' Long: ' . $latlong[1] }}</h2>

<div id="googleMap" style="width:100%;height:380px;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var lat = {!! json_encode($latlong) !!};
    console.log(lat);
    function initialize() {
    var propertiPeta = {
        center:new google.maps.LatLng(lat[0],lat[1]),
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    
    // membuat Marker
    var marker=new google.maps.Marker({
        position: new google.maps.LatLng(lat[0],lat[1]),
        map: peta
    });
    
    }
    
    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
    console.log("".latlong[0]);
</script>
@endsection