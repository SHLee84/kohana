<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Part1 extends Controller {

	// localhost/kohana OR localhost/kohana/part1
	public function action_index()
	{
		$text = '';
		for ($i = 1; $i < 101; $i++)
		{
			$text .=$i.': ';
			if ($i % 15 == 0)
			{
				// common denominator of 3 and 5: 15
				$text .='fizzbuzz';
			}
			else if ($i % 3 == 0)
			{
				$text .='fizz';
			}
			else if ($i % 5 == 0)
			{
				$text .='buzz';
			}
			else
			{
				$text .=$i;
			}
			$text .='<br />';
		}
		$view = View::factory('part1')->set('content', $text);
		$this->response->body($view);
	}
}
