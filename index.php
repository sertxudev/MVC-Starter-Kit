<?php

    /**
     * 
     * This is the main index.php file, so we're going to include all the necesary files.
     * We need the configuration file, and the three template files,
     * so we need to include the header, the content, and the footer.
     * In the content, for this example, we've got 3 pages, page1.php, page2.php and page3.php,
     * we will load the content depending of a $_GET value.
     * If we want to load the page2.php, the url should be /?route=page2
     * 
     */
    include_once './configuration/config.php';
    include_once './views/header.php';
    
    switch ($_GET['route']){
        
        case 'page2':
            include_once './views/page2.php';
            break;
        
        case 'page3':
            include_once './views/page3.php';
            break;
        
        default :
            include_once './views/page1.php';
            break;
    }
    
    include_once './views/footer';