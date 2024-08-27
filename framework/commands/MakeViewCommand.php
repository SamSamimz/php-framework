<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeViewCommand extends Command
{
    protected static $defaultName = 'make:view';

    protected function configure()
    {
        $this
            ->setDescription('Create a new view file.')
            ->addArgument('filename', InputArgument::REQUIRED, 'The name of the view file to create');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filename = $input->getArgument('filename');

        // Define the path to the views directory
        $viewsDir = __DIR__ . "/../../framework/views";
        $filePath = $viewsDir . '/' . $filename;
        
        if (!is_dir($viewsDir)) {
            mkdir($viewsDir, 0777, true);
        }

        // Create the view file
        if (file_put_contents($filePath, '') !== false) {
            $output->writeln("<info>View file created: {$filePath}</info>");
            return Command::SUCCESS;
        } else {
            $output->writeln("<error>Failed to create view file: {$filePath}</error>");
            return Command::FAILURE;
        }
    }
}
