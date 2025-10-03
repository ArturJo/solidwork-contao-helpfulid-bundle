<?php

declare(strict_types=1);

namespace SolidWork\ContaoHelpfulidBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use SolidWork\ContaoHelpfulidBundle\ContaoHelpfulidBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoHelpfulidBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}