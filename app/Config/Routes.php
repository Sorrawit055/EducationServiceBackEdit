<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Student');
$routes->setDefaultController('EducationStudent');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


//// Student ////
$routes->get('/students', 'student::getAllStudent');
$routes->get('/students/(:num)', 'student::getStudent/$1');
$routes->post('/students', 'student::addStudent');
$routes->put('/students/(:num)', 'student::updateProfileStudent/$1');

//// EducationStudent ////
$routes->get('/EducationStudent', 'EducationStudent::getAllEducation');
$routes->get('/EducationStudent/(:num)', 'EducationStudent::getEducation/$1');
$routes->post('/EducationStudent', 'EducationStudent::addEducationStudent');
$routes->put('/EducationStudent/(:num)', 'EducationStudent::updateEducationStudent/$1');

//// Login ////
$routes->post("/Login", "Login::index");

//// Title ////
$routes->get("/Title", "Title::getTitle");

//// Curriculum ////
$routes->get("/Curriculum", "Curriculum::getCurriculum");

//// University ////
$routes->get("/University", "University::getUniversityAll");
$routes->get('/university', 'University::index');
$routes->get('/university/(:num)', 'University::getUniversity/$1');
$routes->post('/university', 'University::createUniversity');
$routes->put('/university/(:num)', 'University::updateUniversity/$1');
$routes->get('/university', 'university::searchUniversity');
$routes->put('/university/(:num)', 'University::updateImageUniversity/$1');

//// faculty ////
$routes->get('/faculty', 'Faculty::index');
$routes->get('/faculty', 'Faculty::getFacultyAll');
$routes->get('/faculty/(:num)', 'Faculty::getFaculty/$1');
$routes->post('/faculty', 'Faculty::createFaculty');
$routes->put('/faculty/(:num)', 'Faculty::updateFaculty/$1');
$routes->post('/faculty', 'faculty::searchFaculty');

//// Course ////
$routes->get('/Course', 'Course::index');
$routes->get('/Course/(:num)', 'Course::getCourse/$1');
$routes->get('/Course', 'Course::getCoruseAll');
$routes->post('/Course', 'Course::createCourse');
$routes->put('/Course/(:num)', 'Course::updateCourse/$1');
$routes->post('/Course', 'Course::searchCourse');

//// Groupmajor ////
$routes->get('/groupmajor', 'GroupMajor::index');
$routes->get('/groupmajor/(:num)', 'GroupMajor::getGroupMajor/$1');
$routes->post('/groupmajor', 'GroupMajor::createGroupMajor');
$routes->put('/groupmajor/(:num)', 'GroupMajor::updateGroupMajor/$1');
$routes->post('/groupmajor', 'groupmajor::searchGroupMajor');


//// Degree ////
$routes->get('/degree', 'Degree::index');
$routes->get('/degree/(:num)', 'Degree::getDegree/$1');
$routes->post('/degree', 'Degree::createDegree');
$routes->put('/degree/(:num)', 'Degree::updateDegree/$1');
$routes->get('/degree', 'Degree::searchDegree');

//// Education ////
$routes->post('/createEducation','Education::createEducation');
$routes->put('/updateEducation/(:num)', 'Education::updateEducation/$1');
$routes->delete('/deleteEducation/(:num)','Education::deletedEducation/$1');
$routes->get('/getEducation','Education::getEducation');
$routes->get('/Education/(:num)','Education::getEducatioById/$1');
$routes->post('/Education','Education::searchEducation');
$routes->put('/Education/(:num)','Education::updateEducationImage/$1');

//// EducationDetail ////
$routes->get('/eduDetail', 'eduDetail::index');
$routes->post('/createEduDetail','eduDetail::createEduDetail');
$routes->put('/updateEduDetail/(:num)','eduDetail::updateEduDetail/$1');
$routes->get('/getEduDetail','eduDetail::getEduDetail');
$routes->get('/eduDetail/(:num)','eduDetail::getEduDetailById/$1');
$routes->get('/eduDetail/ByIdeducation/(:num)','eduDetail::getEduDetailByIdeducation/$1');
$routes->get('/eduDetail', 'eduDetail::searchEducationdetail');
$routes->get('/eduDetail', 'eduDetail::getEduDetailByIdedu');
$routes->get('/eduDetail/(:num)','eduDetail::getEducatiodetailById/$1');

