;(function($) {

	var main = {
		w: $(window),
		d: $(document),
		init: function(){
			
			this.global.init();
			this.header.init();
			this.sidebar.init();
			this.frontpage.init();
			this.single.init();
			this.index.init();
			this.page.init();
			this.products.init();
			//main.lightbox.init();

		},


		loaded: function(){
			
		},

		global: {
			init: function(){
				var searchinput = $('.search-form input');

			    searchinput.on('focus', function() {
			    	$(this).animate({width:'200px'}, 500);
			    }).blur(function() {
    				$(this).animate({width:'105px'}, 500);
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
				
				main.w.on('scroll', this.scroll).trigger('scroll');
			},
			scroll: function(){
				var scrollTop = main.w.scrollTop(),
					body = main.body.element;

				if(scrollTop > 10 && !body.hasClass('header-fixed')) {
					body.addClass('header-fixed');
				} else if(scrollTop < 10 && body.hasClass('header-fixed')) {
					body.removeClass('header-fixed');
				}
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

		frontpage: {
			element: $('#front-page'),
			init: function(){

				var element = this.element;

				if(!element.length) return false;
				
				this.carousel.init();
			},
			carousel: {
				element: $('.featured-carousel'),
				init: function(){

					var element = this.element;

					if(!element.length) return false;

					element.owlCarousel({
						loop: true,
					    dots: true,
					    nav: false,
					    items: 1,
						animateOut: 'fadeOut',
						animateIn: 'fadeIn'				    
					});
				}
			}
		},

		single: {
			element: $('#single'),
			init: function(){
				var element = this.element;

				if(!element.length) return false;

				this.comments.init();

			},

			comments: {
				element: $('.post-comments'),
				init: function(){
					var element = main.single.comments.element;

					if(!element.length) return false;
					
					var trigger = $('.comment-btn');
					trigger.on('click', function(e) {
						e.preventDefault();
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

		products: {
			element: $('#archive-product'),
			init: function(){
				var element = this.element;

				if(!element.length) return false;

				var list = $('.product-list', element),
					nextbtn = $('.products-navigation .next-btn', element);

				list.infinitescroll({
					ajax: {
						url: url.ajax,
						data: {
							action: 'get_products',
							category: list.data('category')
						}
					},
					template:  $('#product-item-template').html(),
					total: 20,
					scroll: false,
					loading: function(){
						nextbtn.text("Loading...");
					},
					loaded: function(){
						nextbtn.text("Load More");
					},
					complete: function(){
						nextbtn.text("No more to load");

						// setTimeout(function(){
						// 	nextbtn.fadeOut();
						// }, 1000);
					}
				});

				nextbtn.text("Load More").on('click', function(e){
					e.preventDefault();
					list.infinitescroll('load');
				});

			},filters: {
				element: $('.filters'),
				init: function(){
					var element = this.element,
						category = $('.category', element);
					
					category.on('change', function(){
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

