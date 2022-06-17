<?php
class cloriato_Customizer {
    public static function cloriato_Register($wp_customize) {
        self::cloriato_Sections($wp_customize);
        self::cloriato_Controls($wp_customize);
    }
    public static function cloriato_Sections($wp_customize) {
        /**
         * General Section
         */
        $wp_customize->add_section('general_setting_section', array(
            'title' => __('General Settings', 'cloriato-lite'),
            'description' => __('Allows you to customize header logo, favicon, background etc settings for cloriato Theme.', 'cloriato-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '10',
            'capability' => 'edit_theme_options'
            )
        );
        /**
         * Home Page Top Feature Area
         */
        $wp_customize->add_section('home_top_feature_area', array(
            'title' => __('Top Feature Area', 'cloriato-lite'),
            'description' => __('Allows you to setup Top feature area section for cloriato Theme.', 'cloriato-lite'), //Descriptive tooltip
            'panel' => '',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Add panel for home page feature area
         */
        $wp_customize->add_panel('home_page_feature_area_panel', array(
            'title' => __('Home Page Feature Area', 'cloriato-lite'),
            'description' => __('Allows you to setup home page feature area section for cloriato Theme.', 'cloriato-lite'),
            'priority' => '12',
            'capability' => 'edit_theme_options'
        ));
        /**
         * Home Page Feature area setting
         */
        $wp_customize->add_section('home_page_feature_area_heading', array(
            'title' => __('Home Page Heading', 'cloriato-lite'),
            'description' => __('Allows you to setup feature area section heading for cloriato Theme.', 'cloriato-lite'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
             )
        );
        /**
         * Home Page feature area 1
         */
        $wp_customize->add_section('home_feature_area_section1', array(
            'title' => __('First Feature Area', 'cloriato-lite'),
            'description' => __('Allows you to setup left feature area section for cloriato Theme.', 'cloriato-lite'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page feature area 2
         */
        $wp_customize->add_section('home_feature_area_section2', array(
            'title' => __('Second Feature Area', 'cloriato-lite'),
            'description' => __('Allows you to setup right feature area section for cloriato Theme.', 'cloriato-lite'),
            'panel' => 'home_page_feature_area_panel',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Social Icon Section
         */
        $wp_customize->add_section('social_icon_section', array(
            'title' => __('Social Icons', 'cloriato-lite'),
            'description' => __('Allows you to setup social site link for cloriato Theme.', 'cloriato-lite'),
            'panel' => '',
            'priority' => '13',
            'capability' => 'edit_theme_options'
                )
        );
   }
    public static function cloriato_Section_Content() {
        $section_content = array(
            'general_setting_section' => array(
                'inkthemes_logo',
                'inkthemes_bodybg',
                'inkthemes_favicon'
            ),
            'home_top_feature_area' => array(
                'inkthemes_slideimage1',
                'inkthemes_slideheading1',
                'inkthemes_slidedescription1',
                'inkthemes_slidelink1'
            ),
            'home_page_feature_area_heading' => array(
                'inkthemes_mainheading',
                'inkthemes_heading_desc'
            ),
            'home_feature_area_section1' => array(
                'inkthemes_col_left_heading',
                'inkthemes_col_left_image',
                'inkthemes_col_left_desc',
                'inkthemes_col_left_readmore'
            ),
            'home_feature_area_section2' => array(
                'inkthemes_col_right_heading',
                'inkthemes_col_right_image',
                'inkthemes_col_right_desc',
                'inkthemes_col_right_readmore'
            ),
             'social_icon_section' => array(
                'inkthemes_facebook',
                'inkthemes_rss',
                'inkthemes_twitter',
                'inkthemes_instagram',
                'inkthemes_googleplus',
                'inkthemes_youtube',
                'inkthemes_tumblr',
                'inkthemes_flickr',
                'inkthemes_pinterest',
                'inkthemes_linkedin',
                
            ),
        );
        return $section_content;
    }
    public static function cloriato_Settings() {
        $cloriato_settings = array(
            'inkthemes_logo' => array(
                'id' => 'inkthemes_options[inkthemes_logo]',
                'label' => __('Custom Logo', 'cloriato-lite'),
                'description' => __('Choose your own logo. Optimal Size: 221px Wide by 84px Height.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/logo.png'
            ),
            'inkthemes_bodybg' => array(
                'id' => 'inkthemes_options[inkthemes_bodybg]',
                'label' => __('Body Background Image', 'cloriato-lite'),
                'description' => __('Choose your own background image,pattern.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'inkthemes_favicon' => array(
                'id' => 'inkthemes_options[inkthemes_favicon]',
                'label' => __('Custom Favicon', 'cloriato-lite'),
                'description' => __('Here you can upload a Favicon for your Website. Specified size is 16px x 16px.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
                'inkthemes_slideimage1' => array(
                'id' => 'inkthemes_options[inkthemes_slideimage1]',
                'label' => __('Home Top Feature Image', 'cloriato-lite'),
                'description' => __('Choose Image for your top section. Optimal Size: 950px x 350px', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => get_template_directory_uri() . '/images/img-1.jpg'
            ),
            'inkthemes_slideheading1' => array(
                'id' => 'inkthemes_options[inkthemes_slideheading1]',
                'label' => __('Home Top Feature Heading', 'cloriato-lite'),
                'description' => __('Enter your text heading for top image.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Single Click Install Wordpress Theme', 'cloriato-lite')
            ),
            'inkthemes_slidedescription1' => array(
                'id' => 'inkthemes_options[inkthemes_slidedescription1]',
                'label' => __('Home Top Feature Description', 'cloriato-lite'),
                'description' => __('Enter your text description for first slider.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Get Your Whole Site ready in an Instant. Just Upload the Theme and Press the Activate Button, Your whole site would be loaded with all the Dummy Content and all.', 'cloriato-lite')
            ),  
            'inkthemes_slidelink1' => array(
                'id' => 'inkthemes_options[inkthemes_slidelink1]',
                'label' => __('Home Top Feature Link URL', 'cloriato-lite'),
                'description' => __('Enter your link url for top image', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),    
             'inkthemes_mainheading' => array(
                'id' => 'inkthemes_options[inkthemes_mainheading]',
                'label' => __('Home Page Main Heading', 'cloriato-lite'),
                'description' => __('Mention the punch line for your business here.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Welcome to Our Site. Set this Heading from Themes Option Panel.', 'cloriato-lite')
            ),
            'inkthemes_heading_desc' => array(
                'id' => 'inkthemes_options[inkthemes_heading_desc]',
                'label' => __('Home Page Main Description', 'cloriato-lite'),
                'description' => __('Mention the Sub punch line for your business here.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('You can setup almost all the options using the Themes Options Panel. Just fill all the values and your text in the Themes Options Panel Form and just save the changes, the changes would start to reflect on the Home Page of your website. Its really simple and easy to use.', 'cloriato-lite')
            ),
            // Left Feature Section
            'inkthemes_col_left_heading' => array(
                'id' => 'inkthemes_options[inkthemes_col_left_heading]',
                'label' => __('Left Feature Heading', 'cloriato-lite'),
                'description' => __('Mention the heading for left column that will showcase your business services.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('What is this place ?', 'cloriato-lite')
            ),
            'inkthemes_col_left_image' => array(
                'id' => 'inkthemes_options[inkthemes_col_left_image]',
                'label' => __('Column Left Image', 'cloriato-lite'),
                'description' => __('Choose your image for column left', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' =>  get_template_directory_uri() . '/images/featured-image1.jpg'
            ),
            'inkthemes_col_left_desc' => array(
                'id' => 'inkthemes_options[inkthemes_col_left_desc]',
                'label' => __('Column Left Text', 'cloriato-lite'),
                'description' => __('Enter text description for column left. You can put html tags, embed code in this area.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, neque ut imperdiet pellentesque, nulla tellus tempus magna, sed consectetur orci metus a justo. Integer dictum, neque ut imperdiet pellentesque, nullat ellus tempus magna, sed consectetur orci metus a justo. Aliq uam ac congue nunc. Mauris a tortor ut massa egestas tempus. Pellentesque tincidunt fe rmentum diam sagittis ullamcorper.', 'cloriato-lite')
            ),
            'inkthemes_col_left_readmore' => array(
                'id' => 'inkthemes_options[inkthemes_col_left_readmore]',
                'label' => __('Column Left Redirect Link', 'cloriato-lite'),
                'description' => __('Enter url for column left redirect link', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            // Right Feature Section
            'inkthemes_col_right_heading' => array(
            'id' => 'inkthemes_options[inkthemes_col_right_heading]',
            'label' => __('Column Right Heading', 'cloriato-lite'),
            'description' => __('Mention the heading for Second column that will showcase your business services.', 'cloriato-lite'),                
            'type' => 'option',
            'setting_type' => 'textarea',
            'default' => __('Out Latest Project', 'cloriato-lite')
            ),
            'inkthemes_col_right_image' => array(
            'id' => 'inkthemes_options[inkthemes_col_right_image]',
            'label' => __('Column Right Image', 'cloriato-lite'),
            'description' => __('Choose your image for column right', 'cloriato-lite'),
            'type' => 'option',
            'setting_type' => 'image',
            'default' =>  get_template_directory_uri() . '/images/featured-image.png'
            ),
            'inkthemes_col_right_desc' => array(
                'id' => 'inkthemes_options[inkthemes_col_right_desc]',
                'label' => __('Column Right Text', 'cloriato-lite'),
                'description' => __('Enter text description for column right. You can put html tags, embed code in this area.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => __('Theme from InkThemes.com are based on One Click Installation, letting you to create your website at the Click of the button which provides great experience to a customer.', 'cloriato-lite')
            ),
            'inkthemes_col_right_readmore' => array(
                'id' => 'inkthemes_options[inkthemes_col_right_readmore]',
                'label' => __('Column Right Redirect Link', 'cloriato-lite'),
                'description' => __('Enter url for column right redirect link.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'inkthemes_facebook' => array(
                'id' => 'inkthemes_options[inkthemes_facebook]',
                'label' => __('Facebook URL', 'cloriato-lite'),
                'description' => __('Enter your Facebook URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),

            'inkthemes_rss' => array(
                'id' => 'inkthemes_options[inkthemes_rss]',
                'label' => __('RSS Feed URL', 'cloriato-lite'),
                'description' => __('Enter your RSS Feed URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),

            'inkthemes_twitter' => array(
                'id' => 'inkthemes_options[inkthemes_twitter]',
                'label' => __('Twitter URL', 'cloriato-lite'),
                'description' => __('Enter your Twitter URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),  
            
            'inkthemes_instagram' => array(
                'id' => 'inkthemes_options[inkthemes_instagram]',
                'label' => __('instagram URL', 'cloriato-lite'),
                'description' => __('Enter your instagram URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),  
             
            'inkthemes_googleplus' => array(
                'id' => 'inkthemes_options[inkthemes_googleplus]',
                'label' => __('googleplus URL', 'cloriato-lite'),
                'description' => __('Enter your googleplus URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),   
            
            'inkthemes_youtube' => array(
                'id' => 'inkthemes_options[inkthemes_youtube]',
                'label' => __('youtube URL', 'cloriato-lite'),
                'description' => __('Enter your youtube URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ), 

            'inkthemes_tumblr' => array(
                'id' => 'inkthemes_options[inkthemes_tumblr]',
                'label' => __('tumblr URL', 'cloriato-lite'),
                'description' => __('Enter your tumblr URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ), 

            'inkthemes_flickr' => array(
                'id' => 'inkthemes_options[inkthemes_flickr]',
                'label' => __('flickr URL', 'cloriato-lite'),
                'description' => __('Enter your flickr URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ), 

            
            'inkthemes_pinterest' => array(
                'id' => 'inkthemes_options[inkthemes_pinterest]',
                'label' => __('pinterest URL', 'cloriato-lite'),
                'description' => __('Enter your pinterest URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ), 

            'inkthemes_linkedin' => array(
                'id' => 'inkthemes_options[inkthemes_linkedin]',
                'label' => __('linkedin URL', 'cloriato-lite'),
                'description' => __('Enter your linkedin URL if you have one.', 'cloriato-lite'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ), 
            
            
            
            
        );
        return $cloriato_settings;
    }
    public static function cloriato_Controls($wp_customize) {
        $sections = self::cloriato_Section_Content();
        $settings = self::cloriato_Settings();
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'cloriato_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;
                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'cloriato_sanitize_text');
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
                        break;
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'cloriato_sanitize_textarea');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;
                    case 'link':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'cloriato_sanitize_url');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));

                        break;
                    default:
                        break;
                }
            }
        }
    }
    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('cloriato_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }
    /**
     * adds sanitization callback funtion : textarea
     * @package cloriato
     */
    public static function cloriato_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : url
     * @package cloriato
     */
    public static function cloriato_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }
    /**
     * adds sanitization callback funtion : text
     * @package cloriato
     */
    public static function cloriato_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package cloriato
     */
    public static function cloriato_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package cloriato
     */
    public static function cloriato_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

}
// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('cloriato_Customizer', 'cloriato_Register'));
function inkthemes_registers() {
          wp_register_script( 'inkthemes_jquery_ui', '//code.jquery.com/ui/1.11.0/jquery-ui.js', array("jquery"), true  );
	wp_register_script( 'inkthemes_customizer_script', get_template_directory_uri() . '/js/inkthemes_customizer.js', array("jquery","inkthemes_jquery_ui"), true  );
	wp_enqueue_script( 'inkthemes_customizer_script' );
	wp_localize_script( 'inkthemes_customizer_script', 'ink_advert', array(
		'pro' => __('View PRO version','cloriato-lite'),
		'url' => esc_url('https://www.inkthemes.com/market/wordpress-charity-theme/'),
		'support_text' => __('Need Help!','cloriato-lite'),
		'support_url' => esc_url('http://www.inkthemes.com/contact-us/'),
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'inkthemes_registers' );
