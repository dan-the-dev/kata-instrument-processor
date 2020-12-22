<?php

namespace Kata;

interface TaskDispatcherInterface
{
    public function getTask(): string;
    public function finishedTask(string $task): void;
}