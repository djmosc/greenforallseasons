!function($){var e={w:$(window),d:$(document),init:function(){e.global.init(),e.header.init(),e.sidebar.init(),e.single.init(),e.page.init(),e.lightbox.init()},loaded:function(){},global:{init:function(){$(".owl-carousel").owlCarousel({loop:!0,dots:!0,nav:!0,items:1})}},body:{element:$("body")},header:{element:$("#header"),init:function(){var n=e.header.element,t=$(".menu-btn",n);t.on("click",function(e){e.preventDefault(),n.toggleClass("navigation-open")})}},sidebar:{element:$("#sidebar"),init:function(){var n=e.body.element,t=e.sidebar.element;if(!t.length)return!1;var i=$(".mobile-sidebar-btn",t);i.on("click",function(e){e.preventDefault(),n.toggleClass("sidebar-open")}),e.sidebar.products.init(),e.sidebar.instagram.init()},products:{init:function(){}}},subscribe:{element:$("#subscribe"),init:function(){var n=e.subscribe.element;return n.length?($(".close-btn",n).on("click",function(){n.removeClass("visible")}),setTimeout(function(){n.addClass("visible"),$.cookie("subscribe_viewed","1",{expires:7})},1e4),void $.removeCookie("subscribe_viewed")):!1}},index:{element:$("#index"),init:function(){var n=e.index.element;return n.length?void 0:!1}},archive:{init:function(){var n=e.archive.element=$("#archive");if(!n.length)return!1;var t=e.archive.form=$(".filters form",n),i=$(".category",t),o=$(".date",t);o.on("change",function(){t.attr("action",$(this).val()),t.submit()}),i.on("change",function(){t.submit()})}},single:{element:$("#single"),init:function(){var n=e.single.element;return n.length?(e.single.featuredimage.init(),e.single.content.init(),e.single.products.init(),void e.single.carousel.init()):!1},featuredimage:{element:$(".featured-image"),init:function(){var n=e.single.featuredimage.element;$(".btn",n).on("click",function(n){n.preventDefault();var t=$(this).data("id");e.single.carousel.load(t)})}},content:{element:$(".post-content"),init:function(){var n=e.single.content.element;$("> *",n).each(function(){var e=$(this);0===$("img, div, hr",this).length&&e.addClass("text")})}},carousel:{element:$(".post-carousel"),init:function(){var e=this.element;return e.length?void e.owlCarousel({items:1,center:!1,loop:!0,autoWidth:!1,nav:!0,dots:!1,navText:!1}):!1}},products:{element:$(".post-products"),init:function(){var n=e.single.products.element;return n.length?void 0:!1}}},page:{element:$("#page"),init:function(){var e=this.element;return e.length?void 0:!1}},addToUrl:function(e,n){var t=new RegExp("(\\?|\\&)"+n+"=.*?(?=(&|$))"),i=/\?.+$/;return e=t.test(e)?e.replace(t,"$1"+n+"=true"):i.test(e)?e+"&"+n+"=true":e+"?"+n+"=true"},template:{parse:function(e,n){return e.replace(/\{([\w\.]*)\}/g,function(e,t){for(var i=t.split("."),o=n[i.shift()],r=0,a=i.length;a>r;r++)o=o[i[r]];return"undefined"!=typeof o&&null!==o?o:""})}}};window.main=e,$(function(){window.main.init()})}(jQuery);