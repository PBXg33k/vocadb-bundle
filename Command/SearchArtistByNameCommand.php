<?php

namespace Pbxg33k\VocadbBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SearchArtistByNameCommand extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('vocadb:search:artist:name')
            ->addArgument('name', InputArgument::REQUIRED, 'artist name', null)
            ->setDescription('Search an artist by name');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $results = $this->vocaDBClient->artist->getByName($input->getArgument('name'));
        $this->renderTable($results, $output);
    }
}
