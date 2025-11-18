Задача
-------
Нужно зарегистрироваться тут https://openexchangerates.org/signup/free, получить ключ
и сделать компонент который по этому эндпойнту https://oxr.readme.io/docs/latest-json получает данные
Результат нужен в виде DTO.
К компоненту потенциально должно быть возможно прикрутить получение данных и из других эндпойнтов этого апи.

Решение
------
Для задачи реализован консольный вызов командой
php yii rate latest.json

результат вызова
------
app\common\dto\LatestDTO#1\
(\
[disclaimer] => 'Usage subject to terms: https://openexchangerates.org/terms'\
[license] => 'https://openexchangerates.org/license'\
[timestamp] => 1757667600\
[base] => 'USD'\
[rates] => [\
'AED' => 3.6725\
'AFN' => 67.865224\
'ALL' => 82.710844\
'AMD' => 380.867339\
'ANG' => 1.79\
'AOA' => 911.955\
'ARS' => 1432.7256\
'AUD' => 1.504806\
'AWG' => 1.8025\
'AZN' => 1.7\
'BAM' => 1.666823
...
app\common\dto\LatestDTO#1
(
[disclaimer] => 'Usage subject to terms: https://openexchangerates.org/terms'
[license] => 'https://openexchangerates.org/license'
[timestamp] => 1757667600
[base] => 'USD'
[rates] => [
'AED' => 3.6725\
'AFN' => 67.865224\
'ALL' => 82.710844\
'AMD' => 380.867339\
'ANG' => 1.79\
'AOA' => 911.955\
'ARS' => 1432.7256\
'AUD' => 1.504806\
'AWG' => 1.8025\
'AZN' => 1.7\
'BAM' => 1.666823\
...\
]
)
