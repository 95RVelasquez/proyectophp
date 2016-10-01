create database sistemaweb;
use sistemaweb;

create table usuarios
(
  cod bigint auto_increment,
  nombres varchar(50),
  usuario varchar(15),
  pass varchar(15),
  mail varchar(255),
  tipo int,
  primary key(cod));
  
  #sps crud
  
  create procedure sp_list_user()
     select * from usuarios;

  create procedure  sp_registrar_user(
      xcod bigint,
      xnombres varchar(50),
      xusuario varchar(15),
      xpass varchar(15),
      xmail varchar(255),
      xtipo int)
      insert into usuarios values(xcod,xnombres,xusuario,xpass,xmail,xtipo);
      
 call sp_registrar_user(null,'Rony Javier','RJ50897','123456','rj5897@gmail.com',1);
 call sp_list_user();
 
 drop procedure sp_actualizar_user;
 create procedure sp_actualizar_user( xcod bigint,
      xnombres varchar(50),
      xusuario varchar(15),
      xpass varchar(15),
      xmail varchar(255),
      xtipo int)
      update usuarios set nombres=xnombres,usuario=xusuario,pass=xpass,mail=xmail,tipo=xtipo where cod=xcod;
 
 
 call sp_actualizar_user(1,'Rony Javier','RJ50897','123456','rj5897@gmail.com',1);
 
 
 create procedure sp_eliminar_user(
 xcod bigint )
 Delete from usuarios where cod=xcod;
 
 
 
 
 
  