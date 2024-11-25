<?php
require_once("Pessoa.php");
require_once("Turma.php");
class Aluno extends Pessoa implements \JsonSerializable
{
    private int $numeroMatricula = 0;
    private Turma $turma;
    private array $horarios;
    private int $liberacaoExcepcional = 0;
    private array $historico;
    public function __construct()
    {
        $this->horarios = array();
        $this->historico = array();
    }

    public static function criarAlunos(array $recolherdados)
    {
        for ($i = 0; $i < count($recolherdados); $i++) {
            $alunos[$i] = new Aluno();
            $alunos[$i]->setNome($recolherdados[$i]['nome']);
            $alunos[$i]->setSenha($recolherdados[$i]['senha']);
            $alunos[$i]->setCpf($recolherdados[$i]['cpf']);
            $alunos[$i]->setEmail($recolherdados[$i]['email']);
            $alunos[$i]->setNumeroMatricula($recolherdados[$i]['numeroMatricula']);
            $alunos[$i]->setTag($recolherdados[$i]['tag']);
            $alunos[$i]->setHorarios($recolherdados[$i]['horarios']);
            $alunos[$i]->setLiberacaoExcepcional($recolherdados[$i]['liberacao-excepicional']);
            $alunos[$i]->setHistorico($recolherdados[$i]['historio']);
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
            'tag' => $this->getTag(),
            'horarios' => $this->getHorarios(),
            'historio' => $this->getHistorico(),
            'liberacao-excepicional' => $this->getLiberacaoExcepcional()
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

    /**
     * Get the value of turma
     */
    public function getTurma(): Turma
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     */
    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }

    /**
     * Get the value of horarioPermitido
     */
    public function getHorarios(): array
    {
        return $this->horarios;
    }

    /**
     * Set the value of horarioPermitido
     */
    public function setHorarios(array $horarios): self
    {
        $this->horarios = $horarios;

        return $this;
    }

    /**
     * Get the value of liberacaoExcepcional
     */
    public function getLiberacaoExcepcional(): int
    {
        return $this->liberacaoExcepcional;
    }

    /**
     * Set the value of liberacaoExcepcional
     */
    public function setLiberacaoExcepcional(int $liberacaoExcepcional): self
    {
        $this->liberacaoExcepcional = $liberacaoExcepcional;

        return $this;
    }

    /**
     * Get the value of historico
     */
    public function getHistorico(): array
    {
        return $this->historico;
    }

    /**
     * Set the value of historico
     */
    public function setHistorico(array $historico): self
    {
        $this->historico = $historico;

        return $this;
    }
}
