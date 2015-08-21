function TogglePropertyStatus(propertyid) {
    

    var ajaxIndicatorUrl = 'images/snake_transparent.gif';
    jQuery.ajax({
        type: "Get",
        url: '/services/AjaxTogglePropertyStatus.ashx?PropertyId=' + propertyid,
        async: true,
        dataType: "json",
        beforeSend: function (xhr) {
            jQuery("#toggle_" + propertyid).html('<img id="ajaxIndicator" width="5px" src="' + ajaxIndicatorUrl + '" />');
        },
        success: function (json) {

            if (json.Success == "True") {

              /*  if (ShowStatus == -1) {
                    if (json.Status == 1)
                        jQuery("#toggle_" + propertyid).html("Remove");
                    else
                        jQuery("#toggle_" + propertyid).html("Approve");
                } else {
                    if (ShowStatus != json.Status)                        
                        jQuery("#property_" + propertyid).slideUp('slow');
                }
                */
                if (ShowStatus != json.Status)    
                    jQuery("#property_" + propertyid).slideUp('slow');
            }
            else {
                jQuery("#toggle_" + propertyid).html("Error");
            }

            jQuery('#ajaxIndicator').remove();

        },
        error: function (err) {
            jQuery("#toggle_" + propertyid).html("Error2");
            jQuery('#ajaxIndicator').remove();
        }
    });
    return false;

}



function AjaxPostdata(form,url) {
    var formData = jQuery("#" + form).serialize()
    
    var ajaxIndicatorUrl = 'images/snake_transparent.gif';
    jQuery.ajax({
        type: "Post",
        url: url,
        async: true,
        data: formData,
        dataType: "json",
        beforeSend: function (xhr) {
            jQuery("#response").html('<img id="ajaxIndicator" src="' + ajaxIndicatorUrl + '" />');
            jQuery("#response").show();
            jQuery("#submit").hide();
        },
        success: function (json) {
            MessageGlow("response", json.Message);
            //jQuery("#Response").html("<b>" + json.Message + "</b>");
            if (json.Success == "False") {
                jQuery("#submit").show();
            }

        },
        error: function (err) {

            MessageGlow("response", err.statusText);
            //jQuery("#response").html("<b>" + err.statusText + "</b>");
            jQuery("#submit").show();
            jQuery('#ajaxIndicator').remove();
        }
    });
    return false;

}

function MessageGlow(ctrl, msg) {
    jQuery("#" + ctrl).html(msg);
    jQuery("#" + ctrl).fadeTo('slow', 0.4, function () { jQuery("#" + ctrl).fadeTo('slow', 1) });
}