# Contact Laravel Package
## this will send email to admin and save contact query in database

## Install
    composer require scode/contact
    
## set config database in .env file for example:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravelpackage
    DB_USERNAME=root
    DB_PASSWORD=your database password
#execute migration :
    php artisan migrate

## copy publishes files from  Contact Laravel Package to your project:   
    php artisan vendor:publish
   #### this commnad copy contact.php in config directory
   ##### get config/contact.php file and edit `send_email_to`  value with The email address you want to send an email to :

## set MAIL config in .env file gmail smtp example :
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=465
    MAIL_USERNAME=soheyla.karimzade@gmail.com
    MAIL_PASSWORD= your gmail App passwords 
    MAIL_ENCRYPTION=ssl
    
## run laravel server :
    php artisan serve
## get browser in laravel url project and get `/contact` route for example :
    http://localhost:8000/contact
#### and fill the contact form and submit , will be sent an email to email address and is created one row on contact table in database .
  
  
