<?php

namespace Kunstmaan\PagePartBundle\PagePartAdmin;

interface PagePartAdminConfiguratorInterface
{

    /**
     * @return array
     */
    public function getPossiblePagePartTypes();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getContext();
}
