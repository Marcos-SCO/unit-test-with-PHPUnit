# unit-test-with-PHPUnit

## PHP Unit Commands

- Unit version
```bash
vendor/bin/phpunit --version  
```

- Run an example class
 ```bash
 vendor/bin/phpunit tests/ExampleTest.php --colors=always
 ```

- Test Of functions
 ```bash
 vendor/bin/phpunit tests/FunctionsTest.php --colors=always
 ```

- More descriptions with testdox flag
 ```bash
 vendor/bin/phpunit tests/FunctionsTest.php --testdox --colors=always
 ```

- Bootstrap file
 ```bash
 vendor/bin/phpunit tests/FunctionsTest.php --testdox --colors=always --bootstrap tests/bootstrap.php
 ```

- generate a configuration file
 ```bash
 vendor/bin/phpunit --generate-configuration
 ```