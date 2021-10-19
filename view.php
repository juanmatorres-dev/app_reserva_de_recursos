<?php

class View
{
	public function show($viewName, $data = null)
	{
		include_once("views/header.php");
		include_once("views/$viewName.php");
		include_once("views/footer.php");
	}
}
