document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#card-slider', {
		perPage    : 2,
		breakpoints: {
			900: {
				perPage: 1,
			}
		}
	} ).mount();
} );
