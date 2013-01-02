jQuery(document).ready(function(){
    jQuery(".gen_shortcode").live('change',function(){
        var $categ_rss=jQuery("#categ_rss_select").val();
        var $select_cat;
        var $external_rss="";
        switch($categ_rss){
					case "1":
						$select_cat=jQuery("#category_item").val();
						jQuery('div[class*="external_full"]').fadeOut();
						break;            
					case "3":
						$select_cat="R";
						$external_rss=" prd='"+jQuery('#aff_prd').val()+"'";
						jQuery('div[class*="external_full"]').fadeOut();
						break;
					default:
						jQuery('div[class*="external_full"]').hide();
						jQuery(".external_full"+$categ_rss).fadeIn();
					break;
        }
        var $color=jQuery("#readmore_color").val();
        switch($color){
            case "nobutton":              
            case "white":
                break;
            default:
                $color="nobutton";
        }
        $show_title=jQuery("#show_title").attr("checked")?" showtitle='1'":"";
        $show_excerpt=jQuery("#show_excerpt").attr("checked")?" showexcerpt='1'":"";
        $show_image=jQuery("#show_image").attr("checked")?" showimage='1'":"";
        $masonry=jQuery("#enable_masonry").attr("checked")?" masonry='1'":"";
        jQuery("#matrix_shortcode").val("[wpts_matriz boxwidth='"+jQuery("#boxwidth").val()+"' category='"+$select_cat+"' posts='"+jQuery("#posts_number").val()+"' boxstyle='1' buttoncolor='"+$color+"' titlesize='"+jQuery("#title_fontsize").val()+"' contentsize='"+jQuery("#content_fontsize").val()+"' titlefont='"+jQuery("#title_fontstyle").val()+"' contentfont='"+jQuery("#content_fontstyle").val()+"'"+$external_rss+$show_title+$show_excerpt+$show_image+$masonry+"]");
    });
    jQuery("label").click(function(){
        if(jQuery(this).attr("for")=="posts_limit"){
            jQuery(".limit_full").fadeIn();
        }else{
            jQuery(".limit_full").fadeOut();
        }
    });
    jQuery("input,textarea,select").focus(function(){
        jQuery(".limit_full").fadeOut();
    });
    jQuery(".numericfield").live('keypress',function(event){    
        if(isNaN(String.fromCharCode(event.charCode))){
            event.preventDefault();
        }
    });
    jQuery(".numericfield").live('blur',function(){
        if(jQuery(this).val()==''||parseInt(jQuery(this).val())<=0){
					if(jQuery(this).attr('id')=='posts_limit'){
						jQuery(this).val("0"); 
					}else{
            jQuery(this).val("1");
					}
        }else{
            jQuery(this).val(parseInt(jQuery(this).val()));
        }
    });
    jQuery("#box_style").live('change',function(){
        if(jQuery(this).val()!="1"){
            jQuery(".box_full").fadeIn();
        }else{
            jQuery(".box_full").fadeOut();
        }
        jQuery("#screen_pre").removeClass();
        jQuery("#screen_pre").addClass("screen"+jQuery(this).val());
    });
    jQuery("#readmore_color").change(function(){
        var $btn=jQuery(this).val();
        switch($btn){
            case "white":case "nobutton":
               jQuery(".button_st_full").fadeOut();
               break;
            default:
                jQuery(".button_st_full").fadeIn();
                break;
        }
    });
    jQuery(".chkgrp").live('change',function(){
        var cnt=0;
       jQuery(".chkgrp").each(function(){           
           if(jQuery(this).attr("checked")){
               cnt++
           }       
       });
       if(cnt==0){
           jQuery("#show_title").attr('checked',true);
           jQuery(".gen_shortcode").change();
       }
    });
    jQuery("#columns_num").live('change',function(){
        jQuery("#boxwidth").attr("readonly",jQuery(this).val()=='auto'?false:true);
    });
    $showVideo  = jQuery('#show-video');
    $modalFrame = jQuery('.modal-frame');
    $backdroop  = jQuery('.backdroop');
    $backdroop.appendTo('body');

    $showVideo.click(function(e){
        e.preventDefault();
        $backdroop.fadeIn('fast');
        $modalFrame.fadeIn('fast');
        //alert('asd');    
    });

    jQuery(document).mouseup(function(e)
    {
        
        if ( $modalFrame.has(e.target).length === 0 )
        {   
            $backdroop.fadeOut('fast');
            $modalFrame.fadeOut('fast');

        }
    });
});
/*
$(window).load(function(){
    var $cont= jQuery("#wpts_container");
    $cont.each(function(){
    if($cont.masonry){
        $cont.masonry({
            itemSelector : '.item'
        });
    }
    });
});
*/