$( function() {
   var replacePage = function( data ) {
      $( '#content' ).html( data );
   };
   $.ajax( {
      url: "content.html",
      data: {},
      success: replacePage,
      dataType: "html"
   } );
} );