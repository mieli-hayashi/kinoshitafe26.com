/*picturefill.js*/
(function(b){var a=navigator.userAgent;if(b.HTMLPictureElement&&((/ecko/).test(a)&&a.match(/rv\:(\d+)/)&&RegExp.$1<45)){addEventListener("resize",(function(){var i;var h=document.createElement("source");var c=function(j){var m,k;var l=j.parentNode;if(l.nodeName.toUpperCase()==="PICTURE"){m=h.cloneNode();l.insertBefore(m,l.firstElementChild);setTimeout(function(){l.removeChild(m)})}else{if(!j._pfLastSize||j.offsetWidth>j._pfLastSize){j._pfLastSize=j.offsetWidth;k=j.sizes;j.sizes+=",100vw";setTimeout(function(){j.sizes=k})}}};var e=function(){var j;var k=document.querySelectorAll("picture > img, img[srcset][sizes]");for(j=0;j<k.length;j++){c(k[j])}};var f=function(){clearTimeout(i);i=setTimeout(e,99)};var d=b.matchMedia&&matchMedia("(orientation: landscape)");var g=function(){f();if(d&&d.addListener){d.addListener(f)}};h.srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==";if(/^[c|i]|d$/.test(document.readyState||"")){g()}else{document.addEventListener("DOMContentLoaded",g)}return f})())}})(window);
(function(N,g,t){g.createElement("picture");var s,U,C,u;var x={};var I=false;var Y=function(){};var f=g.createElement("img");var ac=f.getAttribute;var B=f.setAttribute;var K=f.removeAttribute;var i=g.documentElement;var O={};var m={algorithm:""};var p="data-pfsrc";var c=p+"set";var R=navigator.userAgent;var b=(/rident/).test(R)||((/ecko/).test(R)&&R.match(/rv\:(\d+)/)&&RegExp.$1>35);var F="currentSrc";var l=/\s+\+?\d+(e\d+)?w/;var r=/(\([^)]+\))?\s*(.+)/;var y=N.picturefillCFG;var v="position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)";var Q="font-size:100%!important;";var H=true;var z={};var aa={};var j=N.devicePixelRatio;var Z={px:1,"in":96};var h=g.createElement("a");var V=false;var J=/^[ \t\n\r\u000c]+/,S=/^[, \t\n\r\u000c]+/,ad=/^[^ \t\n\r\u000c]+/,A=/[,]+$/,G=/^\d+$/,k=/^-?(?:[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?$/;var L=function(ah,ae,ag,af){if(ah.addEventListener){ah.addEventListener(ae,ag,af||false)}else{if(ah.attachEvent){ah.attachEvent("on"+ae,ag)}}};var e=function(af){var ae={};return function(ag){if(!(ag in ae)){ae[ag]=af(ag)}return ae[ag]}};function q(ae){return(ae==="\u0020"||ae==="\u0009"||ae==="\u000A"||ae==="\u000C"||ae==="\u000D")}var o=(function(){var ae=/^([\d\.]+)(em|vw|px)$/;var af=function(){var aj=arguments,ai=0,ah=aj[0];while(++ai in aj){ah=ah.replace(aj[ai],aj[++ai])}return ah};var ag=e(function(ah){return"return "+af((ah||"").toLowerCase(),/\band\b/g,"&&",/,/g,"||",/min-([a-z-\s]+):/g,"e.$1>=",/max-([a-z-\s]+):/g,"e.$1<=",/calc([^)]+)/g,"($1)",/(\d+[\.]*[\d]*)([a-z]+)/g,"($1 * e.$2)",/^(?!(e.[a-z]|[0-9\.&=|><\+\-\*\(\)\/])).*/ig,"")+";"});return function(ai,aj){var ah;if(!(ai in z)){z[ai]=false;if(aj&&(ah=ai.match(ae))){z[ai]=ah[1]*Z[ah[2]]}else{try{z[ai]=new Function("e",ag(ai))(Z)}catch(ak){}}}return z[ai]}})();var T=function(af,ae){if(af.w){af.cWidth=x.calcListLength(ae||"100vw");af.res=af.w/af.cWidth}else{af.res=af.d}return af};var P=function(ag){if(!I){return}var ai,af,ah;var ae=ag||{};if(ae.elements&&ae.elements.nodeType===1){if(ae.elements.nodeName.toUpperCase()==="IMG"){ae.elements=[ae.elements]}else{ae.context=ae.elements;ae.elements=null}}ai=ae.elements||x.qsa((ae.context||g),(ae.reevaluate||ae.reselect)?x.sel:x.selShort);if((ah=ai.length)){x.setupRun(ae);V=true;for(af=0;af<ah;af++){x.fillImg(ai[af],ae)}x.teardownRun(ae)}};s=(N.console&&console.warn)?function(ae){console.warn(ae)}:Y;if(!(F in f)){F="src"}O["image/jpeg"]=true;O["image/gif"]=true;O["image/png"]=true;function D(ae,ag){var af=new N.Image();af.onerror=function(){O[ae]=false;P()};af.onload=function(){O[ae]=af.width===1;P()};af.src=ag;return"pending"}O["image/svg+xml"]=g.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1");function n(){H=false;j=N.devicePixelRatio;z={};aa={};x.DPR=j||1;Z.width=Math.max(N.innerWidth||0,i.clientWidth);Z.height=Math.max(N.innerHeight||0,i.clientHeight);Z.vw=Z.width/100;Z.vh=Z.height/100;u=[Z.height,Z.width,j].join("-");Z.em=x.getEmValue();Z.rem=Z.em}function w(ae,ag,ai,af){var ak,ah,al,aj;if(m.algorithm==="saveData"){if(ae>2.7){aj=ai+1}else{ah=ag-ai;ak=Math.pow(ae-0.6,1.5);al=ah*ak;if(af){al+=0.1*ak}aj=ae+al}}else{aj=(ai>1)?Math.sqrt(ae*ag):ae}return aj>ai}function X(af){var ae;var ah=x.getSet(af);var ag=false;if(ah!=="pending"){ag=u;if(ah){ae=x.setRes(ah);x.applySetCandidate(ae,af)}}af[x.ns].evaled=ag}function E(af,ae){return af.res-ae.res}function ab(ae,ag,ah){var af;if(!ah&&ag){ah=ae[x.ns].sets;ah=ah&&ah[ah.length-1]}af=W(ag,ah);if(af){ag=x.makeUrl(ag);ae[x.ns].curSrc=ag;ae[x.ns].curCan=af;if(!af.res){T(af,af.set.sizes)}}return af}function W(ah,ai){var ae,af,ag;if(ah&&ai){ag=x.parseSet(ai);ah=x.makeUrl(ah);for(ae=0;ae<ag.length;ae++){if(ah===x.makeUrl(ag[ae].url)){af=ag[ae];break}}}return af}function d(aj,ai){var ag,ae,ah,ak;var af=aj.getElementsByTagName("source");for(ag=0,ae=af.length;ag<ae;ag++){ah=af[ag];ah[x.ns]=true;ak=ah.getAttribute("srcset");if(ak){ai.push({srcset:ak,media:ah.getAttribute("media"),type:ah.getAttribute("type"),sizes:ah.getAttribute("sizes")})}}}function M(am,an){function aq(au){var at,ar=au.exec(am.substring(al));if(ar){at=ar[0];al+=at.length;return at}}var ag=am.length,af,ap,aj,ae,ai,al=0,ah=[];function ao(){var az=false,aA,aw,at,ar,aC={},au,aB,ay,av,ax;for(ar=0;ar<ap.length;ar++){au=ap[ar];aB=au[au.length-1];ay=au.substring(0,au.length-1);av=parseInt(ay,10);ax=parseFloat(ay);if(G.test(ay)&&(aB==="w")){if(aA||aw){az=true}if(av===0){az=true}else{aA=av}}else{if(k.test(ay)&&(aB==="x")){if(aA||aw||at){az=true}if(ax<0){az=true}else{aw=ax}}else{if(G.test(ay)&&(aB==="h")){if(at||aw){az=true}if(av===0){az=true}else{at=av}}else{az=true}}}}if(!az){aC.url=af;if(aA){aC.w=aA}if(aw){aC.d=aw}if(at){aC.h=at}if(!at&&!aw&&!aA){aC.d=1}if(aC.d===1){an.has1x=true}aC.set=an;ah.push(aC)}}function ak(){aq(J);aj="";ae="in descriptor";while(true){ai=am.charAt(al);if(ae==="in descriptor"){if(q(ai)){if(aj){ap.push(aj);aj="";ae="after descriptor"}}else{if(ai===","){al+=1;if(aj){ap.push(aj)}ao();return}else{if(ai==="\u0028"){aj=aj+ai;ae="in parens"}else{if(ai===""){if(aj){ap.push(aj)}ao();return}else{aj=aj+ai}}}}}else{if(ae==="in parens"){if(ai===")"){aj=aj+ai;ae="in descriptor"}else{if(ai===""){ap.push(aj);ao();return}else{aj=aj+ai}}}else{if(ae==="after descriptor"){if(q(ai)){}else{if(ai===""){ao();return}else{ae="in descriptor";al-=1}}}}}al+=1}}while(true){aq(S);if(al>=ag){return ah}af=aq(ad);ap=[];if(af.slice(-1)===","){af=af.replace(A,"");ao()}else{ak()}}}function a(al){var ag=/^(?:[+-]?[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?(?:ch|cm|em|ex|in|mm|pc|pt|px|rem|vh|vmin|vmax|vw)$/i;var af=/^calc\((?:[0-9a-z \.\+\-\*\/\(\)]+)\)$/i;var ai;var am;var an;var ae;var aj;var ao;function ak(av){var ay;var ax="";var at=[];var aq=[];var ap=0;var aw=0;var az=false;function au(){if(ax){at.push(ax);ax=""}}function ar(){if(at[0]){aq.push(at);at=[]}}while(true){ay=av.charAt(aw);if(ay===""){au();ar();return aq}else{if(az){if((ay==="*")&&(av[aw+1]==="/")){az=false;aw+=2;au();continue}else{aw+=1;continue}}else{if(q(ay)){if((av.charAt(aw-1)&&q(av.charAt(aw-1)))||!ax){aw+=1;continue}else{if(ap===0){au();aw+=1;continue}else{ay=" "}}}else{if(ay==="("){ap+=1}else{if(ay===")"){ap-=1}else{if(ay===","){au();ar();aw+=1;continue}else{if((ay==="/")&&(av.charAt(aw+1)==="*")){az=true;aw+=2;continue}}}}}}}ax=ax+ay;aw+=1}}function ah(ap){if(ag.test(ap)&&(parseFloat(ap)>=0)){return true}if(af.test(ap)){return true}if((ap==="0")||(ap==="-0")||(ap==="+0")){return true}return false}am=ak(al);an=am.length;for(ai=0;ai<an;ai++){ae=am[ai];aj=ae[ae.length-1];if(ah(aj)){ao=aj;ae.pop()}else{continue}if(ae.length===0){return ao}ae=ae.join(" ");if(!(x.matchesMedia(ae))){continue}return ao}return"100vw"}x.ns=("pf"+new Date().getTime()).substr(0,9);x.supSrcset="srcset" in f;x.supSizes="sizes" in f;x.supPicture=!!N.HTMLPictureElement;if(x.supSrcset&&x.supPicture&&!x.supSizes){(function(ae){f.srcset="data:,a";ae.src="data:,a";x.supSrcset=f.complete===ae.complete;x.supPicture=x.supSrcset&&x.supPicture})(g.createElement("img"))}if(x.supSrcset&&!x.supSizes){(function(){var af="data:image/gif;base64,R0lGODlhAgABAPAAAP///wAAACH5BAAAAAAALAAAAAACAAEAAAICBAoAOw==";var ag="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==";var ae=g.createElement("img");var ah=function(){var ai=ae.width;if(ai===2){x.supSizes=true}C=x.supSrcset&&!x.supSizes;I=true;setTimeout(P)};ae.onload=ah;ae.onerror=ah;ae.setAttribute("sizes","9px");ae.srcset=ag+" 1w,"+af+" 9w";ae.src=ag})()}else{I=true}x.selShort="picture>img,img[srcset]";x.sel=x.selShort;x.cfg=m;x.DPR=(j||1);x.u=Z;x.types=O;x.setSize=Y;x.makeUrl=e(function(ae){h.href=ae;return h.href});x.qsa=function(ae,af){return("querySelector" in ae)?ae.querySelectorAll(af):[]};x.matchesMedia=function(){if(N.matchMedia&&(matchMedia("(min-width: 0.1em)")||{}).matches){x.matchesMedia=function(ae){return !ae||(matchMedia(ae).matches)}}else{x.matchesMedia=x.mMQ}return x.matchesMedia.apply(this,arguments)};x.mMQ=function(ae){return ae?o(ae):true};x.calcLength=function(ae){var af=o(ae,true)||false;if(af<0){af=false}return af};x.supportsType=function(ae){return(ae)?O[ae]:true};x.parseSize=e(function(af){var ae=(af||"").match(r);return{media:ae&&ae[1],length:ae&&ae[2]}});x.parseSet=function(ae){if(!ae.cands){ae.cands=M(ae.srcset,ae)}return ae.cands};x.getEmValue=function(){var ae;if(!U&&(ae=g.body)){var ah=g.createElement("div"),af=i.style.cssText,ag=ae.style.cssText;ah.style.cssText=v;i.style.cssText=Q;ae.style.cssText=Q;ae.appendChild(ah);U=ah.offsetWidth;ae.removeChild(ah);U=parseFloat(U,10);i.style.cssText=af;ae.style.cssText=ag}return U||16};x.calcListLength=function(af){if(!(af in aa)||m.uT){var ae=x.calcLength(a(af));aa[af]=!ae?Z.width:ae}return aa[af]};x.setRes=function(ah){var ag;if(ah){ag=x.parseSet(ah);for(var af=0,ae=ag.length;af<ae;af++){T(ag[af],ah.sizes)}}return ag};x.setRes.res=T;x.applySetCandidate=function(aj,ai){if(!aj.length){return}var aq,ah,ag,af,am,an,al,ak,ap;var ae=ai[x.ns];var ao=x.DPR;an=ae.curSrc||ai[F];al=ae.curCan||ab(ai,an,aj[0].set);if(al&&al.set===aj[0].set){ap=(b&&!ai.complete&&al.res-0.1>ao);if(!ap){al.cached=true;if(al.res>=ao){am=al}}}if(!am){aj.sort(E);af=aj.length;am=aj[af-1];for(ah=0;ah<af;ah++){aq=aj[ah];if(aq.res>=ao){ag=ah-1;if(aj[ag]&&(ap||an!==x.makeUrl(aq.url))&&w(aj[ag].res,aq.res,ao,aj[ag].cached)){am=aj[ag]}else{am=aq}break}}}if(am){ak=x.makeUrl(am.url);ae.curSrc=ak;ae.curCan=am;if(ak!==an){x.setSrc(ai,am)}x.setSize(ai)}};x.setSrc=function(ae,af){var ag;ae.src=af.url;if(af.set.type==="image/svg+xml"){ag=ae.style.width;ae.style.width=(ae.offsetWidth+1)+"px";if(ae.offsetWidth+1){ae.style.width=ag}}};x.getSet=function(ae){var ag,aj,ai;var af=false;var ah=ae[x.ns].sets;for(ag=0;ag<ah.length&&!af;ag++){aj=ah[ag];if(!aj.srcset||!x.matchesMedia(aj.media)||!(ai=x.supportsType(aj.type))){continue}if(ai==="pending"){aj=ai}af=aj;break}return af};x.parseSets=function(ai,ak,al){var ah,aj,af,am;var ag=ak&&ak.nodeName.toUpperCase()==="PICTURE";var ae=ai[x.ns];if(ae.src===t||al.src){ae.src=ac.call(ai,"src");if(ae.src){B.call(ai,p,ae.src)}else{K.call(ai,p)}}if(ae.srcset===t||al.srcset||!x.supSrcset||ai.srcset){ah=ac.call(ai,"srcset");ae.srcset=ah;am=true}ae.sets=[];if(ag){ae.pic=true;d(ak,ae.sets)}if(ae.srcset){aj={srcset:ae.srcset,sizes:ac.call(ai,"sizes")};ae.sets.push(aj);af=(C||ae.src)&&l.test(ae.srcset||"");if(!af&&ae.src&&!W(ae.src,aj)&&!aj.has1x){aj.srcset+=", "+ae.src;aj.cands.push({url:ae.src,d:1,set:aj})}}else{if(ae.src){ae.sets.push({srcset:ae.src,sizes:null})}}ae.curCan=null;ae.curSrc=t;ae.supported=!(ag||(aj&&!x.supSrcset)||(af&&!x.supSizes));if(am&&x.supSrcset&&!ae.supported){if(ah){B.call(ai,c,ah);ai.srcset=""}else{K.call(ai,c)}}if(ae.supported&&!ae.srcset&&((!ae.src&&ai.src)||ai.src!==x.makeUrl(ae.src))){if(ae.src===null){ai.removeAttribute("src")}else{ai.src=ae.src}}ae.parsed=true};x.fillImg=function(ag,af){var ah;var ae=af.reselect||af.reevaluate;if(!ag[x.ns]){ag[x.ns]={}}ah=ag[x.ns];if(!ae&&ah.evaled===u){return}if(!ah.parsed||af.reevaluate){x.parseSets(ag,ag.parentNode,af)}if(!ah.supported){X(ag)}else{ah.evaled=u}};x.setupRun=function(){if(!V||H||(j!==N.devicePixelRatio)){n()}};if(x.supPicture){P=Y;x.fillImg=Y}else{(function(){var ag;var ak=N.attachEvent?/d$|^c/:/d$|^c|^i/;var aj=function(){var al=g.readyState||"";ae=setTimeout(aj,al==="loading"?200:999);if(g.body){x.fillImgs();ag=ag||ak.test(al);if(ag){clearTimeout(ae)}}};var ae=setTimeout(aj,g.body?9:99);var af=function(am,ap){var ao,an;var al=function(){var aq=(new Date())-an;if(aq<ap){ao=setTimeout(al,ap-aq)}else{ao=null;am()}};return function(){an=new Date();if(!ao){ao=setTimeout(al,ap)}}};var ah=i.clientHeight;var ai=function(){H=Math.max(N.innerWidth||0,i.clientWidth)!==Z.width||i.clientHeight!==ah;ah=i.clientHeight;if(H){x.fillImgs()}};L(N,"resize",af(ai,99));L(g,"readystatechange",aj)})()}x.picturefill=P;x.fillImgs=P;x.teardownRun=Y;P._=x;N.picturefillCFG={pf:x,push:function(af){var ae=af.shift();if(typeof x[ae]==="function"){x[ae].apply(x,af)}else{m[ae]=af[0];if(V){x.fillImgs({reselect:true})}}}};while(y&&y.length){N.picturefillCFG.push(y.shift())}N.picturefill=P;if(typeof module==="object"&&typeof module.exports==="object"){module.exports=P}else{if(typeof define==="function"&&define.amd){define("picturefill",function(){return P})}}if(!x.supPicture){O["image/webp"]=D("image/webp","data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==")}})(window,document);


/*ofi.min.js*/
/*! npm.im/object-fit-images 3.2.3 */
var objectFitImages=function(){"use strict";function t(t,e){return"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+t+"' height='"+e+"'%3E%3C/svg%3E"}function e(t){if(t.srcset&&!m&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=l.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);p.call(e,"src")!==n&&b.call(e,"src",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[a];if(c["object-fit"]=c["object-fit"]||"fill",!o.img){if("fill"===c["object-fit"])return;if(!o.skipTest&&g&&!c["object-position"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=p.call(t,"data-ofi-srcset")||t.srcset,o.img.src=p.call(t,"data-ofi-src")||t.src,b.call(t,"data-ofi-src",t.src),t.srcset&&b.call(t,"data-ofi-srcset",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset="");try{s(t)}catch(t){window.console&&console.warn("https://bit.ly/ofi-old-browser")}}e(o.img),t.style.backgroundImage='url("'+(o.img.currentSrc||o.img.src).replace(/"/g,'\\"')+'")',t.style.backgroundPosition=c["object-position"]||"center",t.style.backgroundRepeat="no-repeat",t.style.backgroundOrigin="content-box",/scale-down/.test(c["object-fit"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize="contain":t.style.backgroundSize="auto"}):t.style.backgroundSize=c["object-fit"].replace("none","auto").replace("fill","100% 100%"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[a].img[e||"src"]},set:function(e,i){return t[a].img[i||"src"]=e,b.call(t,"data-ofi-"+i,e),c(t),e}};Object.defineProperty(t,"src",e),Object.defineProperty(t,"currentSrc",{get:function(){return e.get("currentSrc")}}),Object.defineProperty(t,"srcset",{get:function(){return e.get("srcset")},set:function(t){return e.set(t,"srcset")}})}function o(t,e){var i=!h&&!t;if(e=e||{},t=t||"img",f&&!e.skipTest||!d)return!1;"img"===t?t=document.getElementsByTagName("img"):"string"==typeof t?t=document.querySelectorAll(t):"length"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][a]=t[r][a]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener("load",function(t){"IMG"===t.target.tagName&&o(t.target,{skipTest:e.skipTest})},!0),h=!0,t="img"),e.watchMQ&&window.addEventListener("resize",o.bind(null,t,{skipTest:e.skipTest}))}var a="bfred-it:object-fit-images",l=/(object-fit|object-position)\s*:\s*([-\w\s%]+)/g,u="undefined"==typeof Image?{style:{"object-position":1}}:new Image,g="object-fit"in u.style,f="object-position"in u.style,d="background-size"in u.style,m="string"==typeof u.currentSrc,p=u.getAttribute,b=u.setAttribute,h=!1;return o.supportsObjectFit=g,o.supportsObjectPosition=f,function(){function t(t,e){return t[a]&&t[a].img&&("src"===e||"srcset"===e)?t[a].img:t}f||(HTMLImageElement.prototype.getAttribute=function(e){return p.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return b.call(t(this,e),e,String(i))})}(),o}();

/*jquery.inview.js*/
(function(a){if(typeof define=="function"&&define.amd){define(["jquery"],a)}else{if(typeof exports==="object"){module.exports=a(require("jquery"))}else{a(jQuery)}}}(function(c){var k=[],b,l,e=document,j=window,i=e.documentElement,a;c.event.special.inview={add:function(d){k.push({data:d,$element:c(this),element:this});if(!a&&k.length){a=setInterval(g,250)}},remove:function(n){for(var m=0;m<k.length;m++){var d=k[m];if(d.element===this&&d.data.guid===n.guid){k.splice(m,1);break}}if(!k.length){clearInterval(a);a=null}}};function h(){var n,d,m={height:j.innerHeight,width:j.innerWidth};if(!m.height){n=e.compatMode;if(n||!c.support.boxModel){d=n==="CSS1Compat"?i:e.body;m={height:d.clientHeight,width:d.clientWidth}}}return m}function f(){return{top:j.pageYOffset||i.scrollTop||e.body.scrollTop,left:j.pageXOffset||i.scrollLeft||e.body.scrollLeft}}function g(){if(!k.length){return}var o=0,q=c.map(k,function(t){var r=t.data.selector,s=t.$element;return r?s.find(r):s});b=b||h();l=l||f();for(;o<k.length;o++){if(!c.contains(i,q[o][0])){continue}var m=c(q[o]),d={height:m[0].offsetHeight,width:m[0].offsetWidth},n=m.offset(),p=m.data("inview");if(!l||!b){return}if(n.top+d.height>l.top&&n.top<l.top+b.height&&n.left+d.width>l.left&&n.left<l.left+b.width){if(!p){m.data("inview",true).trigger("inview",[true])}}else{if(p){m.data("inview",false).trigger("inview",[false])}}}}c(j).on("scroll resize scrollstop",function(){b=l=null});if(!i.addEventListener&&i.attachEvent){i.attachEvent("onfocusin",function(){l=null})}}));

/*stickyfill.min.js*/
!function(a,b){"use strict";function c(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}function d(a,b){for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c])}function e(a){return parseFloat(a)||0}function f(a){for(var b=0;a;)b+=a.offsetTop,a=a.offsetParent;return b}function g(){function c(){a.pageXOffset!=m.left?(m.top=a.pageYOffset,m.left=a.pageXOffset,p.refreshAll()):a.pageYOffset!=m.top&&(m.top=a.pageYOffset,m.left=a.pageXOffset,n.forEach(function(a){return a._recalcPosition()}))}function d(){f=setInterval(function(){n.forEach(function(a){return a._fastCheck()})},500)}function e(){clearInterval(f)}if(!k){k=!0,c(),a.addEventListener("scroll",c),a.addEventListener("resize",p.refreshAll),a.addEventListener("orientationchange",p.refreshAll);var f=void 0,g=void 0,h=void 0;"hidden"in b?(g="hidden",h="visibilitychange"):"webkitHidden"in b&&(g="webkitHidden",h="webkitvisibilitychange"),h?(b[g]||d(),b.addEventListener(h,function(){b[g]?e():d()})):d()}}var h=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),i=!1,j="undefined"!=typeof a;j&&a.getComputedStyle?!function(){var a=b.createElement("div");["","-webkit-","-moz-","-ms-"].some(function(b){try{a.style.position=b+"sticky"}catch(a){}return""!=a.style.position})&&(i=!0)}():i=!0;var k=!1,l="undefined"!=typeof ShadowRoot,m={top:null,left:null},n=[],o=function(){function g(a){if(c(this,g),!(a instanceof HTMLElement))throw new Error("First argument must be HTMLElement");if(n.some(function(b){return b._node===a}))throw new Error("Stickyfill is already applied to this node");this._node=a,this._stickyMode=null,this._active=!1,n.push(this),this.refresh()}return h(g,[{key:"refresh",value:function(){if(!i&&!this._removed){this._active&&this._deactivate();var c=this._node,g=getComputedStyle(c),h={position:g.position,top:g.top,display:g.display,marginTop:g.marginTop,marginBottom:g.marginBottom,marginLeft:g.marginLeft,marginRight:g.marginRight,cssFloat:g.cssFloat};if(!isNaN(parseFloat(h.top))&&"table-cell"!=h.display&&"none"!=h.display){this._active=!0;var j=c.style.position;"sticky"!=g.position&&"-webkit-sticky"!=g.position||(c.style.position="static");var k=c.parentNode,m=l&&k instanceof ShadowRoot?k.host:k,n=c.getBoundingClientRect(),o=m.getBoundingClientRect(),p=getComputedStyle(m);this._parent={node:m,styles:{position:m.style.position},offsetHeight:m.offsetHeight},this._offsetToWindow={left:n.left,right:b.documentElement.clientWidth-n.right},this._offsetToParent={top:n.top-o.top-e(p.borderTopWidth),left:n.left-o.left-e(p.borderLeftWidth),right:-n.right+o.right-e(p.borderRightWidth)},this._styles={position:j,top:c.style.top,bottom:c.style.bottom,left:c.style.left,right:c.style.right,width:c.style.width,marginTop:c.style.marginTop,marginLeft:c.style.marginLeft,marginRight:c.style.marginRight};var q=e(h.top);this._limits={start:n.top+a.pageYOffset-q,end:o.top+a.pageYOffset+m.offsetHeight-e(p.borderBottomWidth)-c.offsetHeight-q-e(h.marginBottom)};var r=p.position;"absolute"!=r&&"relative"!=r&&(m.style.position="relative"),this._recalcPosition();var s=this._clone={};s.node=b.createElement("div"),d(s.node.style,{width:n.right-n.left+"px",height:n.bottom-n.top+"px",marginTop:h.marginTop,marginBottom:h.marginBottom,marginLeft:h.marginLeft,marginRight:h.marginRight,cssFloat:h.cssFloat,padding:0,border:0,borderSpacing:0,fontSize:"1em",position:"static"}),k.insertBefore(s.node,c),s.docOffsetTop=f(s.node)}}}},{key:"_recalcPosition",value:function(){if(this._active&&!this._removed){var a=m.top<=this._limits.start?"start":m.top>=this._limits.end?"end":"middle";if(this._stickyMode!=a){switch(a){case"start":d(this._node.style,{position:"absolute",left:this._offsetToParent.left+"px",right:this._offsetToParent.right+"px",top:this._offsetToParent.top+"px",bottom:"auto",width:"auto",marginLeft:0,marginRight:0,marginTop:0});break;case"middle":d(this._node.style,{position:"fixed",left:this._offsetToWindow.left+"px",right:this._offsetToWindow.right+"px",top:this._styles.top,bottom:"auto",width:"auto",marginLeft:0,marginRight:0,marginTop:0});break;case"end":d(this._node.style,{position:"absolute",left:this._offsetToParent.left+"px",right:this._offsetToParent.right+"px",top:"auto",bottom:0,width:"auto",marginLeft:0,marginRight:0})}this._stickyMode=a}}}},{key:"_fastCheck",value:function(){this._active&&!this._removed&&(Math.abs(f(this._clone.node)-this._clone.docOffsetTop)>1||Math.abs(this._parent.node.offsetHeight-this._parent.offsetHeight)>1)&&this.refresh()}},{key:"_deactivate",value:function(){var a=this;this._active&&!this._removed&&(this._clone.node.parentNode.removeChild(this._clone.node),delete this._clone,d(this._node.style,this._styles),delete this._styles,n.some(function(b){return b!==a&&b._parent&&b._parent.node===a._parent.node})||d(this._parent.node.style,this._parent.styles),delete this._parent,this._stickyMode=null,this._active=!1,delete this._offsetToWindow,delete this._offsetToParent,delete this._limits)}},{key:"remove",value:function(){var a=this;this._deactivate(),n.some(function(b,c){if(b._node===a._node)return n.splice(c,1),!0}),this._removed=!0}}]),g}(),p={stickies:n,Sticky:o,forceSticky:function(){i=!1,g(),this.refreshAll()},addOne:function(a){if(!(a instanceof HTMLElement)){if(!a.length||!a[0])return;a=a[0]}for(var b=0;b<n.length;b++)if(n[b]._node===a)return n[b];return new o(a)},add:function(a){if(a instanceof HTMLElement&&(a=[a]),a.length){for(var b=[],c=function(c){var d=a[c];return d instanceof HTMLElement?n.some(function(a){if(a._node===d)return b.push(a),!0})?"continue":void b.push(new o(d)):(b.push(void 0),"continue")},d=0;d<a.length;d++){c(d)}return b}},refreshAll:function(){n.forEach(function(a){return a.refresh()})},removeOne:function(a){if(!(a instanceof HTMLElement)){if(!a.length||!a[0])return;a=a[0]}n.some(function(b){if(b._node===a)return b.remove(),!0})},remove:function(a){if(a instanceof HTMLElement&&(a=[a]),a.length)for(var b=function(b){var c=a[b];n.some(function(a){if(a._node===c)return a.remove(),!0})},c=0;c<a.length;c++)b(c)},removeAll:function(){for(;n.length;)n[0].remove()}};i||g(),"undefined"!=typeof module&&module.exports?module.exports=p:j&&(a.Stickyfill=p)}(window,document);


/*--------------------------------
  pnra
----------------------------------*/
//viewport height 値取得
const setFillHeight = () => {
	const vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
}
// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);
// 初期化
setFillHeight();

window.onpageshow = function(event) {
	if (event.persisted) {
		window.location.reload();
	}
};


//読み込み完了時にbodyに付与
/*
$(window).on("load", function() {
  $("body").attr("data-loading", "true");
});
setTimeout(function(){
  $('#main').addClass("hide");
}, 500);
*/
//pege loaded
$(window).on('load', function(){ "use strict";
	setTimeout(function(){
		$('body').animate({
			'opacity': '1'
		}, 300);
	},0);
});


//pege removed
$('a:not([href^="#"]):not([href^="mailto"]):not([href^="tel"]):not([target]):not([download]):not([data-fancybox])').on('click', function(e){
	e.preventDefault();
	var selfPass = $(this).attr('href');
	$('body').animate({
		'opacity': '1'
	}, 500, function(){
		location.href = selfPass;
	});
});


//inview
$(function() {
  $('.inview').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('action');
    } else {
      $(this).removeClass('action');
    }
  });
  $('.animated').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('move');
    } else {
      $(this).removeClass('action');
    }
  });
  $('.colorchange').on('inview', function(event, isInView) {
    if (isInView) {
      $('.change').addClass('color');
    } else {
      $('.change').removeClass('color');
    }
  });
  $('.done').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('gone');
    }
  });
	$('.showImg').on('inview', function(event, isInView) {
		if (isInView) {
			$(this).css({transform: "scale(1)"});
		}
	});
  for (let i = 0; i < 10; i++) {
   $('.here' + (i+1)).on('inview', function(event, isInView){
    if (isInView) {
     $('.hereItem').removeClass('active');
     $('.hereItem' + (i+1)).addClass('active');
    }
   });
  }
});

