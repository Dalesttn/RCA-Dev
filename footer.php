<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package realtimeconveyancer
 */

?>

	<style>

.footer-style {
	margin: 0 3.125rem;
	
}
.footer-logo
{max-width: var(--max-width); margin: 0 auto; padding: 1rem 3.125rem;}


.footer-logo .elementor-image::before, .footer-logo .elementor-image::after {
  display: inline-block;
  content: "";
  border-top: 3px solid #81A4C5;
  width: 38%;
  position: relative;
}
.footer-logo .elementor-image::after {
	bottom: 38px;
float: right;
}
.footer-logo .elementor-image::before{top: 24px;}
.footer-logo .custom-logo{margin: 0px auto;
display: block;}
.footer-logo .custom-logo {
  max-width: 260px;
}

.raven-nav-menu-horizontal .raven-nav-menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  justify-content: end;
  margin: 0 3.125rem;
}
.footer-menu-css li:not(:last-child) {
  border-right: 1px solid #fff;
}
.raven-nav-menu > li:not(:last-child) {
  margin-right: 0;
}
.raven-nav-menu > li > a.raven-menu-item {
  font-size: .8em;
  font-weight: 400;
  text-transform: capitalize;
  padding: 0 10px 0 10px ;
  color: #FFF;
  border-style: solid;
  border-width: 0 0 0 0;
}
.raven-nav-menu li.menu-item > a.raven-link-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  text-decoration: none;
  
 
}
.raven-nav-menu li.menu-item > a.raven-link-item:hover {
	text-decoration:underline;
}
@media screen and (min-width: 37.5em) {



.footer-style {
	max-width: var(--max-width); margin: 0 auto; padding: 1rem 3.125rem;
}

}
@media screen and (max-width: 767px) {
.raven-nav-menu-horizontal .raven-nav-menu {display:block;}
.footer-menu-css li:not(:last-child) {
  border-right: none;
}
.footer-logo .elementor-image::before, .footer-logo .elementor-image::after {
  
  border-top: 0;
}
.elementor-image{border-bottom: 3px solid #81A4C5;
padding-bottom: 1rem;}
}


    .row{
      display: flex;
      justify-content: space-around;
      
	}
      
    footer input[type="text"],input[type="email"]{
        appearance: none;
width: 94%;
margin: 0;
height: 40px;
padding: 5px 12px;
border-radius: 3px;
outline: none;
border: 1px solid #cbd6e2;
background: #e8ebed;
color: #33475b;

font-size: 16px;
font-weight: normal;
line-height: 22px
      }
    
 footer input[type="email"]{width: 97%;!important}
  
  .rule{
    height: 2px;
    background: #e8ebed;
    margin: 0px 35px;
  }
  
  .form-footer{
    
padding: 15px 0;
  }
    
 form label{
		font-family: Roboto;
font-size: 13px;
font-weight: 500;
line-height: 20px;
color:var(--white);
	}
  
footer input[type="submit"]{background: #E7A6CA;
background: #E7A6CA;
border-color: #E7A6CA;
color: #fffff;
font-size: 12px;
line-height: 12px;
font-family: Roboto;
padding: 12px 24px;
color: #fff;
font-weight: 700;}

footer span{color: red;}
</style>
	<footer id="colophon" class="site-footer" style="padding: 1rem 0; background-color: var(--blue);">
	
	
	<div class="footer-logo">
	 <div class="elementor-image">
		<img src="https://test.realtimeconveyancer.com.au/wp-content/uploads/2019/08/rca-logo-full-v4.svg" class="custom-logo" alt="Realtime Conveyancer – Australia's Leading Digital Property Transaction Management System –" style="margin: 0px auto;display: block;" width="1042" height="215">												
		</div>
</div>
    <div class="footer-style" style="">
		<div class="site-info" style="
    display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  grid-gap: 0.5rem;border-bottom: 3px solid #81A4C5;
    ">

    
    <div>
	<h3>Navigation Links</h3>
	  <ul id="menu-links">
					   <li><a href="#">Home</a></li>
					   <li><a href="#">Features</a></li>
					   <li><a href="#">Why Us</a></li>
					   <li><a href="#">About Us</a></li>
					   <li><a href="#">Blog</a></li>
					   <li><a href="#">Contact</a></li>
					   <li><a href="#">Login</a></li>
                   </ul>
					

          

