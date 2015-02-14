;(function($) {

	var main = {
		w: $(window),
		d: $(document),
		init: function(){
			
			this.global.init();
			this.header.init();
			this.sidebar.init();
			this.single.init();
			this.index.init();
			this.page.init();
			//main.lightbox.init();

		},


		loaded: function(){
			
		},

		global: {
			init: function(){
				$('.owl-carousel').owlCarousel({
					loop:true,
				    dots:true,
				    nav:true,
				    items: 1
				});
			}
		},

		body:{
			element: $('body')
		},

		header: {
			element: $('#header'),
			init: function(){
				var header = main.header.element,
					menuBtn = $('.menu-btn', header);

				menuBtn.on('click', function(e){
					e.preventDefault();
					header.toggleClass('navigation-open');
				});
			}
		},

		sidebar: {
			element: $('#sidebar'),
			init: function(){
				var body = main.body.element,
					element = main.sidebar.element;

				if(!element.length) return false;
				var menuBtn = $('.mobile-sidebar-btn', element);

				menuBtn.on('click', function(e){
					e.preventDefault();
					body.toggleClass('sidebar-open');
				});

				main.sidebar.products.init();
				//main.sidebar.instagram.init();


			},
			products: {
				init: function(){

				}
			}
		},

		subscribe: {
			element: $('#subscribe'),
			init: function(){
				var element = main.subscribe.element;

				if(!element.length) return false;

				$('.close-btn', element).on('click', function(){
					element.removeClass('visible');
				});

				setTimeout(function(){
					element.addClass('visible');
					$.cookie('subscribe_viewed', '1',{ expires: 7 });
				
				}, 10000);

				$.removeCookie('subscribe_viewed');

			},
		},

		single: {
			element: $('#single'),
			init: function(){
				var element = main.single.element;

				if(!element.length) return false;

				main.single.featuredimage.init();
				main.single.content.init();
				main.single.products.init();
				main.single.carousel.init();
				main.single.comments.init();

			},
			featuredimage: {
				element: $('.featured-image'),
				init: function(){
					var element = main.single.featuredimage.element;

					$('.btn', element).on('click', function(e){
						e.preventDefault();
						var id = $(this).data('id');
						main.single.carousel.load(id);
					});
				}
			},

			content: {
				element: $('.post-content'),
				init: function(){

					var element = main.single.content.element;

					$('> *', element).each(function(){
						var instance = $(this);
						if($('img, div, hr', this).length === 0 ) {
							instance.addClass('text');
						}
					});
				}
			},

			carousel: {
				element: $('.post-carousel'),
				init: function(){

					var element = this.element;

					if( !element.length ) return false;

					element.owlCarousel({
						items: 1,
						center: false,
						loop: true,
						autoWidth: false,
						nav: true,
						dots: false,
						navText: false,
					});
					
				}
			
			},

			products: {
				element: $('.post-products'),
				init: function(){
					var element = main.single.products.element;

					if(!element.length) return false;

				}
			},

			comments: {
				element: $('.post-comments'),
				init: function(){
					var element = main.single.comments.element;

					if(!element.length) return false;
					
					var trigger = $('.comment-btn');
					trigger.on('click', function(event) {
						event.preventDefault();
						main.single.comments.element.slideToggle(400);
					});

				}				
			}

		},

		page: {
			element: $('#page'),
			init: function(){
				var element = this.element;

				if(!element.length) return false;

			}
		},

		index: {
			element: $('#index'),
			init: function(){
				var element = this.element;

				if(!element.length) return false;

				this.filters.init();

			},

			filters: {
				element: $('.filters'),
				init: function(){
					var element = this.element,
						category = $('.category', element),
						date = $('.date', element);
	
					category.on('change', function(){
						window.location.href = $(this).val();
					});

					date.on('change', function(){
						window.location.href = $(this).val();
					});
				}
			}
		},

		addToUrl: function(url, query){
			var regex = new RegExp('(\\?|\\&)'+query+'=.*?(?=(&|$))'),
				qstring = /\?.+$/;

			if (regex.test(url)){
				url = url.replace(regex, '$1'+query+'=true');
			} else if (qstring.test(url)) {
				url = url + '&'+query+'=true';
			} else {
				url =  url + '?'+query+'=true';
			}

			return url;
		},

		template: {
			parse: function (template, data) {
				return template.replace(/\{([\w\.]*)\}/g, function(str, key) {
					var keys = key.split("."), v = data[keys.shift()];
					for (var i = 0, l = keys.length; i < l; i++) v = v[keys[i]];
					return (typeof v !== "undefined" && v !== null) ? v : "";
				});
			}
		}
	};

	window.main = main;

	$(function(){
		window.main.init();
	});

})(jQuery);

