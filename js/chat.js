
var manufatura = () => {
    createChat('63dee53e15d58dfce07eaaa496a479bac1376d31');
}
var varejo = () => {
    createChat('be8b72062018b69b54062314aff176cbe10da270');
}
var bemacash = () => {
    createChat('3e9ee6c5c4656822f19621bfbf8416972400751b');
}
var saude = () => {
    createChat('ffec1a060b7442f1379a9ea90662824a51ca7a10');
}

var createChat = key => {
    if (window.zE !== undefined) zE.hide();
    removeDrozScript();
    (function (d, r, o, z, a, k, t) {
        a = d.getElementsByTagName('head')[0];
        k = d.createElement('script'); k.async = 1;
        t = (Math.floor(Math.random() * 1000000) + 1);
        k.src = r + '/' + o + '/droz.js?i=' + z + '&u=' + r + '&v=' + t;
        a.appendChild(k);
    })(document, 'https://chat-app.meudroz.com', 'v1', key);
    openDroz();
}

var removeDrozScript = () => {
    if (document.getElementById("droz-div")) {
        document.getElementById("droz-div").remove();
    }

    var scripts = document.getElementsByTagName('script');
    var i = scripts.length;
    while (i--) {
        if (~scripts[i].src.indexOf("droz.js") || ~scripts[i].src.indexOf("main.js") || ~scripts[i].src.indexOf("main-v1.js")) {
            scripts[i].parentNode.removeChild(scripts[i]);
        }
    }

    var links = document.getElementsByTagName('link');
    var i = links.length;
    while (i--) {
        if (~links[i].href.indexOf("main-v1.css")) {
            links[i].parentNode.removeChild(links[i]);
        }
    }
}

var openDroz = () => {
    $("#drz_btn_open").length == 0 ?
        setTimeout(openDroz, 300) :
        $("#drz_btn_open").click();
        
    var intervalId = setInterval(function () {
        if (typeof $zopim !== "undefined" && typeof $zopim.livechat !== "undefined") {
            $zopim.livechat.say = function () { }
            clearInterval(intervalId);
        }
    }, 1500);
}

var validaParam = () => {
    var paramsURL = window.location.search;
    var items = paramsURL.split("=");

    var parametros = {
        'id' : items[0],
        'valor' : items[1]
        }
    console.log(parametros.id);
    if (parametros.id == '?page') {
        switch (parametros.valor) {
            case 'manufatura':
                manufatura();
                break;
            case 'saude':
                saude();
                break;
            case 'varejo':
                varejo();
                break;
            case 'bemacash':
                bemacash();
                break;
        }
    }
}