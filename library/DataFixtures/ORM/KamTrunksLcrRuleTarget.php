<?php

namespace DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Ivoz\Kam\Domain\Model\TrunksLcrRuleTarget\TrunksLcrRuleTarget;
use Ivoz\Kam\Domain\Model\TrunksLcrRuleTarget\TrunksLcrRuleTargetInterface;

class KamTrunksLcrRuleTarget extends Fixture implements DependentFixtureInterface
{
    use \DataFixtures\FixtureHelperTrait;

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->disableLifecycleEvents($manager);
        $manager
            ->getClassMetadata(TrunksLcrRuleTarget::class)
            ->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);

        /** @var TrunksLcrRuleTargetInterface $item1 */
        $item1 = $this->createEntityInstance(TrunksLcrRuleTarget::class);
        (function () {
            $this->setLcrId(1);
            $this->setPriority(11);
            $this->setWeight(30);
        })->call($item1);

        $item1->setRule($this->getReference('_reference_KamTrunksLcrRule3'));
        $item1->setGw($this->getReference('_reference_KamTrunksLcrGateway1'));
        $item1->setOutgoingRouting($this->getReference('_reference_ProviderOutgoingRouting2'));
        $this->addReference('_reference_KamTrunksLcrRuleTarget1', $item1);
        $this->sanitizeEntityValues($item1);
        $manager->persist($item1);

        /** @var TrunksLcrRuleTargetInterface $item2 */
        $item2 = $this->createEntityInstance(TrunksLcrRuleTarget::class);
        (function () {
            $this->setLcrId(1);
            $this->setPriority(1);
            $this->setWeight(5);
        })->call($item2);

        $item2->setRule($this->getReference('_reference_KamTrunksLcrRule4'));
        $item2->setGw($this->getReference('_reference_KamTrunksLcrGateway1'));
        $item2->setOutgoingRouting($this->getReference('_reference_ProviderOutgoingRouting1'));
        $this->addReference('_reference_KamTrunksLcrRuleTarget2', $item2);
        $this->sanitizeEntityValues($item2);
        $manager->persist($item2);


        /** @var TrunksLcrRuleTargetInterface $item3 */
        $item3 = $this->createEntityInstance(TrunksLcrRuleTarget::class);
        (function () {
            $this->setLcrId(1);
            $this->setPriority(11);
            $this->setWeight(30);
        })->call($item3);

        $item3->setRule($this->getReference('_reference_KamTrunksLcrRule3'));
        $item3->setGw($this->getReference('_reference_KamTrunksLcrGateway2'));
        $item3->setOutgoingRouting($this->getReference('_reference_ProviderOutgoingRouting2'));
        $this->addReference('_reference_KamTrunksLcrRuleTarget3', $item3);
        $this->sanitizeEntityValues($item3);
        $manager->persist($item3);

        /** @var TrunksLcrRuleTargetInterface $item4 */
        $item4 = $this->createEntityInstance(TrunksLcrRuleTarget::class);
        (function () {
            $this->setLcrId(1);
            $this->setPriority(1);
            $this->setWeight(5);
        })->call($item4);

        $item4->setRule($this->getReference('_reference_KamTrunksLcrRule4'));
        $item4->setGw($this->getReference('_reference_KamTrunksLcrGateway2'));
        $item4->setOutgoingRouting($this->getReference('_reference_ProviderOutgoingRouting1'));
        $this->addReference('_reference_KamTrunksLcrRuleTarget4', $item4);
        $this->sanitizeEntityValues($item4);
        $manager->persist($item4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            KamTrunksLcrRule::class,
            KamTrunksLcrGateway::class
        );
    }
}
