<!------ S C R I P T S! ------>


  <!---- masonry scripts ---->
    <script type="text/javascript" src="https://dl.dropboxusercontent.com/u/119999372/lolibrary%20catalog/lolibrary_catalog_files/000-database/jquerymasonry.js"></script>
    <script type="text/javascript">
    $(window).load(function () {
    var $content = $('#nodes');
    $content.masonry({itemSelector: '.entry'}),
    });
    });
    });
    </script>
  <!---- end masonry scripts -->

  <!---- hide/unhide scripts -->
    <script type="text/javascript" src="https://dl.dropboxusercontent.com/u/119999372/lolibrary%20catalog/lolibrary_catalog_files/000-database/jquery.js"></script>
    <script language="javascript">
      $(document).ready(function() {
        $('a.t').click(function() {
            $('.t',this).toggle();
        });
         
        $(".hidden").css({"height": "0px", "opacity":"0" });
        $("#buttonsend").toggle(
          function () {
            $("#hidden").animate({"height": "100px", "opacity":"1.0"}, "slow");
          },
          function () {
            $("#hidden").animate({"height": "0px", "opacity":"0"}, "slow");
        });
        $("#buttonsend2").toggle(
          function () {
            $("#hidden2").animate({"height": "50px", "opacity":"1.0"}, "slow");
          },
          function () {
            $("#hidden2").animate({"height": "0px", "opacity":"0"}, "slow");
        });
        $("#buttonsend3").toggle(
          function () {
            $("#hidden3").animate({"height": "100px", "opacity":"1.0"}, "slow");
          },
          function () {
            $("#hidden3").animate({"height": "0px", "opacity":"0"}, "slow");
        });
        $("#buttonsend4").toggle(
          function () {
            $("#hidden4").animate({"height": "150px", "opacity":"1.0"}, "slow");
          },
          function () {
            $("#hidden4").animate({"height": "0px", "opacity":"0"}, "slow");
        });
        $("#buttonsend5").toggle(
          function () {
            $("#hidden5").animate({"height": "70px", "opacity":"1.0"}, "slow");
          },
          function () {
            $("#hidden5").animate({"height": "0px", "opacity":"0"}, "slow");
        });
      });
    </script>
  <!---- end hide/unhide scripts -->

  <!------- filter scripts -------->
    <script src="https://dl.dropboxusercontent.com/u/119999372/lolibrary%20catalog/lolibrary_catalog_files/000-database/jquery-1.7.1.min.js"></script>
    <script src="https://dl.dropboxusercontent.com/u/119999372/lolibrary%20catalog/lolibrary_catalog_files/000-database/jquery.isotope.min.js"></script>
    <script src="https://dl.dropboxusercontent.com/u/119999372/lolibrary%20catalog/lolibrary_catalog_files/000-database/jquery.lazyload.js"></script>
    <script>$(window).load(function(){
     $(function(){
     
     var $container = $('#container');

     $container.isotope({
     itemSelector : '.item'
     });

    $("img").lazyload({
        event : 'scroll',
        effect : 'fadeIn',
        appear: function(){
            // console.log('loaded image');
        }
    });
     
     var $optionSets = $('#sort .option-set'),
     $optionLinks = $optionSets.find('a');

     $optionLinks.click(function(){
     var $this = $(this);
     // don't proceed if already selected
     if ( $this.hasClass('selected') ) {
     return false;
     }
     var $optionSet = $this.parents('.option-set');
     $optionSet.find('.selected').removeClass('selected');
     $this.addClass('selected');
     
     // make option object dynamically, i.e. { filter: '.my-filter-class' }
     var options = {},
     key = $optionSet.attr('data-option-key'),
     value = $this.attr('data-option-filter');
     // parse 'false' as false boolean
     value = value === 'false' ? false : value;
     options[ key ] = value;
     if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
     // changes in layout modes need extra logic
     changeLayoutMode( $this, options )
     } else {
     // otherwise, apply new options
     $container.isotope( options );
     }
     
     return false;
     });

     
     });});
   </script>
  <!-----end filter scripts------> 

</body></html>