//SVGロゴの色変更
/*
var logo = document.getElementById("_logo");
logo.setAttribute("fill","#FFFFFF");
//ヘッダー固定
$(function() {
	var siteHead = $('#siteHead');
	var headerH = siteHead.innerHeight();
	$('#siteContent').css('margin-top', headerH + 'px');
});
*/
//フッター固定
/*
$(function() {
	var fWrap = $('#siteFooter');
	var fHeight = fWrap.innerHeight();
	$('#siteContent').css('margin-bottom', fHeight + 'px');
});
*/


//スムーズスクロール
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 750;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position - 41}, speed, "swing");
    return false;
  });
});

//スクロールで出現する要素
$(window).on('scroll',function(){
	var sc = $(window).scrollTop();
	//var w = $(window).width();
 //var h = $(window).height() / 2;
 //var headerH = $('#siteHead').innerHeight();
 //var indexH = $('#index1').innerHeight();
	//var indexScroll = indexH - headerH;
	if ( sc >= 1 ){
		$('body').addClass('scroll');
		$('.humbBtn').addClass('scroll');
		$('.gloabalNav').addClass('scroll');
	} else {
		$('body').removeClass('scroll');
		$('.humbBtn').removeClass('scroll');
		$('.gloabalNav').removeClass('scroll');
	}
});

