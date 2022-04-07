# phpLogger
<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<!--
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
  </a>

  <h3 align="center">Best-README-Template</h3>

  <p align="center">
    An awesome README template to jumpstart your projects!
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template">View Demo</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Report Bug</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Request Feature</a>
  </p>
</div>
-->





<!-- ABOUT THE PROJECT -->
## About The Project



<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

This is pure Python. Other dependencies or packages are NOT needed


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

Place it in your project directory.<br>
By default, when the class is initialized for the first time in the project it will create a directory called "logs", so..
<b>MAKE SURE YOU DON'T HAVE ANY OTHER DIRECTORY CALLED LOGS</b>.<br>
In that case you can easily change the default directory created for being the container of all logs.

<!-- USAGE EXAMPLES -->
## Usage

There is a basic usage example in [test/index.php](test/index.php).
<br>
<br>
But for convenience:

1. Include this script (possibly at the top of the page)
```php
include_once 'class.logger.php';
```
2. Instantiate the class (it's better if you do it only once)
```php
$log = new PHPLogger();
```
3. Log your message (it can be a string, an array or an object too)
```php
$log->info("This is a message");
```
```php
$arr = array("key" => "value");
$log->info($arr);
// OR
$log->info(array("key" => "value"));
```
```php
$log->info(<example class>);
```
<b>
The supported methods for logging informations are:
</b>

* info
* warning
* debug
* error

<br>
<br>
<br>

_You can also mix it calling the method just once:_
```php
$log->info(
	array(
		"This is a message",
		"thisIsArray" => $arrArr
	)
);
```

_Clearly it supports multidimensional arrays too:_
```php
$log->info(
	array(
		"thisIsArray" => array(
			"key1" => "value1",
			"key2" => "value2",
			"key3" => array(
				0 => 1,
				1 => 2
			)
		)
	)
);
```








_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!







<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png