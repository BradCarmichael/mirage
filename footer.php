<footer>
  <div class="container">
		<div class="dynamic-sidebar-wrap">
		    <div class="dynamic-sidebar post">
		        <ul>
		    	    <?php dynamic_sidebar('primary-widget-area'); ?>
		        </ul>
		    </div> 
		      
		    <div class="dynamic-sidebar hours"> 
		        <ul>
		    	    <?php dynamic_sidebar('secondary-widget-area'); ?>
		        </ul>
		    </div>  
		    <div class="dynamic-sidebar newsletter">    
		         <ul>
		    	    <?php dynamic_sidebar('third-widget-area'); ?>
		        </ul>
		    </div>  
	    </div>
	    <div class="copyright">
		     <p>&copy; Brad Carmichael <?php echo date('Y');?> Based on this <span class="theme"><a target="_blank" href="http://gt3demo.com/html/spaland/">theme</a></span>.</p> 
	     </div>
    </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
 
<?php wp_footer(); ?>
</body>
</html>