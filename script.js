
function fillUnreadItems(){
 var count = 0;
	$('.fitem').each(function( index ) {
		var fillRequest = $.ajax({
  url: "feed.php",
  method: "POST",
  data: { itemid : $(this).attr('id') },
  dataType: "html"
 });
	fillRequest.done(function( data ) {		
		count++;
		data = jQuery.parseJSON(data);
 	$( '#'+data.itemid).html( data.canonical[0].href );
		 $( "#progressbar" ).progressbar({
		     value:Math.round( count / $('.fitem').size() * 100)
    });
	});
 
fillRequest.fail(function( jqXHR, textStatus ) {
   $( this ).html( "Request failed " );
});
});


}


$( document ).ready(function() {



$( "#accounts" ).change(function() {
	$( "#content" ).html("null");
	 $( "#progressbar" ).progressbar({
      value: false
    });
var request = $.ajax({
  url: "feed.php",
  method: "POST",
  data: { fid : $( "#accounts" ).val() },
  dataType: "html"
});

request.done(function( data ) {

 $( "#content" ).html( data );
	if (data != 'No unread items'){
 	fillUnreadItems();
 }
 else{
 	$( "#progressbar" ).progressbar({
      value: 100
    });
 }

});
 
request.fail(function( jqXHR, textStatus ) {
   $( "#content" ).html( "Request failed " );
});
});
});