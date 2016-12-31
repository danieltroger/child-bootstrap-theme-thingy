<?php defined('ABSPATH') or die();
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar. 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>
<div class="container main">
    <div class="row main-content">
        <div class="col-gold-a">            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content-block">            
                <header>
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                </header>
                <article class="post" id="post-<?php the_ID(); ?>">
                                <?php echo the_content(); ?>
                </article>
            </div> <!-- /.content -->        
            <?php endwhile; endif; ?>
        </div> <!-- /.col -->
        <div class="col-gold-b">     
            <div class="content-block">
                <?php get_sidebar('page'); ?>
            </div>
        </div><!--/.col -->
    </div> <!--/.row -->   
</div><!-- container -->    
<?php get_footer(); ?>
