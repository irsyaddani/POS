<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodbeverage()
    {
        $products = [
            'Chips',
            'Cookie',
            'Popcorn',
            'Biscuit'
        ];
        return view('products')
        ->with('products', $products)
        ->with('judul', 'Food and Beverage');
    }
    public function beautyhealth()
    {
        $products = [
            'Sabun Mandi Organik',
            'Masker Wajah',
            'Krim Pelembap UV',
            'Serum Anti-Penuaan'
        ];
        return view('products')
        ->with('products', $products)
        ->with('judul', 'Beauty and Health');
    }
    public function homecare()
    {
        $products = [
            'Pembersih Multi-guna',
            'Pewangi Ruangan Aromaterapi',
            'Cairan Pembersih Lantai',
            'Pel Dapur Anti-Gores'
        ];
        return view('products')
        ->with('products', $products)
        ->with('judul', 'Home Care');
    }
    public function babykid()
    {
        $products = [
            'Popok',
            'Pakaian Bayi Katun',
            'Botol Susu',
            'Mainan Edukasi Interaktif'
        ];
        return view('products')
        ->with('products', $products)
        ->with('judul', 'Baby Kid');
    }
}
