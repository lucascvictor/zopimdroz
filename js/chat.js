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
    removeDrozScript();
    /*<![CDATA[*/window.zEmbed || function(e, t) { let n, o, d, i, s, a = [], r = document.createElement("iframe"); window.zEmbed = function () { a.push(arguments) }, window.zE = window.zE || window.zEmbed, r.src = "javascript:false", r.title = "", r.role = "presentation", (r.frameElement || r).style.cssText = "display: none", d = document.getElementsByTagName("script"), d = d[d.length - 1], d.parentNode.insertBefore(r, d), i = r.contentWindow, s = i.document; try { o = s; } catch (c) { n = document.domain, r.src = `javascript:var d=document.open();d.domain="${n}";void(0);`, o = s } o.open()._l = function () { let o = this.createElement("script"); n && (this.domain = n), o.id = "js-iframe-async", o.src = e, this.t = +new Date, this.zendeskHost = t, this.zEQueue = a, this.body.appendChild(o) }, o.write("<body onload=\"document._l();\">"), o.close() } ("https://assets.zendesk.com/embeddable_framework/main.js", "totvssuporte.zendesk.com");/*]]>*/
    !!zE && zE(() => {
            $zopim(function () {
                $zopim.livechat.clearAll();
                $zopim.livechat.hideAll();
                $zopim.livechat.setLanguage("pt_BR");
                $zopim.livechat.departments.filter(190811);
                $zopim.livechat.departments.setVisitorDepartment(190811);
                $zopim.livechat.addTags("chat_fly01_saude","chat_origem_fly01");
                $zopim.livechat.theme.reload();
                });
        zE.show();
    });
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