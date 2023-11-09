--Creando Data Base
CREATE DATABASE SocorroAndino;

--Creando tabla
CREATE TABLE Comunas(
    id                  int(11) auto_increment not null,
    nombreComuna        varchar(50) not null,
    CONSTRAINT pk_id PRIMARY KEY(id),
    CONSTRAINT uq_comuna UNIQUE(nombreComuna)
)ENGINE=InnoDb;

CREATE TABLE Inventario(
    id                  int(11) PRIMARY KEY auto_increment not null,
    tipo_objeto         varchar(100) not null,
    nombreObjeto        varchar(50) not null,
    cantidad            int(11) not null, 
    color               varchar(50), 
    observacion         TEXT,
    fecha_registro      DATE,
    hora_registro       TIME,
    registrador         varchar(100) not null
)

CREATE TABLE Vehiculos(
    id                  int(11) PRIMARY KEY auto_increment not null,
    Patente             varchar(6) not null,
    Marca               varchar(20) not null, 
    Modelo              varchar(20) not null, 
    color_vehiculo      varchar(20) not null 
)ENGINE=InnoDb;

CREATE TABLE Voluntarios(
    id                  int(11) PRIMARY KEY auto_increment not null, 
    rut_volun           varchar(9) not null,
    nombres_volun       varchar(15) not null,
    apellido_volun      varchar(15) not null,
    fecha_naci_volun    date not null, 
    edad_volun          int(11) not null,
    email_volun         varchar(100) not null,
    password            varchar(50) not null,
    telefono_volun      int(11),
    ocupacion           varchar(50),
    tipo_volun          varchar(20) not null,
    enfermedad_volun    varchar(20),
    alergia_volun       varchar(20),
    tipo_sangre         varchar(10),
    descripcion_volun   TEXT(100) not null,
    imagen_volun        BLOB,
    id_comuna           int(11) not null,
    direccion           varchar(50),
    numero_emergencia   number,
    nombre_emergencia   varchar(50),
    estado              BOOLEAN,
    CONSTRAINT fk_id_comuna FOREIGN KEY(id_comuna) REFERENCES Comunas(id)
    CONSTRAINT uq_rut_volun UNIQUE(rut_volun),
    CONSTRAINT uq_email_volun UNIQUE(email_volun)
)ENGINE=InnoDb;

CREATE TABLE Rescate(
    id                  int(11) PRIMARY KEY auto_increment not null, 
    rut                 varchar(9) not null,
    nombre              varchar(50) not null,
    edad                int(11), 
    celular             int(11),
    email               varchar(100),
    club                varchar(50),
    id_comuna           int(11),
    experiencia         int(11),
    sexo                varchar(10) not null,
    tipo_rescate        varchar(50) not null,
    fecha_rescate       date not null,
    tiempo_hora         TIME not null,
    descripcion         TEXT(100) not null,
    zona                varchar(100) not null,
    ruta                varchar(100) not null,
    cantidad            int(11) not null,
    tiempo_inicial      datetime not null,
    tiempo_concurrido   datetime not null,
    tiempo_finalizado   datetime not null,
    desnivel_positivo   int(11),
    desnivel_negativo   int(11),
    altura_maxima       int(11),
    distancia_recorrida int(11),
    condiciones         varchar(100),
    id_voluntario       int(11) not null,
    CONSTRAINT fk_id_voluntario_respo FOREIGN KEY(id_voluntario) REFERENCES Voluntarios(id)  ON CASCADE,
    CONSTRAINT fk_id_comuna FOREIGN KEY(id_comuna) REFERENCES Comunas(id)
)ENGINE=InnoDb;

CREATE TABLE Registros(
    id   int(11) PRIMARY KEY auto_increment not null,
    descripcion  varchar(100) not null,
    fecha DATETIME not null,
    id_voluntario int(11),
    CONSTRAINT fk_id_voluntario_registro FOREIGN KEY(id_voluntario) REFERENCES Voluntarios(id) ON CASCADE
)ENGINE=InnoDb;


INSERT INTO `rescate` VALUES (NULL, '213123', 'Osvaldo', '15', '21414', 'os@ads.com', 'sad', '1', '2', 'Hombre', 'Rescate', '2021-05-11', '28:09:06', 'Lesión de perone', 'Bosque de los Brujos', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Maria', '14', '21414', 'tre@ads.com', 'sad', '1', '2', 'Mujer', 'Rescate', '2022-06-11', '28:09:06', 'Luxacion de codo', 'Cerro el Plomo', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Felipe', '30', '21414', 'fel@ads.com', 'sad', '1', '2', 'Hombre', 'Busqueda', '2023-12-11', '28:09:06', 'Lesión de tobillo', 'Cerro Leonera', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Natalia', '54', '21414', 'trip@ads.com', 'sad', '1', '2', 'Mujer', 'Rescate', '2022-09-11', '28:09:06', 'Lesión de perone', 'Cerro Leonera', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');



