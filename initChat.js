
function manufatura() {
    var key = '63dee53e15d58dfce07eaaa496a479bac1376d31';
    reinit();
    createChat(key);
    initChat();
  }

function varejo() {
    var key = 'be8b72062018b69b54062314aff176cbe10da270';
    reinit();
    createChat(key);
    initChat();
  }

function bemacash() {
    var key = '3e9ee6c5c4656822f19621bfbf8416972400751b';
    reinit(); 
    createChat(key);
    initChat();
  }

function initChat() {
    $('#drz_btn_open').click();
}

function reinit() {
    $('header').remove();
    $('#drz_btn_open').remove();
    $('#droz-div').remove();
    var hdr = document.createElement("header");                        
    document.body.appendChild(hdr); 
}

function createChat(key) {
  (function(d,r,o,z,a,k,t){
    a=d.getElementsByTagName('header')[0];
    k=d.createElement('script');k.async=1;
    t=(Math.floor(Math.random()*1000000)+1);
    k.src=r+'/'+o+'/droz.js?i='+z+'&u='+r+'&v='+t;
    a.appendChild(k);
  })(document,'https://chat-app.meudroz.com','v1', key);
}