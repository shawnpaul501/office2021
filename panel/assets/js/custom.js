$(document).ready(function() {
    "use strict";
    var e = $("body");
    $(function() {
        $(".preloader").fadeOut()
    })
});

function getChart(date,data){
     new Chartist.Line('#ct-visits', {
         //labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015'],
         labels: date,
         series: [
    []
    , //[2, 5, 2, 6, 2, 5, 2, 4]
    data
  ]
     }, {
         top: 0,
         low: 1,
         showPoint: true,
         fullWidth: true,
         plugins: [
    Chartist.plugins.tooltip()
  ],
         axisY: {
             labelInterpolationFnc: function (value) {
                 return (value);
             }
         },
         showArea: true
     });
}