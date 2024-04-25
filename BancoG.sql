create database bancoG;
use bancoG;
create table tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    descricao TEXT,
    data_criacao datetime DEFAULT CURRENT_TIMESTAMP,
    data_conclusao datetime,
    status ENUM('pendente', 'concluída') DEFAULT 'pendente'
);
ALTER TABLE tarefas ADD prioridade ENUM('Baixa', 'Média', 'Alta') DEFAULT 'Média';
ALTER TABLE tarefas ADD prazo DATE;


