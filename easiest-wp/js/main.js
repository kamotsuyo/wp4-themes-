/* global document,location,require */
(function () {
    "use strict";

    var url_path = (
        document.currentScript ?
        document.currentScript.src :
        document.getElementsByTagName('script')[document.getElementsByTagName('script').length - 1].src
    ).replace(new RegExp('^' + location.origin), '').replace(/[^\/]+$/, '');

    //    console.log(url_path);

    var callback = function (res) {
        console.log(res);
    };
    require([url_path + 'XHR.js'], function (XHR) {
        var xhr = new XHR(url_path + "../post.php", callback);
        xhr.get("hoge=hogehoge");
    });

}());
