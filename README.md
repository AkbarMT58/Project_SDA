Cara penggunaan :

Tipe laravel 9.0
Boostrap 5.0

1.Install composer terlebih dahulu dengan composer install
2.Buat file .env dengan settingan env :
<!-- ENV -->
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:8Yq0x0dmI9Dsw5zF1Wza94mqDXCNgd1S3pSZyclhmvA=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sda_data
DB_USERNAME=root
DB_PASSWORD=Akbar2023

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
<!-- ENV -->

3.Ketik : php artisan key:generate
4.Taruh folder web ke dalam laragon dalam folder www
5.Panggil url web contoh : localhost/PROJECT_SDA akan dialihkan ke page login (email:admin_sda@gmail.com password:Admin1234)




