( function() {
'use strict'

var slider,
controls,
slide_time,
current_indicator,
next_indicator,
first_indicator,
el,
next_el,
first_el;

	
	window.onload = function () {
		if (document.getElementById('wonka-slider-main')) {
			slider = document.getElementById('wonka-slider-main');
			slide_time = setInterval( slide_interval, 4000);
			set_controls();
		}
	};
	
	function slide_interval() {
		clearInterval(slide_time);
		var slider_items = document.getElementsByClassName('wonka-slider-item');
		for (var i = 0; i < slider_items.length; i++) {
				var n = i + 1;
				current_indicator = document.getElementById( 'slide-indicator-' + n );
				next_indicator = document.getElementById( 'slide-indicator-' + (n + 1) );
				first_indicator = document.getElementById( 'slide-indicator-' + 1 );
				el = slider_items[i];
				next_el = slider_items[n];
				first_el = slider_items[0];
			if ( i == slider_items.length-1 && el.classList.contains('active') ) {
				wonka_queue(el, first_el, current_indicator, first_indicator, 200);
				break;
			} else if ( el.classList.contains('active') ) {
				wonka_queue(el, next_el, current_indicator, next_indicator, 200);
				break;
			}
		}
	}

	function wonka_queue(cur_el, x_el, cur_ind, x_ind, time) {
		setTimeout(function(){
			cur_el.classList.add('left-slide-out'); 
			cur_el.classList.remove('active'); 
			cur_el.style.right = '0%';
			setTimeout(function(){
				cur_el.style.right = '105%'
				if ( cur_ind != null ) {
					cur_ind.classList.remove('active-ref');
				}
					setTimeout(function(){
						cur_el.classList.remove('left-slide-out'); 
						x_el.classList.add('right-slide-in'); 
						x_el.style.left = '105%';
						setTimeout(function(){
							x_el.style.left = '0%'; 
							if ( x_ind != null ) {
								x_ind.classList.add('active-ref');
							}
							setTimeout(function(){
								x_el.classList.remove('right-slide-in'); 
								x_el.classList.add('active'); 
								setTimeout(function(){
									cur_el.removeAttribute('style'); 
									x_el.removeAttribute('style');
									setTimeout(function(){
										slide_time = setInterval( slide_interval, 4000);
									}, time);
								}, time);
							}, time);	
						}, time);
					}, time);
			}, time);
		}, time);

	}

	function set_controls() {
		
	}


})();