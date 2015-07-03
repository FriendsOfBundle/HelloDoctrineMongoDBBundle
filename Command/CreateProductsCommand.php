<?php

/*
 * This file is part of the HelloDoctrineMongoDBBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document\Products;

/**
 * @author HgTAn <hoangthienan@gmail.com>
 */
class CreateProductsCommand extends ContainerAwareCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('hgtan:product:create')
            ->setDescription('Create a product.')
            ->setDefinition(array(
                new InputArgument('productcode', InputArgument::REQUIRED, 'The productcode'),
                new InputArgument('productname', InputArgument::REQUIRED, 'The productname'),
                new InputArgument('productline', InputArgument::REQUIRED, 'The productline'),
                new InputOption('inactive', null, InputOption::VALUE_NONE, 'Set the product as inactive'),
            ))
            ->setHelp(<<<EOT
The <info>acme:user:create</info> command creates a product:

  <info>php app/console acme:user:create S10_1678</info>

This interactive shell will ask you for an productname and then a productline.

You can alternatively specify the productcode and productline as the second and third arguments:

  <info>php app/console fos:user:create S10_1678 "1969 Harley Davidson Ultimate Chopper" "Motorcycles"</info>

You can create an inactive product:

  <info>php app/console fos:user:create S10_1678 --inactive</info>

EOT
            );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $productcode    = $input->getArgument('productcode');
        $productname    = $input->getArgument('productname');
        $productline    = $input->getArgument('productline');
        $inactive       = $input->getOption('inactive');

        $product = new Products();
        $product->setProductCode($productcode);
        $product->setProductName($productname);
        $product->setProductLine($productline);

        $dm = $this->getContainer()->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        $output->writeln(sprintf('Created product <comment>%s</comment>', $productcode));
    }

    /**
     * @see Command
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        if (!$input->getArgument('productcode')) {
            $productcode = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a productcode:',
                function($productcode) {
                    if (empty($productcode)) {
                        throw new \Exception('Productcode can not be empty');
                    }

                    return $productcode;
                }
            );
            $input->setArgument('productcode', $productcode);
        }

        if (!$input->getArgument('productname')) {
            $productname = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose an productname:',
                function($productname) {
                    if (empty($productname)) {
                        throw new \Exception('Productname can not be empty');
                    }

                    return $productname;
                }
            );
            $input->setArgument('productname', $productname);
        }

        if (!$input->getArgument('productline')) {
            $productline = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Please choose a productline:',
                function($productline) {
                    if (empty($productline)) {
                        throw new \Exception('Productline can not be empty');
                    }

                    return $productline;
                }
            );
            $input->setArgument('productline', $productline);
        }
    }
}
