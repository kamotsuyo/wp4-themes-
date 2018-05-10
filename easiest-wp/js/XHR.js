/* global define ,XMLHttpRequest */
(function () {
    "use strict";
    define(function () {
        return function (_url, _callback) {
            //コンストラクタ部
            const xhr = new XMLHttpRequest();
            const url = _url;
            const callback = _callback;

            //ハンドラ登録
            xhr.addEventListener('readystatechange', this, false);
            //パブリック部
            this.handleEvent = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        callback(xhr.responseText);
                    } else {
                        console.log('xhr.status = ' + xhr.status);
                    }
                }
            };
            this.get = function (query) {
                const query_string = url + '/?' + query;
                xhr.open('get', query_string, true);
                xhr.send();
            };
        };
    });
}());
