<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\CustomVariables\Reports;

abstract class Base extends \Piwik\Plugin\Report
{
    protected $defaultSortColumn = 'nb_actions';

    protected function init()
    {
        $this->categoryId = 'General_Visitors';
    }

}
