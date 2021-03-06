<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDebug/ for the canonical source repository
 * @copyright   Copyright (c) 2014-2015 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDebug\Service;

use WebinoDebug\Debugger\Bar\PanelInterface;

/**
 * Class NullDebugger
 */
class NullDebugger implements DebuggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function setBarPanel(
        /** @noinspection PhpUnusedParameterInspection */
        PanelInterface $panel
    ) {
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function dump($subject)
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function dumpStr($subject)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function barDump($subject, $title = null, array $options = null)
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function timer($name = null)
    {
        return 0;
    }
}
