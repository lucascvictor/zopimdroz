function manufatura() {
    var key = '63dee53e15d58dfce07eaaa496a479bac1376d31';
    setDep('Fly01 Manufatura');
    reinit();
    init(key, dep);
  }

function varejo() {
    var key = 'be8b72062018b69b54062314aff176cbe10da270';
    setDep('Fly01 Varejo');
    reinit();
    init(key, dep);
  }

function bemacash() {
    var key = '3e9ee6c5c4656822f19621bfbf8416972400751b';
    setDep('Bemacash');
    reinit(); 
    init(key, dep);
  }

function saude() {
    setDep('Fly01 Saúde');
    reinit();
    initZopim();
    intervalar(dep);
    initChat();
}

function initChat() {
    setTimeout(function(){ document.getElementById("drz_btn_open").click(); }, 2000);
}

function reinit() {
    $('droz').remove();
    $('#drz_btn_open').remove();
    $('#droz-div').remove();
    $('.zopim').remove();
    $('iframe').remove();
    var hdr = document.createElement("droz");                        
    document.body.appendChild(hdr);
}

function init(key, dep) {
    createChat(key);
    intervalar(dep);
    initChat();
    vApple();
}

function vApple() {
  var isSafari = window.safari !== undefined;
  if (isSafari) {
    setTimeout(function(){ $('.src-component-Launcher-wrapper').click(); }, 2000);
  }
}

function createChat(key) {
  (function(d,r,o,z,a,k,t){
    a=d.getElementsByTagName('droz')[0];
    k=d.createElement('script');k.async=1;
    t=(Math.floor(Math.random()*1000000)+1);
    k.src=r+'/'+o+'/droz.js?i='+z+'&u='+r+'&v='+t;
    a.appendChild(k);
  })(document,'https://chat-app.meudroz.com','v1', key);
}


