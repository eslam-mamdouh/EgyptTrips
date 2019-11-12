function valign(id_to_align, id_of_parent)
{
    var parent_height = $("#"+id_of_parent).height();
    var obj_height = $("#"+id_to_align).height();

    if(obj_height < parent_height){
        var half_spare = (parent_height - obj_height) / 2;
        //alert("Half Spare: "+half_spare);
        $("#"+id_to_align).css('margin-top', half_spare+"px");
    }
}

function scroll_to(target, custom_offset)
{
    custom_offset = typeof custom_offset !== 'undefined' ? custom_offset : -60;
    $.scrollTo(target, 600, {offset: custom_offset});
}

function open_tab(tabset_id, tab_id)
{
    $('#'+tabset_id+' a[href="#'+tab_id+'"]').tab('show')
}

//Fade In on Scroll ---------------
(function($) {

    $.fn.visible = function(partial) {

        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);


//Fade In on Scroll ---------------
$(window).scroll(function(event) {

    $(".f_in").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("come-in");
        }
    });
});


function refreshEnquireList()
{
    $.get("/inc/ajax/enquireList.php", function(data){
        $("#changeEnquireList").html(data);
    });
}


function add_excursion_confirmation()
{
    $("#add_basket_modal").modal("show");

    $("#add_basket_modal_html").html('<div class="refreshing_tours"><i class="fa fa-refresh fa-spin"></i><p>Refreshing your tours</p></div>');
    $.get('/inc/ajax/add-excursion-confirmation.php', function(data) {
        $("#add_basket_modal_html").html(data);
    });
}

function addToEnquireList(mode, value, date, callback)
{
    var variables = "mode="+mode+"&value="+value;
    var url =  "/inc/ajax/addToEnquireList.php?"+variables+"&excursion_id="+value+"&date="+date;
    //alert(url);

    var div_to_change = "#change_add_"+value;
    $(div_to_change).html('<i class="fa fa-circle-o-notch fa-spin"></i> Adding Tour');

    //Update Book Button Count --------------------------------
    var cur_tours = parseInt($("#book_btn_badge").html());
    //console.log("Current Tours: "+cur_tours);

    if(! $.isNumeric(cur_tours)) {
        var cur_tours = 0;
        //console.log("Not Numeric, set to 0");
    }

    var new_tours_cnt = cur_tours + 1;
    //console.log("New Tours: "+new_tours_cnt);
    $("#book_btn_badge").html(new_tours_cnt);
    //Update Book Button Count --------------------------------


    $.get(url, function(data)
    {
        $(div_to_change).html(data);
        add_excursion_confirmation();

        // Record in Analytucs - Dont, seems to break refresh enquire list
        //_gaq.push(['_trackEvent', 'Add to Enquire Lists', value]);

        refreshEnquireList();

        // If we have given a callback then do it
        if(typeof(callback) == 'function') {
            callback(distance);
        }

    });
}





//Dont close favourites Dropdown on click ------------------------------------------------------------------------------
$('#fav_dropdown button').on('click', function (event) {
    $(this).parent().toggleClass('open');
});

$('body').on('click', function (e) {
    if (!$('#fav_dropdown').is(e.target)
        && $('#fav_dropdown').has(e.target).length === 0
        && $('.open').has(e.target).length === 0
    ) {
        $('#fav_dropdown').removeClass('open');
    }
});
//Dont close favourites Dropdown on click ------------------------------------------------------------------------------


function addToFavs(mode, excursion, list)
{
    var url =  "/inc/ajax/favourites.php?mode="+mode+"&excursion="+excursion+"&list="+list;
    $.get(url, function(data)
    {
        if(mode=="add"){
            $("#favs_heart").addClass('favs_in');
        } else {
            $("#favs_heart").removeClass('favs_in');
        }

        //$("#favs_list_"+list).html(data);
        $("#fav_dropdown_ul").html(data);
    });
}

function createFavList(excursion)
{
    var list_name = $("#newFavListInput").val();
    var url =  "/inc/ajax/favourites.php?mode=create_list&list_name="+list_name+"&excursion="+excursion;
    $.get(url, function(data)
    {
        $("#favs_heart").addClass('favs_in');
        $("#fav_dropdown_ul").html(data);
    });
}






function startup()
{
    addToEnquireList('load', 0);
}


$(document).ready(function() {

    //if this page has tour-nav
    if($('#tour-nav').length)
    {
        // Sockets Stick =======================================================================================================
        sockets_offset_top =  $('#tour-nav').offset().top;

        function check_sockets_scroll()
        {
            //if( $(window).scrollTop() > sockets_offset_top && $(window).scrollTop() < stop_sockets_offset_top )
            if( $(window).scrollTop() > sockets_offset_top )
            {
                $('#tour-nav').addClass("stick-top");
                //console.log("stick sockets");
                if ($(window).width() > 1000) {
                    $(".tour-nav-sale").show(300, "swing");
                    $("#tour-nav .navbar-nav > li > a").stop().animate({'padding-top': '0px'}, 100);
                }
            }
            else
            {
                $('#tour-nav').removeClass("stick-top");
                // console.log("dont stick sockets");
                if ($(window).width() > 1000) {
                    $(".tour-nav-sale").hide(300, "swing");
                    $("#tour-nav .navbar-nav > li > a").stop().animate({'padding-top': '79px'}, 50);
                }
            }
        }

        // Generic on Scroll to control ===========================================================================================
        $(window).on("scroll", function(){
            //$(window).scroll(function(){
            check_sockets_scroll();
        });
    }

});

