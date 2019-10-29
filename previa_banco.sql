-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Set-2019 às 03:07
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `22web`
--
CREATE DATABASE IF NOT EXISTS `22web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `22web`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `cd_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nm_administrador` varchar(30) NOT NULL,
  `ds_senha_administrador` varchar(30) DEFAULT NULL,
  `ds_cpf_administrador` varchar(20) NOT NULL,
  `ds_rg_administrador` varchar(20) NOT NULL,
  `ds_idade_administrador` int(3) NOT NULL,
  `dt_inscricao_administrador` varchar(30) DEFAULT NULL,
  `ds_estado_administrador` varchar(100) DEFAULT NULL,
  `ds_foto_administrador` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cd_administrador`),
  UNIQUE KEY `ds_cpf_administrador` (`ds_cpf_administrador`),
  UNIQUE KEY `ds_rg_administrador` (`ds_rg_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`cd_administrador`, `nm_administrador`, `ds_senha_administrador`, `ds_cpf_administrador`, `ds_rg_administrador`, `ds_idade_administrador`, `dt_inscricao_administrador`, `ds_estado_administrador`, `ds_foto_administrador`) VALUES
(1, 'nome', 'senha', '111.111.111-11', '123', 500, '1', '3', 'uploads/ghost.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `cd_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nm_aluno` varchar(50) NOT NULL,
  `ds_sexo` varchar(30) NOT NULL,
  `ds_rg` varchar(20) NOT NULL,
  `id_autorizacao` int(11) NOT NULL,
  `vl_idade` int(11) NOT NULL,
  `ds_foto` varchar(100) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_aluno`),
  KEY `id_autorizacao` (`id_autorizacao`),
  KEY `id_turma` (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`cd_aluno`, `nm_aluno`, `ds_sexo`, `ds_rg`, `id_autorizacao`, `vl_idade`, `ds_foto`, `id_turma`) VALUES
