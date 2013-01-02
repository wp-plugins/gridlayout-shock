<?php
/*    
    Plugin Name: Grid Layout Shock by Themeshock and ThemeGenerator (Free Version)
    Plugin URI: http://www.gridlayoutshock.com
    Description: Grid Layout plugin by Themeshock and ThemeGenerator
    Version: 1.0
    Author: Theme Shock
    Author URI: http://www.themeshock.com
*/
define('PREMIUM_LINK',"http://themeshock.com");
add_action('admin_menu', 'create_useful_matix_menu');
function create_useful_matix_menu() {
    load_plugin_textdomain('usefulmatrixint', false, basename( dirname( __FILE__ ) ) . '/languages' );
    add_menu_page(__('Grid Layout plugin by Themeshock and ThemeGenerator (Free Version)','usefulmatrixint'), __('Grid Layout plugin by Themeshock and ThemeGenerator (Free Version)','usefulmatrixint'), 'administrator', __FILE__, 'wpts_useful_matrix_settings_page',plugins_url('/img/ts1.png', __FILE__));    
}
function wpts_useful_matrix_settings_page(){
?>
<?php
    
    wp_enqueue_style('bootstrap',plugin_dir_url(__FILE__)."css/bootstrap.min.css");
    wp_enqueue_style('wpts_matrix',plugin_dir_url(__FILE__)."css/wpts_matrix.css");
    wp_enqueue_script('wpts_matrix',plugin_dir_url(__FILE__)."js/wpts_matrix.js");

?>
<!--<link rel="stylesheet" href="<?php //echo plugin_dir_url(__FILE__); ?>css/bootstrap.min.css" media="all" type="text/css" />
<link rel="stylesheet" href="<?php //echo plugin_dir_url(__FILE__); ?>css/wpts_matrix.css" media="all" type="text/css" />
<script type="text/javascript" src="<?php //echo plugin_dir_url(__FILE__); ?>js/wpts_matrix.js"></script>-->
<style type="text/css" media="all">
    .gen_shortcode{
        width: 30em;
        height: 30px;
    }
</style>
<div class="wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h2><?php echo __('Pluginterest pinterest plugin by Themeshock (Free Version)','usefulmatrixint');?></h2> 
    <div style="height: 20px">
        <div class="updated_custom" id="message_custom001" style="display: none;">&nbsp;</div>
    </div>
    <div id="dashboard-widgets-wrap">
        <div id="dashboard-widgets" class="metabox-holder">
            <div id="postbox-container-1" class="postbox-container" style="width:100%;">
                <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                    <div class="postbox">
                        <h3 style="cursor: default"><span>Powered by: <a href="http://www.wpthemegenerator.com" target="blank">WP Theme Generator</a> and <a href="http://www.wpthemeshock.com/" target="blank">Theme Shock</a></span></h3>

                        <div class="inside">
                            <div>
                                <p>
                                    <?php echo __('One theme, a thousand posibilities: Create amazing and unlimited themes by playing with 1000+ pre-designed elements (or uploading your own designs) and then download in fully working WP or HTML/CSS.','usefulmatrixint'); ?>
                                </p>
                                <h4>
                                    <a href="">100 Free Sample Themes</a> &nbsp;&nbsp;&nbsp; <a href="">Check 1 Minute Video</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-block">
                           <p class="sld_notice_premium"> 
                            In order to use the full functionality including external datasources, taxonomies, custom post types, 8 box styles, responsiveness, red more buttons colors <a href="http://www.gridlayoutshock.com" target="_blank">premium wordpress pinterest plugin</a>
                           </p>
                           <br>
                           <div class="ts_sld_ban">
                               <div class="pf_wrapper">
                                    <h3>
                                      <span class="pf_title">Several grids sources <span style="color: #F32914">( Premium )</span></span>
                                    </h3>
                                    <p>
                                            You can create a grid from each of the following sources: Custom Post Types (WP), Taxonomies (WP) and External RSS.
                                    </p>
                                </div>
                                <div class="pf_wrapper">
                                    <h3>
                                      <span class="pf_title">Configure the limit of posts and pagination <span style="color: #F32914">( Premium )</span></span>
                                    </h3>
                                    <p>
                                            You can configure the limit of posts that you want to show in the grid. The grid automatically create as many pages as needs and you can navigate through them like an slider.
                                    </p>
                                </div>
                                <div class="pf_wrapper">
                                    <h3>
                                      <span class="pf_title">8 Box styles <span style="color: #F32914">( Premium )</span></span>
                                    </h3>
                                    <p>
                                            You can choose from 8 box styles. Select the best to your web site.
                                    </p>
                                </div>
                                <div class="pf_wrapper">
                                    <h3>
                                      <span class="pf_title">Read More Button colors <span style="color: #F32914">( Premium )</span></span>
                                    </h3>
                                    <p>
                                            You can choose from 8 colors for the "Read More" button. Select the best to your web site.
                                    </p>
                                </div>
                                <br>
                                <br>
                                <a class="btn btn-large btn-success" style="margin:auto;" href="http://www.gridlayoutshock.com" target="_blank">Check the full version</a>
                           </div>
                        </div>

                    <div class="postbox ">                            
                        <h3 style="cursor: default"><span><?php echo __('Generate your Useful Posts Matrix Shortcode','usefulmatrixint');?></span></h3>
                        <input type="hidden" id="categ_rss_select" name="categ_rss_select" value="1" />
                        <div class="inside">
                            <table>                                
                                <tr>
                                    <td colspan="2" style="width: 400px;">
                                        <label for="boxwidth"><?php echo __("Box Width (in pixels):",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td>
                                        <input type="text" value="150" class="gen_shortcode numericfield" id="boxwidth" name="boxwidth" maxlength="4" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 20px">
                                        <input onclick="jQuery('#categ_rss_select').val('1');jQuery('.gen_shortcode').change();jQuery('#category_item').focus()" checked class="gen_shortcode" type="radio" id="categ_rss1" name="categ_rss" value="1" />
                                    </td>
                                    <td>
                                        <label for="categ_rss1"><?php echo __("Category:",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td>
                                        <?php 
                                            $args = array(
                                                'show_option_all'    => __('All Categories','usefulmatrixint'),
                                                'show_option_none'   => '',
                                                'orderby'            => 'ID', 
                                                'order'              => 'ASC',
                                                'show_count'         => 0,
                                                'hide_empty'         => 0,
                                                'child_of'           => 0,
                                                'exclude'            => '',
                                                'echo'               => 1,
                                                'hierarchical'       => 0, 
                                                'name'               => 'category_item',
                                                'id'                 => 'category_item',
                                                'class'              => 'postform gen_shortcode',
                                                'depth'              => 0,
                                                'tab_index'          => 0,
                                                'taxonomy'           => 'category',
                                                'hide_if_empty'      => false
                                            );
                                            wp_dropdown_categories( $args );
                                        ?>
                                    </td>
                                </tr>
                                <!--- taxonomy-->
                                <tr>
                                    <td style="width: 20px">
                                        <input type="radio" onclick="jQuery('#categ_rss_select').val('4');jQuery('.gen_shortcode').change();jQuery('#external_rss').focus()" class="gen_shortcode" id="categ_rss4" name="categ_rss" value="4">
                                    </td>
                                    <td>
                                        <label for="categ_rss2"><?php echo __("Taxonomies",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td style="height: 55px"> 
                                        <div class="external_full4">
                                            <div style="padding-bottom: 4px"><?php echo __("This Feature is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                        </div>                                    
                                    </td>
                                </tr>
                                <!--postypes-->
                                <tr>
                                    <td style="width: 20px">
                                        <input type="radio" onclick="jQuery('#categ_rss_select').val('5');jQuery('.gen_shortcode').change();jQuery('#external_rss').focus()" class="gen_shortcode" id="categ_rss5" name="categ_rss" value="5">
                                    </td>
                                    <td>
                                        <label for="categ_rss2"><?php echo __("Post types",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td style="height: 55px"> 
                                        <div class="external_full5">
                                            <div style="padding-bottom: 4px"><?php echo __("This Feature is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                        </div>                                    
                                    </td>
                                </tr>                                
                                <tr>
                                    <td style="width: 20px">
                                        <input type="radio" onclick="jQuery('#categ_rss_select').val('2');jQuery('.gen_shortcode').change();jQuery('#external_rss').focus()" class="gen_shortcode" id="categ_rss2" name="categ_rss" value="2">
                                    </td>
                                    <td>
                                        <label for="categ_rss2"><?php echo __("External RSS Feed:",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td style="height: 55px"> 
                                        <div class="external_full2">
                                            <div style="padding-bottom: 4px"><?php echo __("This Feature is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>                                    
                                    <td colspan="3" style="height: 50px">
                                        Earn money promoting freebies with our <a href="http://www.wpthemeshock.com/afiliates/">Affiliate Program</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 20px">
                                        <input type="radio" onclick="jQuery('#categ_rss_select').val('3');jQuery('.gen_shortcode').change();jQuery('#aff_prd').focus()" class="gen_shortcode" id="categ_rss3" name="categ_rss" value="3">
                                    </td>
                                    <td colspan="2">
                                        <label for="categ_rss3"><?php echo __("Design Shock Freebies",'usefulmatrixint'); ?></label>
                                    </td>                           
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="categ_rss3"><?php echo __("Affiliate Code (Optional)",'usefulmatrixint'); ?></label>
                                    </td>
                                    <td>
                                        <input type="text" class="gen_shortcode" id="aff_prd" name="aff_prd" maxlength="20" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="posts_number"><?php echo __("Number of Posts:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="text" value="1" class="gen_shortcode numericfield" id="posts_number" name="posts_number" maxlength="4" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="posts_limit"><?php echo __("Limit of posts (pagination/slider) use only if you want to limit the shown posts:",'usefulmatrixint')?></label>
                                    </td>
                                    <td style="height: 55px">
                                        <div class="limit_full">
                                            <div style="padding-bottom: 4px"><?php echo __("This Feature is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="box_style"><?php echo __("Box Style:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <select id="box_style" name="box_style" class="gen_shortcode">
                                            <?php for($i=1;$i<=8;$i++): ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                            <?php endfor; ?>
                                        </select>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>
                                        <span id="screen_pre" class="screen1">&nbsp;</span>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="height: 55px">&nbsp;</td>
                                    <td>
                                        <div class="box_full">
                                            <div style="padding-bottom: 4px"><?php echo __("This Box Style is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="readmore_color"><?php echo __("'Read More' Button Color:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <select id="readmore_color" name="readmore_color" class="gen_shortcode">
                                            <option value="nobutton"><?php echo __("No Button",'usefulmatrixint'); ?></option>
                                            <option value="white"><?php echo __("White",'usefulmatrixint'); ?></option>
                                            <option value="black"><?php echo __("Black",'usefulmatrixint'); ?></option>               
                                            <option value="blue"><?php echo __("Blue",'usefulmatrixint'); ?></option>
                                            <option value="cyan"><?php echo __("Cyan",'usefulmatrixint'); ?></option>
                                            <option value="green"><?php echo __("Green",'usefulmatrixint'); ?></option>
                                            <option value="yellow"><?php echo __("Yellow",'usefulmatrixint'); ?></option>
                                            <option value="red"><?php echo __("Red",'usefulmatrixint'); ?></option>                                            
                                        </select>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="height: 55px">&nbsp;</td>
                                    <td>
                                        <div class="button_st_full">
                                            <div style="padding-bottom: 4px"><?php echo __("This Button Color is only Available in Full Version",'usefulmatrixint'); ?></div>
                                            <div style="padding-top: 4px"><a href="<?php echo PREMIUM_LINK; ?>" title="<?php echo __("Get Full Version",'usefulmatrixint'); ?>" class="btn btn-danger"><?php echo __("Get Full Version",'usefulmatrixint'); ?></a></div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="title_fontsize"><?php echo __("Title Font Size (in pixels):",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="text" value="15" id="title_fontsize" name="title_fontsize" class="gen_shortcode numericfield" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="content_fontsize"><?php echo __("Content Font Size (in pixels):",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="text" value="11" id="content_fontsize" name="content_fontsize" class="gen_shortcode numericfield" />
                                    </td>
                                </tr>                                
                                <?php $fonts=array("Arial"=>"Arial","Verdana"=>"Verdana","Trebuchet"=>"Trebuchet MS","Tahoma"=>"Tahoma","Calibri"=>"Calibri","Helvetica"=>"Helvetica","Lucida Console"=>"Lucida Console");
                                asort($fonts);
                                ?>
                                <tr>
                                    <td colspan="2">
                                        <label for="title_fontstyle"><?php echo __("Title Font Style:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <select id="title_fontstyle" name="title_fontstyle" class="gen_shortcode">
                                            <option selected value="default"><?php echo __("Theme Default",'usefulmatrixint'); ?></option>
                                            <?php foreach($fonts as $value=>$name): ?>
                                            <option value="<?php echo $value ?>"><?php echo $name; ?></option>
                                            <?php endforeach; ?>
                                        </select>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="content_fontstyle"><?php echo __("Content Font Style:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <select id="content_fontstyle" name="content_fontstyle" class="gen_shortcode">
                                            <option selected value="default"><?php echo __("Theme Default",'usefulmatrixint'); ?></option>
                                            <?php foreach($fonts as $value=>$name): ?>
                                            <option value="<?php echo $value ?>"><?php echo $name; ?></option>
                                            <?php endforeach; ?>
                                        </select>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="show_title"><?php echo __("Show Title:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" checked value="1" id="show_title" name="show_title" class="gen_shortcode chkgrp" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="show_excerpt"><?php echo __("Show Excerpt:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="1" id="show_excerpt" name="show_excerpt" class="gen_shortcode chkgrp" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="show_image"><?php echo __("Show Image:",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="1" id="show_image" name="show_image" class="gen_shortcode chkgrp" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="enable_masonry"><?php echo __("Enable Masonry JS For responsive boxes (if masonry is disabled, boxes will adjust responsively by css):",'usefulmatrixint')?></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="1" id="enable_masonry" name="enable_masonry" class="gen_shortcode" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="matrix_shortcode"><?php echo __("Your Useful Post Matrix Generated Shortcode is:",'usefulmatrixint'); ?></label>
                                    </td>                                    
                                    <td>
                                        <input style="width: 80em;height: 30px;font-size: 11px" type="text" value="[wpts_matriz boxwidth='150' category='0' posts='1' boxstyle='1' buttoncolor='nobutton' titlesize='15' contentsize='11' titlefont='default' contentfont='default' showtitle='1' masonry='0']" readonly="true" id="matrix_shortcode" name="matrix_shortcode" />
                                    </td>
                                </tr>                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
function wpts_useful_matrix_shortcode($atts=array()){
    load_plugin_textdomain('usefulmatrixint', false, basename( dirname( __FILE__ ) ) . '/languages' );
    global $post;
    $tmp_post=$post;    
    static $sh_count;
    if(!$sh_count){
        $sh_count=0;
    }
    if(!isset($atts['boxwidth'])){
        $atts['boxwidth']=150;
    }    
    if(!isset($atts['category'])){
        $atts['category']=0;
    }
    if(!isset($atts['posts'])){
        $atts['posts']=1;
    }
    if(!isset($atts['boxstyle'])){
        $atts['boxstyle']=1;
    }
    if(!isset($atts['buttoncolor'])){
        $atts['buttoncolor']="nobutton";
    }
    if(!isset($atts['titlesize'])){
        $atts['titlesize']=15;
    }
    if(!isset($atts['contentsize'])){
        $atts['contentsize']=11;
    }
    if(!isset($atts['titlefont'])){
        $atts['titlefont']="default";
    }
    if(!isset($atts['contentfont'])){
        $atts['contentfont']="default";
    }
    if(!isset($atts['prd'])){
        $atts['prd']="";
    }
    if(!isset($atts['masonry'])){
        $atts['masonry']="0";
    }
    if(!isset($atts['externalrss'])){
        if(empty($atts['prd'])){
            $atts['externalrss']="http://designshock.com/feed";
        }else{
            $atts['externalrss']="http://designshock.com/feed?prd={$atts['prd']}";
        }
    }   
    if(!isset($atts['showtitle'])){
        if(!isset($atts['showexcerpt'])&&!isset($atts['showimage'])){
            $atts['showtitle']="1";
        }else{
            $atts['showtitle']="0";
        }
    }    
    if(!isset($atts['showimage'])){
        $atts['showimage']="0";
    }
    if(!isset($atts['showexcerpt'])){
        $atts['showexcerpt']="0";
    }
    $sh_count++;
    extract($atts);
    if($boxwidth<=150){
        $imgc="thumbnail";        
    }else if($boxwidth<=300){
        $imgc="medium";        
    }else if($boxwidth>300){
        $imgc="large";        
    }
    $titlef="";
    if($titlefont!="default"){
        $titlef="font-family: \"$titlefont\"";
    }
    $contentf="";
    if($contentfont!="default"){
        $contentf="font-family: \"$contentfont\"";
    }
    $colors=array("white"=>"","blue"=>"btn-primary","cyan"=>"btn-info","green"=>"btn-success","yellow"=>"btn-warning","red"=>"btn-danger","black"=>"btn-inverse");
    $bwt=$boxwidth;    
    $imgbh=100;
    $content1="";
    if($sh_count<=1){
      ob_start();
		?>
		<script type='text/javascript'>        
          if (typeof jQuery === "undefined" || jQuery.fn.jQuery !== '1.4.0'){
				document.write("<script type=\'text/javascript\' src=\'http://code.jquery.com/jquery-1.7.2.js\'></scr"+"ipt>");
            } else {
                main();
            }        
        </script>
        <?php
       $content1.= ob_get_clean();
       if($masonry=='1'){
            $content1.= "<script type=\"text/javascript\" src=\"".plugin_dir_url(__FILE__)."js/jquery.masonry.js\"></script>\n";
       }
       $content1.= "<script type='text/javascript' src='".plugin_dir_url(__FILE__)."js/bootstrap-carousel.js'></script>";			 
       $content1.= "<link rel='stylesheet' href='".plugin_dir_url(__FILE__)."css/wpts_matrix.css' media='all' />";
       $content1.= "<link rel='stylesheet' href='".plugin_dir_url(__FILE__)."css/bootstrap.min.css' media='all' />";
    }
    if($category!='R'&&$category!='E'){
        $q_posts=get_posts("cat=$category&order=ASC&numberposts=$posts");      
        $limit_p=(isset($limit))?(int)$limit:'';/// limite de post por carrousel
        $counter=0;///conteador de elementos
        if ($limit_p===0 or count($q_posts)<=$limit_p){
                unset($limit);
        }
        $col_st=1;
        $jQuery_st="#wpts_container$sh_count";//selectores de jQuery
        if (!isset($limit)){            
            $content1.= "\n<div id='wpts_container$sh_count' style='width: 100%;text-align: center;vertical-align: top'>";
        }else{
            $id_ct='#ts_Carousel'.$sh_count;            
            $content1.='<div id="ts_Carousel'.$sh_count.'" class="carousel slide">';
            $content1.='<div class="carousel-inner">';
        }        
        foreach($q_posts as $post):
            setup_postdata($post);
            if (($counter===0 && isset($limit)) or ($counter===$limit_p && isset($limit))){
                $user_status=($counter===0)?'active':'';
                if($counter>0){
                    $content1.= "</div>";
                    $counter=0;
                }
                $content1.= "\n<div id='wpts_container$sh_count".$col_st."' class='item ".$user_status."' style='width: 100%'>";    
                $jQuery_st.=", #wpts_container".$sh_count.$col_st;
                $col_st++;
            }
            $tmb = "";
            ob_start();
            ob_end_clean();
            $output = preg_match('/<img[^>]+\>/i', $post->post_content, $matches);            
            $content1.= "\n<div class='item$sh_count useful_box$boxstyle' style='width: {$bwt}px;'>";
            $bwt2=$bwt-10;
            $tmb=get_the_post_thumbnail(get_the_ID(),$imgc,array("title"=>get_the_title(),"style"=>"width: {$bwt2}px;height: {$bwt2}px;"));                        
            if(empty($tmb)){                
                if(isset($matches[1][0])){                    
                    $tmb = "<div class='img_shadow' style='width: ".$bwt2."px;height:".$bwt2."px;text-align:center;margin:auto'><a title='".get_the_title()."' href='".get_permalink()."'><img src='".$matches[1][0]."' width='$bwt2' height='$bwt2' title='".get_the_title()."' /></a></div>";
                }
            }else{
                $tmb = "<div class='img_shadow' style='width: ".$bwt2."px;height:".$bwt2."px;text-align:center;margin:auto'><a title='".get_the_title()."' href='".get_permalink()."'>$tmb</a></div>";
            }
            if($showtitle=="1"||empty($tmb)){
                $imgbh-=20;
                $content1.= "\n\t<div style='font-size: ".$titlesize."px;font-weight: bold;$titlef;padding: 5px'>".get_the_title()."</div>";
            }
            if($showimage=="1"){                
                $content1.= "$tmb";
            }
            if($showexcerpt=="1"){
                $imgbh-=20;
                $content1.= "<p style='font-size: ".$contentsize."px;$contentf'>".get_the_excerpt()."</p>";
            }
            if(isset($buttoncolor)){
                if($buttoncolor!='nobutton'){
                $content1.= "<div class='readmore'><br /><a class='btn btn-small {$colors[$buttoncolor]}' href='".get_permalink()."'>".__("Read More",'usefulmatrixint')."</a></div>";                
                }else{
                    $content1.= "<br /><a style='font-size: ".$contentsize."px;$contentf' href='".get_permalink()."'>".__("Read More",'usefulmatrixint')."</a>";
                }
            }else{
                $content1.= "<br /><a style='font-size: ".$contentsize."px;$contentf' href='".get_permalink()."'>".__("Read More",'usefulmatrixint')."</a>";
            }            
            $content1.= "</div>";
            $counter++;            
        endforeach;
        if (!isset($limit)){                        
                        $content1.= "</div>";
                                                    }else{
                        //$content1.= "<div style='clear: both'></div>";                 
                        $content1.= "</div>";
                        $content1.= "</div>";
                        if($masonry=='1'){
                            $content1.='  <a class="carousel-control masonry-arrows left" href="'.$id_ct.'" data-slide="prev">&lsaquo;</a>
                               <a class="carousel-control masonry-arrows right" href="'.$id_ct.'" data-slide="next">&rsaquo;</a>';
                        }else{
                        $content1.='  <a class="carousel-control left" href="'.$id_ct.'" data-slide="prev">&lsaquo;</a>
                               <a class="carousel-control right" href="'.$id_ct.'" data-slide="next">&rsaquo;</a>';
                        }
                        $content1.= "</div>";														
                                                    }
    }else{
        include_once(ABSPATH . WPINC . '/rss.php');
				add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', 'return 1;' ) );
        //$rss = new DOMDocument();
        $rss = fetch_feed($externalrss);
        //if(!is_wp_error($rss)){
            $rss->set_timeout(5);
            $rssq = $rss->get_item_quantity($posts);
            $rssItems = $rss->get_items(0,$rssq);
                                    $limit_p=(isset($limit))?(int)$limit:'';/// limite de post por carrousel
                                    $counter=0;///conteador de elementos
                                    if ($limit_p===0 or $rssq<=$limit_p){
                                            unset($limit);
                                    }

                                    $col_st=1;
                                    $jQuery_st="#wpts_container$sh_count";//selectores de jQuery
            if($rssq>0){

                                                    if (!isset($limit)){                               
                        $content1.= "\n<div id='wpts_container$sh_count' style='width: 100%;text-align:center;vertical-align: top'>";
                                                    }else{
                                                            $id_ct='#ts_Carousel'.$sh_count;
                                                            $content1.='<div id="ts_Carousel'.$sh_count.'" class="carousel slide">';
                                                            $content1.='<div class="carousel-inner">';                                                           
                                                    }
                                                    foreach($rssItems as $index => $item){
                                                                    if (($counter===0 && isset($limit)) or ($counter===$limit_p && isset($limit))){

                                                                            $user_status=($counter===0)?'active':'';
                                                                            if($counter>0){
                                                                                    $content1.= "</div>";										
                                                                                    $counter=0;
                                                                            }
                                        $content1.= "\n<div id='wpts_container$sh_count".$col_st."' class='item ".$user_status."' style='width: 100%'>";                                       
                                                                            $jQuery_st.=", #wpts_container".$sh_count.$col_st;
                                                                            $col_st++;
                                                                    }
                    $tmb = "";                    
                    $output = preg_match_all('/<img[^>]+\>/i', $item->get_content(), $matches);
                    $content1.= "\n<div class='item$sh_count useful_box$boxstyle' style='width: {$bwt}px;'>";
                    foreach($item->data['child'] as $value){
                        if(isset($value['featured-image'])){
                            $tmb=$value['featured-image'][0]['data'];                      
                        }
                    }
                    //$content1.= "<pre>".htmlentities(print_r($matches,true)." - ".$item->get_content())."</pre>";
                    if($tmb!=''){
                        $bwt2=$bwt-10;
                        $tmb = "<div class='img_shadow' style='width: ".$bwt2."px;height: ".$bwt2."px;text-align:center;margin:auto'><a title='".$item->get_title()."' href='".$item->get_permalink()."'><img src='".$tmb."' height='$bwt2' width='$bwt2' title='".$item->get_title()."' /></a></div>";
                    }else if($matches[0][0]!=''){
                        $bwt2=$bwt-10;
                        $mm=  str_replace(" />", "style='width: {$bwt2}px;height: {$bwt2}px' />", $matches[0][0]);
                        $tmb = "<div class='img_shadow' style='width: ".$bwt2."px;height: ".$bwt2."px;text-align:center;margin:auto'><a title='".$item->get_title()."' href='{$item->get_permalink()}'>".$mm."</a></div>";
                    }
                    if($showtitle=="1"){
                        $content1.= "\n\t<div style='font-size: ".$titlesize."px;font-weight: bold;$titlef;padding: 5px'>".$item->get_title()."</div>";
                    }
                    if($showimage=="1"){
                        $content1.= "$tmb";
                    }
                    if($showexcerpt=="1"){
                        $desc=str_replace("<p>","<p style='font-size: ".$contentsize."px;$contentf'>",$item->get_description());
                        $content1.= "<div class='pa' style='font-size: ".$contentsize."px;$contentf'>".$desc."</div>";
                    }
                    if(isset($buttoncolor)){
                        if($buttoncolor!='nobutton'){
                        $content1.= "<div class='readmore'><br /><a class='btn btn-small {$colors[$buttoncolor]}' href='".$item->get_permalink()."'>".__("Read More",'usefulmatrixint')."</a></div>";                
                        }else{
                            $content1.= "<br /><a style='font-size: ".$contentsize."px;$contentf' href='".$item->get_permalink()."'>".__("Read More",'usefulmatrixint')."</a>";
                        }
                    }else{
                        $content1.= "<br /><a style='font-size: ".$contentsize."px;$contentf' href='".$item->get_permalink()."'>".__("Read More",'usefulmatrixint')."</a>";
                    }                    
                    $content1.= "</div>";                    
                                                                    $counter++;
                    //$content1.= "<pre>".htmlentities($item->get_content())."</pre>";
                }
                                                    if (!isset($limit)){
                        $content1.= "<div style='clear: both'></div>";
                        $content1.= "</div>";
                                                    }else{     
                        //$content1.= "<div style='clear: both'></div>";                        
                        $content1.= "</div>";
                        $content1.= "</div>";					
                        if($masonry=='1'){
                            $content1.='  <a class="carousel-control masonry-arrows left" href="'.$id_ct.'" data-slide="prev">&lsaquo;</a>
                               <a class="carousel-control masonry-arrows right" href="'.$id_ct.'" data-slide="next">&rsaquo;</a>';
                        }else{
                        $content1.='  <a class="carousel-control left" href="'.$id_ct.'" data-slide="prev">&lsaquo;</a>
                               <a class="carousel-control right" href="'.$id_ct.'" data-slide="next">&rsaquo;</a>';
                        }
                        $content1.= "</div>";														
                                                    }
            }
        //}
    }        
        $content1.= "<script type='text/javascript'>";
        $content1.= "\njQuery(document).ready(function(){                        
                     ";
        if($masonry=="1"){            
            $content1.= "\n\t\tvar \$cont$sh_count= jQuery(\"$jQuery_st\");"
                            ."\n\t\t\$mms=\$cont$sh_count.masonry({".
                                "\n\t\t\titemSelector : '.item$sh_count'"
                            . "\n\t\t});";                        
    //		$content1.='jQuery("'.$jQuery_st.'").removeClass("active");';
        }        
        if(isset($limit)){
            $content1.="\n                    
            var car_ev$sh_count=jQuery('#ts_Carousel$sh_count.carousel').carousel({
                interval: false
            });                    
            ";
        }            
        /*$content1.="\n
            car_ev$sh_count.bind('slid',function(){
                var id_j=jQuery(this).attr('id');
                var mrg=(jQuery('#'+id_j+' .active').css('margin-right'));
                mrg=parseInt(mrg);
                if(mrg==0){
                    var bw=$boxwidth;                    
                    var wd=parseInt(jQuery('#'+id_j+' .active').css('width'));
                    var lim=parseInt(wd/$boxwidth);
                    var l1=wd-(bw*lim);
                    var marg_cont=l1/2;
                    jQuery('#'+id_j+' .active').css('margin-right',marg_cont);                    
                    jQuery('#'+id_j+' .active').css('width',wd-(marg_cont/2));                    
                }
            });
            car_ev$sh_count.carousel('next');
            car_ev$sh_count.carousel('prev');
        ";*/
        
        $content1.= "\n});";
        $content1.= "</script>";    
    $post=$tmp_post;
    return $content1;
}
add_shortcode("wpts_matriz", "wpts_useful_matrix_shortcode");