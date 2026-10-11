> 🚨 **AVISO LEGAL E EDUCACIONAL:**  
> Este repositório é **totalmente fictício** e foi criado exclusivamente para fins educacionais em aulas e laboratórios de **Cibersegurança / CTF (Capture The Flag)**. 
> Todo o conteúdo, arquivos, configurações, nomes de empresas e informações presentes neste diretório devem ser **totalmente desconsiderados para qualquer aplicação no mundo real**. Trata-se apenas de um ambiente controlado para simulação e aprendizado prático de auditoria de sistemas.

# krabby-corp-infra

Krabby Enterprise Solution — Core Web System

> **STATUS:** ⚠️ *Em Desenvolvimento (In Development)*  
> **VERSÃO ATUAL:** `v0.8.4-beta`  
> **DEPARTAMENTO:** TI & Inovação Operacional — Fenda do Biquíni

## 📌 Sobre o Projeto

O **Krabby Enterprise Solution** é a plataforma interna integrada de gestão de processos, inventário de ingredientes e controle de pedidos para a rede de restaurantes Krabby Enterprise. 

Projetado para modernizar a infraestrutura legada e substituir planilhas manuais, o sistema tem como objetivo centralizar o fluxo operacional entre o balcão de atendimento, a cozinha, o setor financeiro e a frota de instrução/entregas.

## 🚀 Funcionalidades Planejadas

- **Módulo de Caixa & Vendas:** Interface ágil para registro de pedidos presenciais e acompanhamento de receita diária.
- **Gestão de Cozinha & Insumos:** Controle de estoque automatizado com alertas de reposição para carnes, pães e molhos especiais.
- **Portal de Alunos (Escola de Pilotagem):** Integração com o sistema da Sra. Puff para validação de cadastros e licenças de navegação.
- **Painel Financeiro & Diretoria:** Relatórios analíticos consolidados de faturamento e margens de lucro.

## 🏗️ Arquitetura & Infraestrutura

O ambiente do servidor foi atualizado e opera sob a seguinte pilha de tecnologia:

- **Sistema Operacional:** Rocky Linux 8 (Enterprise Linux Platform)
- **Servidor Web:** Apache (HTTPD) integrado ao **PHP-FPM** via socket UNIX
- **Banco de Dados:** MySQL 8.0 / MariaDB
- **Armazenamento de Arquivos Local:** Serviços Samba (`krabby-shares`) e FTP interno
- **Protocolo de Acesso Remoto:** SSH / SFTP (Sistemas legados em processo de desativação)

## ⚠️ Estado do Repositório (Em Construção)

> **AVISO IMPORTANTE:**  
> Este repositório encontra-se atualmente em fase de estruturação e auditoria interna de segurança pela equipe de DevOps. 
> 
> O **código-fonte completo (versão final)**, os *schemas* SQL atualizados e os scripts de implantação contínua (CI/CD) serão publicados em breve assim que a validação dos módulos de autenticação for concluída.

## 📬 Contato & Suporte Técnico

Para dúvidas sobre a arquitetura do projeto, permissões de acesso ou relato de bugs no ambiente de testes, entre em contato diretamente com a responsável pelo ambiente:

- **Responsável Técnica:** Sandy Cheeks (Lead DevOps & SysAdmin)  
- **Contato Interno:** `@s_cheeks`
