<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{
    

    public function index()

    {

        // Your portfolio data - you can modify these details

       $portfolio = [  // home

            'name' => 'Hernandez, Joneil M.',

            'title' => 'Full Stack Web Developer',

            'email' => 'john.doe@example.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => './image/joneil.jpeg',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],


            'projects' => [// Project data
                    [
                        'name' => 'Portfolio Website',
                        'stack' => 'Laravel, Tailwind CSS',
                        'status' => 'Completed',
                    ],
                    [
                        'name' => 'E-commerce Platform',
                        'stack' => 'Laravel, Livewire',
                        'status' => 'In Progress',
                    ],
                    [
                        'name' => 'Blog System',
                        'stack' => 'Laravel, Vue.js',
                        'status' => 'Planned',
                    ],

            ], 
             'contact' => [ // Contanct moko
          
                [
                    'name' => 'GitHub',
                    'url' => 'https://github.com/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/in/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'FaceBook',
                    'url' => 'https://www.facebook.com',
                    'status' => 'Active'            
                ]
            
                ],

            // 'about' => [// Experience data
            //     [
            //         'work' => 'wala pa',
            //         'jowa' => 'wala pa',
            //         'maring_palad' => 'many',
            //         'year' => '2023'
            //     ],
            //     [
            //         'work' => 'meron na',
            //         'jowa' => 'meron na ',
            //         'maring_palad' => 'Never',
            //         'year' => '2025'
            //     ]

            // ], 

            'education' => [ // Education data
                [
                    'schoolName' => 'katamaran elementary school',
                    'year' => '2015',
                    'honor' => 'never'
                ],
                [
                    'schoolName' => 'jowa days National high ako',
                    'year' => '2018',
                    'honor' => 'never'
                ],
                [
                    'schoolName' => 'Global receipt collenge',
                    'year' => '2025',
                    'honor' => 'Active'
                ]
                

            ],

            'social_links' =>  [// Social media links

                'facebook'=> 'https://www.facebook.com/romanballesterosramos/friends',
                'phone' => '09054796609',
                'email' => 'romanballesterosramos07@gmail.com ',
                'location' => 'Caloocan, Manila',

            ] 

        ];

        return view('portfolio.index', compact('portfolio'));

    }
}