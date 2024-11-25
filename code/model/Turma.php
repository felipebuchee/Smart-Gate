<?php
class Turma implements JsonSerializable
{
    private string $id;
    private string $descricao;

    public function jsonSerialize(): mixed
    {
        return [
            "id" => $this->getId(),
            "descricao" => $this->getDescricao()
        ];
    }
    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
}
?>