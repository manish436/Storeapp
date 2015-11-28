# Storeapp Documentation #

This Project is developed for below business requirement:

You will be parsing data out of files that contain items from a store. The items file can come in 2 different formats - CSV or a custom file format called NL. After parsing the data out of files, you should be able to retrieve specific pieces of the data, described later. Note that you are NOT being asked to store these in a database, it should just reside in the program's memory. 

Business requirements

This should be a command line application that performs many tasks based on the data in a file. The following is a list of things that can be passed to the application on the command line and what should be returned. See the format reference below for how to visually display the results.

Commands

    Find item by ID
    Command: <file> find-by-id <id>
    Example: items.csv find-by-id 68-OX-YH94
    Displays the item with the given id in the given file.
    Find all items in file
    Command: <file> find-all
    Example: items.nl find-all
    Displays all items in the given file.
    Find items by category
    Command: <file> find-by-category <category>
    Example: my-items.csv find-by-category green
    Displays all items that have the given category in the given file.
      
# How to install #
## Software requirement ##
- Operating system: Windows 7 
- Server: apache
- Server side scripting: PHP
- Framework: Zend 1.12.5




----------
1. Step 1 - Set PHP environment variable.
1. Step 2 - Please put this code into server web directly like in xampp/htdocs
1. Step 3 - Set environment variable for .bat file named as storeapp.bat , which is located in side Storeapp folder.
1. Step 3-  After setting the path of   storeapp.bat, you will be able to execute the commands from any location.

## Running command ##
To run a command we just need to type **storeapp**, then we will have a interactive console application will open, to stop the program any time just type **stop**.
 
## Directory Structure ##
- Application: This is main application folder which keeps all the application code.
	- Configs: This directory contains all the configuration files of the application.
	- Controllers: This directory contains controller for UI application, but for our application it is not useful because we do not need action classes. 
	- Models: This directory contains all the business logic.
		- DAO: This folder contains business logic with all fatory and data fethcing classes.
		- DTO: This directory contains entity classes.
- cli-scripts: This is our main entry for cli application, there is a file frontcontroller.php which calls different business classes.
- datafiles: This folder contains CSV and NL file, which we need to parse.
- docs: This directory contain all the documentation of the project
- library: This is library folder
	- Store: This directory contain custom build library used for application requirement only.
	- Zend: It is default library of zend.
- public: it is webroot of web application.
- tests: This directory contain unit test classes, we I have not developed any. 
