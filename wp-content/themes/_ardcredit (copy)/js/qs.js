// qs is a QueryString parser. It parse between URL query string and JavaScript object

( function ( root, factory ) {
  root.qs = factory();
} ( this, function () {
  var qs = {}; // QueryString

  // Query string parser to JSON object
  qs.parse = function ( a ) {
    var b = {}, i, p;
    // If function argument not passes, it gives current query string of page from URL
    a = a || window.location.search;
    // Return empty JSON object then terminate proccess if query string is empty
    if ( a === '' ) {
      return b;
    }
    // Skip first character if it's question mark
    if ( a[ 0 ] === "?" ) {
      a = a.substr( 1 );
    }
    // Split by ampersand is skip that character and split query string arguments from each other simultaniously
    // Then variable a is array offthen string
    a = a.split( '&' );
    for ( i = 0; i < a.length; i += 1 ) {
      // Split by equal sign is seperate name and value of argument
      // Get first two element of result is for syntax error
      p = a[ i ].split( '=', 2 );
      // There is syntax error if restult of split by equal sign length is lower than two
      // else, decode value to URI syntax
      if ( p.length === 1 ) {
        b[ p[ 0 ] ] = "";
      } else {
        b[ p[ 0 ] ] = decodeURIComponent( p[ 1 ].replace( /\+/g, " " ) );
      }
    }
    return b;
  };

  // Query string builder from JSON object
  // It requires jQuery
  qs.stringify = function ( a ) {
    a = a || {};
    return $.param( a );
  };

  return qs;
}));
