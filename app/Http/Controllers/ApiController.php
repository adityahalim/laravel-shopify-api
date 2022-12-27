<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Signifly\Shopify\Shopify;

class ApiController extends Controller
{
    public function getProductCount()
    {
        $shopify = new Shopify(
            env('SHOPIFY_ACCESS_TOKEN'),
            env('SHOPIFY_DOMAIN'),
            env('SHOPIFY_API_VERSION')
        );

        $response = $shopify->getProductsCount();

        if ($response) {
            return [
                'total_pages'  => $response,
                'status' => true
            ];
        }

        return false;
    }

    public function getProducts()
    {
        $shopify = new Shopify(
            env('SHOPIFY_ACCESS_TOKEN'),
            env('SHOPIFY_DOMAIN'),
            env('SHOPIFY_API_VERSION')
        );

        $response = $shopify->paginateProducts(['limit' => 10]);

        $results = collect();

        foreach ($response as $page) {
            $results = $results->merge($page);
        }

        if ($results) {
            return [
                'results'  => $results,
                'status' => true
            ];
        }

        return false;
    }
}
