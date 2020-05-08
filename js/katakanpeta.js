function initMap() {
    // generate map pertama kali
    var map = new google.maps.Map(document.getElementById('googft-mapCanvas'), {
        zoom: 13.8,
        center: new google.maps.LatLng(-0.03656387080925184, 109.34253817993158)
    });
    
    // ambil data apotek karena butuh lat & lang nya
    $.ajax({
        url: '/ajax/apotek.php',
        method: 'POST',
        success: dapetDatanya
    })

    function dapetDatanya(apotek) {

        // parse sebagai json
        apotek = JSON.parse(apotek)

        // generate markernya berdasarkan koordinat masing - masing apotek
        let marker = null
        for (let index in apotek) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(apotek[index].latitude, apotek[index].longitude),
                title: apotek[index].nama,
                map: map
            });
        }                

    }
}

initMap()