<?php
                      $myfile = fopen("blk.txt", "w") or die("Unable to open file!");
                      $txt = "blk";
                      fwrite($myfile, $txt);
                      fclose($myfile);

                      ob_start(); // ensures anything dumped out will be caught

                      // do stuff here
                      $url = 'http://localhost/controler/admin.php'; // this can be set based on whatever
                      
                      // clear out the output buffer
                      while (ob_get_status()) {
                          ob_end_clean();
                      }
                      
                      // no redirect
                      header( "Location: $url" );
           ?>