<?php

namespace gRPCClient\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloGrpcCommand extends Command
{
    protected function configure()
    {
        $this->setName('helloGRPC')
            ->setDescription('sample gRPC client in PHP')
            ->setHelp('');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {

    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "Hello GRPC";

        return 0;
    }
}