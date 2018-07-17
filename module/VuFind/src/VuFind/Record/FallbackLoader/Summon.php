<?php
/**
 * Summon record fallback loader
 *
 * PHP version 7
 *
 * Copyright (C) Villanova University 2018.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  Record
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org Main Site
 */
namespace VuFind\Record\FallbackLoader;

/**
 * Summon record fallback loader
 *
 * @category VuFind
 * @package  Record
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org Main Site
 */
class Summon implements FallbackLoaderInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Given an array of IDs that failed to load, try to find them using a
     * fallback mechanism.
     *
     * @param array $ids IDs to load
     *
     * @return array
     */
    public function load($ids)
    {
        $retVal = [];
        foreach ($ids as $id) {
            $record = $this->fetchSingleRecord($id);
            if (is_object($record)) {
                $retVal[$id] = $record;
            }
        }
        return $retVal;
    }

    /**
     * Fetch a single record.
     *
     * @param string $id ID to load
     *
     * @return \VuFind\RecordDriver\AbstractBase
     */
    protected function fetchSingleRecord($id)
    {
        return null;
    }
}
