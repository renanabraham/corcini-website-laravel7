<body>
<nav id="navigation-menu">

    <ul>

        <li><a href="#section-1" rel="m_PageScroll2id">Section 1</a></li>

        <li><a href="#section-2" rel="m_PageScroll2id">Section 2</a></li>

        <li><a href="#section-3" rel="m_PageScroll2id">Section 3</a></li>


    </ul>

</nav>
<div id="sections-bullets">
    <a href="#section-1" class="section-bullet"></a>
    <a href="#section-2" class="section-bullet"></a>
</div>

<section id="section-1" style="height: 800px; background: red;">
    <h1>Renan</h1>
</section>
<section id="section-2" style="height: 800px; background: blue;">
    <h1>Renan</h1>
</section>

<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/jquery.malihu.PageScroll2id.min.js"></script>

<script>
    (function($){
        $(window).on("load",function(){
            $("a[rel='m_PageScroll2id']").mPageScroll2id({
                highlightSelector: "#sections-bullets a",
                keepHighlightUntilNext: true,
                scrollEasing:"easeOutQuint",
                scrollSpeed:1200
            });
        });
    })(jQuery);
</script>

<script>
    (function($){
        $(window).on("load",function(){

            var doc=$(document),
                mPS2idData=doc.data("mPS2id"),
                mPS2idExt;

            if(!mPS2idData){
                console.log("Error: 'Page scroll to id' plugin not present or activated. Please run the code after plugin is loaded.");
                return;
            }

            if(!$("._mPS2id-t").length) return;

            doc.data("mPS2idExtend",{
                selector: "._mPS2id-h",
                currentSelector: function(){
                    return this.index($(".mPS2id-highlight-first").length ? $(".mPS2id-highlight-first") : $(".mPS2id-highlight").length ? $(".mPS2id-highlight") : $(".mPS2id-wheel-init"));
                },
                target: function(){
                    var curr=$(".mPS2id-target-first").length ? $(".mPS2id-target-first") : $(".mPS2id-target").length ? $(".mPS2id-target") : $(".mPS2id-clicked").length ? $("#"+$(".mPS2id-clicked").attr("href").split("#")[1]) : false;
                    if(!curr.length){
                        //if no current target exists, get the next and previous closest sections
                        var max=999999999,
                            min=-999999999;
                        $("._mPS2id-t").each(function(){
                            var pos=mPS2idData.layout==="horizontal" ? this.getBoundingClientRect().left : this.getBoundingClientRect().top;
                            if(pos < 0 && pos > min){
                                min=pos;
                                curr=$("._mPS2id-t[data-psid-wheel-section='"+($(this).data("psid-wheel-section")+1)+"']");
                            }else if(pos > 0 && pos < max){
                                max=pos;
                                curr=$("._mPS2id-t[data-psid-wheel-section='"+($(this).data("psid-wheel-section")-1)+"']");
                            }
                        });
                        $("._mPS2id-h[data-psid-wheel-link='"+curr.data("psid-wheel-section")+"']").addClass("mPS2id-wheel-init");
                    }
                    return [
                        $("._mPS2id-t[data-psid-wheel-section='"+(curr.data("psid-wheel-section")-1)+"']"), //previous target
                        curr, //current target
                        $("._mPS2id-t[data-psid-wheel-section='"+(curr.data("psid-wheel-section")+1)+"']"), //next target
                    ];
                },
                needScroll: function(dir){
                    if($("html,body").is(":animated")) return;
                    if(dir > 0){ //scrolled fw
                        var el=mPS2idExt.target.call()[2][0]; //next adjacent target
                        if(mPS2idData.layout==="horizontal"){
                            return el ? el.getBoundingClientRect().left > (window.innerWidth || document.documentElement.clientWidth) : true; //next target is after viewport
                        }else{
                            return el ? el.getBoundingClientRect().top > (window.innerHeight || document.documentElement.clientHeight) : true; //next target is below viewport
                        }
                    }else if(dir < 0){ //scrolled bw
                        var el=mPS2idExt.target.call()[0][0]; //previous adjacent target
                        if(mPS2idData.layout==="horizontal"){
                            return el ? el.getBoundingClientRect().right < 0 : true; //previous target is before viewport
                        }else{
                            return el ? el.getBoundingClientRect().bottom < 0 : true; //previous target is above viewport
                        }
                    }
                },
                input:{
                    y: null,
                    x: null},
                i: null,
                time: null,
                support:{
                    wheel: false
                }
            }).on("ps2id-scrollSection",function(e,dlt,i){
                var sel=$(mPS2idExt.selector);
                if(!$("html,body").is(":animated")){
                    if(!i) i=mPS2idExt.currentSelector.call(sel);
                    if(!(i===0 && dlt>0) && !(i===sel.length-1 && dlt<0)) sel.eq(i-dlt).trigger("click.mPS2id");
                }
            }).on("keydown",function(e){ //keyboard
                var code=e.keyCode ? e.keyCode : e.which,
                    keys=$(this).data("mPS2id").layout==="horizontal" ? [37,39] : [38,40];
                if(code===keys[0] || code===keys[1]){
                    if(!mPS2idExt.needScroll((code > 38 ? 1 : -1))){ //check if normal scrolling is needed to reach adjacent targets
                        if($(mPS2idExt.selector).length) e.preventDefault();
                        $(this).trigger("ps2id-scrollSection",(code===keys[0] ? 1 : -1));
                    }
                }
            })
            //touch events (remove the following code if you don't want to apply the touch functionality)
                .on("pointerdown touchstart",function(e){ //touch (optional)
                    var o=e.originalEvent;
                    if(o.pointerType==="touch" || e.type==="touchstart"){
                        var y=o.screenY || o.changedTouches[0].screenY;
                        mPS2idExt.input.y=y;
                        if($(this).data("mPS2id").layout==="horizontal"){
                            var x=o.screenX || o.changedTouches[0].screenX;
                            mPS2idExt.input.x=x;
                        }
                        mPS2idExt.time=o.timeStamp;
                        mPS2idExt.i=mPS2idExt.currentSelector.call($(mPS2idExt.selector));
                    }
                }).on("pointerup touchend",function(e){
                var o=e.originalEvent;
                if(o.pointerType==="touch" || e.type==="touchend"){
                    var y=o.screenY || o.changedTouches[0].screenY,
                        diff=mPS2idExt.input.y-y,
                        time=o.timeStamp-mPS2idExt.time,
                        i=mPS2idExt.currentSelector.call($(mPS2idExt.selector));
                    if($(this).data("mPS2id").layout==="horizontal"){
                        var x=o.screenX || o.changedTouches[0].screenX,
                            diff=mPS2idExt.input.x-x;
                    }
                    if(Math.abs(diff)<2) return;
                    var _switch=function(){
                        return time<200 && i===mPS2idExt.i;
                    };
                    var dir=diff > 0 ? 1 : -1;
                    if(time < 500 && Math.abs(diff) > 50) $(this).trigger("ps2id-scrollSection",[(diff>0 && _switch() ? -1 : diff<0 && _switch() ? 1 : 0),(_switch() ? mPS2idExt.i : i)]);
                }
            })
            // -----
                .on("ps2id-wheel-init",function(){
                    //script initialization
                    mPS2idExt=$(this).data("mPS2idExtend");
                    $("._mPS2id-t").each(function(index){
                        $(this).attr("data-psid-wheel-section",index);
                    });
                    $("._mPS2id-h").each(function(index){
                        $(this).attr("data-psid-wheel-link",index);
                    });
                    //vanilla js mousewheel event (https://github.com/jquery/jquery/issues/2871)
                    document.addEventListener('wheel', wheel, {passive: false}, false);
                    document.addEventListener('mousewheel', wheel, {passive: false}, false);
                    document.addEventListener('DOMMouseScroll', wheel, {passive: false}, false);
                    function wheel(e){
                        if(e.type == "wheel"){
                            mPS2idExt.support.wheel = true;
                        }else if(mPS2idExt.support.wheel){
                            return;
                        }
                        if(!mPS2idExt.needScroll((mPS2idData.layout==="horizontal" ? e.deltaX : e.deltaY))){ //check if normal scrolling is needed to reach adjacent targets
                            if($(mPS2idExt.selector).length) e.preventDefault();
                            doc.trigger("ps2id-scrollSection",((e.detail<0 || e.wheelDelta>0 || e.deltaY < 0 || e.deltaX < 0) ? 1 : -1));
                        }
                    };
                }).trigger("ps2id-wheel-init");
        });

    })(jQuery);
</script>
</body>