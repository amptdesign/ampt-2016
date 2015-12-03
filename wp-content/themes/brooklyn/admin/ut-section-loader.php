<?php


if ( ! function_exists( 'ut_recognized_sections' ) ) :

    function ut_recognized_sections() {
        
        return array(
            
            'demo_1'  => array(
                'title'     => 'Demo 1',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/basic/',
                'sections'  => array(
                    1 => array(
                        'title' => 'ABOUT BROOKLYN',
                        'url'   => '#section-about-brooklyn',
                    ),
                    2 => array(
                        'title' => 'PASSION LEADS TO DESIGN',
                        'url'   => '#section-our-philosophy-is',
                    ),
                    3 => array(
                        'title' => 'OUR TEAM',
                        'url'   => '#section-our-team',
                    ),
                    4 => array(
                        'title' => 'SOME FUN FACTS',
                        'url'   => '#section-some-fun-facts',
                    ),
                    5 => array(
                        'title' => 'DROP US A LINE',
                        'url'   => '#section-drop-us-a-line',
                    ),
                    6 => array(
                        'title' => 'OUR SERVICE',
                        'url'   => '#section-our-service',
                    ),
                    7 => array(
                        'title' => 'OUR WORK',
                        'url'   => '#section-work',
                    ),
                    8 => array(
                        'title' => 'GET CONNECTED',
                        'url'   => '#section-get-connected',
                    ),
                    9 => array(
                        'title' => 'HAPPY CLIENTS',
                        'url'   => '#section-happy-clients-2',
                    ),
                    10 => array(
                        'title' => 'CLIENTS',
                        'url'   => '#section-clients',
                    ),
                ),
            ),
            'demo_2'  => array(
                'title'     => 'Demo 2',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/extended/',
                'sections'  => array(
                    1 => array(
                        'title' => 'ABOUT BROOKLYN',
                        'url'   => '#section-about-brooklyn',
                    ),
                    2 => array(
                        'title'         => 'ABOUT BROOKLYN',
                        'url'           => '#section-about-brooklyn',
                        'subsection'    => array(
                            1 => array(
                                'title'     => 'What could be better than Brookyln?',
                                'url'       => '#drop-us-a-line'
                            ),
                            2=> array(
                            
                            )                            
                        )
                    )
                )
            ),
            'demo_3'  => array(
                'title'     => 'Demo 3',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/elegant/',
                'sections'  => array()
            ),
            'demo_4'  => array(
                'title'     => 'Demo 4',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/business/',
                'sections'  => array()
            ),
            'demo_5'  => array(
                'title'     => 'Demo 5',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo5/',
                'sections'  => array()
            ),
            'demo_6'  => array(
                'title'     => 'Demo 6',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo6/',
                'sections'  => array()
            ),
            'demo_7'  => array(
                'title'     => 'Demo 7',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo7/',
                'sections'  => array()
            ),
            'demo_8'  => array(
                'title'     => 'Demo 8',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/landing/',
                'sections'  => array()
            ),
            'demo_9'  => array(
                'title'     => 'Demo 9',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo9/',
                'sections'  => array()
            ),
            'demo_10' => array(
                'title'     => 'Demo 10',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo10/',
                'sections'  => array()
            ),
            'demo_11' => array(
                'title'     => 'Demo 11',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo11/',
                'sections'  => array()
            ),
            'demo_12' => array(
                'title'     => 'Demo 12',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo12/',
                'sections'  => array()
            ),
            'demo_13' => array(
                'title'     => 'Demo 13',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo13/',
                'sections'  => array()
            ),
            'demo_14' => array(
                'title'     => 'Demo 14',
                'url'       => 'http://themeforest.unitedthemes.com/wpversions/brooklyn/demo14/',
                'sections'  => array()
            ),
            
        );
    
    }
    
endif;


/*
|--------------------------------------------------------------------------
| Section Loader
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'ut_section_loader' ) ) :

    function ut_section_loader() {
        
        ?>
        
        <div id="ut-section-loader-modal" class="ut-modal-option-tree" style="display:none;">
            
            <div class="ut-modal-box-option-tree ut-admin">
            
                <div class="ut-modal-option-tree-header">
                    <div class="inner">
                        <h2><?php esc_html_e( 'Load Section Preset' , 'unitedthemes' ); ?></h2>
                    </div>
                </div>

                <div class="ut-modal-option-tree-body">
                
                    <div class="inner">
                        
                        <div id="ut-available-sections">
                            
                            <?php foreach( ut_recognized_sections() as $site ) : ?>
                                
                                <h3><?php echo $site['title']; ?><a target="_blank" href="<?php echo $site['url']; ?>"><?php esc_html_e( 'Preview this Demo' , 'unitedthemes' ); ?></a></h3>
                                
                                <div>
                                    
                                    <div class="ut-table-wrapper">
                                    
                                        <div class="ut-table">
                                        
                                            <div class="row header blue">
                                                
                                                <div class="cell">
                                                    Name
                                                </div>
                                                
                                                <div class="cell">
                                                    Preview
                                                </div>
                                                
                                                <div class="cell">
                                                    Install
                                                </div>
                                                
                                            </div>
                                                                                
                                            <?php foreach( $site['sections'] as $section ) : ?>
                                                
                                                <div class="row">
                                                    
                                                    <div class="cell">
                                                
                                                        <?php echo $section['title']; ?>
                                                    
                                                    </div>
                                                    
                                                    <div class="cell">
                                                        
                                                        <a class="ut-section-action" target="_blank" href="<?php echo $site['url']; ?><?php echo $section['url']; ?>">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    
                                                    </div>    
                                                    
                                                    <div class="cell">
                                                        
                                                        <a id="" class="ut-section-action" href="">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        
                                                    </div>
                                                
                                                </div>
                                                
                                            <?php endforeach; ?>
                                        
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                
                            <?php endforeach; ?>
                            
                        </div>
                        
                    </div>
                
                </div>
                
                <div class="ut-modal-option-tree-footer">
                    
                    <div class="inner">
                        
                        <a href="#" class="close-ut-modal-option-tree"><?php _e( 'Close' , 'unitedthemes' ); ?></a>
                    
                    </div>                   
                
                </div>

           </div>
            
        </div>
        
        <?php
    
    }
    
    add_action('admin_footer-post.php', 'ut_section_loader');
    add_action('admin_footer-post-new.php', 'ut_section_loader');
     
endif;

/*
|--------------------------------------------------------------------------
| Section Loader Button
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'ut_section_loader_button' ) ) :
    
    
        
    function ut_section_loader_button($context) {
                
        echo '<a id="ut-section-loader" style="padding: 3px 12px; border-radius:0px; font-size: 12px; margin-top: 2px;" class="option-tree-ui-button blue light" title="' . esc_html__( 'Section Loader' , 'unitedthemes' ) . '" href="#"> ' . esc_html__( 'Load Section Preset' , 'unitedthemes' ) . '</a>';
    
    }
    
    add_action( 'media_buttons', 'ut_section_loader_button', 15 );

    
endif;


/*
|--------------------------------------------------------------------------
| Load Demo Content on request
|--------------------------------------------------------------------------
*/
if ( !function_exists( 'ut_load_demo_section' ) ) {
	
	function ut_load_demo_section( $data , $postarr ) {
        
        echo '<pre>';
        print_r( $data );
        echo '</pre>';
    
    }
    
    //add_filter( 'wp_insert_post_data' , 'ut_load_demo_section' , '99', 2 );
        
}


?>