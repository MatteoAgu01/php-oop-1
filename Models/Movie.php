<?php

class Movie
{
	public $title;
	public $nationality;
	public $date;
	public $image;

	public $vote;

	/**
	 * Summary of flags
	 * @var array
	 */
	private $flags = [
		'en',
		'it'
	];

	public function __construct(string $title, string $nationality, string $date, string $image, string $vote)
	{
		$this->title = $title;
		$this->nationality = $nationality;
		$this->date = $date;
		$this->image = $image;
		$this->vote = $vote;
	}


	public function getFlag()
	{
		if (in_array($this->nationality, $this->flags)) {
			return "<img class='flag-img' src='img/$this->nationality.png' alt='$this->nationality'>";
		} else {
			return "<h5> lingua originale non specificata</h5>";
		}
	}
}

$avatar= new Movie('Avatar', 'en', '2009
', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/b1UAG3QykMoLxwDgzk1LqsBkkG3.jpg', '7.6');

$avatarLaViaDellAcqua = new Movie("Avatar - La via dell' acqua", 'en', '2020
', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/kyJ7Ch5q5iDhxIjoupixTtqHObe.jpg', '7.7');

$movies = array($avatar, $avatarLaViaDellAcqua);
