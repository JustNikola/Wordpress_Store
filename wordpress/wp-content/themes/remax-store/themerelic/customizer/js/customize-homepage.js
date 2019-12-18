
//Scroll to section
jQuery('body').on('click', 'ul#sub-accordion-panel-remax_store_homepage_setting li', function(event) {
    //li variable section
    var section_id = $(this).attr('id');
	scrollToSection( section_id );
	
});


/**
 * ScrollToSection 
 * 
 * ScrollToSection is the homepage section
 * 
 * @param string section_id 
 * @since 1.0.0
 */
function scrollToSection( section_id ){
    var preview_section_id = "banner_section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( section_id ) {

       // Homepage Slider
       case 'accordion-section-remax_store_homepage_slider':
       preview_section_id = "remax-store-homepage-slider-section";
       break;

       // Homepage Category
       case 'accordion-section-remax_store_products_category_section':
       preview_section_id = "remax_store_homepage_category";
       break;

       // Homepage Hotoffer Section
       case 'accordion-section-remax_store_hotoffer_section':
       preview_section_id = "remax_store_homepage_hotoffer_section";
       break;

       // Homepage Products Tab
       case 'accordion-section-remax_store_products_tab_section':
       preview_section_id = "remax_store_homepage_tabs_section";
       break;

        // Homepage Products Section
       case 'accordion-section-remax_store_products_section_layout':
       preview_section_id = "remax_store_homepage_product_section";
       break;

       // Homepage Blog Section
       case 'accordion-section-remax_store_blog_section':
       preview_section_id = "remax_store_homepage_blog_section";
       break;

    }

    //preview section set
    if( $contents.find('#'+preview_section_id).length > 0 && $contents.find('.home').length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + preview_section_id ).offset().top
        }, 1000);
    }
    
    
}


