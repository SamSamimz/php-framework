<?php 

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected static $cmdName = 'app:hello';

    protected function configure()
    {
        $this
            ->setName(self::$cmdName)
            ->setDescription('First command in the framework')
            ->setHelp('This command allows you to say hello');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello World!');
        return Command::SUCCESS;
    }

}


?>