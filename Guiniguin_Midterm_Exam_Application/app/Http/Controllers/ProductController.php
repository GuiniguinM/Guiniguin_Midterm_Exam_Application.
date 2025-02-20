<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'No Longer Human', 'author' => 'Osamu Dazai', 'price' => '₱813.80'],
            ['title' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky', 'price' => '₱779.00'],
            ['title' => 'The Metamorphosis', 'author' => 'Franz Kafka', 'price' => '₱899.00'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price' => '₱549.00'],
            ['title' => 'Disney Twisted-Wonderland: Rose-Red Tyrant', 'author' => 'Jun Hioki', 'price' => '₱999.00'],
            ['title' => 'Moby Dick', 'author' => 'Herman Melville', 'price' => ' ₱800.00'],
            ['title' => 'Deep End', 'author' => 'Ali Hazelwood', 'price' => '₱799.00'],
            ['title' => 'The Seven Dials Mystery', 'author' => 'Agatha Christie', 'price' => '₱699.00'],
            ['title' => 'Alices Adventures in Wonderland and Through the Looking Glass', 'author' => 'Lewis Carroll', 'price' => '₱400.00'],
            ['title' => '100 Poems To Break Your Heart', 'author' => 'Edward Hirsch', 'price' => ' ₱1,199.00'],
        ];

        return view('products.index', compact('books'));
    }
}
