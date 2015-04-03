Laravel Documentation Compilation - Yet Another Laravel 5 Documentation
=======================================================================

This is yet another compilation of the laravel documentation for offline viewing. It gets the files from a forked repository of the official laravel/docs and rendered using kzykhys/ciconia.

The official documentation can be found at <a href="http://laravel.com/docs/">here</a>. 

Requirements
------------

* PHP5.4+
* Composer

Installation
------------

create a `composer.json`

``` json
{
	"repositories": [
	{
		"type": "git",
		"url": "https://github.com/jervenclark/docs"
	}
	],
	"require": {
		"kzykhys/ciconia":"~1.0.0",
		"laravel/docs":"dev-with-composer"
	}
}
```

and run

```
php composer.phar install
```

License
-------

The MIT License

Contributing
------------

Feel free to fork this repository and send a pull request. ([A list of contributors][contributors])

Author
------

Jerven Clark Chua (@jervenclark)