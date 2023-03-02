<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendSubscriptionMailCommand extends Command
{
    protected static $defaultName = 'send:subscription:mail';

    protected function configure()
    {
        $this
            ->setDescription('Sends a subscription email to a user')
            ->setHelp('This command sends a subscription email to a user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Code to send the subscription email goes here
        $output->writeln('Subscription email sent!');
        return Command::SUCCESS;
    }
}
