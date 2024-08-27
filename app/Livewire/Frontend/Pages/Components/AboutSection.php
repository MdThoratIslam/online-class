<?php

namespace App\Livewire\Frontend\Pages\Components;

use Livewire\Component;

class AboutSection extends Component
{
    public $syllabus;

    public function mount()
    {
        $this->syllabus =
            [
                'Introduction to HTML' => [
                    'HTML Overview'             => [
                                                'HTML Introduction',
                                                'What is HTML?',
                                                'HTML Elements',
                                                'HTML Attributes',
                                                'HTML Colors',
                                                'HTML CSS'
                    ],
                    'Setting Up the Environment' => [
                                                'HTML Editors',
                                                'HTML Headings',
                                                'HTML Paragraphs',
                                                'HTML Styles (CSS)',
                                                'HTML Formatting',
                                                'HTML Quotations',
                                                'HTML Comments',
                                                'HTML Block & Inline Elements',
                                                'HTML Links',
                                                'HTML Page Title',
                                                'HTML Favicon'
                    ],
                   'info'                       => [
                                                'age'               => '18 - 46 Years',
                                                'seats'             => '20 Seats',
                                                'time'              => '08:00 pm - 10:00 pm',
                                                'fee'               => '2000',
                                                'duration'          => '4 Weeks',
                                                'location'          => 'Online Class',
                                                'instructor'        => 'John Doe',
                                                'level'             => 'Beginner to Advance',
                    ]
                ],
                'Introduction to CSS' => [
                    'CSS Overview' => [
                        'CSS Syntax',
                        'CSS Selectors',
                        'CSS Colors',
                        'CSS Backgrounds'
                    ],
                    'Setting Up the Environment' => [
                        'CSS Editors',
                        'CSS Box Model & Flexbox',
                        'CSS Margins & Padding',
                        'CSS Text, Fonts & Links',
                        'CSS Lists, Tables & Form',
                        'CSS Display & Positioning',
                        'CSS Media Queries'
                    ],
                    'CSS Advanced Topics' => [
                        'CSS Transitions & Animations',
                        'CSS Grid Overview & Flexbox Advanced',
                        'CSS SASS Introduction'
                    ],

                    'info' => [
                        'age'        => '18 - 46 Years',
                        'seats'      => '20 Seats',
                        'time'       => '08:00 pm - 10:00 pm',
                        'fee'        => '2500',
                        'duration'   => '4 Weeks',
                        'location'   => 'Online Class',
                        'instructor' => 'Jane Smith',
                        'level'      => 'Beginner to Advance',
                    ]
                ],
            ];
    }

    public function render()
    {
        return view('livewire.frontend.pages.components.about-section');
    }
}
