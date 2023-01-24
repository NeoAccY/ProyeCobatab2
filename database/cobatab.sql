-- creación de la base de datos
create database if not exists cobatab;

-- selección de la base de datos
use cobatab;

-- se revisa si las tablas existen y se eliminan de ser true

drop table if exists alumnos;

drop table if exists departamentos;

drop table if exists especialidad;

drop table if exists identificaciones;

drop table if exists ingreso_personas;

drop table if exists ingreso_salida_personas;

drop table if exists motivo_visita;

drop table if exists nivel_escolar;

drop table if exists notificaciones;

drop table if exists ocupaciones;

drop table if exists personal;

drop table if exists personas;

drop table if exists reportes;

drop table if exists reportes_alumnos;

drop table if exists salida_personas;

drop table if exists tipo_usuario;

drop table if exists turnos;

drop table if exists tutores;

drop table if exists usuarios;

drop table if exists visitantes;

/* ----------------------------------------------------------------
-- table: alumnos                                               
------------------------------------------------------------------*/
create table alumnos
(
    id_alumnos           int not null auto_increment,
    id_personas          int not null,
    id_turnos            int not null,
    id_especialidad      int not null,
    id_tutores           int not null,
    matricula            varchar(15) not null,
    primary key (id_alumnos)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/* ---------------------------------------------------------------
-- table: departamentos tabla modificada                                    
----------------------------------------------------------------*/
create table departamentos
(
    id_departamentos     int not null auto_increment,
    nombre               varchar(50) not null,
    descripcion          text not null,
    activo               bit not null,
    primary key (id_departamentos)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: especialidad                                          
----------------------------------------------------------------*/
create table especialidad
(
    id_especialidad      int not null auto_increment,
    id_nivel_escolar     int not null,
    nombre               varchar(100) not null,
    abreviatura          varchar(50),
    capacitacion         bit not null,
    activo               bit not null,
    primary key (id_especialidad)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: identificaciones                                      
----------------------------------------------------------------*/
create table identificaciones
(
    id_identificaciones  int not null auto_increment,
    nombre               varchar(25) not null,
    activo               bit not null,
    primary key (id_identificaciones)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: ingreso_personas                                      
----------------------------------------------------------------*/
create table ingreso_personas
(
    id_ingreso_personas  int not null auto_increment,
    id_personas          int not null,
    id_visitantes        int not null,
    fecha_hora           datetime not null,
    primary key (id_ingreso_personas)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: ingreso_salida_personas                               
----------------------------------------------------------------*/
create table ingreso_salida_personas
(
    id_ingreso_personas  int not null,
    id_salida_personas   int not null
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: motivo_visita                                         
----------------------------------------------------------------*/
create table motivo_visita
(
    id_motivo_visita     int not null auto_increment,
    id_departamentos     int not null,
    hora_entrada         time not null,
    fecha                date not null,
    motivo               text not null,
    hora_salida          time not null,
    primary key (id_motivo_visita)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: nivel_escolar                                         
----------------------------------------------------------------*/
create table nivel_escolar
(
    id_nivel_escolar     int not null auto_increment,
    id_turnos            int not null,
    grado                int not null,
    grupo                char(10) not null,
    activo               bit not null,
    primary key (id_nivel_escolar)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: notificaciones                                        
----------------------------------------------------------------*/
create table notificaciones
(
    id_notificaciones    int not null auto_increment,
    id_tutores           int not null,
    id_reportes          int not null,
    descripcion          text not null,
    primary key (id_notificaciones)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: ocupaciones                                           
----------------------------------------------------------------*/
create table ocupaciones
(
    id_ocupaciones       int not null auto_increment,
    nombre               varchar(25) not null,
    activo               bit not null,
    primary key (id_ocupaciones)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: personal                                              
----------------------------------------------------------------*/
create table personal
(
    id_personal          int not null auto_increment,
    id_ocupaciones       int not null,
    id_turnos            int not null,
    id_personas          int not null,
    id_departamentos     int not null,
    num_empleado         varchar(10) not null,
    primary key (id_personal)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: personas                                              
----------------------------------------------------------------*/
create table personas
(
    id_personas          int not null auto_increment,
    nombre               varchar(50) not null,
    ap_paterno           varchar(50) not null,
    ap_materno           varchar(50),
    edad                 int not null,
    telefono             varchar(20) not null,
    sexo                 bit not null,
    email                varchar(100),
    primary key (id_personas)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: reportes                                              
----------------------------------------------------------------*/
create table reportes
(
    id_reportes          int not null auto_increment,
    nombre               varchar(25) not null,
    fecha_hora           datetime not null,
    primary key (id_reportes)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: reportes_alumnos                                      
----------------------------------------------------------------*/
create table reportes_alumnos
(
    id_reportes          int not null,
    id_alumnos           int not null
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: salida_personas                                       
----------------------------------------------------------------*/
create table salida_personas
(
    id_salida_personas   int not null auto_increment,
    id_personas          int not null,
    id_visitantes        int not null,
    fecha_hora           datetime not null,
    primary key (id_salida_personas)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: tipo_usuario                                          
----------------------------------------------------------------*/
create table tipo_usuario
(
    id_tipo_usuario      int not null auto_increment,
    nombre               varchar(25) not null,
    activo               int not null,
    primary key (id_tipo_usuario)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: turnos                                                
----------------------------------------------------------------*/
create table turnos
(
    id_turnos            int not null auto_increment,
    nombre               varchar(25) not null,
    activo               bit not null,
    primary key (id_turnos)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: tutores                                               
----------------------------------------------------------------*/
create table tutores
(
    id_tutores           int not null auto_increment,
    id_personas          int not null,
    primary key (id_tutores)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: usuarios                                              
----------------------------------------------------------------*/
create table usuarios
(
    id_usuarios          int not null auto_increment,
    id_tipo_usuario      int not null,
    id_personas          int not null,
    nombre_usuario       varchar(25) not null,
    password             varchar(255) not null,
    activo               bit not null,
    primary key (id_usuarios)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
-- table: visitantes                                            
----------------------------------------------------------------*/
create table visitantes
(
    id_visitantes        int not null auto_increment,
    id_motivo_visita     int not null,
    id_identificaciones  int not null,
    nombre               varchar(50) not null,
    ap_paterno           varchar(50) not null,
    ap_materno           varchar(50) not null,
    dato_identif         varchar(50),
    primary key (id_visitantes)
) ENGINE = InnoDB DEFAULT charset = utf8mb4;


/*----------------------------------------------------------------
--  Alteraciones de las tablas para las foreign keys             
----------------------------------------------------------------*/

alter table alumnos add constraint fk_alumnos_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table alumnos add constraint fk_alumnos_reference_tutores foreign key (id_tutores)
    references tutores (id_tutores) on delete restrict on update restrict;

alter table alumnos add constraint fk_alumnos_reference_turnos foreign key (id_turnos)
    references turnos (id_turnos) on delete restrict on update restrict;

alter table alumnos add constraint fk_alumnos_reference_especialidad foreign key (id_especialidad)
    references especialidad (id_especialidad) on delete restrict on update restrict;

alter table especialidad add constraint fk_especialidad_reference_nivel_escolar foreign key (id_nivel_escolar)
    references nivel_escolar (id_nivel_escolar) on delete restrict on update restrict;

alter table ingreso_personas add constraint fk_in_personas_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table ingreso_personas add constraint fk_in_personas_reference_visitantes foreign key (id_visitantes)
    references visitantes (id_visitantes) on delete restrict on update restrict;

alter table ingreso_salida_personas add constraint fk_in_sa_personas_reference_in_personas foreign key (id_ingreso_personas)
    references ingreso_personas (id_ingreso_personas) on delete restrict on update restrict;

alter table ingreso_salida_personas add constraint fk_in_sa_personas_reference_sa_personas foreign key (id_salida_personas)
    references salida_personas (id_salida_personas) on delete restrict on update restrict;

alter table motivo_visita add constraint fk_motivo_visita_reference_departamentos foreign key (id_departamentos)
    references departamentos (id_departamentos) on delete restrict on update restrict;

alter table nivel_escolar add constraint fk_nivel_escolar_reference_turnos foreign key (id_turnos)
    references turnos (id_turnos) on delete restrict on update restrict;

alter table notificaciones add constraint fk_notificaciones_reference_tutores foreign key (id_tutores)
    references tutores (id_tutores) on delete restrict on update restrict;

alter table notificaciones add constraint fk_notificaciones_reference_reportes foreign key (id_reportes)
    references reportes (id_reportes) on delete restrict on update restrict;

alter table personal add constraint fk_personal_reference_ocupaciones foreign key (id_ocupaciones)
    references ocupaciones (id_ocupaciones) on delete restrict on update restrict;

alter table personal add constraint fk_personal_reference_turnos foreign key (id_turnos)
    references turnos (id_turnos) on delete restrict on update restrict;

alter table personal add constraint fk_personal_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table personal add constraint fk_personal_reference_departamentos foreign key (id_departamentos) 
    references departamentos (id_departamentos) on delete restrict on update restrict;

alter table reportes_alumnos add constraint fk_repor_alumnos_reference_reportes foreign key (id_reportes)
    references reportes (id_reportes) on delete restrict on update restrict;

alter table reportes_alumnos add constraint fk_repor_alumnos_reference_alumnos foreign key (id_alumnos)
    references alumnos (id_alumnos) on delete restrict on update restrict;

alter table salida_personas add constraint fk_sa_personas_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table salida_personas add constraint fk_sa_personas_reference_visitantes foreign key (id_visitantes)
    references visitantes (id_visitantes) on delete restrict on update restrict;

alter table tutores add constraint fk_tutores_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table usuarios add constraint fk_usuarios_reference_tipo_usuario foreign key (id_tipo_usuario)
    references tipo_usuario (id_tipo_usuario) on delete restrict on update restrict;

alter table usuarios add constraint fk_usuarios_reference_personas foreign key (id_personas)
    references personas (id_personas) on delete restrict on update restrict;

alter table visitantes add constraint fk_visitantes_reference_identificaciones foreign key (id_identificaciones)
    references identificaciones (id_identificaciones) on delete restrict on update restrict;

alter table visitantes add constraint fk_visitantes_reference_motivo_visita foreign key (id_motivo_visita)
    references motivo_visita (id_motivo_visita) on delete restrict on update restrict;


-- -----------------------------------------------------
-- Insertando datos para la tabla `personas`
-- -----------------------------------------------------

insert into `personas` (`id_personas`, `nombre`, `ap_paterno`, `ap_materno`, `edad`, `telefono`, `sexo`, `email`) values
(1, 'josé', 'chablé', 'gonzales', 25, '9933458789', b'1', 'admin@gmail.com'),
(2, 'Rosa María', 'Burrueta', 'López', 35, '5599784120', b'0', 'rosem@gmail.com');

-- -----------------------------------------------------
-- volcado de datos para la tabla `tipo_usuario`
-- -----------------------------------------------------

insert into `tipo_usuario` (`id_tipo_usuario`, `nombre`, `activo`) values
(1, 'administrador', 1),
(2, 'personal', 1);

-- -----------------------------------------------------
-- insertando datos para la tabla `usuarios`
-- -----------------------------------------------------

insert into `usuarios` (`id_usuarios`, `id_tipo_usuario`, `id_personas`, `nombre_usuario`, `password`, `activo`) values
(1, 1, 1, 'admin', 'admin', b'1'),
(2, 2, 2, 'personal', 'personal', b'1');

-- -----------------------------------------------------
-- insertando datos para la tabla `ocupaciones`
-- -----------------------------------------------------

insert into `ocupaciones` (`id_ocupaciones`, `nombre`, `activo`) values
(1, 'Secretario', b'1'),
(2, 'Asistente', b'1'),
(3, 'Docente', b'1'),
(4, 'Encargado Lab.', b'1');

-- -----------------------------------------------------
-- insertando datos para la tabla `turnos`
-- -----------------------------------------------------

insert into `turnos` (`id_turnos`, `nombre`, `activo`) values
(1, 'Matutino', b'1'),
(2, 'Vespertino', b'1');

-- -----------------------------------------------------
-- insertando datos para la tabla `nivel_escolar`
-- -----------------------------------------------------

insert into `nivel_escolar` (`id_nivel_escolar`, `id_turnos`, `grado`, `grupo`, `activo`) values
(1, 1, 3, 'A', b'1'),
(2, 1, 5, 'C', b'1'),
(3, 2, 1, 'D', b'1'),
(4, 2, 5, 'C', b'1');

-- -----------------------------------------------------
-- insertando datos para la tabla `departamentos`
-- -----------------------------------------------------

insert into `departamentos` (`id_departamentos`, `nombre`, `descripcion`, `activo`) values
(1, 'dirección', 'departamento a cargo de la mtra. ana fanny, en el cuál se observan asuntos relacionados a la administración del plantel, así como con los padres de familia, tutores y docentes de esta institución.', b'1'),
(2, 'subdirección', 'departamento a cargo de la mtra. gladys, en el cuál se observan asuntos relacionados con padres de familia, tutores en cuanto a justificación de faltas, etc.', b'1');


-- -----------------------------------------------------
-- insertando datos para la tabla `especialidad`
-- -----------------------------------------------------

insert into `especialidad` (`id_especialidad`, `id_nivel_escolar`, `nombre`, `abreviatura`, `capacitacion`, `activo`) values
(1, 2, 'Químico - Biólogo', 'Qui. Bió.', b'0', b'1'),
(2, 4, 'Físico - Matemático ', 'Fi. Mat.', b'0', b'1'),
(3, 1, 'Desarrollo de Software', 'Des. Soft.', b'1', b'1');

-- -----------------------------------------------------
-- insertando datos para la tabla `especialidad`
-- -----------------------------------------------------

insert into `identificaciones`(`id_identificaciones`, `nombre`, `activo`) values 
(1,'INE',b'1'),
(2,'Matricula',b'1'),
(3,'Pasaporte',b'1');
