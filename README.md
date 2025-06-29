# Base64 Codec

- [Base64 Codec](#base64-codec)
  - [Installation](#installation)
  - [Usage](#usage)

***

## Installation

Install *base64-codec* via Composer:

```bash
composer require ali-eltaweel/base64-codec
```

## Usage

```php
use Codecs\Base64Codec;

$base64Codec = new Base64Codec();

$code = $base64Codec->encode($data);

$data = $base64Codec->decode($code);
```