(1, 'Maria Antonieta Fernandes', 'Feminino', 'xx.xxx.xxx-xx', 2, 17, 'fotos/alunos/ghost.jpg', 8),
(2, 'João Estácio Cézar', '1', '123', 2, 1, 'fotos/alunos/ghost.jpg', 3),
(3, 'Adolfo Berezin', '0', '123465', 2, 123, 'fotos/alunos/ghost.jpg', 3),
(4, 'Eugênia Pitta Botafogo de Oliveira', '1', '1', 1, 1, 'fotos/alunos/ghost.jpg', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_aluno_responsavel` (
  `cd_aluno_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_usuario_responsavel` int(11) NOT NULL,
  PRIMARY KEY (`cd_aluno_responsavel`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_usuario_responsavel` (`id_usuario_responsavel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_aluno_responsavel`
--

INSERT INTO `tb_aluno_responsavel` (`cd_aluno_responsavel`, `id_aluno`, `id_usuario_responsavel`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atividade`
--

CREATE TABLE IF NOT EXISTS `tb_atividade` (
  `cd_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `nm_atividade` varchar(20) NOT NULL,
  `vl_peso_nota` int(11) NOT NULL,
  `ds_nota` varchar(100) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_bimestre` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  PRIMARY KEY (`cd_atividade`),
  KEY `id_materia` (`id_materia`),
  KEY `id_bimestre` (`id_bimestre`),
  KEY `id_turma` (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `tb_atividade`
--

INSERT INTO `tb_atividade` (`cd_atividade`, `nm_atividade`, `vl_peso_nota`, `ds_nota`, `id_materia`, `id_bimestre`, `id_turma`) VALUES
(4, 'atividade1', 1, 'dgndgndgjhgdjdg', 3, 3, 7),
(9, 'atividade2', 2, 'comeeeeee', 2, 4, 11),
(11, 'Biografia de Na.', 10000000, 'comeeeeee', 3, 4, 11),
(14, 'Apostila 34', 2, 'comeeeeee', 3, 4, 11),
(15, 'Atividade de suporte', 2, 'comeeeeee', 3, 4, 11),
(16, 'Exercício 45', 123, 'phioerhjkÃ§lrslÃ§', 3, 3, 11),
(17, 'Avaliação Global', 6, 'm~klvdpav~da~ljÃ§vjaÃ§kad', 3, 1, 12),
(18, 'Observação direta', 6, 'm~klvdpav~da~ljÃ§vjaÃ§kad', 3, 1, 12),
(19, 'ensino complementar', 12, 'ffshdfshfssh', 3, 1, 13),
(20, 'feira de ciências', 23, 'jqegÃ§kkÃ§nnkÃ§qrege', 3, 1, 13),
(21, 'livro pág 100-220', 2147483647, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, 1, 12),
(22, 'atividade 948', 2333, 'bbbbbbbbbbbbbbbbbb', 3, 1, 1),
(23, 'atividade didática', 342352, 'eqfqfqefqefq', 3, 4, 11),
(24, 'atividade prática', 3, 'eqfeqqefq', 3, 3, 11),
(25, 'atividade24', 3, 'eqfeqqefq', 3, 3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autorizacao`
--

CREATE TABLE IF NOT EXISTS `tb_autorizacao` (
  `cd_autorizacao` int(11) NOT NULL,
  `ds_status` int(1) NOT NULL,
  PRIMARY KEY (`cd_autorizacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_autorizacao`
--

INSERT INTO `tb_autorizacao` (`cd_autorizacao`, `ds_status`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bimestre`
--

CREATE TABLE IF NOT EXISTS `tb_bimestre` (
  `cd_bimestre` int(11) NOT NULL AUTO_INCREMENT,
  `nm_bimestre` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_bimestre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_bimestre`
--

INSERT INTO `tb_bimestre` (`cd_bimestre`, `nm_bimestre`) VALUES
(1, '1º Bimestre'),
(2, '2º Bimestre'),
(3, '3º Bimestre'),
(4, '4º Bimestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_post`
--

CREATE TABLE IF NOT EXISTS `tb_categoria_post` (
  `cd_categoria_post` int(11) NOT NULL AUTO_INCREMENT,
  `nm_categoria_post` varchar(20) NOT NULL,
  PRIMARY KEY (`cd_categoria_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_categoria_post`
--

INSERT INTO `tb_categoria_post` (`cd_categoria_post`, `nm_categoria_post`) VALUES
(1, 'Artigos'),
(2, 'Alunos'),
(3, 'Novidades'),
(4, 'Eventos'),
(5, 'Dicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_contato_administrador` (
  `cd_contato` int(11) NOT NULL AUTO_INCREMENT,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL,
  PRIMARY KEY (`cd_contato`),
  KEY `id_administrador` (`id_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_contato_aluno` (
  `cd_contato` int(11) NOT NULL AUTO_INCREMENT,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL,
  PRIMARY KEY (`cd_contato`),
  KEY `id_aluno` (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_professor`
--

CREATE TABLE IF NOT EXISTS `tb_contato_professor` (
  `cd_contato` int(11) NOT NULL AUTO_INCREMENT,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_professor` int(11) NOT NULL,
  PRIMARY KEY (`cd_contato`),
  KEY `id_professor` (`id_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_contato_responsavel` (
  `cd_contato` int(11) NOT NULL AUTO_INCREMENT,
  `ds_celular` varchar(20) DEFAULT NULL,
  `ds_ddd` varchar(5) DEFAULT NULL,
  `id_responsavel` int(11) NOT NULL,
  PRIMARY KEY (`cd_contato`),
  KEY `id_responsavel` (`id_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_email_administrador` (
  `cd_email` int(11) NOT NULL AUTO_INCREMENT,
  `nm_email` varchar(50) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  PRIMARY KEY (`cd_email`),
  KEY `id_administrador` (`id_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_email_aluno` (
  `cd_email` int(11) NOT NULL AUTO_INCREMENT,
  `nm_email` varchar(50) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  PRIMARY KEY (`cd_email`),
  KEY `id_aluno` (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_professor`
--

CREATE TABLE IF NOT EXISTS `tb_email_professor` (
  `cd_email` int(11) NOT NULL AUTO_INCREMENT,
  `nm_email` varchar(50) NOT NULL,
  `id_professor` int(11) NOT NULL,
  PRIMARY KEY (`cd_email`),
  KEY `id_professor` (`id_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_email_responsavel` (
  `cd_email` int(11) NOT NULL AUTO_INCREMENT,
  `nm_email` varchar(50) NOT NULL,
  `id_responsavel` int(11) NOT NULL,
  PRIMARY KEY (`cd_email`),
  KEY `id_responsavel` (`id_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_endereco_administrador` (
  `cd_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL,
  PRIMARY KEY (`cd_endereco`),
  KEY `id_administrador` (`id_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_professor`
--

CREATE TABLE IF NOT EXISTS `tb_endereco_professor` (
  `cd_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_professor` int(11) NOT NULL,
  PRIMARY KEY (`cd_endereco`),
  KEY `id_professor` (`id_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_endereco_responsavel` (
  `cd_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(100) DEFAULT NULL,
  `ds_cidade` varchar(100) DEFAULT NULL,
  `id_responsavel` int(11) NOT NULL,
  PRIMARY KEY (`cd_endereco`),
  KEY `id_responsavel` (`id_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
  `cd_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nm_estado` varchar(20) DEFAULT NULL,
  `vl_sigla` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`cd_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`cd_estado`, `nm_estado`, `vl_sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_formulario_interesse`
--

CREATE TABLE IF NOT EXISTS `tb_formulario_interesse` (
  `cd_form` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome_completo` varchar(30) NOT NULL,
  `ds_telefone_contato` varchar(15) NOT NULL,
  `ds_email_contato` varchar(50) NOT NULL,
  `ds_duvida` varchar(500) NOT NULL,
  PRIMARY KEY (`cd_form`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_formulario_interesse`
--

INSERT INTO `tb_formulario_interesse` (`cd_form`, `ds_nome_completo`, `ds_telefone_contato`, `ds_email_contato`, `ds_duvida`) VALUES
(1, 'Jorge Lucas Trigo Coronado', '(13) 996669944', 'jorgelucastcoronado@gmail.com', 'cucucucucucucucucucucucucucucucucu'),
(2, 'Davih', '666', 'davipintao@cu.com', 'cu'),
(3, 'roeghprwpkg', '132413414', 'come@gmail.com', 'cu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_galeria`
--

CREATE TABLE IF NOT EXISTS `tb_galeria` (
  `cd_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `ds_foto` varchar(40) NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`cd_galeria`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia`
--

CREATE TABLE IF NOT EXISTS `tb_materia` (
  `cd_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nm_materia` varchar(20) NOT NULL,
  PRIMARY KEY (`cd_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_materia`
--

INSERT INTO `tb_materia` (`cd_materia`, `nm_materia`) VALUES
(1, 'Matemática'),
(2, 'Português'),
(3, 'História'),
(4, 'Geografia'),
(5, 'Ciências');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_mensagem_administrador` (
  `cd_mensagem_canal3` int(11) NOT NULL AUTO_INCREMENT,
  `ds_recado_canal3` varchar(500) NOT NULL,
  `id_professor_canal3` int(11) NOT NULL,
  `id_responsavel_canal3` int(11) NOT NULL,
  `id_administrador_canal3` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `dt_data_canal3` varchar(20) NOT NULL,
  `dt_horario_canal3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_mensagem_canal3`),
  KEY `id_administrador` (`id_administrador`),
  KEY `id_professor_canal3` (`id_professor_canal3`),
  KEY `id_responsavel_canal3` (`id_responsavel_canal3`),
  KEY `id_administrador_canal3` (`id_administrador_canal3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_professor`
--

CREATE TABLE IF NOT EXISTS `tb_mensagem_professor` (
  `cd_mensagem_canal1` int(11) NOT NULL AUTO_INCREMENT,
  `ds_recado_canal1` varchar(500) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_professor_canal1` int(11) DEFAULT NULL,
  `id_responsavel_canal1` int(11) DEFAULT NULL,
  `id_administrador_canal1` int(11) DEFAULT NULL,
  `dt_data_canal1` varchar(20) NOT NULL,
  `dt_horario_canal1` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_mensagem_canal1`),
  KEY `id_professor` (`id_professor`),
  KEY `id_administrador_canal1` (`id_administrador_canal1`),
  KEY `id_responsavel_canal1` (`id_responsavel_canal1`),
  KEY `id_professor_canal1` (`id_professor_canal1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_mensagem_professor`
--

INSERT INTO `tb_mensagem_professor` (`cd_mensagem_canal1`, `ds_recado_canal1`, `id_professor`, `id_professor_canal1`, `id_responsavel_canal1`, `id_administrador_canal1`, `dt_data_canal1`, `dt_horario_canal1`) VALUES
(1, 'teste 1 mandar', 1, NULL, 1, NULL, '09/09/19', '23:35:51'),
(2, 'teste 2', 1, NULL, 2, NULL, '09/09/19', '23:38:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_mensagem_responsavel` (
  `cd_mensagem_canal2` int(11) NOT NULL AUTO_INCREMENT,
  `ds_recado_canal2` varchar(500) NOT NULL,
  `id_responsavel` int(11) NOT NULL,
  `id_professor_canal2` int(11) DEFAULT NULL,
  `id_responsavel_canal2` int(11) DEFAULT NULL,
  `id_administrador_canal2` int(11) DEFAULT NULL,
  `dt_data_canal2` varchar(20) NOT NULL,
  `dt_horario_canal2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cd_mensagem_canal2`),
  KEY `id_responsavel` (`id_responsavel`),
  KEY `id_administrador_canal2` (`id_administrador_canal2`),
  KEY `id_professor_canal2` (`id_professor_canal2`),
  KEY `id_responsavel_canal2` (`id_responsavel_canal2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_mensagem_responsavel`
--

INSERT INTO `tb_mensagem_responsavel` (`cd_mensagem_canal2`, `ds_recado_canal2`, `id_responsavel`, `id_professor_canal2`, `id_responsavel_canal2`, `id_administrador_canal2`, `dt_data_canal2`, `dt_horario_canal2`) VALUES
(1, 'dvsdvsdvsdvs', 2, 1, NULL, NULL, '09/09/19', '23:47:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE IF NOT EXISTS `tb_nota` (
  `cd_nota` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `vl_nota` double(4,2) NOT NULL,
  `id_atividade` int(11) NOT NULL,
  PRIMARY KEY (`cd_nota`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_atividade` (`id_atividade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_periodo`
--

CREATE TABLE IF NOT EXISTS `tb_periodo` (
  `cd_periodo` int(11) NOT NULL,
  `ds_periodo` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_periodo`
--

INSERT INTO `tb_periodo` (`cd_periodo`, `ds_periodo`) VALUES
(1, 'Manhã'),
(2, 'Tarde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--

CREATE TABLE IF NOT EXISTS `tb_post` (
  `cd_post` int(11) NOT NULL AUTO_INCREMENT,
  `ds_desc` varchar(500) NOT NULL,
  `dt_criacao` varchar(15) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `ds_titulo` varchar(100) NOT NULL,
  `ds_foto_post` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`cd_post`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_post`
--

INSERT INTO `tb_post` (`cd_post`, `ds_desc`, `dt_criacao`, `id_administrador`, `ds_titulo`, `ds_foto_post`, `id_categoria`) VALUES
(1, 'teste1', '1', 1, 'Teste', 'uploads/ghost.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE IF NOT EXISTS `tb_professor` (
  `cd_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_professor` varchar(30) NOT NULL,
  `ds_senha_professor` varchar(30) DEFAULT NULL,
  `ds_cpf_professor` varchar(20) NOT NULL,
  `ds_rg_professor` varchar(20) NOT NULL,
  `ds_idade_professor` int(3) NOT NULL,
  `dt_inscricao_professor` varchar(30) DEFAULT NULL,
  `ds_estado_professor` varchar(100) DEFAULT NULL,
  `ds_foto_professor` varchar(100) DEFAULT NULL,
  `id_materia_professor` int(11) DEFAULT NULL,
  `ds_ativo` int(1) NOT NULL,
  PRIMARY KEY (`cd_professor`),
  KEY `tb_professor_ibfk_1` (`id_materia_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_professor`
--

INSERT INTO `tb_professor` (`cd_professor`, `nm_professor`, `ds_senha_professor`, `ds_cpf_professor`, `ds_rg_professor`, `ds_idade_professor`, `dt_inscricao_professor`, `ds_estado_professor`, `ds_foto_professor`, `id_materia_professor`, `ds_ativo`) VALUES
(1, 'nome_professor_2', 'senha', '222.222.222-22', '666', 500, '1', '3', 'uploads/ghost.jpg', 3, 0),
(2, 'nome_professor_3', 'senha', '333.333.333-33', '123', 12, '2019.08.19-08.44.22', '', 'uploads/ghost.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recado_canal_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_recado_canal_administrador` (
  `cd_recado_canal3` int(11) NOT NULL AUTO_INCREMENT,
  `ds_recado_canal3` varchar(500) NOT NULL,
  `id_usuario_mandar_canal3` int(11) NOT NULL,
  `id_usuario_responsavel_canal3` int(11) DEFAULT NULL,
  `id_tipo_recado_canal3` int(11) NOT NULL,
  `ds_horario_data` varchar(30) NOT NULL,
  PRIMARY KEY (`cd_recado_canal3`),
  KEY `id_usuario_mandar_canal3` (`id_usuario_mandar_canal3`),
  KEY `id_usuario_responsavel_canal3` (`id_usuario_responsavel_canal3`),
  KEY `id_tipo_recado_canal3` (`id_tipo_recado_canal3`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `tb_recado_canal_administrador`
--

INSERT INTO `tb_recado_canal_administrador` (`cd_recado_canal3`, `ds_recado_canal3`, `id_usuario_mandar_canal3`, `id_usuario_responsavel_canal3`, `id_tipo_recado_canal3`, `ds_horario_data`) VALUES
(32, 'wrgrwgwrg', 1, 2, 2, '09/09/19 21:42:07'),
(33, 'teste 1', 1, 1, 3, '09/09/19 21:43:15'),
(34, 'teste 2', 1, 1, 1, '09/09/19 21:44:36'),
(35, 'teste 2', 1, 2, 1, '09/09/19 21:44:36'),
(36, 'post teste 3', 1, 1, 2, '09/09/19 21:44:55'),
(37, 'teste 5', 1, 1, 2, '09/09/19 21:45:25'),
(38, 'teste 5', 1, 2, 2, '09/09/19 21:45:25'),
(39, 'teste 6', 1, 1, 1, '09/09/19 23:19:52'),
(40, 'teste 6', 1, 2, 1, '09/09/19 23:19:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recado_canal_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_recado_canal_responsavel` (
  `cd_recado_canal1` int(11) NOT NULL AUTO_INCREMENT,
  `ds_recado_canal1` varchar(500) NOT NULL,
  `id_usuario_mandar_canal1` int(11) NOT NULL,
  `id_usuario_administrador_canal1` int(11) DEFAULT NULL,
  `id_tipo_recado_canal1` int(11) NOT NULL,
  `ds_horario_data` varchar(30) NOT NULL,
  PRIMARY KEY (`cd_recado_canal1`),
  KEY `id_usuario_mandar_canal1` (`id_usuario_mandar_canal1`),
  KEY `id_usuario_administrador_canal1` (`id_usuario_administrador_canal1`),
  KEY `id_tipo_recado_canal1` (`id_tipo_recado_canal1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_recado_canal_responsavel`
--

INSERT INTO `tb_recado_canal_responsavel` (`cd_recado_canal1`, `ds_recado_canal1`, `id_usuario_mandar_canal1`, `id_usuario_administrador_canal1`, `id_tipo_recado_canal1`, `ds_horario_data`) VALUES
(1, 'teste 1 mandar', 1, 1, 2, '09/09/19 23:31:20'),
(2, 'teste 2 mandar', 1, 1, 2, '09/09/19 23:31:54'),
(3, 'teste a', 2, 1, 2, '09/09/19 23:52:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_responsavel`
--

CREATE TABLE IF NOT EXISTS `tb_responsavel` (
  `cd_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `nm_responsavel` varchar(30) NOT NULL,
  `ds_senha_responsavel` varchar(30) DEFAULT NULL,
  `ds_cpf_responsavel` varchar(20) NOT NULL,
  `ds_rg_responsavel` varchar(20) NOT NULL,
  `ds_idade_responsavel` int(3) NOT NULL,
  `dt_inscricao_responsavel` varchar(30) DEFAULT NULL,
  `ds_estado_responsavel` varchar(100) DEFAULT NULL,
  `ds_foto_responsavel` varchar(100) DEFAULT NULL,
  `ds_sexo` int(1) DEFAULT NULL,
  PRIMARY KEY (`cd_responsavel`),
  UNIQUE KEY `ds_cpf_responsavel` (`ds_cpf_responsavel`),
  UNIQUE KEY `ds_rg_responsavel` (`ds_rg_responsavel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_responsavel`
--

INSERT INTO `tb_responsavel` (`cd_responsavel`, `nm_responsavel`, `ds_senha_responsavel`, `ds_cpf_responsavel`, `ds_rg_responsavel`, `ds_idade_responsavel`, `dt_inscricao_responsavel`, `ds_estado_responsavel`, `ds_foto_responsavel`, `ds_sexo`) VALUES
(1, 'nome_responsavel', 'senha', '555.555.555-55', '432', 500, '1', '3', 'uploads/ghost.jpg', 1),
(2, 'nome_responsavel_4', 'senha', '444.444.444-44', '123', 123, '2019.08.13-09.32.32', '', 'uploads/ghost.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_recado`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_recado` (
  `cd_tipo_recado` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tipo_recado` varchar(30) NOT NULL,
  `ds_cor` varchar(40) NOT NULL,
  PRIMARY KEY (`cd_tipo_recado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_tipo_recado`
--

INSERT INTO `tb_tipo_recado` (`cd_tipo_recado`, `nm_tipo_recado`, `ds_cor`) VALUES
(1, 'urgente', '#b71c1c'),
(2, 'padrão', '#ffb74d'),
(3, 'evento', '#29b6f6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE IF NOT EXISTS `tb_turma` (
  `cd_turma` int(11) NOT NULL AUTO_INCREMENT,
  `ds_turma` varchar(100) NOT NULL,
  `id_periodo_turma` int(11) NOT NULL,
  PRIMARY KEY (`cd_turma`),
  KEY `tb_turma_ibfk_1` (`id_periodo_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`cd_turma`, `ds_turma`, `id_periodo_turma`) VALUES
(1, 'Maternal', 2),
(2, 'Jardim I', 2),
(3, 'Jardim II', 2),
(4, 'Pré', 2),
(5, '1º ano', 2),
(6, '2º ano', 2),
(7, '3º ano', 2),
(8, '4º ano', 2),
(9, '5º ano', 1),
(10, '6º ano', 1),
(11, '7º ano', 1),
(12, '8º ano', 1),
(13, '9º ano', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD CONSTRAINT `tb_aluno_ibfk_1` FOREIGN KEY (`id_autorizacao`) REFERENCES `tb_autorizacao` (`cd_autorizacao`),
  ADD CONSTRAINT `tb_aluno_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`cd_turma`);

--
-- Limitadores para a tabela `tb_aluno_responsavel`
--
ALTER TABLE `tb_aluno_responsavel`
  ADD CONSTRAINT `tb_aluno_responsavel_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`),
  ADD CONSTRAINT `tb_aluno_responsavel_ibfk_2` FOREIGN KEY (`id_usuario_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_atividade`
--
ALTER TABLE `tb_atividade`
  ADD CONSTRAINT `tb_atividade_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `tb_materia` (`cd_materia`),
  ADD CONSTRAINT `tb_atividade_ibfk_2` FOREIGN KEY (`id_bimestre`) REFERENCES `tb_bimestre` (`cd_bimestre`),
  ADD CONSTRAINT `tb_atividade_ibfk_3` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`cd_turma`);

--
-- Limitadores para a tabela `tb_contato_administrador`
--
ALTER TABLE `tb_contato_administrador`
  ADD CONSTRAINT `tb_contato_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_contato_aluno`
--
ALTER TABLE `tb_contato_aluno`
  ADD CONSTRAINT `tb_contato_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`);

--
-- Limitadores para a tabela `tb_contato_professor`
--
ALTER TABLE `tb_contato_professor`
  ADD CONSTRAINT `tb_contato_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_contato_responsavel`
--
ALTER TABLE `tb_contato_responsavel`
  ADD CONSTRAINT `tb_contato_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_email_administrador`
--
ALTER TABLE `tb_email_administrador`
  ADD CONSTRAINT `tb_email_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_email_aluno`
--
ALTER TABLE `tb_email_aluno`
  ADD CONSTRAINT `tb_email_aluno_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`);

--
-- Limitadores para a tabela `tb_email_professor`
--
ALTER TABLE `tb_email_professor`
  ADD CONSTRAINT `tb_email_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_email_responsavel`
--
ALTER TABLE `tb_email_responsavel`
  ADD CONSTRAINT `tb_email_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_endereco_administrador`
--
ALTER TABLE `tb_endereco_administrador`
  ADD CONSTRAINT `tb_endereco_administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`);

--
-- Limitadores para a tabela `tb_endereco_professor`
--
ALTER TABLE `tb_endereco_professor`
  ADD CONSTRAINT `tb_endereco_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`);

--
-- Limitadores para a tabela `tb_endereco_responsavel`
--
ALTER TABLE `tb_endereco_responsavel`
  ADD CONSTRAINT `tb_endereco_responsavel_ibfk_1` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_galeria`
--
ALTER TABLE `tb_galeria`
  ADD CONSTRAINT `tb_galeria_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `tb_post` (`cd_post`);

--
-- Limitadores para a tabela `tb_mensagem_administrador`
--
ALTER TABLE `tb_mensagem_administrador`
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_1` FOREIGN KEY (`id_professor_canal3`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_3` FOREIGN KEY (`id_administrador_canal3`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_administrador_ibfk_4` FOREIGN KEY (`id_responsavel_canal3`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_mensagem_professor`
--
ALTER TABLE `tb_mensagem_professor`
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_2` FOREIGN KEY (`id_professor_canal1`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_3` FOREIGN KEY (`id_administrador_canal1`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_professor_ibfk_4` FOREIGN KEY (`id_responsavel_canal1`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_mensagem_responsavel`
--
ALTER TABLE `tb_mensagem_responsavel`
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_1` FOREIGN KEY (`id_professor_canal2`) REFERENCES `tb_professor` (`cd_professor`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_2` FOREIGN KEY (`id_administrador_canal2`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_3` FOREIGN KEY (`id_responsavel`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_mensagem_responsavel_ibfk_4` FOREIGN KEY (`id_responsavel_canal2`) REFERENCES `tb_responsavel` (`cd_responsavel`);

--
-- Limitadores para a tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `tb_nota_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`cd_aluno`),
  ADD CONSTRAINT `tb_nota_ibfk_2` FOREIGN KEY (`id_atividade`) REFERENCES `tb_atividade` (`cd_atividade`);

--
-- Limitadores para a tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria_post` (`cd_categoria_post`);

--
-- Limitadores para a tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD CONSTRAINT `tb_professor_ibfk_1` FOREIGN KEY (`id_materia_professor`) REFERENCES `tb_materia` (`cd_materia`);

--
-- Limitadores para a tabela `tb_recado_canal_administrador`
--
ALTER TABLE `tb_recado_canal_administrador`
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_1` FOREIGN KEY (`id_usuario_mandar_canal3`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_2` FOREIGN KEY (`id_usuario_responsavel_canal3`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_recado_canal_administrador_ibfk_4` FOREIGN KEY (`id_tipo_recado_canal3`) REFERENCES `tb_tipo_recado` (`cd_tipo_recado`);

--
-- Limitadores para a tabela `tb_recado_canal_responsavel`
--
ALTER TABLE `tb_recado_canal_responsavel`
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_1` FOREIGN KEY (`id_usuario_mandar_canal1`) REFERENCES `tb_responsavel` (`cd_responsavel`),
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_3` FOREIGN KEY (`id_usuario_administrador_canal1`) REFERENCES `tb_administrador` (`cd_administrador`),
  ADD CONSTRAINT `tb_recado_canal_responsavel_ibfk_4` FOREIGN KEY (`id_tipo_recado_canal1`) REFERENCES `tb_tipo_recado` (`cd_tipo_recado`);

--
-- Limitadores para a tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`id_periodo_turma`) REFERENCES `tb_periodo` (`cd_periodo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
