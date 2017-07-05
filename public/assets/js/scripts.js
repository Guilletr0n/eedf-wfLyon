
$(document).ready(function(){

/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top 
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
*/

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);
});

/*       Modal      */

/* Load modal content*/

function loadmember(){
  var registericon="";
   $.ajax({
        //url: 'http://127.0.0.1/eedf-wfLyon/public/addUsermember',
        url: 'http:/eedfannonay.fr/public/addUsermember',
        type: "get",
        cache: false,
        success: function (data) {
            $(".infomember").remove();
            var tbodymember = $("#tbodymember");
              $.each(data, function(k,v){
                if(v.register==1){
                  registericon="<span class='glyphicon glyphicon-ok' data-toggle='tooltip' data-placement='right' title='Confirmer, vous pouvez participer aux évènements'></span>";
                }else{
                  registericon="<span class='glyphicon glyphicon-remove'data-toggle='tooltip' data-placement='right' title='En attende de confirmation, vous ne pouvez pas encore participer aux évènements'></span>";
                }
                tbodymember.append('<tr class="infomember"><td>'+v.rank+'</td><td>'+v.name+'</td><td>'+v.firstname+'</td><td>'+v.totem+'</td><td>'+registericon+'</td></tr>');
              });
            console.log('ajaxsuccess !');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('ajaxError !');
        }
    });
}

/*  btnmember */
$("#memberBtn").click(function(){
        loadmember();
        $("#Modalmember").modal();
      });

/*  btnnewmember */
$("#newmemberbtn").click(function(){
        $( "#divaddUsermember" ).slideToggle( "slow" );
        var newmember = $('#newmemberbtn').val();
      });

/* btnaddusermember */
$('#addUsermember').click(function () {
    var name = $('#name').val();
    var firstname = $('#firstname').val();
    var id_section = $('#id_section').val();
    var totem = $('#totem').val();
    var infosup = $('#infosup').val();
    var registericon="";
    console.log('AjaxStart !');
    $.ajax({
        //url: 'http://127.0.0.1/eedf-wfLyon/public/addUsermember',
        url: 'http:/eedfannonay.fr/public/addUsermember',
        data: { 'name' : name, 'firstname' : firstname,'id_section' : id_section, 'totem' : totem, 'infosup' : infosup},
        type: "post",
        cache: false,
        success: function (data) {
            $("#alertinfo").append("<div class='alert alert-success fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong>Success !</strong>  Le membre : "+data.firstname+" "+data.name+" a été ajouté avec succès.</div>");
            $( "#divaddUsermember" ).slideToggle( "slow" );
            loadmember();
            console.log('ajaxsuccess !');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log('ajaxError !');
            $("#alertinfo").append("<div class='alert alert-danger fade in alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a><strong>Error !</strong>  Un problème à été rencontré.</div>");
        }
    });
    
});

$(".vignets").addClass("load");
$(".vignets2").addClass("load");

      //$('.nav').affix({offset: {} });
/* copy loaded thumbnails into carousel 
$('.panel .img-responsive').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});
*/
/* activate the carousel 
$('#modalCarousel').carousel({interval:false});
*/

/* change modal title when slide changes 
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})
*/

/* when clicking a thumbnail 
$('.panel-thumbnail>a').click(function(e){
  
    e.preventDefault();
    var idx = $(this).parents('.panel').parent().index();
  	var id = parseInt(idx);
  	
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	return false;
});*/





/* google maps 
google.maps.visualRefresh = true;

var map;
function initialize() {
	var geocoder = new google.maps.Geocoder();
	var address = $('#map-input').text(); /* change the map-input to your address */
/*	 var mapOptions = {
    	zoom: 15,
    	mapTypeId: google.maps.MapTypeId.ROADMAP,
     	scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	
  	if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                {
                  content: address,
                  map: map,
                  position: results[0].geometry.location,
                });

            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 

          } else {
          	alert("No results found");
          }
        }
      });
	}
}
google.maps.event.addDomListener(window, 'load', initialize);
*/
/* end google maps */


});