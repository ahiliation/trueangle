<?php
class ThemeOptionsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_themeoptions_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_themeoptions_page()
    {
        // This page will be under "Settings"
        add_theme_page(
            'Sweettech Theme Setting', 
            'Theme Options', 
            'manage_options', 
            'sweettech_admin', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'sweettech_options' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2>Sweet Tech Theme Settings</h2>           
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'sweettech_option_group' );   
                do_settings_sections( 'sweettech_admin' );
                submit_button(); 
            ?>
            </form>
            <p>Thank you for using Sweet Tech theme. You can provide the feedback via <a target="_blank" href="http://hellocoding.wordpress.com/2014/01/16/sweet-tech-wordpress-theme/">hellocoding.wordpress.com</a>.</p>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'sweettech_option_group', // Option group
            'sweettech_options', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        //Favicon section
        add_settings_section(
            'setting_section_id', // ID
            'Favicon Icon Setting', // Title
            array( $this, 'print_section_info' ), // Callback
            'sweettech_admin' // Page
        );  
        add_settings_field(
            'favicon', 
            'URL : ', 
            array( $this, 'favicon_callback' ), 
            'sweettech_admin', 
            'setting_section_id'
        );

        //Show/Hide Post thumbnail
        add_settings_section(
            'setting_section_id2', // ID
            'Show or Hide Post Thumbnail', // Title
            array( $this, 'print_section_info2' ), // Callback
            'sweettech_admin' // Page
        );

        add_settings_field(
            'postthumb', 
            'Show/Hide', 
            array( $this, 'postthumb_callback' ), 
            'sweettech_admin', 
            'setting_section_id2'
        );

        //Social Media
        add_settings_section(
            'setting_section_id3', // ID
            'Social Media URLs', // Title
            array( $this, 'print_section_info3' ), // Callback
            'sweettech_admin' // Page
        );      

        add_settings_field(
            'facebook', 
            'Facebook', 
            array( $this, 'facebook_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
        add_settings_field(
            'twitter', 
            'Twitter :', 
            array( $this, 'twitter_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
        add_settings_field(
            'pinterest', 
            'Pinterest :', 
            array( $this, 'pinterest_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
        add_settings_field(
            'googleplus', 
            'Google Plus :', 
            array( $this, 'googleplus_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
        add_settings_field(
            'youtube', 
            'YouTube :', 
            array( $this, 'youtube_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
        add_settings_field(
            'feedurl', 
            'Feed URL :', 
            array( $this, 'feedurl_callback' ), 
            'sweettech_admin', 
            'setting_section_id3'
        );
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['favicon'] ) )
            $new_input['favicon'] = sanitize_text_field( $input['favicon'] );

        if( isset( $input['postthumb'] ) )
            $new_input['postthumb'] = sanitize_key( $input['postthumb'] );

        if( isset( $input['facebook'] ) )
            $new_input['facebook'] = sanitize_text_field( $input['facebook'] );
        if( isset( $input['twitter'] ) )
            $new_input['twitter'] = sanitize_text_field( $input['twitter'] );
        if( isset( $input['pinterest'] ) )
            $new_input['pinterest'] = sanitize_text_field( $input['pinterest'] );
        if( isset( $input['googleplus'] ) )
            $new_input['googleplus'] = sanitize_text_field( $input['googleplus'] );
        if( isset( $input['youtube'] ) )
            $new_input['youtube'] = sanitize_text_field( $input['youtube'] );
        if( isset( $input['feedurl'] ) )
            $new_input['feedurl'] = sanitize_text_field( $input['feedurl'] );

        return $new_input;
    }

    /** 
     * Favicon Section
     */
    public function print_section_info()
    {
        print 'Type or Paste the full url of your favicon icon including(http://).';
    }

    public function favicon_callback()
    {
        printf(
            '<input size="80" type="text" id="favicon" name="sweettech_options[favicon]" value="%s" />',
            isset( $this->options['favicon'] ) ? esc_attr( $this->options['favicon']) : ''
        );
    }

    /** 
     * Show/Hide Post Thumbnail
     */
    public function print_section_info2()
    {
        print 'Either select to show or hide post thumbnail.<br />Remember that for the post thumbnail to appear you must set featured image for the post.';
    }
    public function postthumb_callback()
    {
        printf('<label><input type="radio" name="sweettech_options[postthumb]" value="1" %s /> Show</label><br />
                <label><input type="radio" name="sweettech_options[postthumb]" value="0" %s /> Hide</label>',
                ($this->options['postthumb'] )==1 ? 'checked="checked"' : '',
                ($this->options['postthumb'] )==0 ? 'checked="checked"' : ''
            );
    }
    /** 
     * Social Media Settings
     */
    public function print_section_info3()
    {
        print 'Type the full profile url including (http://).';
    }
    public function facebook_callback()
    {
        printf(
            '<input size="80" type="text" id="facebook" name="sweettech_options[facebook]" value="%s" />',
            isset( $this->options['facebook'] ) ? esc_attr( $this->options['facebook']) : ''
        );
    }
    public function twitter_callback()
    {
        printf(
            '<input size="80" type="text" id="twitter" name="sweettech_options[twitter]" value="%s" />',
            isset( $this->options['twitter'] ) ? esc_attr( $this->options['twitter']) : ''
        );
    }
    public function pinterest_callback()
    {
        printf(
            '<input size="80" type="text" id="pinterest" name="sweettech_options[pinterest]" value="%s" />',
            isset( $this->options['pinterest'] ) ? esc_attr( $this->options['pinterest']) : ''
        );
    }
    public function googleplus_callback()
    {
        printf(
            '<input size="80" type="text" id="googleplus" name="sweettech_options[googleplus]" value="%s" />',
            isset( $this->options['googleplus'] ) ? esc_attr( $this->options['googleplus']) : ''
        );
    }
    public function youtube_callback()
    {
        printf(
            '<input size="80" type="text" id="youtube" name="sweettech_options[youtube]" value="%s" />',
            isset( $this->options['youtube'] ) ? esc_attr( $this->options['youtube']) : ''
        );
    }
    public function feedurl_callback()
    {
        printf(
            '<input size="80" type="text" id="feedurl" name="sweettech_options[feedurl]" value="%s" />',
            isset( $this->options['feedurl'] ) ? esc_attr( $this->options['feedurl']) : ''
        );
    }
}

if( is_admin() )
    $my_settings_page = new ThemeOptionsPage();
