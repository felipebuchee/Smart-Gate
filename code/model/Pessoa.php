<?php
class Pessoa
{
    protected string $nome = "";
    protected string $cpf = "";
    protected int $senha = 0;
    protected string $email = "";
    protected string $tag = "";
    

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha(): int
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha(int $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of tag
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set the value of tag
     */
    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }
}
?>
