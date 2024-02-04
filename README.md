# PRODUCT CRUD SYSTEM
    
The Product CRUD System is a web application designed for basic product CRUD tasks. It allows users to perform CRUD (Create, Edit, Update, Delete) operations on product records. This README provides an overview of the project's features, files, and how to set it up.
### Supported version
- php 8.0.28 and laravel 9

### INSTALL PROCESS
- composer install
- php artisan migrate
- php artisan serve


### FEATURES
-Add new products with various details, including product name, Product Sku, Product Details.

-View the list of existing products along with their details.

-Edit product information, including updating product name, Product Sku, Product Details.

-Delete unwanted product records without losing all the data from the database.

### FILES
The project consists of the following main files and functionalities:
    
-database: create axes-product and .env file set database name
    
-inserting.php: This file contains the HTML form to add new products and Insert the product information into the database.
    
-listing.php: This file displays the list of the products and provides options to edit and delete each product. It fetches product data from the database.
    
-deleting.php: This file handles the deletion of product records. It verifies the ID of the product to delete and sets the isDeleted flag in the database to mark the product as deleted.
    
-update.php: This file handles the update of product information. It receives the updated product data and updates the corresponding record in the database.


