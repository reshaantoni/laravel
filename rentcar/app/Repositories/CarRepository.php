<?php
namespace App\Repositories;

use App/User;
use App/Handphone;

class HandphoneRepository
{
	public function forUser(User $user)
	{
		return $user->cars()
					->orderBy('created_at','asc')
					->get();
	}
}