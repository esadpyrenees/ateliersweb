// Using leaflet.js to pan and zoom a big image.
// See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html

var map = L.map('image-map', {
  minZoom: 1,
  maxZoom: 4,
  center: [0, 0],
  zoom: 2,
  crs: L.CRS.Simple,
  attributionControl: false
});

// dimensions of the image
var w = 1280 * 2,
    h = 1024 * 2,
    url = 'map.svg';

// calculate the edges of the image, in coordinate space
var southWest = map.unproject([0, h], map.getMaxZoom()-1);
var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
var bounds = new L.LatLngBounds(southWest, northEast);

// add the image overlay, 
// so that it covers the entire map
L.imageOverlay(url, bounds).addTo(map);

// tell leaflet that the map is exactly as big as the image
map.setMaxBounds(bounds);

// pixel coords
var m = {
x: 1267, 
y: 850
}
//Add marker
var newMarkerGroup = new L.LayerGroup();
var addedOne = false,
    customPin = L.divIcon({
    className: 'location-pin',
    html: '<div class="pin"></div>',
    iconSize: [30, 30],
    iconAnchor: [18, 30]
  });

var marker = L.marker(map.unproject([m.x, m.y], map.getMaxZoom()), {
    icon: customPin
  }).addTo(map);

// Add pop up for click
marker.bindPopup("<b>You’re lost!</b>");