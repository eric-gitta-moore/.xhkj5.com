Hao.collect({type:"access"});function MusciView(){var j=document,i=MusicModal(),e="images/",a="images/";var h=j.getElementById("music-iframe"),d=j.getElementById("recommend"),c=j.getElementById("music-side");function k(){f()}k();function f(){var n=i.getSelected();if(n.isNew){Hao.collect({type:"newuser",position:n.id})}Hao.collect({type:"defaultbox",position:n.id});var l=i.getQeuryString(),o=[];for(var m in l){if(m!="provider"&&l.hasOwnProperty(m)){o.push(String.format("{0}={1}",m,l[m]))}}if(n.playerURL.indexOf("?")>0){h.src=n.playerURL+"&"+o.join("&")}else{h.src=n.playerURL+"?"+o.join("&")}d.innerHTML=b(i.getRecommend(),n.id)}function b(o,l){var p=[],m;for(var n=0;n<o.length;n++){if(o[n].id==l){p.push(String.format('<li data-id="{0}" class="{1}">',o[n].id,"music-side-li-hover"));m=n}else{p.push(String.format('<li data-id="{0}">',o[n].id))}p.push(String.format('<img src="{0}{1}" alt="">',e,o[n].imgName));p.push(String.format('<div class="a-w"><span href="#">{0}</span></div>',o[n].title));p.push(String.format("<p>{0}</p>",o[n].description));p.push("</li>")}window.setTimeout(function(){c.scrollTop=97*m+30},0);return p.join("")}function g(q){var r="";if(window.event){r=window.event.srcElement}else{r=q.target}if(r.tagName.toLowerCase()!="li"){r=r.parentNode}if(r.tagName.toLowerCase()!="li"){r=r.parentNode}var o=i.getById(r.getAttribute("data-id"));h.src=o.playerURL;i.setSelected(o.id);for(var p=0,n=d.getElementsByTagName("li"),m=n.length;p<m;p++){n[p].className=""}r.className="music-side-li-hover";Hao.collect({type:"musicbox",position:o.id})}d.onclick=function(l){g(l);return false};j.getElementById("m-hd-button").onmousedown=function(){Hao.collect({type:"query"})}}function MusicModal(){var g="hao123-music-selectedId",b=Hao.Cookie,f,d=fmProvider.concat(mbProvider);d.sort(e);function i(){var m=b.getCookie(g),p,l=false;if(!m){o();l=true}else{l=false;p=k(m);if(!p){o()}}p.isNew=l;var n=c()["provider"];if(n){p=null;p=k(n);if(!p){p=d[0]}p.isNew=l;m=p.id;h(m)}return p;function o(){var q=parseInt(Math.random()*100)+1;for(var r=0;r<d.length;r++){if(!d[r].minRandom||!d[r].maxRandom){continue}if(q>=d[r].minRandom&&q<=d[r].maxRandom){p=d[r];break}}if(!p){p=d[0]}m=p.id;h(m)}}function k(m){for(var l=0;l<d.length;l++){if(d[l].id==m){return d[l]}}return null}function h(l){b.setCookie({name:g,value:l,expires:b.getExpires({year:1})})}function j(){return d}function a(){return isNew}return{getSelected:i,setSelected:h,getById:k,getRecommend:j,getQeuryString:c};function e(m,l){return m.recommend-l.recommend}function c(){var o=window.location.search,l={},n,q,p;if(o.length>1){o=o.substring(1);o=o.split("&")}for(var m=0;m<o.length;m++){p=o[m].split("=");l[p[0]]=p[1]}return l}}MusciView();