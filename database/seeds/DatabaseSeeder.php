<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
        DB::insert("INSERT into e_items (name,img,description,price) VALUES (?,?,?,?)",[
            "To-99 LM733",
            "..\images\TO-99_OP-AMP_LM733.png",
            "TO-99仕様のLM733です",
            "1500"
        ]);

        DB::insert("INSERT into e_items (name,img,description,price) VALUES (?,?,?,?)",[
            "2SC1345",
            "..\images\H.transistor.jpg",
            "NOS品 激レアのトランジスタ。",
            "80"
         ]);

       DB::insert("INSERT into e_items (name,img,description,price) VALUES (?,?,?,?)",[
                "Nichicon FineGold",
                "..\images\FG.jpg",
                "これがオーディオ標準規格のコンデンサー",
                "90"
        ]);

    }
 }