//scrollイベントを上下で変える
$(function() {
 var before = $(window).scrollTop();
 $(window).scroll(function() {
  var after = $(window).scrollTop();
		if(before > after) {
   $('body').addClass('scrollUp');
		}
		else if(before < after) {
   $('body').removeClass('scrollUp');
		}
		before = after;
	});
});

//子要素の開閉
$('._parents').on('click',function(){
 $(this).toggleClass('open');
 $(this).children('._child').slideToggle(300);
});
//隣接する要素の開閉
$('.tgr_parents').on('click',function(){
 $(this).toggleClass('open');
 $(this).nextAll('.tgr_child').slideToggle(300);
});
//親要素に隣接する要素の開閉
$('.tgr_parents_next').on('click',function(){
 $(this).toggleClass('open');
 $(this).parents('dt').toggleClass('open');
 $(this).parents('dt').nextAll('.tgr_child').slideToggle(300);
});
$('.faq_parents').on('click',function(){
	if( $(this).hasClass('active') ){
  $(this).removeClass('active');
  $(this).children('.tgr_child').slideUp(515);
	} else {
  $(this).addClass('active');
  $(this).children('.tgr_child').slideDown(515);
	}
});
$(function () {
  $('.list_faq').find('dd').hide();
});

//文字を分割


