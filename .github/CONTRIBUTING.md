
Any contribution(s) to PHPSA are very much encouraged, and we do our best to make it as welcoming and simple as possible.

## Coding Standards

We require that all contributions meet at least the following guidelines:

* PSR-1 & PSR-2
* We are using camelCase for variables and methods/functions.
* Don't use functions for casting like `intval`, `boolval` and etc, We are using `(int) $a`.
* Avoid "Yoda conditions", where constants are placed first in comparisons:

```php
if (true == $the_force) {
}
```

* Avoid strict compare When it's not needed.
* Avoid `static` methods.
* Don't use `Singletons` anywere.
* Avoid aliases for functions: `sizeof`, `join` and etc.
* Avoid global variables.
* Use type stricts.
* For null checking use `$v === null` instead of `is_null()`.


### Naming Conventions

#### Naming

* For `abstract` class We are using `Abstract` prefix, `AbstractCondition`
* For `trait`(s) We are using `Traif` postfix, `ResolveExpressionTrait`
* For `interfaces`(es) We are using `Interface` postfix, `PassFunctionCallInterface`
* For any class(es) that extends from `Exception` We are using `Exception` postfix, `UnknownException`

#### Namespacing

Please omit `s` in the end of NS/Class/Trait/Interface names

What we are using:

`\PHPSA\Analyzer\Helper\ResolveExpressionTrait`

What we don't use:

`\PHPSA\Analyzer\HelperS\ResolveExpressionSTrait`
