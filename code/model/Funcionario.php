<?php
require_once("Pessoa.php");
class Funcionario extends Pessoa implements \JsonSerializable 
{
    private ?int $siap = 0; // Siap agora é opcional
    private bool $adm = false;
    private bool $liberar = false;
    public static function criarFuncionarios(array $recolherdados) 
    {
        $funcionarios = array();
        for($i = 0 ; $i < count($recolherdados) ; $i++)
        {
            $funcionarios[$i] = new Funcionario();
            $funcionarios[$i]->setNome($recolherdados[$i]['nome']);
            $funcionarios[$i]->setSenha($recolherdados[$i]['senha']);
            $funcionarios[$i]->setCpf($recolherdados[$i]['cpf']);
            $funcionarios[$i]->setEmail($recolherdados[$i]['email']);
            $funcionarios[$i]->setSiap($recolherdados[$i]['siap']);
            $funcionarios[$i]->setAdm($recolherdados[$i]['adm']);
            $funcionarios[$i]->setLiberar($recolherdados[$i]['liberar']);
            $funcionarios[$i]->setLiberar($recolherdados[$i]['tag']);
        }

        return $funcionarios;

    }
    public function __toString()
    {
        return "Nome: ".$this->nome."\nSenha: ".$this->senha."\nSiap: ".$this->siap."\nCPF: ".$this->cpf."\nEmail: ".$this->email."Adm: ".$this->adm."\n";
    }
    


    // Implementação de JsonSerializable para serializar a classe
    public function jsonSerialize(): array
    {
        return [
            'nome' => $this->getNome(),
            'siap' => $this->getSiap(),
            'cpf'  => $this->getCpf(),
            'senha' => $this->getSenha(),
            'email' => $this->getEmail(),
            'tag' => $this->getTag(),
            'adm' => $this->isAdm(),
            'liberar' => $this->isLiberar()
        ];
    }

    /**
     * Get the value of siap
     */
    public function getSiap(): ?int
    {
        return $this->siap;
    }

    /**
     * Set the value of siap
     */
    public function setSiap(?int $siap): self
    {
        $this->siap = $siap;

        return $this;
    }

    /**
     * Get the value of adm
     */
    public function isAdm(): bool
    {
        return $this->adm;
    }

    /**
     * Set the value of adm
     */
    public function setAdm(bool $adm): self
    {
        $this->adm = $adm;

        return $this;
    }
    /**
     * Get the value of liberar
     */
    public function isLiberar(): bool
    {
        return $this->liberar;
    }

    /**
     * Set the value of adm
     */
    public function setLiberar(bool $liberar): self
    {
        $this->liberar = $liberar;

        return $this;
    }
}
?>