//クリックイベント
$(window).on('load',function(){
 $('#aside').find('.cover').css({bottom: 0});
});
$(function() {
 //グローバルナビ
 $('.menu_main').on('click',function(){
  if( $(this).hasClass('active') ){
   $(this).removeClass('active');
   $('.siteHeader').removeClass('active');
   $('#aside').delay(300).removeClass('active');
   $('#bside').delay(300).removeClass('active');
  } else {
   $(this).addClass('active');
   $('.siteHeader').addClass('active');
   $('#aside').delay(300).addClass('active');
   $('#bside').delay(300).addClass('active');
  }
 });
 $('aside').find('a').on('click', function() {
   $('.menu_main').removeClass('active');
   $('.siteHeader').removeClass('active');
   $('#aside').delay(300).removeClass('active');
 });
 $('bside').find('a').on('click', function() {
   $('.menu_main').removeClass('active');
   $('.siteHeader').removeClass('active');
   $('#bside').delay(300).removeClass('active');
 });
});

//
$(function(){
	$('#with-warrenty').click(function(){
		if($('[name="#with-warrenty"]').prop('checked')){
			$('.entrybox').toggleClass('yes1');
		}else{
			$('.entrybox').toggleClass('no1');
		}
	});
	$('#with-warrenty2').click(function(){
		if($('[name="#with-warrenty2"]').prop('checked')){
			$('.entrybox').toggleClass('yes2');
		}else{
			$('.entrybox').toggleClass('no2');
		}
	});
	$('#with-warrenty3').click(function(){
		if($('[name="#with-warrenty3"]').prop('checked')){
			$('.entrybox').toggleClass('yes3');
		} else {
			$('.entrybox').toggleClass('no3');
		}
	});
	$('#with-warrenty4').click(function(){
		if($('[name="#with-warrenty4"]').prop('checked')){
			$('.entrybox').toggleClass('yes4');
		} else {
			$('.entrybox').toggleClass('no4');
		}
	});
});

