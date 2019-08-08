<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\LessonFilters;

class LessonsController extends Controller
{
    
    public function index(LessonFilters $filters){

    	
    	return Lesson::filter($filters)->get();
    	// $lesson = (new lesson)->newQuery();

    	// if($request->exists('popular')){
    	// 	$lesson->orderBy('views','asc');

    	// }
    	// if($request->has('difficulty')){
    	// 	$lesson->where('difficulty',$request->difficulty);

    	// }

    	// return $lesson->get();
    }
}
