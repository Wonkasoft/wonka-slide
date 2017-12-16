( function() {
'use strict'

	window.onload = function () {
	 var slide_time = setInterval( slide_interval, 4000);
	};

	function slide_interval() {
		clearInterval(slide_time);
		var slider_items = document.getElementsByClassName('wonka-slider-item');
		for (var i = 0; i < slider_items.length; i++) {
				var n = i + 1;
				var current_indicator = document.getElementById( 'slide-indicator-' + n );
				var next_indicator = document.getElementById( 'slide-indicator-' + (n + 1) );
				var first_indicator = document.getElementById( 'slide-indicator-' + 1 );
				var el = slider_items[i];
				var next_el = slider_items[n];
				var first_el = slider_items[0];
				console.log(n);
				console.log(next_indicator);
			if ( i == slider_items.length-1 && el.classList.contains('active') ) {
				el.classList.add('left-slide-out');
				document.querySelector('.left-slide-out').style.right = '105%';
				setTimeout(function(){el.classList.remove('active');}, 1500);
				setTimeout(function(){el.classList.remove('left-slide-out');}, 1500);
				setTimeout(function(){slider_items[0].classList.add('right-slide-in');}, 1500);
				setTimeout(function(){slider_items[0].style.left = '0';}, 1500);
				setTimeout(function(){slider_items[0].classList.add('active');}, 1500);
				setTimeout(function(){slider_items[0].classList.remove('right-slide-in');}, 1500);
				setTimeout(function(){el.removeAttribute('style');}, 1500);
				setTimeout(function(){slider_items[0].removeAttribute('style');}, 1500);
				break;
			} else if ( el.classList.contains('active') ) {
				el.classList.add('left-slide-out');
				el.classList.remove('active');
				el.style.right = '0%';
				setTimeout(function(){el.style.right = '105%'; current_indicator.classList.remove('active-ref');}, 1500);
				setTimeout(function(){el.classList.remove('left-slide-out'); next_el.classList.add('right-slide-in'); next_el.style.left = '105%';}, 1500);
				setTimeout(function(){next_el.style.left = '0'; next_el.classList.add('active'); next_el.classList.remove('right-slide-in'); next_indicator.classList.add('active-ref');}, 1500);
				setTimeout(function(){el.removeAttribute('style'); next_el.removeAttribute('style');}, 1500);
				break;
			}
		}

	}



})();