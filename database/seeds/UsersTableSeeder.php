<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'nom'        => 'test1',
            'prenom'             => 'test1',
            'adresse'             =>  'test1',    
            'email'             => 'test1@gmail',
            'telephone'             =>  '0328874164',
            'password'             =>  '1',
            
            
           
        ],
        [
            'nom'        => 'test2',
            'prenom'             => 'test2',
            'adresse'             =>  'test2',    
            'email'             => 'test2@gmail',
            'telephone'             =>  '0328874164',
            'password'             =>  '1',
        ],
        [
            'nom'        => 'test3',
            'prenom'             => 'test3',
            'adresse'             =>  'test3',    
            'email'             => 'test3@gmail',
            'telephone'             =>  '0328874164',
            'password'             =>  '1',
        ],
        [
            'nom'        => 'test4',
            'prenom'             => 'test4',
            'adresse'             =>  'test4',    
            'email'             => 'test4@gmail',
            'telephone'             =>  '0328874164',
            'password'             =>  '1',
        ],
            
        ];

      /* foreach ($articles as $article_data) {
            $article = Article::create($article_data);

            //event(new ArticleCreated($article));
        }

        Schema::enableForeignKeyConstraints();*/
        DB::table('users')->insert($users);
        
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
