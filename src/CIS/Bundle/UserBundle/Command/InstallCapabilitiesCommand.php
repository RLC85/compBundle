<?php

namespace CIS\Bundle\UserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use CIS\Bundle\UserBundle\Entity\Capability;

class InstallCapabilitiesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('user:create:capabilities')
            ->setDescription('Will insert the default set of capabilities used by this application.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->entityManager = $this->getContainer()->get('doctrine')->getManager();
        $capabilities = $this->getContainer()->getParameter("capabilities");

        foreach($capabilities as $capabilityGroup) {
            $this->updateCapabilities($capabilityGroup);
        }
    }

    protected function updateCapabilities($capabilityGroup)
    {
        foreach ($capabilityGroup as $slug => $name) {
            $exists = $this->entityManager->getRepository("CISUserBundle:Capability")->findBySlug($slug);
            if (empty($exists)) {
                $new = new Capability();
                $new->setName($name);
                $new->setSlug($slug);
                $this->entityManager->persist($new);
                $this->entityManager->flush();
            }
        }
    }
}