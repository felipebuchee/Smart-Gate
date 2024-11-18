<?php
require_once("Pessoa.php");
class Aluno extends Pessoa implements \JsonSerializable 
{
    private int $numeroMatricula = 0;

    public static function criarAlunos(array $recolherdados)
    {
        for($i = 0 ; $i < count($recolherdados) ; $i++)
        {
            $alunos[$i] = new Aluno();
            $alunos[$i]->setNome($recolherdados[$i]['nome']);
            $alunos[$i]->setSenha($recolherdados[$i]['senha']);
            $alunos[$i]->setCpf($recolherdados[$i]['cpf']);
            $alunos[$i]->setEmail($recolherdados[$i]['email']);
            $alunos[$i]->setNumeroMatricula($recolherdados[$i]['numeroMatricula']);
            $alunos[$i]->setTag($recolherdados[$i]['tag']);
        }
        return $alunos;
    }
    public function jsonSerialize(): array
    {
        return [
            'nome' => $this->getNome(),
            'numeroMatricula' => $this->getNumeroMatricula(),
            'cpf'  => $this->getCpf(),
            'senha' => $this->getSenha(),
            'email' => $this->getEmail(),
            'tag' => $this->getTag()
        ];
    }

    /**
     * Get the value of numeroMatricula
     */
    public function getNumeroMatricula(): int
    {
        return $this->numeroMatricula;
    }

    /**
     * Set the value of numeroMatricula
     */
    public function setNumeroMatricula(int $numeroMatricula): self
    {
        $this->numeroMatricula = $numeroMatricula;

        return $this;
    }
}
?>