/*
//長さを取得する
var footerHeight = $('#siteFooter').innerHeight();
var windowWidth = $(window).width();
var smartphone = 768;
if (windowWidth <= smartphone) {
 //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
} else {
 //横幅640px超のとき（タブレット、PC）に行う処理を書く
 $('#siteContent').css('margin-bottom', footerHeight + 'px' );
}
*/
//Headerの長さを取得する
/*
$(function() {
	var dHWrap = $('#siteHead');
	var dHHeight = dHWrap.innerHeight();
	$('#siteContent').css('padding-top', dHHeight + 'px');
});
*/

//画像切り替え
$(function(){
  $('.swichBtn').each(function () {
    $(this).on('click', function () {
      var index = $('.swichBtn').index(this);
      var i =  $('.swichBtn').index(this) + 1;
      $('.swichBtn').removeClass('active');
      $(this).addClass('active');
      $('.switchBody').removeClass('active');
      $('.switchBody').eq(index).addClass('active');
      $('.imhere').removeClass('active');
      $('.imhere').eq(index).addClass('active');
      $('#num').text(i);
    });
  });
});
//重なり要素の順番に応じてクラスを付与 
$(function(){
	$('.hoverImg').each(function () {
		var index = $('.hoverImg').index(this);
		var i =  $('.hoverImg').index(this) + 1;
  $(this).hover(
   function(){//マウスカーソルが重なった時の処理
    $('.hoverImg').removeClass('current');
    $(this).addClass('current');
				$('._imgs').removeClass('current');
				$('._imgs').eq(index).addClass('current');
   },
   function(){//マウスカーソルが離れた時の処理
   }
  );
	});
	$('.lower_item').each(function () {
		var index = $('.lower_item').index(this);
		var i =  $('.lower_item').index(this) + 1;
  $(this).hover(
   function(){//マウスカーソルが重なった時の処理
    $(this).addClass('current');
    $('#lowerNav').addClass('current');
				$('.lower_content').eq(index).addClass('current');
   },
   function(){//マウスカーソルが離れた時の処理
    $(this).removeClass('current');
    $('#lowerNav').removeClass('current');
				$('.lower_content').removeClass('current');
   }
  );
	});
});
//クリックで開くナビ


