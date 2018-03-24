 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/portfolio2018/public_html/';
    $baseUrl = '/portfolio2018/public_html/';
}
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/portfolio2018/public_html/';
    $baseUrl = '/portfolio2018/public_html/';
}


//this is live base url
if ($_SERVER['HTTP_HOST'] == 'portfolio2018.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'portfolio2018.com/';
}

// Set commonly used paths
/*Includes path contains the html for each page*/
define('INCLUDES_PATH', $basePath . 'includes/');
define('SERVICES_INCLUDES_PATH', INCLUDES_PATH . 'services/');
 define('LANDING_INCLUDES_PATH', INCLUDES_PATH . 'landingpages/');

//Path for blog
define('BLOG_PATH', $basePath . 'blog/');

// Set common links
define('CSS_URL',   $baseUrl. 'assets/css/');
define('JS_URL',    $baseUrl . 'assets/js/');

/**
 * Set image links:
 *  layout - used for site layout and won't be changed much
 *  content - used for consumer uploaded content -- should be part of .gitignore
 */
define('IMAGE_URL', $baseUrl . 'assets/img/');

// Define the array allowing redirect pretty URLS, topLevelPages are usually what is on the nav bar
// Each page must match a file in the includes folder for example: home.php, services.php, aboutus.php....
$topLevelPages = array(
    'home' => 'home',
    'services' => 'services',
    'about-us' => 'about-us',
    'contact-us' => 'contact-us',
    '404' => '404'
);

/*servicesPages are for any other pages on the site and anything from a dropdown on the nav bar*/
// Each page must match a file in the includes folder for example: coding.php....
 $subLevelPages = array(
     'coding' => 'coding',
     'blog' => 'blog',
     'thank-you' => 'thank-you'
 );

 $landingPages = array(
     'SampleLanding' => 'samplelanding'
 );
/*This description array sets up the meta description and title tag for each page identified in the topLevelPages or subLevelPages array*/
$description = array (
    "home" => array(
        "meta_desc" => "This is the home page of test site.",
        "title" => "Home Page"
    ),
    "about-us" => array(
        "meta_desc" => "This is the about page of test site",
        "title" => "About Page"
    ),

    "contact-us" => array(
        "meta_desc" => "This is the contact page",
        "title" => "Contact page"

    ),
    "services" => array(
        "meta_desc" => "These are the services we offer",
        "title" => "Services page"

    ),  
    "coding" => array(
        "meta_desc" => "A service we provide is web development.",
        "title" => "Coding Services"
    ), 
    "blog" => array(
        "meta_desc" => "This is our blog",
        "title" => "Blog Page"
    ),
    "samplelanding" => array(
        "meta_desc" => "This is our landing page.",
        "title" => "Campaign Title"
    ),
    "404" => array (
        "meta_desc" => "404 error",
        "title" => "Error 404",
        "keywords" => "404"    ),
    "thank-you" => array (
        "meta_desc" => "Thank you for contacting us.",
        "title" => "Thank you",
        "keywords" => "Contact Us Thank You"    ),
);