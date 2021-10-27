<?php 

namespace LspFactory;

interface LspInterface
{
	public function createBooking();

	public function cancelBooking();

	public function getQuote();
}