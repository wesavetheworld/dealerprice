<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-9 index_right">
				   <div class="mens-toolbar">
						<div class="sort">
							<div class="sort-by">
								<label>Sort By</label>
								<select id='mob-sort'>
									<option value="Polularity">Polularity</option>
									<option value="Discount">Discount</option>
									<option value="Low">Low Price</option>
									<option value="High">High Price</option>
								</select>
								<a href=""><img src="<?=Yii::app()->theme->baseUrl?>/mob/images/arrow2.gif" alt="" class="v-middle"></a>
							</div>
						</div>
					</div>
				<div class="content_grid">
				    <div class="col_1_of_3 span_1_of_3" id='products'> 
						
				    </div>
					<div class="clear"></div>
					<div id="showloading"><h1>Loading...</h1></div>
			  </div>
		 </div>
		</div>
     </div>
	 </div></div>
<script type="text/javascript">
jQuery.fn.exists = function(){return ($(this).length > 0);}
$(document).ready(function(){
	var furl=window.location.href;
    $.get(furl,{limit: 0, ajax:true}, function(d){ $('#products').append(d); });
    var limit=12;
	var running = false;
    $(window).scroll(function() {
        if(($(window).scrollTop() + $(window).height()) >= ($(document).height()-230) && !running) {
			running = true;
			$('#showloading').show();
            var url = window.location.href;
            $.get(url, {limit: limit, ajax:true}, function(d){ $('#products').append(d); $('#showloading').hide(); running = false; });
			limit=limit+12;
        }
    });

	$('.sItm, .sPItm').click(function(){
        $.each($('.sItm'), function(i, v){ $(v).removeClass('activeS');});
        $.each($('.sPItm'), function(i, v){ $(v).removeClass('activeS');});
        $(this).addClass('activeS');
        var sort=$.trim($(this).text());
        var url = updateURLParameter(window.location.href, 'sort', sort);
		limit=12;
        updateURL(url, 0);
    });
});
function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != param){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}
function removeURLParameter(url, parameter) {
    //prefer to use l.search if you have a location/link object
    var urlparts= url.split('?');   
    if (urlparts.length>=2) {

        var prefix= encodeURIComponent(parameter)+'=';
        var pars= urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i= pars.length; i-- > 0;) {    
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                pars.splice(i, 1);
            }
        }

        url= urlparts[0]+'?'+pars.join('&');
        return url;
    } else {
        return url;
    }
}
function updateURL(url, limit)
{
        var state = {"canBeAnything": true};
        history.pushState(state, "Product Page", url);
        $.get(url, {limit: limit, ajax:true}, function(d){ $('#products').html(d); });
}
</script>