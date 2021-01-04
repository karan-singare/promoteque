<?php
  $page_name = get_query_var('pagename');

  if (gettype($page_name) == 'string' && $page_name != "") {
    /* This function is defined in 'functions.php' */
    load_page($page_name);
  }
 ?>
