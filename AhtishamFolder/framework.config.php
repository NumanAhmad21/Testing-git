<?php if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$settings = array(
	'menu_title'      => 'Theme Options',
	'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
	'menu_slug'       => 'fd-option',
	'ajax_save'       => true,
	'show_reset_all'  => false,
  'framework_title' => 'FC Control Panel',
  
);


// ----------------------------------------
// a option section for options container width  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'width',
  'title'       => 'Width Setting',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'st_wrapper', // another unique id
      'type'    => 'text',
      'title'   => 'Wrapper Width',
      'default' => '100%',
    ),
    array(
      'id'      => 'st_container', // another unique id
      'type'    => 'text',
      'title'   => 'Container Width',
      'default' => '1280px',
    ),
 
  ), // end: fields
);
   

// ------------------------------
// Home Page                     -
// ------------------------------

$options[]   = array(
  'name'     => 'st_slider',
  'title'    => 'Banner & Slider',
  'fields'   => array(

    array(
      'id'    => 'st_slider_bg',
      'type'  => 'upload',
      'title' => 'Slider Background',
    ),
 
    array(
      'id'      => 'st_slider_color',
      'type'    => 'color_picker',
      'title'   => 'Slider Color',
      'default' => '#e01a21',
      'rgba'    => true,
    ),
    
    array(
      'id'              => 'st_banner_slide',
      'type'            => 'group',
      'title'           => 'Slides',
      'button_title'    => 'Add New Slide',
      'accordion_title' => 'Add New Slide',
      'fields'          => array(

      
        array(
          'id'    => 'st_slide_main_heading',
          'type'  => 'text',
          'title' => 'Main Heading',
        ),

        array(
          'id'    => 'st_slide_sub_heading',
          'type'  => 'text',
          'title' => 'Sub Heading',
        ),

        array(
          'id'    => 'st_slide_img',
          'type'  => 'upload',
          'title' => 'Image',
        ),

        array(
          'id'    => 'st_slide_content',
          'type'  => 'textarea',
          'title' => 'Description',
        ),

        array(
          'id'    => 'st_slide_button',
          'type'  => 'text',
          'title' => 'Button',
        ),

        array(
          'id'    => 'st_slide_button_link',
          'type'  => 'text',
          'title' => 'Link',
        ),

      ),
    ),
    
  )
);


// ------------------------------
// Home Proven Technology                     -
// ------------------------------

$options[]   = array(
  'name'     => 'st_proven_technology',
  'title'    => 'Proven Technology',
  'fields'   => array(

    array(
      'id'    => 'st_proven_heading',
      'type'  => 'text',
      'title' => 'Main Heading',
    ),

    array(
      'id'    => 'st_proven_description',
      'type'  => 'textarea',
      'title' => 'Description',
    ),

    array(
      'id'    => 'st_read_more_text',
      'type'  => 'text',
      'title' => 'Read More',
      'default' => "Read More"
    ),

    array(
      'id'    => 'st_read_more_link',
      'type'  => 'text',
      'title' => 'Read Link',
      'default' => "#"
    ),

    array(
      'id'              => 'st_proven_boxes',
      'type'            => 'group',
      'title'           => 'Proven Features',
      'button_title'    => 'Add New Box',
      'accordion_title' => 'Add New Box',
      'fields'          => array(

        
        array(
          'id'    => 'st_box_img',
          'type'  => 'upload',
          'title' => 'Image',
        ),

        array(
          'id'    => 'st_heading',
          'type'  => 'text',
          'title' => 'Main Heading',
        ),

        array(
          'id'    => 'st_content',
          'type'  => 'textarea',
          'title' => 'Description',
        ),

      ),
    ),
    
  )
);


// ------------------------------
// Home How Help                     -
// ------------------------------

$options[]   = array(
  'name'     => 'st_how_help',
  'title'    => 'How Helpful',
  'fields'   => array(
    
    array(
      'id'    => 'st_help_img',
      'type'  => 'upload',
      'title' => 'Image',
    ),

    array(
      'id'    => 'st_help_heading',
      'type'  => 'textarea',
      'title' => 'Description',
    ),

    array(
      'id'    => 'st_help_signup_text',
      'type'  => 'text',
      'title' => 'Sign Up Text',
    ),

    array(
      'id'    => 'st_help_signup_link',
      'type'  => 'text',
      'title' => 'Sign Up Link',
    ),

    array(
      'id'    => 'st_help_package_deatail',
	    'type'     => 'wysiwyg',
      'title'    => 'Package Detail',
      'settings' => array(
        'textarea_rows' => 3,
        'tinymce'       => true,
        'media_buttons' => false,
      )
    ),
    
    array(
      'id'    => 'st_help_ios_img',
      'type'  => 'upload',
      'title' => 'Apple Logo',
    ),

    array(
      'id'    => 'st_help_ios_img_link',
      'type'  => 'text',
      'title' => 'Apple Logo Link',
    ),

    array(
      'id'    => 'st_help_android_img',
      'type'  => 'upload',
      'title' => 'Android Logo',
    ),

    array(
      'id'    => 'st_help_android_img_link',
      'type'  => 'text',
      'title' => 'Android Logo Link',
    ),
    
  )
);



