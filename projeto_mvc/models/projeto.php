<?php
class Projeto
{
private $id;
private $nome;
private $duracao;


private $con;
public function _construct ($id=null, $nome=null, &duracao=null)
$this->id = $id;
$this->nome = $nome;
$this-›duracao = $duracao;
$this->con= new PDO (SERVIDOR, USUARIO, SENHA) ;
public function all (){
§sql = $this-›con-›prepare ('SELECT • FROM ver_projeto’);
$sql->execute () ;
$rows = $sql->fetchAll (PDO::FETCH_ CLASS);
return $rows;}
public function create ()
$sql
= $this-›con-›prepare ('INSERT INTO projeto (nome, duracao)
VALUES (?,?)’);
$sql-›execute ( [$this-›nome, $this-›duracaol);
public function read)
$sql = Sthis->con->prepare (' SELECT FROM ver projeto WHERE
ide?;
$sql-›execute ([Sthis->id]);
Srow = $sql-›fetchObject (); return Srow;
public function update ()
Ssql - Sthis->con->prepare ('UPDATE projeto SET nomen?, duracao=?
WHERE id=?");
§sql->execute ([Sthis-›nome, Sthis-›duracao, Sthis-›idl);
public function delete (
$sq1 = this->con-›prepare ('DELETE FROM projeto WHERE id-?*):
Ssql->execute ([Sthis ->id])