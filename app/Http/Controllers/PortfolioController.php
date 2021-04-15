<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $varPortfolio = Portfolio::all();
        // $varPortfolio = [
        //     (object) [
        //         "image" => './img/portfolio-1.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-2.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-3.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-4.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-5.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-6.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-7.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-8.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-9.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        //     (object) [
        //         "image" => './img/portfolio-10.jpg',
        //         "titre" => 'Business Perfect item',
        //         "texte" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.',
        //     ],
        // ];
        return view('pages.portfolio', compact('varPortfolio'));
    }
}
