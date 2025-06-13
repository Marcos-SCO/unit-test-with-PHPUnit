# unit-test-with-PHPUnit

source: https://www.youtube.com/watch?v=AJuSQaDQXfA

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

- test suite - filter

```bash
vendor/bin/phpunit --filter testTwoValuesAreTheSame
```

- Don't report useless tests flag

```bash
vendor/bin/phpunit --dont-report-useless-tests
```

- Display incomplete test flag

```bash
vendor/bin/phpunit --display-incomplete
```
