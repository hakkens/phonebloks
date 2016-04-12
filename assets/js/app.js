$( document ).ready( function() {

  if( $( '.hero video' ).length ) {

    var video = $( '.hero video' ),
      realDOM = video.get( 0 );

    if( document.body.clientWidth >= 992 ) {
      video.attr( 'autoplay', true );
      realDOM.play();
    }

    $( window ).resize( function() {

      if( document.body.clientWidth >= 992 ) {
        video.attr( 'autoplay', true );
        realDOM.play();
      } else {
        video.removeAttr( 'autoplay' );
        realDOM.pause();
      }

    });

  }

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

  $( '.item > div, .company > div' ).click( function(e) {

    $( '.overlay .inner' ).find( 'img, p' ).remove();

    var figure = $( '.overlay figure' ),
      figcaption = $( '.overlay figcaption' );

    $( this ).find( 'p' ).clone().prependTo( figcaption );

    $( this ).find( 'div img' ).clone().prependTo( figure );
    $( '.overlay' ).find( 'img' ).addClass( 'big' );

    $( '.overlay' ).fadeIn( 300 );
    e.preventDefault();

  });

  $( '.overlay .close' ).click( function( e ) {

    $( this ).closest( '.overlay' ).fadeOut( 300 );
    e.preventDefault();

  });

});
