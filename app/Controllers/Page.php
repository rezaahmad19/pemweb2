<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term of Serfice";
    }

    public function biodata()
    {
        echo "<h1>BIODATA</h1>";
        echo "<h2>Nama      : Ahmad Reza Asari</h2>";
        echo "<h2>Alamat    : Jombang Jawa Timur</h2>";
        echo "<h2>Jurusan   : Saintek</h2>";
    }
}
