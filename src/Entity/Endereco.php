<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quadra;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $observacao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contatos", inversedBy="endereco")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contato;

        

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuadra(): ?int
    {
        return $this->quadra;
    }

    public function setQuadra(int $quadra): self
    {
        $this->quadra = $quadra;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    public function setObservacao(?string $observacao): self
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function getContato(): ?Contatos
    {
        return $this->contato;
    }

    public function setContato(?Contatos $contato): self
    {
        $this->contato = $contato;

        return $this;
    }
      
    
}
