<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArticleModel
{
    public static function get_all()
    {
        $list = DB::table('articles')->get();
        return $list;
    }

    public static function insert($data)
    {
        $slug = str_replace(' ', '-', strtolower($data['judul']));
        
        $article = DB::table('articles')->insert(
            [
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'slug' =>$slug,
                'tag' => $data['tag'],
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        return $article;
    }
    public static function get_article($id)
    {
        // dd($id);
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }
    public static function update($update, $id)
    {
        $slug = str_replace(' ', '-', strtolower($update['judul']));
        $article = DB::table('articles')->where('id', $id)
        ->update(
            [
                'judul' => $update['judul'],
                'isi' => $update['isi'],
                'slug' =>$slug,
                'tag' => $update['tag'],
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        return $article;
    }

    public static function delete($id)
    {
        $article = DB::table('articles')->where('id', $id)->delete();
        return $article;
    }
}
