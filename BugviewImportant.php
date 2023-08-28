<?php

  /** Plugin declaration
   * extends MantisPlugin
   * Example plugin that implements Jquery files
   */

class BugviewImportantPlugin extends MantisPlugin { 
     # Declare your plugin here
     # Properties will be used by Mantis plugin's system
     function register() {
         $this->name = 'BugviewImportant';
         $this->description = 'A Jquery plugin to enhance the readability when a bug\'s priority is Important';
         $this->page = '';

         $this->version = '0.0.1';
         $this->requires = array(
             "MantisCore" => "2.0.0",
         );

         $this->author = 'Rikard Bosnjakovic';
         $this->contact = 'bos@ribit.se';
         $this->url = 'ribit.se';
     }

     # Hooked functions runs when the event is triggered
     # Here we need to display a '<scrit>' link into Footer
     # So we trigger the EVENT_LAYOUT_PAGE_FOOTER so Jquery can run after page is fully loaded
     function hooks() {
         return array(
             "EVENT_VIEW_BUG_DETAILS" => 'scripts',
         );
     }

     # This method will echo our '<script>' link to Jquery
     function scripts() {
         # Implement the Jquery files
         echo '<script type="text/javascript" src="' . plugin_file( 'BugviewImportant.js' ) . '"></script>';
     }
}
