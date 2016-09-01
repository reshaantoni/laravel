<?php
namespace App\Repositories;

use App/User;
use App/Handphone;

class HandphoneRepository
{
	public function forUser(User $user)
	{
		return $user->handphones()
					->orderBy('created_at','asc')
					->get();
	}
}