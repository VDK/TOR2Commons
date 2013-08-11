# Tor

[The Old Reader API](https://github.com/krasnoukhov/theoldreader-api) (PHP implementation).

## Usage

Get token:

	require_once 'src/Zelenin/Tor.php';
	$tor = new \Zelenin\Tor;

	$result = $tor->getToken( $email = 'example@example.com', $password = 'password' );

Methods:

	require_once 'src/Zelenin/Tor.php';
	$token = ''; // set token
	$tor = new \Zelenin\Tor( $token );

	$result = $tor->getTagList();

Other methods see in example.php.

## Development

- Source hosted at [GitHub](https://github.com/zelenin/Tor)
- Report issues, questions, feature requests on [GitHub Issues](https://github.com/zelenin/Tor/issues)

## Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)