</div>

    <div> 
		<h3>Stay Connected</h3>
		<p style="color: var(--white); font-size: 14px;">Stay up to date on the latest from Realtime</p>
		        <!--  <img src="<?php //echo get_template_directory_uri() . '/img/form-min.png' ?>"/> -->
				
				<div class="card-form">
  <form class="signup">    
    <div class="form-body">
      <div class="row"> 
		  <div class="wp-block-column is-vertically-aligned-center">
		  <label>First Name <span>*</span></label>
        <input type="text" placeholder="Enter your first name here"  name="firstname" required="">
</div>
<div class="wp-block-column is-vertically-aligned-center">
		<label>Last Name <span>*</span></label>
        <input type="text" placeholder="Enter your last name here"  name="lastname" required="">
      </div>
	  </div>
      <div class="row">
		    <div class="wp-block-column is-vertically-aligned-center">
		  <label>Email <span>*</span></label>
        <input type="email" placeholder="Enter your email here"  name="email" required="">
      </div>
	  </div>
    </div>
    
    <div class="form-footer">
     <input type="submit" value="Submit" class="hs-button primary large">
      
    </div>
  </form>
</div>
                </div>
				<div >
					<h3 style="margin: 0.5rem 0; color: #fff;">Contact Details</h3>   
					<p style="margin: 0.5rem 0;font-size: 14px;"><a style="color: var(--white); text-decoration: none;" href="mailto:hello@realtimeconveyancer.com.au"><img src="<?php echo get_template_directory_uri() . '/img/mail-min.png' ?>" style="vertical-align: middle;padding-right: 5px"/>hello@realtimeconveyancer.com.au</a></p>
					<p style="margin: 0.5rem 0;font-size: 14px;"><a style="color: var(--white); text-decoration: none;" href="tel:+618 9468 8909"><img src="<?php echo get_template_directory_uri() . '/img/phone-min.png' ?>" style="vertical-align: middle;padding-right: 5px"/>+618 9468 8909</a></p>
					
				</div>
				<div >
					<p style="margin: 0.5rem 0;  color: #fff; font-size: 14px;">We welcome you to connect with us on:</p>
					<p style="margin: 0.5rem 0;"><a style="color: var(--white); text-decoration: none;" href="https://www.facebook.com/RealtimeConveyancer/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/facebook.png' ?>" style="vertical-align: middle;padding-right: 5px"/>Facebook</a></p>
					<p style="margin: 0.5rem 0;"><a style="color: var(--white); text-decoration: none;" href="https://www.linkedin.com/company/realtime-conveyancer/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/img/linkedin.png' ?>" style="vertical-align: middle;padding-right: 5px"/>LinkedIn</a></p>
					
          </div></div>
		</div><!-- .site-info -->
<div class="footer-menu-css">

<nav class="raven-nav-menu-main raven-nav-menu-horizontal raven-nav-menu-tablet-vertical raven-nav-menu-mobile-vertical raven-nav-icons-hidden-desktop raven-nav-icons-hidden-tablet raven-nav-icons-hidden-mobile">
			<ul id="menu-1e227c9" class="raven-nav-menu" data-smartmenus-id="16466396685744114"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4555"><a href="https://realtimeconveyancer.com.au/pts-terms-conditions/" class="raven-menu-item raven-link-item ">PTS T&amp;Cs</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4554"><a href="https://realtimeconveyancer.com.au/privacy-policy/" class="raven-menu-item raven-link-item ">Privacy</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4551"><a href="https://realtimeconveyancer.com.au/information-security-policy/" class="raven-menu-item raven-link-item ">Info Security</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4552"><a href="https://realtimeconveyancer.com.au/user-security-policy/" class="raven-menu-item raven-link-item ">User Security</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4553"><a href="https://realtimeconveyancer.com.au/system-requirements/" class="raven-menu-item raven-link-item ">System Requirements</a></li>
</ul>		</nav>
</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
