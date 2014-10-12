// this is the java script for the add item page 

$( '#image' ).on( 'click', add_image );

// show and hide the navigation dropdown buttons

$( '#page_title_div' ).hover( function()
{
    if( $( '#title_dropdown' ).is( ':hidden' ) )
    {
        $( '#title_dropdown' ).slideDown();  
    }
    else
    {
        $( '#title_dropdown' ).hide();  
    }
}); 

function add_image(){
    $( '#upload_image' ).click(); 
    console.log( 'upload new image' ); 
}

function add_new_item()
{
    $.ajax({
        url : "../../items.php",
        type: 'POST',
        data : {
            name:        $( '#title' ).val(), 
            price:       $( '#asking_price' ).val(), 
            description: $( '#description' ).val(), 
            user_id:     'stuffisgood', 
            image_url:   'blah.jpg' 
        }, 
        success: function(data, textStatus, jqXHR)
        {
            console.log( 'item sent successfully' );
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert( 'error ' + errorThrown );
        }
    });
}


