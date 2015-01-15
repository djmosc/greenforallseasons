;(function($) {

	window.main = {
		w: $(window),
		d: $(document),
		init: function(){
			
			main.global.init();
			main.header.init();
			main.sidebar.init();
			main.single.init();
			main.page.init();
			main.lightbox.init();

		},


		loaded: function(){
			
		},

		global: {
			init: function(){

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
				main.sidebar.instagram.init();


			},
			products: {
				init: function(){

				}
			},
			instagram: {
				element: $('#sidebar .widget_instagram'),
				init: function(){
					var element = main.sidebar.instagram.element;

					if(!element.length) return false;
					
					var carousel = $('.owl-carousel', element),
						options = {
							loop: true,
							items: 1,
							nav: true,
							navText: false,
							dots: false
						};

					carousel.owlCarousel(options);
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

		index: {
			element: $('#index'),
			init: function(){
				var element = main.index.element;

				if(!element.length) return false;

					

			}
		},

		archive: {
			init: function(){
				var element = main.archive.element = $('#archive');

				if(!element.length) return false;

				var form = main.archive.form = $('.filters form', element),
					category = $('.category', form),
					date = $('.date', form);
	
				date.on('change', function(){
					form.attr('action', $(this).val());
					form.submit();
				});

				category.on('change', function(){
					form.submit();
				});

			}
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

					$('.gallery-btn', element).on('click', function(e){
						e.preventDefault();
						var image = $(this),
							id = image.data('id');
						if( !id ) {
							var classes = image.attr('class'),
						   		id = classes.replace(/(.*?)wp-image-/, '');
						}
						main.single.carousel.load(id);
					});
				}
			},

			carousel: {
				element: $('.post-carousel'),
				init: function(){

					var element = main.single.carousel.element;

					if( !element.length ) return false;

					setTimeout(function(){
						main.single.carousel.create();
					}, 1000);
					

					// main.d.on('click', '.owl-item', function(){
					// 	var item = $('.item', this),
					// 		id = item.data('id'),
					// 		index = item.data('index');
					// 	main.single.carousel.element.trigger('to.owl.carousel', [index, 1000, true]);
					// });
				},
				load: function(id){
					main.lightbox.load({
						url: url.ajax,
						type: 'post',
						data: {
							action: 'post_carousel',
							post_id: post.id
						}
					}, function(data){
						var items = $('.item', main.lightbox.content),
							index = (id) ? items.filter('[data-id='+id+']').data('index') : 0;

						main.single.carousel.element = $('.post-carousel', main.lightbox.content);

						main.single.carousel.open(index);
					});
				},
				open: function(index){
					var element = main.single.carousel.element,
						index = index || 0;
					
					setTimeout(function() {
						main.single.carousel.create(index);
						element.hide().fadeIn();

					}, 2000);
				},
				create: function(index){
					var element = main.single.carousel.element;
					
					element.owlCarousel({
						items: 1,
						center: false,
						loop: true,
						autoWidth: false,
						nav: true,
						dots: false,
						navText: false,
						//lazyLoad: true,
						margin: 30,
						startPosition: index,
						responsive: {
							1200: {
								center: true,
								autoWidth: true,
								items: 3
							}
						}
					});

					// var item = $('.item', element).filter('[data-index='+ index +']');

					// if(item) {
					// element.imagesLoaded(function(){
					// 	setTimeout(function(){
					// 		element.trigger('refresh.owl.carousel');
					// 		main.single.carousel.resized();
					// 	}, 500);
					// });
					// }

					//element.on('initialize.owl.carousel resize.owl.carousel', main.single.carousel.resized);
					$('.description', element).expander();
				},
				resized: function(){
					var element = main.single.carousel.element,
						items = $('.owl-item', element),
						width = element.width();
					
					items.each(function(){
						var item = $(this),
							image = $('img', item);

						if(image.width() > width) {
							item.width(width);
						}
					});
				}
			},

			products: {
				element: $('.post-products'),
				init: function(){
					var element = main.single.products.element;

					if(!element.length) return false;

				}
			}
		},

		page: {
			element: $('#page'),
			init: function(){
				var element = main.page.element;

				if(!element.length) return false;

				main.single.content.init();

			}
		},

		lightbox: {
			element: $('#lightbox'),
			init: function(){

				var lightbox = main.lightbox,
					element = lightbox.element;

				if( !element.length ) return false;

				var content = lightbox.content = $('> .content', element),
					preloader = lightbox.preloader = $('> .preloader', element),
					overlay = lightbox.overlay = $('> .overlay', element),
					closebtn = lightbox.closebtn = $('> .close-btn', element);

				$('.lightbox-btn').on('click', function(e){
					e.preventDefault();
					var url = $(this).attr('href');
					main.lightbox.open(url);
				});

				overlay.on('click', lightbox.close);

				closebtn.on('click', lightbox.close);
			},
			open: function(url){
				var lightbox = main.lightbox;

				lightbox.load({
					url: url
				});
			},
			load: function(options, callback){

				var lightbox = main.lightbox,
					element = lightbox.element,
					content = lightbox.content,
					preloader = lightbox.preloader,
					overlay = lightbox.overlay;

				element.addClass('visible');
				preloader.addClass('visible');
				overlay.addClass('visible');

				$.ajax(options).done(function(data){
					if(data) {
						main.lightbox.loaded(data);
						if(callback) callback(data);
					} else {
						main.lightbox.close();
					}
				}).fail(function(){
					main.lightbox.close();
				});
			},
			loaded: function(data){
				var lightbox = main.lightbox,
					content = lightbox.content,
					preloader = lightbox.preloader;

				content.html(data).addClass('visible');
				preloader.removeClass('visible');

				setTimeout(function(){
					lightbox.ready();
				}, 500);
			},

			ready: function(){

			},

			close: function(){
				var lightbox = main.lightbox,
					element = lightbox.element,
					content = lightbox.content;

				element.removeClass('visible');
				content.removeClass('visible').empty();
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

		equalHeight: function(){
			if($('.equal-height').length !== 0){
		
				var currTallest = 0,
				currRowStart = 0,
				rowDivs = [],
				topPos = 0;

				$('.equal-height').each(function() {

					var element = $(this);
					topPos = element.position().top;
					if (currRowStart !== topPos) {

						for (var i = 0; i < rowDivs.length ; i++) {
							rowDivs[i].height(currTallest);
						}

						rowDivs.length = 0;
						currRowStart = topPos;
						currTallest = element.height();
						rowDivs.push(element);

					} else {
						rowDivs.push(element);
						currTallest = (currTallest < element.height()) ? (element.height()) : (currTallest);
					}

					for (var ii = 0 ; ii < rowDivs.length ; ii++) {
						rowDivs[ii].height(currTallest);
					}

				});
			}
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

	$(function(){
		window.main.init();
	});

})(jQuery);

