	$('a.lang').click(function() {
	    var d = window.location.href;

	    var n = removeURLParameter(d, "lang");

	    n = n.split('?');

	    console.log(n[1]);

	    if(!(n[1] == null || n[1] == 'undefined'))
	    {
	    	window.location = '?lang=' + $(this).attr("value") + '&' + n[1];
	    }
	    else
	    {
	    	window.location = '?lang=' + $(this).attr("value");
	    }
	});
	function removeURLParameter(url, parameter) {
	    //prefer to use l.search if you have a location/link object
	    var urlparts = url.split('?');
	    if (urlparts.length >= 2) {

	        var prefix = encodeURIComponent(parameter) + '=';
	        var pars = urlparts[1].split(/[&;]/g);

	        //reverse iteration as may be destructive
	        for (var i = pars.length; i-- > 0;) {
	            //idiom for string.startsWith
	            if (pars[i].lastIndexOf(prefix, 0) !== -1) {
	                pars.splice(i, 1);
	            }
	        }

	        url = urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : "");
	        return url;
	    } else {
	        return url;
	    }
	}
	if (urlParam('sub') == 'undefined') {
	    $('.title_change').html(convertirDialogo(title_example));
	    $('.button_1_change').html(convertirDialogo(accept_example));
	    $('.button_0_change').html(convertirDialogo(cancel_example));
	}