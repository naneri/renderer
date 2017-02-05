var webPage = require('webpage');
var system = require('system');

webPage.create().open(system.args[1], function (status) {
  var base64 = this.renderBase64('PNG');
  console.log(base64);
  phantom.exit();
});
