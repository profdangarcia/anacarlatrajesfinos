-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2019 às 22:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anacarla`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE IF NOT EXISTS `aluguel` (
  `idaluguel` int(11) NOT NULL AUTO_INCREMENT,
  `formapgto_idformapgto` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `valor` decimal(15,2) DEFAULT NULL,
  `data_orcamento` date DEFAULT NULL,
  `data_previsao_retorno` date DEFAULT NULL,
  `entregue` tinyint(4) DEFAULT NULL,
  `valor_sinal` decimal(15,2) DEFAULT NULL,
  `evento_idevento` int(11) NOT NULL,
  `data_evento` date DEFAULT NULL,
  `data_retorno` date DEFAULT NULL,
  PRIMARY KEY (`idaluguel`),
  KEY `fk_aluguel_formapgto1_idx` (`formapgto_idformapgto`),
  KEY `fk_aluguel_cliente1_idx` (`cliente_idcliente`),
  KEY `fk_aluguel_evento1_idx` (`evento_idevento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `end_numero` varchar(40) DEFAULT NULL,
  `end_complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel1` varchar(200) DEFAULT NULL,
  `tel2` varchar(200) DEFAULT NULL,
  `cel` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cpf_cnpj` varchar(30) DEFAULT NULL,
  `rg_ie` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `obs` text,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE IF NOT EXISTS `cor` (
  `idcor` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_produto`
--

CREATE TABLE IF NOT EXISTS `dados_produto` (
  `iddados_produto` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `produto_idproduto` int(11) NOT NULL,
  `valor_aluguel` decimal(15,2) DEFAULT NULL,
  `valor_primeiro_aluguel` decimal(15,2) DEFAULT NULL,
  `informacao` text,
  `data_ultimo_aluguel` datetime DEFAULT NULL,
  `cor_idcor` int(11) NOT NULL,
  `tamanho_idtamanho` int(11) NOT NULL,
  `foto_frente` varchar(255) DEFAULT NULL,
  `foto_tras` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddados_produto`),
  KEY `fk_cor_produto1_idx` (`produto_idproduto`),
  KEY `fk_dados_produto_cor1_idx` (`cor_idcor`),
  KEY `fk_dados_produto_tamanho1_idx` (`tamanho_idtamanho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idevento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formapgto`
--

CREATE TABLE IF NOT EXISTS `formapgto` (
  `idformapgto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idformapgto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_produtos`
--

CREATE TABLE IF NOT EXISTS `fotos_produtos` (
  `idfotos_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `dados_produto_iddados_produto` int(11) unsigned zerofill NOT NULL,
  PRIMARY KEY (`idfotos_produtos`),
  KEY `fk_fotos_produtos_dados_produto1_idx` (`dados_produto_iddados_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text,
  `foto` varchar(255) DEFAULT NULL,
  `tipo` enum('Vestido','Terno') DEFAULT NULL,
  PRIMARY KEY (`idgaleria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `irregularidade`
--

CREATE TABLE IF NOT EXISTS `irregularidade` (
  `idirregularidade` int(11) NOT NULL AUTO_INCREMENT,
  `obs` text,
  `data_ocorrencia` date DEFAULT NULL,
  `valor_servico` decimal(15,2) DEFAULT NULL,
  `data_reparo` date DEFAULT NULL,
  `dados_produto_iddados_produto` int(11) unsigned zerofill NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idirregularidade`),
  KEY `fk_irregularidade_dados_produto1_idx` (`dados_produto_iddados_produto`),
  KEY `fk_irregularidade_cliente1_idx` (`cliente_idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `idnewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnewsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocasiao`
--

CREATE TABLE IF NOT EXISTS `ocasiao` (
  `idocasiao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idocasiao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_idgrupo` int(11) NOT NULL,
  `subgrupo_idsubgrupo` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  KEY `fk_produto_grupo_idx` (`grupo_idgrupo`),
  KEY `fk_produto_subgrupo1_idx` (`subgrupo_idsubgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_por_aluguel`
--

CREATE TABLE IF NOT EXISTS `produtos_por_aluguel` (
  `aluguel_idaluguel` int(11) NOT NULL AUTO_INCREMENT,
  `observação` text,
  `quantidade` int(11) DEFAULT NULL,
  `dados_produto_iddados_produto` int(11) unsigned zerofill NOT NULL,
  `ajustes` text,
  PRIMARY KEY (`aluguel_idaluguel`),
  KEY `fk_produto_has_aluguel_aluguel1_idx` (`aluguel_idaluguel`),
  KEY `fk_produtos_por_aluguel_dados_produto1_idx` (`dados_produto_iddados_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_por_ocasiao`
--

CREATE TABLE IF NOT EXISTS `produto_por_ocasiao` (
  `produto_idproduto` int(11) NOT NULL,
  `ocasiao_idocasiao` int(11) NOT NULL,
  PRIMARY KEY (`produto_idproduto`,`ocasiao_idocasiao`),
  KEY `fk_produto_has_ocasiao_ocasiao1_idx` (`ocasiao_idocasiao`),
  KEY `fk_produto_has_ocasiao_produto1_idx` (`produto_idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subgrupo`
--

CREATE TABLE IF NOT EXISTS `subgrupo` (
  `idsubgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsubgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE IF NOT EXISTS `tamanho` (
  `idtamanho` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtamanho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `fk_aluguel_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluguel_evento1` FOREIGN KEY (`evento_idevento`) REFERENCES `evento` (`idevento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aluguel_formapgto1` FOREIGN KEY (`formapgto_idformapgto`) REFERENCES `formapgto` (`idformapgto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `dados_produto`
--
ALTER TABLE `dados_produto`
  ADD CONSTRAINT `fk_cor_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dados_produto_cor1` FOREIGN KEY (`cor_idcor`) REFERENCES `cor` (`idcor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dados_produto_tamanho1` FOREIGN KEY (`tamanho_idtamanho`) REFERENCES `tamanho` (`idtamanho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fotos_produtos`
--
ALTER TABLE `fotos_produtos`
  ADD CONSTRAINT `fk_fotos_produtos_dados_produto1` FOREIGN KEY (`dados_produto_iddados_produto`) REFERENCES `dados_produto` (`iddados_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `irregularidade`
--
ALTER TABLE `irregularidade`
  ADD CONSTRAINT `fk_irregularidade_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_irregularidade_dados_produto1` FOREIGN KEY (`dados_produto_iddados_produto`) REFERENCES `dados_produto` (`iddados_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_grupo` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_subgrupo1` FOREIGN KEY (`subgrupo_idsubgrupo`) REFERENCES `subgrupo` (`idsubgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos_por_aluguel`
--
ALTER TABLE `produtos_por_aluguel`
  ADD CONSTRAINT `fk_produtos_por_aluguel_dados_produto1` FOREIGN KEY (`dados_produto_iddados_produto`) REFERENCES `dados_produto` (`iddados_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_has_aluguel_aluguel1` FOREIGN KEY (`aluguel_idaluguel`) REFERENCES `aluguel` (`idaluguel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto_por_ocasiao`
--
ALTER TABLE `produto_por_ocasiao`
  ADD CONSTRAINT `fk_produto_has_ocasiao_ocasiao1` FOREIGN KEY (`ocasiao_idocasiao`) REFERENCES `ocasiao` (`idocasiao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_has_ocasiao_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
