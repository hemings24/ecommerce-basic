# ecommerce-basic
Laravel Ecommerce - Basic

1. Download ecommerce-basic
2. Copy folder to Laravel projects folder
3. Copy ecommerce-basic\.env.example to ecommerce-basic\.env
4. Update .env MAIL_X values to preferred SMTP settings
5. CLI: cd ecommerce-basic
6. composer install
7. php artisan key:generate
8. mysql -u root -p -e "CREATE DATABASE ecommerce_basic"
9. php artisan migrate:fresh --seed
10. npm install
11. php artisan serve

http://localhost:8000