$(".flexRight.sticky").parents().css("overflow", "visible")
//Tooggle Navigation
$(function() {
 $('.humbNav').click(function() {
  $('.humbNav').toggleClass('active');
  $('#page').toggleClass('move');
  $('nav._nav').slideToggle(500);
  $('#aside').slideToggle(500);
  $('#siteHead').toggleClass('move');
 });
 $('.global_nav').find('a').click(function() {
  $('.humbNav').toggleClass('active');
  $('#page').toggleClass('move');
  $('#aside').slideToggle(500);
  $('#bside').toggleClass('move');
  $('#siteHead').toggleClass('move');
 });
});
//hoverイベント
$(function() {
 $('.sender1').hover(
  function(){
   $('.taker2').removeClass('active');
   $('.taker1').addClass('active');
  }
 );
 $('.sender2').hover(
  function(){
   $('.taker1').removeClass('active');
   $('.taker2').addClass('active');
  }
 );
 $('.key1').hover(
  function(){//マウスカーソルが重なった時の処理
   $('.pass1').addClass('active');
  },
  function(){//マウスカーソルが離れた時の処理
   $('.pass1').removeClass('active');
  }
 );
 $('.key2').hover(
  function(){//マウスカーソルが重なった時の処理
   $('.pass2').addClass('active');
  },
  function(){//マウスカーソルが離れた時の処理
   $('.pass2').removeClass('active');
  }
 );
 $('.key3').hover(
  function(){//マウスカーソルが重なった時の処理
   $('.pass3').addClass('active');
  },
  function(){//マウスカーソルが離れた時の処理
   $('.pass3').removeClass('active');
  }
 );
});

