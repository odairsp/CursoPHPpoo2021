<?php

namespace app\models;

class Model
{
    public string $table;

    public function all()
    {
        return "Listando dados da tabela {$this->table}";
    }
    public function findBy()
    {
    }
    public function delete()
    {
        return "Deletando dados da tabela {$this->table}";
    }
    public function update()
    {
        return "Atualizando dados da tabela {$this->table}";
    }
}
