<?php

//define ('PATH_URL', $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/src/');

#Definição do caminho padrão da pasta (Localhost)
define ('PATH_URL', $_SERVER['DOCUMENT_ROOT'] . '/ControleOS/src/');

#TIPOS DE USUARIO
const PERFIL_ADM = 1;
const PERFIL_FUNCIONARIO = 2;
const PERFIL_TECNICO = 3;

#FUNÇÕES DO PROJETO
#TIPO DO EQUIPAMENTO
const CADASTRAR_TIPO = 'CadastrarTipoEquipamento';
const ALTERAR_TIPO = 'AlterarTipoEquipamento';
const EXCLUIR_TIPO = 'ExcluirTipoEquipamento';

#MODELO EQUIPAMENTO
const CADASTRAR_MODELO = 'CadastrarModeloEquipamento';
const ALTERAR_MODELO = 'AlterarModeloEquipamento';
const EXCLUIR_MODELO = 'ExcluirModeloEquipamento';

#SETOR 
const CADASTRAR_SETOR = 'CadastrarSetor';
const ALTERAR_SETOR = 'AlterarSetor';
const EXCLUIR_SETOR = 'ExcluirSetor';

#EQUIPAMENTO 
const CADASTRAR_EQUIPAMENTO = 'CadastrarEquipamento';
const ALTERAR_EQUIPAMENTO = 'AlterarEquipamento';
const EXCLUIR_EQUIPAMENTO = 'ExcluirEquipamento';