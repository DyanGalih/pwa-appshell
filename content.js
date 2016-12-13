$( function() {
   var parseData = function( data ) {
      var sub_content = document.getElementById( 'sub-content' );
      var template = Hogan.compile( sub_content.innerHTML );
      var output = template.render( data );
      sub_content.innerHTML = output;
   };
   $.ajax( {
      url: "content.json",
      data: {},
      success: parseData,
      dataType: "json"
   } );
} );