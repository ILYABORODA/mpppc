;(function( $ ){
    $( function(){
        $( '#wpbody' ).on( 'click', '.notice.wicked-dismissable .wicked-dismiss', function(){
            $( this ).parents( '.notice' ).slideUp();
            var key = $( this ).attr( 'data-key' );
            var nonce = $( this ).attr( 'data-nonce' );
            $.ajax(
                ajaxurl,
                {
                    data: {
                        'action':   'wicked_folders_dismiss_message',
                        'nonce':    nonce,
                        'key':      key
                    },
                    method: 'POST',
                    dataType: 'json'
                }
            );
            return false;
        } );

        $( '#adminmenu a[href="wicked_folders_toggle"]' ).click( function(){
            if ( $( 'body' ).hasClass( 'wicked-object-folder-pane' ) ) {
                $( 'body' ).removeClass( 'wicked-object-folder-pane' );
                $( 'body' ).trigger( 'wickedfolders:toggleFolderPane', [ false ] );
            } else {
                $( 'body' ).addClass( 'wicked-object-folder-pane' );
                $( 'body' ).trigger( 'wickedfolders:toggleFolderPane', [ true ] );
            }

            return false;
        } );
    } );
})( jQuery );