$routes->post('/createEduCondition','EduCondition::createEduCondition');
$routes->put('/updateEduCondition/(:num)', 'EduCondition::updateEduCondition/$1');

//// EducationData ////
$routes->get("/EducationData", "EducationData::getAllEducationData");
$routes->get('/EducationData/(:num)', 'EducationData::getEducationdataid/$1');
$routes->get('/EducationData', 'EducationData::SearchEducation');
// $routes->get('/EducationData', 'EducationData::Search2');
$routes->get('/EducationData', 'EducationData::search3');
$routes->get('/EducationData', 'EducationData::getAllEducationCourse');
$routes->get('/EducationData', 'EducationData::getAllEducationFaculty');
$routes->get('/EducationData', 'EducationData::getAllEducationMajor');
$routes->get('/EducationData', 'EducationData::getAllEducationUniversity');
$routes->get('/EducationData', 'EducationData::getAllEducationDataStudent');

//// Round ////
$routes->get('/Round', 'Round::index');
$routes->get('/Round/(:num)', 'Round::getEducatioById/$1');

//// Teacher ////
$routes->get('/Teacher', 'Teacher::getYear');
$routes->get('/Teacher', 'Teacher::getClass');
$routes->get('/Teacher', 'Teacher::getStudentClass');
$routes->get('/Teacher', 'Teacher::getYearClass');
$routes->get('/Teacher/(:num)', 'Teacher::updateTeacher/$1');

$routes->post('/Staff', 'Staff::AddTeacher');
$routes->get('/Staff', 'Staff::getAllStaff');
$routes->get('/Staff/(:num)', 'Staff::DeleteStaff/$1');
$routes->post('/Staff', 'Staff::getStaff');
$routes->get('/Staff/(:num)', 'Staff::updateStaff/$1');
$routes->post('/Staff', 'Staff::AddOneStudent');
$routes->post('/Staff', 'Staff::AddStudentAll');
$routes->post('/Staff', 'Staff::import');

//// Admin ////
$routes->post('/Admin', 'Admin::AddTeacher');
$routes->post('/Admin', 'Admid::AddStudentAll');
$routes->get('/Admin', 'Admin::getAllStaff');
$routes->delete('/Admin/(:num)', 'Admin::DeleteStaff/$1');

//// Carousel ////
$routes->get('/Carousel', 'Carousel::getCarousel');
$routes->post('/Carousel', 'Carousel::createCarousel');
$routes->put('/Carousel/(:num)', 'Carousel::updateCarousel/$1');
$routes->delete('/Carousel/(:num)', 'Carousel::DeleteCarousel/$1');
$routes->get('/Carousel/(:num)', 'Carousel::getCarouselId/$1');

$routes->get('/NameLogo', 'NameLogo::getDataNameLogo');
$routes->get('/NameLogo/(:num)', 'NameLogo::getDataNameLogoId/$1');
$routes->post('/NameLogo', 'NameLogo::createDataNameLogo');
$routes->put('/NameLogo/(:num)', 'NameLogo::updateDataNameLogo/$1');
$routes->put('/NameLogo/(:num)', 'NameLogo::updateDataNameLogoImage/$1');

$routes->get('/EducationNew', 'EducationNew::getDataNewAll');
$routes->get('/EducationNew/(:num)', 'EducationNew::getDataNewId/$1');
$routes->post('/EducationNew', 'EducationNew::createDataNew');
$routes->put('/EducationNew/(:num)', 'EducationNew::updateDataNew/$1');
$routes->put('/EducationNew/(:num)', 'EducationNew::updateDataNewImage/$1');

$routes->get('/Footer', 'Footer::getFooter');
$routes->get('/Footer/(:num)', 'Footer::getFooterId/$1');
$routes->put('/Footer/(:num)', 'Footer::updateFooter/$1');


$routes->get('/', 'StudentController::index');

$routes->post('import-csv', 'StudentController::importCsvToDb');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
