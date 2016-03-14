<?php
/**
 * Created by PhpStorm.
 * User: PBX_g33k
 * Date: 14-Mar-16
 * Time: 22:50
 */

namespace Pbxg33k\VocadbBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends ContainerAwareCommand
{
    protected $vocaDBClient;

    protected function configure()
    {
        $this->vocaDBClient = new \Pbxg33k\VocaDB\Client();
    }

    protected function renderTable(\Pbxg33k\VocaDB\Models\Collections\Base $resultsCollection, OutputInterface $output)
    {
        $table = new Table($output);
        $first = $resultsCollection->firstOrError();
        $reflectionClass = new \ReflectionClass($first);
        $properties = $reflectionClass->getProperties(\ReflectionProperty::IS_PROTECTED);

        $headerColumns = $rows = $column = [];

        // print headers
        foreach($properties as $property) {
            $headerColumns[] = $property->getName();
        }
        $table->setHeaders($headerColumns);

        //Iterate rows
        foreach($resultsCollection->collection as $item) {
            //Iterate columns
            $row = [];
            foreach($headerColumns as $column) {
                $row[] = $item->{'get'.ucfirst($column)}();
            }
            $rows[] = $row;
        }

        $table->setRows($rows);
        $table->render();
    }

}