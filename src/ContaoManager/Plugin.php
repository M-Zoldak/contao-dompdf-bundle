<?php
/**
 * @copyright  Darko Selesi 2017 <http://w3scouts.com>
 * @author     Darko Selesi (w3scout)
 * @package    dompdf
 * @license    LGPL-3.0+
 * @see	       https://github.com/w3scout/contao-dompdf-bundle
 *
 */

namespace W3Scout\DompdfBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Darko Selesi (w3scout)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('W3Scout\DompdfBundle\W3ScoutDompdfBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['dompdf']),
        ];
    }
}
