<?php 


/*
Plugin Name: Spiffy Email List Builder
Plugin URI: 
Description: The ultimate email list building plugin for WordPress. Capture new subscribers. Reward subscribers with a custom download upon opt-in. Build unlimited lists. Import and export subscribers easily with .csv
Version: 1.0
Author: DeShaun Jones
Author URI: http://deshaunjones.com 
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: spiffy-email-list-builder
*/


/* !0. TABLE OF CONTENTS */

/*
	
	1. HOOKS
	
	2. SHORTCODES
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS
	
	10. MISCELLANEOUS 

*/




/* !1. HOOKS */




/* !2. SHORTCODES */

function selb_form ( $args, $content="") {
    
  // setup our output variable - the form html
  $output = '
  
    <div class="selb">
      <form id="selb_form" name="selb_form" class="selb-form" method="post">
        <p class="selb-input-container">
            <label>Your Name</label> <br />
            <input type="text" name="selb_fname" placeholder="First Name" />
            <input type="text" name="selb_lname" placeholder="Last Name" />
        </p>

        <p class="selb-input-container">
        <label>Your Email</label> <br />
        <input type="email" name="selb_email" placeholder="ex.  you@email.com" />
    </p>

    <p class="selb-input-container">

    <input type="submit" name="selb_submit" value="Sign Me Up!" />
</p>

      </form>

    </div>
  
  '; 

  // return our results/html
  return $output;
}



/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */




/* !5. ACTIONS */




/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */




/* !8. ADMIN PAGES */




/* !9. SETTINGS */




/* !10. MISCELLANEOUS */



