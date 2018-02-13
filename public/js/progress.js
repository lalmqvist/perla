// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
// var ProgressBar = require('progressbar.js')
var line = new ProgressBar.Line('#progress-container');
var bar = new ProgressBar.Path('#heart-path', {
    easing: 'easeInOut',
    duration: 1400
  });
  
  bar.set(0);
  bar.animate(0.7);  // Number from 0.0 to 1.0