$(function () {

   map = new GMaps({
        div: '.manchitro',
        lat: 23.6850,
        lng: 90.3563
      });

      map.addMarker({
        lat: 23.6850,
        lng: 90.3563,
        title: 'It is Bangaldesh',
        click: function(e) {
          alert('You clicked in this marker');
        }
      });

      map.addMarker({
        lat: 22.5726,
        lng: 88.3639,
        title: 'It is Kolkata',
        click: function(e) {
          alert('You clicked in this marker');
        }
      });

});