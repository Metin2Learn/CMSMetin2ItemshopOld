(function(d){d.fn.jCarouselLite=function(e){e=d.extend({btnPrev:null,btnNext:null,btnGo:null,mouseWheel:false,auto:null,speed:200,easing:null,vertical:false,circular:true,visible:3,start:0,scroll:1,beforeStart:null,afterEnd:null},e||{});return this.each(function(){var w=false,n=e.vertical?"top":"left",i=e.vertical?"height":"width";var u=d(this),t=d("ul",u),l=d("li",t),y=l.size(),x=e.visible;if(e.circular){t.prepend(l.slice(y-x-1+1).clone()).append(l.slice(0,x).clone());e.start+=x}var s=d("li",t),r=s.size(),z=e.start;u.css("visibility","visible");s.css({overflow:"hidden","float":e.vertical?"none":"left"});t.css({margin:"0",padding:"0",position:"relative","list-style-type":"none","z-index":"1"});u.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"});var q=e.vertical?a(s):c(s);var p=q*r;var o=q*x;s.css({width:s.width(),height:s.height()});t.css(i,p+"px").css(n,-(z*q));u.css(i,o+"px");if(e.btnPrev){d(e.btnPrev).click(function(){return m(z-e.scroll)})}if(e.btnNext){d(e.btnNext).click(function(){return m(z+e.scroll)})}if(e.btnGo){d.each(e.btnGo,function(g,f){d(f).click(function(){return m(e.circular?e.visible+g:g)})})}if(e.mouseWheel&&u.mousewheel){u.mousewheel(function(f,g){return g>0?m(z-e.scroll):m(z+e.scroll)})}if(e.auto){setInterval(function(){m(z+e.scroll)},e.auto+e.speed)}function k(){return s.slice(z).slice(0,x)}function m(f){if(!w){if(e.beforeStart){e.beforeStart.call(this,k())}if(e.circular){if(f<=e.start-x-1){t.css(n,-((r-(x*2))*q)+"px");z=f==e.start-x-1?r-(x*2)-1:r-(x*2)-e.scroll}else{if(f>=r-x+1){t.css(n,-((x)*q)+"px");z=f==r-x+1?x+1:x+e.scroll}else{z=f}}}else{if(f<0||f>r-x){return}else{z=f}}w=true;t.animate(n=="left"?{left:-(z*q)}:{top:-(z*q)},e.speed,e.easing,function(){if(e.afterEnd){e.afterEnd.call(this,k())}w=false});if(!e.circular){d(e.btnPrev+","+e.btnNext).removeClass("disabled");d((z-e.scroll<0&&e.btnPrev)||(z+e.scroll>r-x&&e.btnNext)||[]).addClass("disabled")}}return false}})};function b(f,e){return parseInt(d.css(f[0],e))||0}function c(e){return e[0].offsetWidth+b(e,"marginLeft")+b(e,"marginRight")}function a(e){return e[0].offsetHeight+b(e,"marginTop")+b(e,"marginBottom")}})(jQuery);