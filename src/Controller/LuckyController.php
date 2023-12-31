<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
	/**
	 * @throws \Exception
	 */
	#[Route('/lucky', name: 'app_lucky')]
	public function number(): Response
	{
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'
		);
	}
}
