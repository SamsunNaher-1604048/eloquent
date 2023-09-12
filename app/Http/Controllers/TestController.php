<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $user = User::with('contact')->first();
        return $user;
    }

    public function userPost(){
        $user = User::with(['contact','post'])->find(1);
        return $user;
    }


    public function post(){
        $post = Post::with('category')->first();
        return $post;
    }

    public function category(){
        $category = Category::with('post')->first();
        return $category;
    }

    public function delete(){

        User::first()->delete();
        User::onlyTrashed()->restore();
        //$user = User::withTrashed()->get();
        $user = User::all();
        return $user;
    }

    public function userContactContactInfo(){
        $user = User::with('contact.contactinformation')->first();
        return $user;
    }

    public function userContact(){
        $user = User::with('contactinfornation')->first();
        return $user;
    }


    public function country(){
        $country = Country::with('state')->first();
        return $country;
    }


    public function countryStateCity(){
        $country = Country::with('state.city')->first();
        return $country;
    }

    public function countryCity(){
        $country = Country::with('cityState')->first();
        return $country;
    }

    // one to one polymorphic Relations
    public function userImage(){
        $user = User::with('image')->get();
        return $user;
    }

    public function postImage(){
        $post = Post::with('image')->first();
        return $post;
    }

    public function userImages(){
        $users = User::with('images')->first();
        return $users;
    }

    public function postImages(){
        $posts = Post::with('images')->first();
        return $posts;
    }

}
