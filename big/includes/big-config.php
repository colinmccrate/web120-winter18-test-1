<?php
/* BIG CONFIG */
/**
 * big-config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LeAOUAUAAAAAJFhipRUMnFiYScubpATrIuDfO5u";
$secretKey = "6LeAOUAUAAAAAJTb7hQhPZiI5uUO29pTtZ9nGmRb";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//echo basename($_SERVER['PHP_SELF']);
//die;

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Colin McCrate: WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
            
    case 'flexbox.php':
        $title = 'Colin McCrate: Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;  
        
    case 'galleries.php':
        $title = 'Colin McCrate: Galleries';
        $logo = '';
        $PageID = 'Galleries Research';
    break;
        
    case 'map.php':
        $title = 'Colin McCrate: Map Research';
        $logo = '';
        $PageID = 'Map Research';
    break;
            
    case 'calendar.php':
        $title = 'Colin McCrate: Calendar Research';
        $logo = '';
        $PageID = 'Calendar Research';
    break;         
            
    case 'youtube.php':
        $title = 'Colin McCrate: YouTube Wordpress Intro Video';
        $logo = '';
        $PageID = 'Wordpress Intro Video';
    break;        
            
   case 'parallax.php':
        $title = 'Colin McCrate: Parallax Research';
        $logo = '';
        $PageID = 'Parallax Research';
    break;         
            
    case 'shoppingcarts.php':
        $title = 'Colin McCrate: Shopping Carts Research';
        $logo = '';
        $PageID = 'Shopping Carts Research';
    break;         
    
    case 'siteapp.php':
        $title = 'Colin McCrate: Site vs App Research';
        $logo = '';
        $PageID = 'Site vs App Research';
    break;     
        
    case 'webcam.php':
        $title = 'Colin McCrate: Webcam Research';
        $logo = '';
        $PageID = 'Webcam Research';
    break; 

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;
}














