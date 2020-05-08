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
  var config = { attributes: true, childList: true, characterData: true }
  observer.observe(target, config);

  function initialize() {
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(-0.03656387080925184, 109.34253817993158),
      zoom: 13.8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-legend-open'));
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-legend'));

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "location",
        from: "1rONwYbbAK84P2ld1ElTaKOfFIbm03xI4apYPqbDl",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 2
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.mouseover = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.mouseover = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }
  google.maps.event.addDomListener(window, 'load', initialize);
