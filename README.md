# Fortune teller
Example
```php
<?php

require __DIR__ . "/vendor/autoload.php";

$fortune = Cvar1984\Fortune\Fortune::make(Cvar1984\Fortune\Fortune::TERRY_DAVIS);

echo $fortune;
// you can also ommit parameter like this
echo Cvar1984\Fortune\Fortune::make();


```