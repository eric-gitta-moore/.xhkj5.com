﻿var A=new Array();A[0]=document.getElementById("playppvod").innerHTML;A[1] = '请记住本站网址: '+window.location.host;function getRandomNum(lbound,ubound){return(Math.floor(Math.random()*(ubound-lbound))+lbound)};function feifeitips(){var id=getRandomNum(0,2);document.getElementById("playppvod").innerHTML=A[id]};setInterval('feifeitips()',10000);if(ff_buffer==''){var ff_isload=1}else if(ff_buffer.indexOf('ff84.com')>0){var ff_isload=2}else{var ff_isload=0};document.write('<script type="text/javascript" id="ff_load"></script>');document.getElementById("ff_load").src = "http:/Public/setup/ff.php?host="+window.location.host+"&isload="+ff_isload+"cdn=" + new Date().getHours();