// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
// var ProgressBar = require('progressbar.js')

var line = new ProgressBar.Line('#progress-container-orders');
var orderProgress = document.getElementById("progress-container-orders").getAttribute( "data-progress" );
var adsProgress = document.getElementById("progress-container-ads").getAttribute( "data-progress" );
console.log(orderProgress);
var barAds = new ProgressBar.Path('#heart-path', {
    easing: 'easeInOut',
    duration: 1400
  });

  var barOrders = new ProgressBar.Path('#heart-path-2', {
    easing: 'easeInOut',
    duration: 1400
  });
  
  barAds.set(0);
  barAds.animate(adsProgress);  // Number from 0.0 to 1.0

  barOrders.set(0);
  barOrders.animate(orderProgress);  // Number from 0.0 to 1.0