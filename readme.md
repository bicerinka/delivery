Использованы паттерны Фасад и Шаблонный метод.
Можно запустить как через веб-сервер, 
так и в консоли(для этого заменить $_SERVER['SERVER_ADDR'] на адрес сервера в файле Delivery.php): php8.1 index.php 
Для того, чтобы добавить транспортную компанию нужно создать класс в папке company
и добавить пераметр в FacadeDelivery.

Для подготовки параметров переопределить функцию prepare.

Для выбора транспортной компании передать массив
new FacadeDelivery($request, ['low', 'speed']);






