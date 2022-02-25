<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function myfunction($mm, $dd, $yyyy){
        $date=strtotime("Monday this week", mktime(0,0,0,$mm,$dd,$yyyy));
        for($i = 0; $i < 7; $i++){
            $day[$i] = date("M d y", $date);
            $date = strtotime("+1 day", $date);
            }
        
        $posts = [
            1=>[
                'BlogTitle'=>'Pocket Monsters',
                'Subtitle'=>'Pokemon',
                'Content'=> 'Games, Manga and Anime',
                'Date'=> $day[0]
            ],
            2=>[
                'BlogTitle'=>'Fallout: New Vegas',
                'Subtitle'=>'I got spurs that jingle, jangle, jingle',
                'Content'=> 'Game + DLC',
                'Date'=> $day[1]
            ],
            3=>[
                'BlogTitle'=>'Terraria',
                'Subtitle'=>'2D Minecraft',
                'Content'=> 'Melee, Ranged, Magic, Summoner and Thrower',
                'Date'=> $day[2]
            ],
            4=>[
                'BlogTitle'=>'Minecraft',
                'Subtitle'=>'3D Terraria',
                'Content'=> 'Blocks',
                'Date'=> $day[3]
            ],
            5=>[
                'BlogTitle'=>'Ace Attorney',
                'Subtitle'=>'A battle between ladders and step ladders',
                'Content'=> 'Lawyers vs everyone else apparently',
                'Date'=> $day[4]
            ],
            6=>[
                'BlogTitle'=>'The Binding of Isaac',
                'Subtitle'=>'Child Abuse?',
                'Content'=> 'P a i n',
                'Date'=> $day[5]
            ],
            7=>[
                'BlogTitle'=>'Hades',
                'Subtitle'=>'Zagreus fights to get to the surface to meet his mother',
                'Content'=> 'Roguelike game with great soundtrack',
                'Date'=> $day[6]
            ]
        ];
        return view('Home.myblogs', ['posts'=>$posts]);
    }

    public function mfunction($id){
        $date=strtotime("Sunday this week", mktime(0,0,0,2,20,2022));
        for($i = 0; $i < 7; $i++){
            $day[$i] = date("M d y", $date);
            $date = strtotime("+1 day", $date);
            }
        
        $posts = [
            1=>[
                'BlogTitle'=>'Pocket Monsters',
                'Subtitle'=>'Pokemon',
                'Content'=> 'Games, Manga and Anime',
                'Date'=> $day[0]
            ],
            2=>[
                'BlogTitle'=>'Fallout: New Vegas',
                'Subtitle'=>'I got spurs that jingle, jangle, jingle',
                'Content'=> 'Game + DLC',
                'Date'=> $day[1]
            ],
            3=>[
                'BlogTitle'=>'Terraria',
                'Subtitle'=>'2D Minecraft',
                'Content'=> 'Melee, Ranged, Magic, Summoner and Thrower',
                'Date'=> $day[2]
            ],
            4=>[
                'BlogTitle'=>'Minecraft',
                'Subtitle'=>'3D Terraria',
                'Content'=> 'Blocks',
                'Date'=> $day[3]
            ],
            5=>[
                'BlogTitle'=>'Ace Attorney',
                'Subtitle'=>'A battle between ladders and step ladders',
                'Content'=> 'Lawyers vs everyone else apparently',
                'Date'=> $day[4]
            ],
            6=>[
                'BlogTitle'=>'The Binding of Isaac',
                'Subtitle'=>'Child Abuse?',
                'Content'=> 'P a i n',
                'Date'=> $day[5]
            ],
            7=>[
                'BlogTitle'=>'Hades',
                'Subtitle'=>'Zagreus fights to get to the surface to meet his mother',
                'Content'=> 'Roguelike game with great soundtrack',
                'Date'=> $day[6]
            ]
        ];
        return view('Home.myblog', ['post'=>$posts[$id]]);
    }
}