//loop slider2
$(function(){
 $('.slider__inner').each(function(){
   var sliderWidth = $(this).width();
   $(this).clone(true).insertBefore(this);
   $(this).clone(true).insertAfter(this);
   $('.slider').css('width', sliderWidth*3);
 });
 $('.verticalslider__inner').each(function(){
   var sliderHeight = $(this).height();
   $(this).clone(true).insertBefore(this);
   $(this).clone(true).insertAfter(this);
   $('.verticalslider').css('height', sliderHeight*3);
 });
});


//loop slider
$(document).ready(function(){
		var setElm = $('.loopSlider'),
	slideSpeed = 15000;
	setElm.each(function(){
		var self = $(this),
		selfWidth = self.innerWidth(),
		findUl = self.find('ul'),
		findLi = findUl.find('li'),
		listWidth = findLi.outerWidth(),
		listCount = findLi.length,
		loopWidth = listWidth * listCount;
		findUl.wrapAll('<div class="loopSliderWrap" />');
		var selfWrap = self.find('.loopSliderWrap');

		if(loopWidth > selfWidth){
			findUl.css({width:loopWidth}).clone().appendTo(selfWrap);
			selfWrap.css({width:loopWidth*2});
			function loopMove(){
				selfWrap.animate({left:'-' + (loopWidth) + 'px'},slideSpeed*listCount,'linear',function(){
					selfWrap.css({left:'0'});
					loopMove();
				});
			};
			loopMove();
		}
	});
});
//loopslider original
$(window).on('load',function(){
 $('._loopitems').clone(true).insertAfter('._loopitems');
});

