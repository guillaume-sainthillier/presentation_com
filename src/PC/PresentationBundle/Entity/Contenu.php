<?php

namespace PC\PresentationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PC\PresentationBundle\Entity\ContenuRepository")
 */
class Contenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="type_contenu", type="string", length=255)
     */
    private $typeContenu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set typeContenu
     *
     * @param string $typeContenu
     * @return Contenu
     */
    public function setTypeContenu($typeContenu)
    {
        $this->typeContenu = $typeContenu;
    
        return $this;
    }

    /**
     * Get typeContenu
     *
     * @return string 
     */
    public function getTypeContenu()
    {
        return $this->typeContenu;
    }
}
