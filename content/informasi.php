<?php
include 'function.php';

if (isset($_POST["cari"])) {
  $apotek = cari($_POST["keyword"]);
}

if (isset($_GET['detail'])) {
  $id = $_GET['id'];
  $dataapotek = mysqli_query($conn, "SELECT * FROM apotek WHERE id='$id' ");
  if ($data = mysqli_fetch_assoc($dataapotek)) {
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $foto = $data['foto'];
    $deskripsi = $data['deskripsi'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
  }
}

// Pagination (Perpindahan hal)
$jumlahdataperhal = 10;
$jdp = (isset($_GET["jdp"])) ? $_GET["jdp"] : 10;
$jumlahdata = count(query("SELECT * FROM apotek"));
$jumlahhal = ceil($jumlahdata / $jumlahdataperhal);
$halaktif = (isset($_GET["hal"])) ? $_GET["hal"] : 1;
$awaldata = ($jumlahdataperhal * $halaktif) - $jumlahdataperhal;

// Pengurutan Tabel SMS Masuk
if (isset($_GET["sortNamaASC"])) {
  $sortNama = "sortNamaDESC";
  $apotek = mysqli_query($conn, "SELECT * FROM apotek ORDER BY nama ASC LIMIT $awaldata,$jumlahdataperhal ");
} elseif (isset($_GET["sortNamaDESC"])) {
  $sortNama = "sortNamaASC";
  $apotek = mysqli_query($conn, "SELECT * FROM apotek ORDER BY nama DESC LIMIT $awaldata,$jumlahdataperhal");
} else {
  $sortNama = "sortNamaDESC";
  $apotek = mysqli_query($conn, "SELECT * FROM apotek ORDER BY nama ASC LIMIT $awaldata,$jumlahdataperhal ");
}

?>

<?php if (isset($_GET['detail'])) : ?>
  <div class="container-fluid" id="detailInformasi">
    <div class="row">
      <div class="col-md-6">
        <h4><?= $nama; ?></h4>
        <p class="text-justify"><?= $alamat; ?></p>
        <img src="img/<?= $foto; ?>" class="rounded">
      </div>
      <div class="col-md-6">
        <h5 style="margin-top: 48px;" class="text-center">Peta Lokasi</h5>
        <a href="javascript:void(0)" onclick="initMap()" class="btn btn-success btn-sm">Peta Lokasi</a>
        <a href="javascript:void(0)" onclick="showRoute()" class="btn btn-outline-success btn-sm">Petunjuk arah </a>
        <?php $h = $_GET['hal']; ?>
        <a href="index.php?page=informasi&&hal=<?= $h ?>" class="btn btn-outline-success" style="font-size: 14px;">
          Kembali</a>
        <div id="detailpeta" class="rounded"></div>
      </div>
    </div>
  </div> <?php else : ?> <div class="container-fluid" id="informasi">
    <div class="row">
      <div class="col-md-12 pl-5 pr-5">
        <div class="float-left">
          <h3>Data Apotek</h3>
        </div>
        <div class="float-right">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="keyword" id="keyword" placeholder="Cari ..." class="form-control">
              <button type="submit" name="cari" id="tombolCari" class="form-control">Cari</button>
            </div>
          </form>
        </div>
        <hr>
        <table class="table table-hover rounded-top" id="daftarApotek" style="font-size: 15px;">
          <tr class="rounded-top">
            <th class="rounded-top"></th>
            <?php
            if ($sortNama == "sortNamaASC") {
              $caret = "fa-caret-down";
            } else {
              $caret = "fa-caret-up";
            }
            ?>
            <th>
              <a href="index.php?page=informasi&&<?= $sortNama; ?>" style="color: #000 !important;">Nama Apotek
              </a>
            </th>
            <th></th>
            <th>Alamat</th>
          </tr>
          <?php $no = (($jdp * $halaktif) - 10) + 1; ?>
          <?php while ($row = mysqli_fetch_assoc($apotek)) : ?>
            <tr>
              <td><?= $no ?></td>
              <td style="width: 25%;">
                <a href="index.php?page=informasi&&detail&&id=<?= $row['id']; ?>&&hal=<?= $halaktif ?>">
                  <?php echo $row['nama']; ?>
                </a>
              </td>
              <td>
                <img src="img/<?= $row['foto']; ?>">
              </td>
              <td><?php echo $row['alamat'] ?></td>
            </tr>
            <?php $no++; ?>
          <?php endwhile; ?>
        </table>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page Navigation" class="ml-5">
        <ul class="breadcrumb bg-white">
          <?php if ($halaktif > 1) : ?>
            <li class="page-item">
              <a href="?page=informasi&&<?= $sortNama; ?>&&hal=1" class="page-link">
                &laquo; First
              </a>
            </li>
          <?php endif; ?>
          <?php if ($halaktif > 1) : ?>
            <li class="page-item">
              <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $halaktif - 1; ?>" class="page-link">
                &laquo; Prev
              </a>
            </li>
          <?php endif; ?>

          <!-- Pilihan hal -->
          <?php if ($halaktif == 1) : ?>
            <?php for ($i = max(1, $halaktif - 2); $i <= min($halaktif + 4, $jumlahhal); $i++) : ?>
              <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endfor; ?>
          <?php elseif ($halaktif == 2) : ?>
            <?php for ($i = max(1, $halaktif - 2); $i <= min($halaktif + 3, $jumlahhal); $i++) : ?>
              <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endfor; ?>
          <?php elseif ($halaktif == $jumlahhal) : ?>
            <?php for ($i = max(1, $halaktif - 4); $i <= min($halaktif + 3, $jumlahhal); $i++) : ?>
              <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endfor; ?>
          <?php elseif ($halaktif == ($jumlahhal - 1)) : ?>
            <?php for ($i = max(1, $halaktif - 3); $i <= min($halaktif + 3, $jumlahhal); $i++) : ?>
              <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endfor; ?>
          <?php else : ?>
            <?php for ($i = max(1, $halaktif - 2); $i <= min($halaktif + 2, $jumlahhal); $i++) : ?>
              <?php if ($i == $halaktif) : ?>
                <li class="page-item active">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php else : ?>
                <li class="page-item">
                  <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $i; ?>" class="page-link">
                    <?= $i; ?>
                  </a>
                </li>
              <?php endif; ?>
            <?php endfor; ?>
          <?php endif; ?>
          <!-- Akhir pilihan hal -->

          <!-- navigasi maju -->
          <?php if ($halaktif < $jumlahhal) : ?>
            <li class="page-item">
              <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $halaktif + 1; ?> " class="page-link">
                Next &raquo;
              </a>
            </li>
          <?php endif; ?>

          <?php if ($halaktif < $jumlahhal) : ?>
            <li class="page-item">
              <a href="?page=informasi&&<?= $sortNama; ?>&&hal=<?= $jumlahhal; ?>" class="page-link">
                Last &raquo;
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </div>
<?php endif; ?>

<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&key=AIzaSyDBGFYRuVSrhZlIOuQn5BWhNNkggcssFFM"></script>
<script type="text/javascript">
  var target = document.head;
  var observer = new MutationObserver(function(mutations) {
    for (var i = 0; mutations[i]; ++i) { // notify when script to hack is added in HTML head
      if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
        var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
        if (str) {
          if (str[0][str[0].length - 1] == '&') {
            str = str[0].substring(10, str[0].length - 1);
          } else {
            str = str[0].substring(10);
          }
          var split = str.split(".");
          var object = split[0];
          var method = split[1];
          window[object][method] = null;
        }
        observer.disconnect();
      }
    }
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true
  }
  observer.observe(target, config);

  function initMap() {
    var myLatLng = new google.maps.LatLng(<?php echo $latitude ?>, <?php echo $longitude ?>);
    var map = new google.maps.Map(document.getElementById('detailpeta'), {
      zoom: 19,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map
    });
    marker.setMap(map);
  }

  // showRoute();
  function showRoute() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(getInfo);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function getInfo(position) {
    var lat = position.coords.latitude;
    var long = position.coords.longitude;

    var pointA = new google.maps.LatLng(lat, long),
      pointB = new google.maps.LatLng(<?= $latitude ?>, <?= $longitude ?>),
      myOptions = {
        zoom: 12,
        center: pointA
      },
      map = new google.maps.Map(document.getElementById('detailpeta'), myOptions),
      // Instantiate a directions service.
      directionsService = new google.maps.DirectionsService,
      directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
      }),
      markerA = new google.maps.Marker({
        position: pointA,
        title: "point A",
        label: "Lokasi saya",
        map: map
      }),
      markerB = new google.maps.Marker({
        position: pointB,
        title: "point B",
        label: "<?= $nama ?>",
        map: map
      });

    // get route from A to B
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
  }

  function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
    directionsService.route({
      origin: pointA,
      destination: pointB,
      avoidTolls: true,
      avoidHighways: false,
      travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }
</script>