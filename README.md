## Laravel Shopify

Simple code example for integration into Shopify.

## Requirements

- PHP 8.1
- Laravel 9
- Composer

## Usage

Clone the repo:

```bash
git clone https://github.com/adityahalim/laravel-shopify-api.git
cd laravel-shopify-api
```

Install the dependencies:
```bash
composer install
```

Set the environment variables:
```bash
cp .env.example .env
# copy then open .env and modify the environment variables (if needed)
```

Running Program:
```bash
php artisan serve
```

## Set credentials

in your `.env` file set these values from your app \
`SHOPIFY_ACCESS_TOKEN=your-shopify-access-token` \
`SHOPIFY_DOMAIN=your-shopify-domain` \
`SHOPIFY_API_VERSION=admin-api-version` \
