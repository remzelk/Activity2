<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class myController extends Controller
{
    
    public function weekfunction($mm, $dd, $yyyy)
    {
        $date=strtotime("Monday this week", mktime(0,0,0,$mm,$dd,$yyyy));
        $day = session('day');
        for($i = 0; $i < 7; $i++){
            $day[$i] = $date;
            $date = strtotime("+1 day", $date);
        }
        $posts = [
            1=>[
                'BlogTitle'=>'Pocket Monsters',
                'Subtitle'=>'Pokemon',
                'Content'=> 'Games, Mange and Anime'
            ],
            2=>[
                'BlogTitle'=>'Fallout: New Vegas',
                'Subtitle'=>'I got spurs that jingle, jangle, jingle',
                'Content'=> 'Game + DLC'
            ],
            3=>[
                'BlogTitle'=>'Terraria',
                'Subtitle'=>'2D Minecraft',
                'Content'=> 'Melee, Ranged, Magic, Summoner and Thrower'
            ],
            4=>[
                'BlogTitle'=>'Minecraft',
                'Subtitle'=>'3D Terraria',
                'Content'=> 'Blocks'
            ],
            5=>[
                'BlogTitle'=>'Ace Attorney',
                'Subtitle'=>'A battle between ladders and step ladders',
                'Content'=> 'Lawyers vs everyone else apparently'
            ],
            6=>[
                'BlogTitle'=>'The Binding of Isaac',
                'Subtitle'=>'Child Abuse?',
                'Content'=> 'P a i n'
            ],
            7=>[
                'BlogTitle'=>'Hades',
                'Subtitle'=>'Zagreus fights to get to the surface to meet his mother',
                'Content'=> 'Roguelike game with great soundtrack'
            ]
        ];
        return view('Home.myblogs');
    }

}