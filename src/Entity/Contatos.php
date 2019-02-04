<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContatosRepository")
 */
class Contatos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $telefone;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Endereco", mappedBy="contato", orphanRemoval=true)
     */
    private $endereco;

    public function __construct()
    {
        $this->endereco = new ArrayCollection();
    }   
      
 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone(): ?int
    {
        return $this->telefone;
    }

    public function setTelefone(?int $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * @return Collection|Endereco[]
     */
    public function getEndereco(): Collection
    {
        return $this->endereco;
    }

    public function addEndereco(Endereco $endereco): self
    {
        if (!$this->endereco->contains($endereco)) {
            $this->endereco[] = $endereco;
            $endereco->setContato($this);
        }

        return $this;
    }

    public function removeEndereco(Endereco $endereco): self
    {
        if ($this->endereco->contains($endereco)) {
            $this->endereco->removeElement($endereco);
            // set the owning side to null (unless already changed)
            if ($endereco->getContato() === $this) {
                $endereco->setContato(null);
            }
        }

        return $this;
    }
   
  
}
