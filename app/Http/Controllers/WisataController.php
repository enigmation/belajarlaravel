<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    function index(){
        $data = [
                [
                    'nama_wisata'=>'Pura Tanah Lot',
                    'tempat_wisata'=>'Bali',
                    'harga'=>'20k',
                    'alamat'=>'Desa Beraban, Kecamatan Kediri, Kabupaten Tabanan',
                    'video'=>'https://www.youtube.com/embed/7wJsvfdFyRc'
                ],
        
                [
                    'nama_wisata'=>'Pantai Kuta',
                    'tempat_wisata'=>'Bali',
                    'harga'=>'Gratis',
                    'alamat'=>' Jl. Pantai Kuta, Kuta, Kabupaten Badung',
                    'video'=>'https://www.youtube.com/embed/k9BbEAfVg38'
        
                ],  

                [
                    'nama_wisata'=>'Pura Ulun Danu Beratan Bedugul',
                    'tempat_wisata'=>'Bali',
                    'harga'=>'30k',
                    'alamat'=>'Tepi Danau Beratan, Candikuning, Kecamatan Baturiti, Kabupaten Tabanan',
                    'video'=>'https://www.youtube.com/embed/T2J2s-pf-kI'
                ],
                    
                [
                    'nama_wisata'=>'Bali Safari Marine Park',
                    'tempat_wisata'=>'Bali',
                    'harga'=>'220k',
                    'alamat'=>'Jalan Raya Prof. Dr. Ida Bagus Mantra No. kilometer 19,8, Kabupaten Gianyar',
                    'video'=>'https://www.youtube.com/embed/rXS0-xghuHY'
                ],

                [
                    'nama_wisata'=>'Ubud Monkey Forest',
                    'tempat_wisata'=>'Bali',
                    'harga'=>'60k',
                    'alamat'=>'Jalan Monkey Forest, Ubud, Kecamatan Ubud, Kabupaten Gianyar, Bali',
                    'video'=>'https://www.youtube.com/embed/_kxxKogglBc'
                ]
                ];
        
        
        
                    return view('wisata.index',compact('data'));
            }
        
            function  about(){
                    return view('wisata.about');
            }
        
            function contact(){
                    return view('wisata.contact');
            }
}
