<?php
/** 
 * Adding options page under Appearance menu 
 */
function iconic_one_options_theme_menu() {  
  
add_theme_page( 'Iconic One Theme', 'Iconic One Theme', 'edit_theme_options', 'iconic_one_theme_options', 'iconic_one_options_display');  
  
} 
add_action( 'admin_menu', 'iconic_one_options_theme_menu' ); 

/** 
 * Adding customizer link under Appearance menu
 */ 
	function iconic_one_customize_button() {
	    $theme_page = add_theme_page(
	        __( 'Iconic One' , 'iconic-one' ),
	        __( 'Customize Iconic One' , 'iconic-one' ),  
	        'edit_theme_options' ,       
	        'customize.php'            
	    );
	} add_action('admin_menu', 'iconic_one_customize_button');

/** 
 * Show Iconic One Options 
 */ 
function iconic_one_options_display() { 
?> 
    <!-- Create a header in the default WordPress 'wrap' container --> 
    <div class="wrap"style='background:#FFFFFF;border:1px solid #e1e1e1; padding:20px;min-width:750px; max-width:960px;'> 
  
	<div class="header" style="margin-bottom:10px;">   
       <div class="hleft" style="float:left;width:50%;margin-bottom: 8px;">
			<div id="icon-themes" class="icon32"></div> 
				<h2>Iconic One Theme Options</h2>
					<p>
						<a href="https://themonic.com/iconic-one-pro/">
						<img style='margin-left:0px;' src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/themonic.png" alt="Iconic One"></a>
					</p>
					<div class="hotitle" style='background: #fff; padding:5px; margin-top:10px; line-height:1.2;'><h1>Iconic One Quick Start Guide</h1></div>
				
			</div>
	</div>
<div style="clear:both;">
<div style="background:#FFFFFF;float:right;padding:30px 0px 0px 40px; border-left:1px solid #e1e1e1; margin:10px;max-width:41%;">
<img style='margin-left:0px;' src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Iconic-One-pro-logo.png" alt="">
<h3><a style="text-decoration:none;" href="https://demo.themonic.com/io-pro/">Pro Version Demo</a></h3>
<h3><a style="text-decoration:none;" href="https://themonic.com/iconic-one-pro/">Pro Version Features</a></h3>
<a href="https://themonic.com/plans-and-pricing/"><img style='margin-left:0px;' src="<?php echo esc_url( get_template_directory_uri()); ?>/img/iopbuy.png" alt=""></a>

<br>
</div>

<h3><a style="text-decoration:none;" href="https://demo.themonic.com/io/">Official Demo</a> for reference.</h3>
<h3>Read <a style="text-decoration:none;" href="https://themonic.com/iconic-one/">FAQs and How To's</a> for common customizations. </h3>
<h4>First Steps:</h4>
<h4>-- Setup Menu:</h4> 
This is the first step: Configure the Main Navigation menu for mobile view by
going to Appearance -> Menus. Create your WordPress menu as per your requirement and select it as <b>primary menu</b>.
<h4>-- Upload Logo: Use Appearance -> Customizer - for logo upload</h4> 
Logo of 187 x 54 pixel dimensions is used in the demo. 
You can easily try uploading logos of different sizes via live customizer. Latest versions comes with support for bigger logos.
<h4>-- Change Footer Texts: Use Appearance -> Customizer -> Footer to setup Footer left and right text: these areas also supports basic HTML elements</h4> 
<h3>Safe Customization & How to Upgrade</h3>
Iconic One is also supplied with custom.css file (Appearance -> Theme File Editor)
<p>Before upgrading to new versions backup the content of this custom.css file 
and all the files you have modified. For smaller customizations you can use Customizer -> Additional CSS and that is preferred way these days.</p>
<h3>Idea Behind Iconic One</h3>
<p>The Idea behind Iconic One is to equip the bloggers with a theme so that they don't have to look anywhere else,
It has been designed and coded in such a way that even if you are new to Wordpress 
you will be able to make the most out of it.
</p>
<h3>Iconic One is Safe</h3>
<p>Iconic One uses Wordpress native funtions to generate thumbnails without relying on third party scripts 
such as timthumb. Iconic One is also properly coded to avoid plugin conflicts and is customizable.
</p>
<h3>Built for Speed</h3>
The first thing you will notice about Iconic One is its blazing fast rendering, it will be loved by your visitors and they will have more time for browsing your content.
<h3>The Right Choice - Ultra Responsive</h3>
Iconic One is a premium quality theme with pixel perfect typography and responsiveness and is built for speed with pagespeed score of 95+, Iconic One implements proper SEO so that your content will rank high and is compatible with AIOSEO and Yoast SEO,
It utilizes latest HTML 5, CSS3 for creating the awesomeness that looks good on every browser and is future ready.
<h3>Support</h3>
Support is free, access the <a href="https://themonic.com/support/">Support Here</a>.
You can also <a href="https://themonic.com/feedback/.">report issues and feedback</a> and help us in improving the theme.
<h3>Further Development and Roadmap</h3>
Iconic One has been handcrafted with utmost care and love, we hope that you will love this theme, kindly support us by rating
the theme 5 stars, if there are any issue/bugs simply head to the support section to report them and we will do our best to fix those issues.
<br .../><br .../>
500+ hours have already been spent in development and fine tuning Iconic One. Based on your <a href="https://themonic.com/feedback/.">feedback</a> we will add the most wanted
features for further improvement.
<br .../><br .../>
This is just the beginning.<br><br>
- Shashank Singh
<br>Iconic One Developer<br><br>
<br>
<h3>Last Updated: July 30, 2023</h3>
<a href="https://themonic.com/iconic-one-pro/">
<img style='margin-left:0px;' src="https://demo.themonic.com/io/wp-content/uploads/2013/06/io.jpg" alt=""></a>



</div><!-- /.wrap --> 
<?php 
} // end iconic_one_options_display 
