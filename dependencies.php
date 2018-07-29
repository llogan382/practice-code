<?php
// started at 9:33
//external code that you use is called a dependency, because your code depends on it. 
//composer is a tool that controls what versions of dependencies get loaded. 
//how do we use the packages? 
require __DIR__ . '/vendor/autoload.php';

//composer can be installed per project,  or globally so it can be access anywhere.
//install a version that matches your development environemnt (not runtime environment)
//composer commands are accessed form the terminal. 
//avoid committing your depencies to GIT
//each dependency composer manages is called a package
//to use them, they must be accessible somewhere. 
//packagist is a place to browse available packages. CONFLICTS AND 
//many other issues are recorded here. 

//composer can allow us to maintain version control.
//in composer.json, you can control and update versions that are required. 
//the ^ in composer.json means that it is the minimum required version. 
//changes in composer.json will not take affect until you run composer update.

//When updating composer dependencies, make sure you commit your 
//composer.lock file to Version Control system. DO NOT commit your vendor folder.

//composer.lock will keep all dependencies locked so that bugs will not be found
//when using different machines with slightly different versions

//composer install will look at a composer.lock file first

//composer show will show all packages. guess what composer update will do?
