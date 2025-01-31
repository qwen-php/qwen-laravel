# qwen AI Laravel

Laravel wrapper for **[qwen PHP client](https://github.com/qwen-php/qwen-php-client)** to seamless Alibaba [qwen AI](https://www.qwen.ai) API integration with Laravel applications.

## Table of Contents

- [Installation](#installation)
  - [Publishing Configuration File](#publishing-configuration-file)
- [Usage](#usage)
  - [Basic Usage](#basic-usage)
  - [Advanced Usage](#advanced-usage)
- [Testing](#testing)
- [Contributors](#contributors-)
- [Changelog](#changelog)
- [Security](#security)
- [License](#license)

## Installation

You can install the package via composer:

```bash
composer require qwen-php/qwen-laravel
```

### Publishing Configuration File

```bash
php artisan vendor:publish --tag=qwen
```
then add token to `.env` file
```php
QWEN_API_KEY="your_api_key"
```

## Usage

### Basic Usage

```php
use QwenClient;

$Qwen = app(QwenClient::class);
$response = $Qwen->query('Hello qwen, I am Laravel Framework , how are you Today ^_^ ?')->run();
print_r("qwen API response : " . $response);
```

**Note**: In easy mode, it will take defaults for all configs [Check Default Values](https://github.com/qwen-php/qwen-php-client/blob/master/src/Enums/Configs/DefaultConfigs.php)

### Advanced Usage

```php
use QwenClient;

$Qwen = app(QwenClient::class);

// Another way, with customization
$response = $Qwen
    ->query('Hello qwen, how are you ?', 'system')
    ->query('Hello qwen, my name is PHP ', 'user')
    ->withModel("qwen-vl-max")
    ->setTemperature(1.5)
    ->run();

print_r("qwen API response : " . $response);
```

## Testing

Tests will come soon

## Contributors ✨

Thanks to these wonderful people for contributing to this project! 💖

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/omaralalwi">
        <img src="https://avatars.githubusercontent.com/u/25439498?v=4" width="50px;" alt="Omar AlAlwi"/>
        <br />
        <sub><b>Omar AlAlwi</b></sub>
      </a>
      <br />
      🏆 Creator
    </td>
  </tr>
</table>

Want to contribute? Check out the [contributing guidelines](./CONTRIBUTING.md) and submit a pull request! 🚀

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

### Security

If you discover any security-related issues, please email [omaralwi2010@gmail.com](mailto:omaralwi2010@gmail.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