//モーダルBOX
$(function(){
	$('.js-modal-open').each(function(){
		$(this).on('click',function(){
			var target = $(this).data('target');
			var modal = document.getElementById(target);
			$(modal).fadeIn();
			return false;
		});
	});
	$('.js-modal-close').on('click',function(){
		$('.js-modal').fadeOut();
		return false;
	}); 
});

//sticky IE
var elem = document.querySelectorAll('.sticky');
Stickyfill.add(elem);

/*/pege removed
$('a:not([href^="#"]):not([href^="mailto"]):not([href^="tel"]):not([target]):not([download])').on('click', function(e){
	e.preventDefault();
	var selfPass = $(this).attr('href');
	$('#cover').addClass('active')
	$('#aside').animate({opacity:'0'}, 300);
	$('#page').animate({opacity:'0'}, 300);
	$('body').animate({
  opacity:'0'
 }, 500, function(){
		location.href = selfPass;
	});
});
*/


//swiper
var first = new Swiper('.first-container', {
 spaceBetween: 0,
	effect: 'fade',
	speed: 2500,
 pagination: {
  el: '.swiper-pagination',
  clickable: true,
		//renderBullet: function (index, className) {
		//	return '<span class="' + className + '">0' + (index + 1) + "</span>";
		//},
 },
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	}
});
//Index
var idx_feature_slide = new Swiper('.idx_feature_slide', {
 slidesPerView: 1.075,
 spaceBetween: 20.125,
 centeredSlides : true,
 loop: true,
 pagination: {
  el: '.swiper-pagination',
  clickable: true,
 },
	autoplay: {
		delay: 2050,
		disableOnInteraction: false,
	},
	speed: 328,
 breakpoints: {
  767: { slidesPerView: 1, centeredSlides : false, loop: false, spaceBetween: 20.125, speed: 328 }
 }
});
//Index
var idx_about_slide = new Swiper('.idx_about_slide', {
 slidesPerView: 1.1275,
 spaceBetween: 20.125,
 centeredSlides : true,
 loop: false,
 scrollbar: {
  el: '.swiper-scrollbar',
  hide: false,
 },
 navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
 },
	autoplay: {
		delay: 2050,
		disableOnInteraction: false,
	},
	speed: 1000,
 breakpoints: {
  767: { slidesPerView: 3, centeredSlides : false, loop: false, spaceBetween: 42.5, speed: 1000 }
 }
});
//Business
var performance = new Swiper('.performance-container', {
 spaceBetween: 0,
	effect: 'fade',
	speed: 2500,
 pagination: {
  el: '.swiper-pagination',
  clickable: true
 },
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	}
});







