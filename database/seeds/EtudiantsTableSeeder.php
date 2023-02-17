<?php

use Illuminate\Database\Seeder;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etudiants = [
            [
            'nom'        => 'rabary',
            'prenom'             => 'jean',
            'classe'             =>  '1',    
            'datedenaissance'             => '12-12-2020',
            'sexe'             =>  'Femme',
            'parentId'             =>  '1',
        ],
        [
            'nom'        => 'Rafaly',
            'prenom'             => 'donah',
            'classe'             =>  '1',    
            'datedenaissance'             => '01-02-2020',
            'sexe'             =>  'Garçon',
            'parentId'             =>  '1',
        ],
        [
            'nom'        => 'Rajao',
            'prenom'             => 'Belle',
            'classe'             =>  '2',    
            'datedenaissance'             => '04-03-2021',
            'sexe'             =>  'Femme',
            'parentId'             =>  '2',
        ],
        [
            'nom'        => 'Jean',
            'prenom'             => 'Marc',
            'classe'             =>  '2',    
            'datedenaissance'             => '09-12-2021',
            'sexe'             =>  'Femme',
            'parentId'             =>  '1',
        ],
        [
            'nom'        => 'Jeanot',
            'prenom'             => 'Boniface',
            'classe'             =>  '2',    
            'datedenaissance'             => '09-12-2021',
            'sexe'             =>  'Garçon',
            'parentId'             =>  '1',
        ],
        [
            'nom'        => 'Balita',
            'prenom'             => 'be',
            'classe'             =>  '1',    
            'datedenaissance'             => '11-09-2020',
            'sexe'             =>  'Garçon',
            'parentId'             =>  '3',
        ],
        [
            'nom'        => 'yves',
            'prenom'             => 'Rasata',
            'classe'             =>  '2',    
            'datedenaissance'             => '11-09-2020',
            'sexe'             =>  'Garçon',
            'parentId'             =>  '2',
        ],
        [
            'nom'        => 'Johane',
            'prenom'             => 'Crisy',
            'classe'             =>  '1',    
            'datedenaissance'             => '09-11-2021',
            'sexe'             =>  'Femme',
            'parentId'             =>  '2',
        ],
        [
            'nom'        => 'Chantal',
            'prenom'             => 'Rasoa',
            'classe'             =>  '1',    
            'datedenaissance'             => '19-11-2021',
            'sexe'             =>  'Femme',
            'parentId'             =>  '3',
        ],
        [
            'nom'        => 'Jacky',
            'prenom'             => 'noah',
            'classe'             =>  '1',    
            'datedenaissance'             => '19-10-2021',
            'sexe'             =>  'Garçon',
            'parentId'             =>  '4',
        ],
        [
            'nom'        => 'Baholy',
            'prenom'             => 'Ratrema',
            'classe'             =>  '2',    
            'datedenaissance'             => '08-10-2020',
            'sexe'             =>  'Femme',
            'parentId'             =>  '4',
        ],
        [
            'nom'        => 'Omega',
            'prenom'             => 'Randria',
            'classe'             =>  '1',    
            'datedenaissance'             => '08-10-2020',
            'sexe'             =>  'femme',
            'parentId'             =>  '3',
        ],
        [
            'nom'        => 'Fifaliana',
            'prenom'             => 'Rakoto',
            'classe'             =>  '1',    
            'datedenaissance'             => '01-11-2020',
            'sexe'             =>  'garçon',
            'parentId'             =>  '2',
        ],
        [
            'nom'        => 'Kaly',
            'prenom'             => 'Rasoary',
            'classe'             =>  '1',    
            'datedenaissance'             => '01-11-2020',
            'sexe'             =>  'garçon',
            'parentId'             =>  '1',
        ],
       
        ];

      /* foreach ($articles as $article_data) {
            $article = Article::create($article_data);

            //event(new ArticleCreated($article));
        }

        Schema::enableForeignKeyConstraints();*/
        DB::table('etudiants')->insert($etudiants);
        
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}

