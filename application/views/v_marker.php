       <!-- Begin Page Content -->
       <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Marker Maps</h1>
</div>

<!-- leaflet map -->
<div id="mapid" style="width: 100%; height: 500px;" ></div>
<style>
#map{ margin: 0 auto 0 auto;
  height: 90%;
  width: 80%;
 }
 html, body {
        height: 100%;
      }
</style>

<div id="map"></div>

<div class="modal" id="modalDetail" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Info Lokasi & Tower</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyDetail">
        
      </div>
    </div>
  </div>
</div>

<script>

var towerIcon = L.icon({
    iconUrl: '<?= base_url('assets/leaflet/images/tower.png') ?>',

    iconSize:     [35, 50], // size of the icon
    shadowSize:   [40, 54], // size of the shadow
    // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

	var mymap = L.map('mapid').setView([-7.2754438, 112.6426438], 9);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 20,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);
	
	<?php foreach ($tanda as $baris) { ?>
		// L.marker([<?= $baris['latitude'] ?>, <?= $baris['longitude'] ?>]).addTo(mymap)
		// .bindPopup(`
		
		// `)
    	// .openPopup();

		L.marker([<?= $baris['latitude'] ?>, <?= $baris['longitude'] ?>], {icon: towerIcon}).addTo(mymap).on('click', function() {
			var id_pengguna = $(this).attr('id');
			console.log(id_pengguna);
			$.ajax({
				url: "<?= base_url('ajax/mapdetail'); ?>",
				method: "post",
				data: {
					id_lokasi: <?= $baris['id_lokasi'] ?>
				},
				success: function (data) {
				$('#bodyDetail').html(data);

				$('.btn-edit-modal').on('click', function() {
					$.ajax({
						url: "<?= base_url('ajax/editmap'); ?>",
						method: "post",
						data: {
							id_lokasi: <?= $baris['id_lokasi'] ?>
						},
						success: function (data) {
						$('#bodyDetail').html(data);
						}
					});
				});

				$('#modalDetail').modal();
				}
			});
		});
	<?php } ?>
	
	// L.marker([-7.2636084, 112.7428945]).addTo(mymap)
	// 	.bindPopup("<b>Kota Surabaya</b>")
    // .openPopup();

	// L.circle([51.508, -0.11], 500, {
	// 	color: 'red',
	// 	fillColor: '#f03',
	// 	fillOpacity: 0.5
	// }).addTo(mymap).bindPopup("I am a circle.");

	// L.polygon([
	// 	[51.509, -0.08],
	// 	[51.503, -0.06],
	// 	[51.51, -0.047]
	// ]).addTo(mymap).bindPopup("I am a polygon.");


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>