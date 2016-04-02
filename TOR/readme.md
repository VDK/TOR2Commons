# Tor

[The Old Reader API](https://github.com/krasnoukhov/theoldreader-api) (PHP implementation).

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require zelenin/tor "dev-master"
```

or add

```
"zelenin/tor": "dev-master"
```

to the require section of your ```composer.json```

## Usage

Get token:

```php
$tor = new \Zelenin\Tor;
$result = $tor->getToken('example@example.com', 'password');
```

Methods:

```php
$token = '<token>';
$tor = new \Zelenin\Tor($token);

$result = $tor->getTagList();
```

Other methods see in example.php.

## Development

- Source hosted at [GitHub](https://github.com/zelenin/Tor)
- Report issues, questions, feature requests on [GitHub Issues](https://github.com/zelenin/Tor/issues)

## Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)
