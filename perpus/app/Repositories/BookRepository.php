<?php
namespace App\Repositories;

use App/User;
use App/Book;

class BookRepository
{
	public function forUser(User $user)
	{
		return $user->books()
					->orderBy('created_at','asc')
					->get();
	}
}