// ------------------------------
// Home Let See                     -
// ------------------------------

$options[]   = array(
  'name'     => 'st_lets_see',
  'title'    => 'Lets See',
  'fields'   => array(
    
      
    array(
      'id'    => 'st_lets_see_main_heading',
      'type'  => 'text',
      'title' => 'Main Heading',
    ),

    array(
      'id'    => 'st_lets_see_sub_heading',
      'type'  => 'text',
      'title' => 'Sub Heading',
    ),

    array(
      'id'    => 'st_lets_see_short_description',
      'type'  => 'text',
      'title' => 'Short Description',
    ),

    array(
      'id'    => 'st_lets_see_video',
      'type'  => 'text',
      'title' => 'Video Url',
    ),

    
    
  )
);


// ------------------------------
// Home Map Features                     -
// ------------------------------

$options[]   = array(
  'name'     => 'st_map_features_section',
  'title'    => 'Map Features',
  'fields'   => array(
    array(
      'id'              => 'st_map_boxes',
      'type'            => 'group',
      'title'           => 'Services',
      'button_title'    => 'Add New Feature',
      'accordion_title' => 'Add New Feature',
      'fields'          => array(
 
       array(
          'id'      => 'st_map_feature_icon',
          'type'    => 'upload',
          'title'   => 'Icon',
        ),
        
        array(
          'id'    => 'st_map_feature_heading',
          'type'  => 'text',
          'title' => 'Heading',
        ),

        array(
          'id'    => 'st_map_feature_content',
          'type'  => 'textarea',
          'title' => 'Content',
        ),

      ),
    ),   

    array(
      'id'    => 'st_map_feature_read_more',
      'type'  => 'text',
      'title' => 'Read More',
    ),

    array(
      'id'    => 'st_map_feature_read_more_link',
      'type'  => 'text',
      'title' => 'Read More Link',
    ),

    array(
      'id'    => 'st_map_feature_signup',
      'type'  => 'text',
      'title' => 'Sign Up',
    ),

    array(
      'id'    => 'st_map_feature_signup_link',
      'type'  => 'text',
      'title' => 'Signup Link',
    ),
  )
);

 


// ------------------------------
// Home Catch  More                    -
// ------------------------------

$options[]   = array(
  'name'     => 'st_catch_more_section',
  'title'    => 'Catch More',
  'fields'   => array(
  
    array(
      'id'    => 'st_catch_more_title',
      'type'  => 'text',
      'title' => 'Title',
    ),
    array(
      'id'    => 'st_catch_more_short_desc',
      'type'  => 'textarea',
      'title' => 'Short Description',
    ),

    array(
      'id'    => 'st_catch_more_long_desc',
      'type'     => 'wysiwyg',
      'title'    => 'Long Description',
      'settings' => array(
        'textarea_rows' => 5,
        'tinymce'       => true,
        'media_buttons' => false,
      )
    ),

    array(
      'id'       => 'st_catch_more_img',
      'type'     => 'upload',
      'title'    => 'Image',
    ),
   
  )
);

// ------------------------------
//  FAQS                      -
// ------------------------------

$options[]   = array(
  'name'     => 'st_faqs_section',
  'title'    => 'FAQS Page',
  'fields'   => array(

    array(
      'id'              => 'st_faqs',
      'type'            => 'group',
      'title'           => 'Faqs',
      'button_title'    => 'Add New FAQ',
      'accordion_title' => 'Add New FAQ',
      'fields'          => array(

        array(
          'id'    => 'st_faq_title',
          'type'  => 'text',
          'title' => 'Title',
        ),
        array(
          'id'    => 'st_faq_content',
          'type'  => 'textarea',
          'title' => 'Content',
        ),

      ),
    ),   
   
  )
);

// ------------------------------
//  Auth Section                      -
// ------------------------------

$options[]   = array(
  'name'     => 'st_auth_section',
  'title'    => 'Register & Login',
  'fields'   => array(
    
    array(
      'id'    => 'st_auth_bg',
      'type'  => 'upload',
      'title' => 'Background',
    ),
   
  )
);


// ------------------------------
//  Membership Page                      -
// ------------------------------

