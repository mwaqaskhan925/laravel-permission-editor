<?php

namespace Mwaqaskhan925\LaravelPermissionEditor\Commands;
 
use Illuminate\Console\Command;
 
class MakeTaskCommand extends Command
{
    protected $signature = 'make:task';
 
    protected $description = 'Make a new task';
 
    public function handle()
    {
        // ... code to create the new task
 
        dd("Hello Testing");
        return Command::SUCCESS;
    }
}