<?php 

namespace App;

class LessonFilters extends QueryFilter
{

	public function popular($order = 'desc')
	{
		return $this->builder->orderby('views',$order);
	}


	public function difficulty($level)
	{
		return $this->builder->where('difficulty',$level);
	} 
	public function length($length = 'asc')
	{
		return $this->builder->orderby('length',$length);
	} 
	public function take($count)
	{
		return $this->builder->limit($count);
	} 

}