$options[]   = array(
  'name'     => 'st_membership_section',
  'title'    => 'Memberships',
  'fields'   => array(

    array(
      'id'              => 'st_memberships',
      'type'            => 'group',
      'title'           => 'Memberships',
      'button_title'    => 'Add New Membership',
      'accordion_title' => 'Add New Membership',
      'fields'          => array(
 
          array(
            'id'    => 'st_membership_subscription',
            'type'  => 'text',
            'title' => 'Subscription Title',
          ),
          array(
            'id'    => 'st_membership_currency',
            'type'  => 'text',
            'title' => 'Currency',
          ),
          array(
            'id'    => 'st_membership_price',
            'type'  => 'number',
            'title' => 'Price',
          ),
          array(
            'id'    => 'st_membership_price_decimals',
            'type'  => 'number',
            'title' => 'Decimals',
          ),
          array(
            'id'    => 'st_membership_signup',
            'type'  => 'text',
            'title' => 'Sign up',
          ),

          array(
            'id'    => 'st_membership_signup_link',
            'type'  => 'text',
            'title' => 'Sign up Link',
          ),

          array(
            'id'    => 'st_membership_short_desc',
            'type'  => 'text',
            'title' => 'Short Description',
          ),

          array(
            'id'             => 'sorter_1',
            'type'           => 'sorter',
            'title'          => 'Sorter',
            'default'        => array(
              'enabled'      => array(
                'bmw'        => 'BMW',
                'mercedes'   => 'Mercedes',
                'volkswagen' => 'Volkswagen',
              ),
              'disabled'     => array(
                'ferrari'    => 'Ferrari',
                'mustang'    => 'Mustang',
              ),
            ),
          ),
          
           
      ),
    ),   
   
  )
);


// ------------------------------
// Home   Subscribe   Story                -
// ------------------------------

$options[]   = array(
  'name'     => 'st_subscribe',
  'title'    => 'Subscribe',
  'fields'   => array(
   
    array(
      'id'    => 'st_subscribe_user_img',
      'type'  => 'upload',          
      'title' => 'User Image',
     ),

    array(
      'id'    => 'st_subscribe_title',
      'type'  => 'text',
      'title' => 'Title',
    ),

    array(
      'id'       => 'st_subscribe_content',
      'type'     => 'wysiwyg',
      'title'    => 'Content',
      'settings' => array(
        'textarea_rows' => 10,
        'tinymce'       => true,
        'media_buttons' => false,
      )
    ),
 
    array(
      'id'    => 'st_subscribe_read_more',
      'type'  => 'text',
      'title' => 'Read More',
    ),
    array(
      'id'    => 'st_subscribe_read_more_link',
      'type'  => 'text',
      'title' => 'Read More Link',
    ),

  )
);



// ------------------------------
// Home   Download  Satfish                -
// ------------------------------

$options[]   = array(
  'name'     => 'st_download_satfish_section',
  'title'    => 'Download Satfish',
  'fields'   => array(
   
    array(
      'id'    => 'st_download_satfish_img',
      'type'  => 'upload',          
      'title' => 'Image',
     ),

    array(
      'id'    => 'st_download_satfish_title',
      'type'  => 'text',
      'title' => 'Title',
    ),

    array(
      'id'       => 'st_download_satfish_content',
      'type'     => 'wysiwyg',
      'title'    => 'Content',
      'settings' => array(
        'textarea_rows' => 10,
        'tinymce'       => true,
        'media_buttons' => false,
      )
    ),
 

  )
);


// ------------------------------
//  Footer                      -
// ------------------------------

$options[]   = array(
  'name'     => 'st_footer',
  'title'    => 'Footer',
  'fields'   => array(
  
    array(
      'id'    => 'st_footer_logo',
      'type'  => 'upload',
      'title' => 'Logo',
    ),

    array(
      'id'    => 'st_footer_package_title',
      'type'  => 'text',
      'title' => 'Package Title',
    ),

    array(
      'id'    => 'st_footer_package_per_year',
      'type'  => 'text',
      'title' => 'Package Rate',
    ),

    array(
      'id'    => 'st_footer_icon',
      'type'  => 'icon',
      'title' => 'Icon',
      'default' => "fa fa-facebook"
    ),
    array(
      'id'    => 'st_footer_icon_link',
      'type'  => 'text',
      'title' => 'Link',
      'default' => "https://www.facebook.com"
    ),
    array(
      'id'    => 'st_footer_icon1',
      'type'  => 'icon',
      'title' => 'Icon1',
      'default' => "fa fa-twitter"
    ),
    array(
      'id'    => 'st_footer_icon1_link',
      'type'  => 'text',
      'title' => 'Link',
      'default' => "https://www.twitter.com"
    ),
    array(
      'id'    => 'st_footer_icon2',
      'type'  => 'icon',
      'title' => 'Icon2',
      'default' => "fa fa-instagram"
    ),
    array(
      'id'    => 'st_footer_icon2_link',
      'type'  => 'text',
      'title' => 'Link',
      'default' => "https://www.instagram.com"
    ),
    array(
      'id'    => 'st_footer_icon3',
      'type'  => 'icon',
      'title' => 'Icon3',
      'default' => "fa fa-youtube-play"
    ),
    array(
      'id'    => 'st_footer_icon2_link',
      'type'  => 'text',
      'title' => 'Link',
      'default' => "https://www.youtube.com"
    ),
    array(
      'id'       => 'st_footer_copyright',
      'type'     => 'wysiwyg',
      'title'    => 'Copyright',
      'sanitize'      => false,
      'settings' => array(
        'textarea_rows' => 10,
        'tinymce'       => true,
        'media_buttons' => false,
        'sanitize'      => false
      )
    ),

  )
);


CSFramework::instance( $settings, $options );