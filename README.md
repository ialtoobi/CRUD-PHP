# CRUD-PHP

This is a sample project developed as CRUD with PHP, MySQL and Bootstrap. 

CRUD stands for Create, Read, Update and Delete database records.
 
table-posts-db.sql – contains the database table structure and sample data used in this project. Once you created your database in PhpMyAdmin, you can import this file.

include/connect.php – used for database connection and configuration.

index.php – used for reading records from the database. It uses an HTML table to display the data retrieved from the MySQL database.

process.php – used for creating, updating, deleting a record. It uses an HTML form which will be filled out with data for creating or updating.it also accepts an “id” parameter to delete the record. Once it execute the delete query, it will redirect the user to the index.php page and show Bootstrap alert message for 10 second and then disappear

This project has search and pagination functionality added using datatables table plug-in https://datatables.net/

Developed By: Mohammed Altoobi 

Instagram: @qe9
