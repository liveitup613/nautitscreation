<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about-me'] = 'home/aboutMe';
$route['media'] = 'home/media';
$route['faq'] = 'home/faq';
$route['contact-us'] = 'home/contactUs';
$route['recipe'] = 'home/recipe';
$route['recipe/(:num)'] = 'home/recipe_show/$1';
$route['tutorial'] = 'home/tutorial';

//Admin Page

$route['admin'] = 'manageLogin';
$route['admin/home/guestbook'] = 'manageHome';
$route['admin/about-us/our-journey'] = 'manageAboutUs/our_journey';
$route['admin/about-us/local-store'] = 'manageAboutUs/local_store';
$route['admin/about-us/ingredient-resources'] = 'manageAboutUs/ingredient_resources';
$route['admin/media/photos'] = 'manageMedia/photos';
$route['admin/media/videos'] = 'manageMedia/videos';
$route['admin/explore/recipe'] = 'manageExplore/recipe';
$route['admin/explore/tutorial'] = 'manageExplore/tutorial';
$route['admin/faq'] = 'manageFaq';
$route['admin/contact-us'] = 'manageContactUs';

$route['admin/logout'] = 'manageLogin/logout';


// Apis

$route['api/guestbook/get'] = 'manageHome/getGuestBook';
$route['api/guestbook/add'] = 'manageHome/addGuestBook';
$route['api/guestbook/update'] = 'manageHome/updateGuestBook';
$route['api/guestbook/delete'] = 'manageHome/deleteGuestBook';

$route['api/value/get'] = 'manageHome/getValue';
$route['api/value/add'] = 'manageHome/addValue';
$route['api/value/update'] = 'manageHome/updateValue';
$route['api/value/delete'] = 'manageHome/deleteValue';

$route['api/aboutus/udpateJourney'] = 'manageAboutUs/udpateJourney';

$route['api/resource/add'] = 'manageHome/addResource';
$route['api/resource/get'] = 'manageHome/getResource';
$route['api/resource/update'] = 'manageHome/updateResource';
$route['api/resource/delete'] = 'manageHome/deleteResource';

$route['api/video/add'] = 'manageMedia/addVideo';
$route['api/video/delete'] = 'manageMedia/deleteVideo';

$route['api/tutorial/add'] = 'manageExplore/addTutorial';
$route['api/tutorial/delete'] = 'manageExplore/deleteTutorial';

$route['api/recipe/get'] = 'manageExplore/getRecipe';
$route['api/recipe/add'] = 'manageExplore/addRecipe';
$route['api/recipe/update'] = 'manageExplore/updateRecipe';
$route['api/recipe/delete'] = 'manageExplore/deleteRecipe';
$route['api/recipe/images'] = 'manageExplore/getRecipeImages';
$route['api/recipe/addImages'] = 'manageExplore/uploadRecipeImages';
$route['api/recipe/image/delete'] = 'manageExplore/deleteRecipeImage';

$route['api/whatwedo/add'] = 'manageWhatWeDo/addNewService';
$route['api/whatwedo/edit'] = 'manageWhatWeDo/updateService';
$route['api/whatwedo/delete'] = 'manageWhatWeDo/deleteService';
$route['api.whatwedo/get'] = 'manageWhatWeDo/getService';

$route['api/job/delete'] = 'manageCareer/deleteJob';
$route['api/job/update'] = 'manageCareer/updateJob';
$route['api/job/get'] = 'manageCareer/getJob';

$route['api/contactus/updateSummary'] = 'manageContactUs/updateSummary';

$route['api/sendEmail'] = 'manageContactUs/sendEmail';
$route['api/addLog'] = 'manageHome/addLog';
