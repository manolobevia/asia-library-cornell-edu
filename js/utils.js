/*
  By Osvaldas Valutis, www.osvaldas.info
  Available for use under the MIT License
*/

//Select only the li with ul
//$( '#nav li:has(ul)' ).doubleTapToGo();

$( document ).ready(function() {

  // Init megamenu for touch devices
    //$( '#nav li:has(ul)' ).doubleTapToGo();
    $( '#nav li:has(.wrapper)' ).doubleTapToGo();

    $('.sandwich').click(function(e){

        e.preventDefault();
        $(' #nav ').toggle();
      });


    // show/hide search on interior pages
            //search-slider
            //show-hide-search

            $(".search-slider").hide();
            //$(".show-hide-search").show();
            
            var searchHide = true;
            var $slider = $(".search-slider");
            //var $icon-search = $(".search-icon");



            var $sandwich = $('.sandwich');
  


              $('.show-hide-search').click(function(){


              if (searchHide) {

                    $slider.show();
                  

                    //$icon-search.hide();
                    
                    $('.close-search').show();
                    searchHide = false;
                }
              });


              $('.close-search').click(function(e){

                e.preventDefault();

                $slider.hide();

                //$sandwich.show();
                //$icon-search.show();

                $('.close-search').hide();
                searchHide = true;
              });



    /////////////////////////////
    // Home search filter
    // Toggle filter select list


     var $searchFilterList = $('#filter-search-nav');
     var $isFilterOpen = false;

     $('div.filter-search').click(function(e) {
         e.preventDefault();

         if (!$isFilterOpen) {

             //Change button filter state to selected
             
             //$(this).find('span').removeClass('glyphicon-chevron-down');
             //$(this).find('span').addClass('glyphicon-chevron-up');

             //Reveal filter select list
             $searchFilterList.css('display','block');

             $isFilterOpen = true;

         } else {
             //Change button filter state to default
             
             //$(this).find('span').removeClass('glyphicon-chevron-up');
             //$(this).find('span').addClass('glyphicon-chevron-down');

             //Hide filter select list
             $searchFilterList.css('display','none');

             $isFilterOpen = false;

         }
    });

     //
     //
     // Collect users' selection
     //
     // 
        var $selectedFilter = "Library Catalog";

       $('#filter-search-nav li').each(function(index){
           $(this).click(function(ev){
              
              ev.preventDefault();

              //console.log($(this).text());
              //Selected filter feedback
              $('.search-filter-selected').text($(this).text()).fadeIn('slow');
              $('input[name="classgroup"]').val('');

              $('.filter-search .active').text($(this).text());

              $selectedFilter = $(this).text();

              //console.log($(this).parent());

               //Hide filter select list
               //$searchFilterList.css('display','none');

               //console.log($searchFilterList);

               //Change button filter state to default
               //$('a.filter-search').css('background','url(../../themes/vivo-cornell/images/filteredSearch.gif) no-repeat right top');
               //$('a.filter-search').removeClass('glyphicon-chevron-up');
               //$('a.filter-search').addClass('glyphicon-chevron-down');

               
               $isFilterOpen = false;


           });

       });




       //When focus, hide filter select list and change filter button state to default
       $('input.search-homepage').focus(function(){

           $('input.search-homepage').attr("value","");
           $('input.search-homepage').css({
               'text-align' : 'left',
               'opacity' : 1
           });

           if (!$isFilterOpen) {

               $isFilterOpen = false;

           }else {

                //Hide filter select list
                    $('#filter-search-nav').hide();

                    //Change button filter state to default
                    //$('a.filter-search').css('background','url(../../themes/vivo-cornell/images/filteredSearch.gif) no-repeat right top');
                    //$('div.filter-search').find('span').removeClass('glyphicon-chevron-up');
                    //$('div.filter-search').find('span').addClass('glyphicon-chevron-down');

                    $isFilterOpen = false;

             }

       });

       


       $( '#search' ).submit(function(ev) {
          
          var send = $('.search-homepage').val() + '    ' + $selectedFilter;
          console.log(send);

          switch ($selectedFilter) {

                case 'Library Catalog':
                    $(this).attr("action", 'https://newcatalog.library.cornell.edu/search');
                    break;

                case 'Site Search':

                    $(this).attr("method", 'get');
                    $('input.search-homepage').attr("name",'keys');
                    $(this).attr("action", '/search/node/');
                    break;
            }



          //$(this).attr("action", 'https://search.library.cornell.edu');

        });

      
      //Add active class to parent link in megamenus

      


      $('.region-highlights .view-content').slick({
        
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                dots: true
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });






});

