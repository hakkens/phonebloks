$( document ).ready( function() {

	var header = $( '#header' ),
		nav = header.find( 'nav' ),
		toggler = header.find( 'span' );

	toggler.click( function( e ) {

		$( this ).toggleClass( 'on' );
		nav.toggleClass( 'open' );

		e.preventDefault();

	});

	$( window ).scroll( function( e ) {

		if( document.body.scrollTop > 640 ) {
			header.addClass( 'over' );
		} else {
			header.removeClass( 'over' );
		}

		e.preventDefault();

	});

	$( '.item a' ).click( function(e) {

		var popup = $( '.overlay .inner' );
		popup.find( 'img, p' ).remove();

		$( this ).find( 'p' ).clone().prependTo( popup );

		var which = $( this ).find( 'img + span' ).length ? 'div img' : 'img';
		$( this ).find( which ).clone().prependTo( popup );

		if( which == 'div img' ) {
			$( '.overlay' ).find( 'img' ).addClass( 'big' );
		}

		$( '.overlay' ).css( 'display', 'flex' ).hide().fadeIn( 300 );
		e.preventDefault();

	});

	$( '.overlay .close' ).click( function( e ) {

		$( this ).closest( '.overlay' ).fadeOut( 300 );
		e.preventDefault();

	});

});