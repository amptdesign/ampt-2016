<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package unitedthemes
 */

$ut_display_section_header = get_post_meta( get_the_ID() , 'ut_display_section_header' , true );

/* check if page header has been activated */
if( $ut_display_section_header == 'show' ) {
    
    $ut_page_slogan             = get_post_meta( get_the_ID() , 'ut_section_slogan' , true );
    
    $ut_page_header_style       = get_post_meta( get_the_ID() , 'ut_section_header_style' , true ); 
    $ut_page_header_style       = ( !empty($ut_page_header_style) && $ut_page_header_style != 'global' ) ? $ut_page_header_style : ot_get_option('ut_global_headline_style');
    
    $ut_page_header_width       = get_post_meta( get_the_ID() , 'ut_section_header_width' , true );
    $ut_page_header_width       = ( !empty($ut_page_header_width) && $ut_page_header_width == 'ten' ) ? 'grid-100' : 'grid-70 prefix-15';
    
    $ut_page_header_text_align  = get_post_meta( get_the_ID() , 'ut_section_header_text_align' , true);
    $ut_page_header_text_align  = ( !empty($ut_page_header_text_align) && ($ut_page_header_text_align == 'left' || $ut_page_header_text_align == 'right')) ? 'header-' . $ut_page_header_text_align : '';   
        
} ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if( $ut_display_section_header == 'show' ) : ?>
    
	<div class="<?php echo $ut_page_header_width; ?> mobile-grid-100 tablet-grid-100">
		<header class="page-header <?php echo $ut_page_header_style;?> <?php echo $ut_page_header_text_align; ?>">
            <h1 class="page-title"><span><?php the_title(); ?></span></h1> 
            <?php if( !empty($ut_page_slogan) ) : ?>
                <p class="lead"><?php echo $ut_page_slogan; ?></p>
            <?php endif; ?>
                
            <div class="entry-meta">
                <?php edit_post_link( esc_html__( 'Edit', 'unitedthemes' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?>
            </div>                                  
		</header><!-- .page-header -->
    </div>
	
    <?php endif; ?>
    
    <div class="grid-100 mobile-grid-100 tablet-grid-100">
    <div class="entry-content clearfix">	
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unitedthemes' ),
                'after'  => '</div>',
            ) );
        ?>    			         		          
    </div><!-- .entry-content -->
    </div>
</div><!-- #post -->