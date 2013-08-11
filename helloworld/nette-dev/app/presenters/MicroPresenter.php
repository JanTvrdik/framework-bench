<?php

class MicroPresenter implements Nette\Application\IPresenter
{

	public function run(Nette\Application\Request $request)
	{
		return new Nette\Application\Responses\TextResponse("<h1>Hello!</h1>\n");
	}

}
