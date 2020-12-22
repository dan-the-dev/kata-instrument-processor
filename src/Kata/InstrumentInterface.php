<?php

namespace Kata;

interface InstrumentInterface
{
	public function execute(string $task): void;
}