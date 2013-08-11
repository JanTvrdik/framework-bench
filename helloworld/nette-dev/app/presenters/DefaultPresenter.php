<?php

class DefaultPresenter extends Nette\Application\UI\Presenter
{

	public function renderDefault()
	{
		echo "<h1>Hello!</h1>\n";
		$this->terminate();
	}

}
