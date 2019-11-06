# contact
Module for contact us

##### Cloning module
Clone modules by navigate to your project root folder.

`cd modules` 

`git clone https://github.com/rahul05ranjan/contact`

The above command will clone module in you module folder named as `contact`

##### Configuration

Open web.php file by going `config/web.php`

Add below lines in web.php.

```php
$config['modules']['contact'] = [
    'class' => 'app\modules\contact\Module',
    'defaultRoute' => 'contact/create'
];
```

##### Migration
Move migration from modules folder to your root migration folder.
Run `php yii migrate`

##### Navigate Url

http://localhost/project/contact
