<?php

namespace  Kunstmaan\PagePartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType;

/**
 * @ORM\Entity
 * @ORM\Table(name="totoppagepart")
 */
class ToTopPagePart {

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
    }

    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    public function __toString(){
        return "ToTopPagePart";
    }

    public function getDefaultView(){
        return "KunstmaanPagePartBundle:ToTopPagePart:view.html.twig";
    }

    public function getDefaultAdminType(){
        return new ToTopPagePartAdminType();
    }
}