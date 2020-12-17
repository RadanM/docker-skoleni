<?php

declare(strict_types=1);

namespace App\Presenters;


use App\Model\UserManager;
use Nette\DI\Attributes\Inject;

final class HomepagePresenter extends BasePresenter
{
    #[Inject]
    public UserManager $userManager;

	public function renderDefault(): void
	{
	    $this->userManager->add('ahoj', 'testuji@b-m.cz', 'databazi');
		$this->template->anyVariable = 'any value';
	}
}
