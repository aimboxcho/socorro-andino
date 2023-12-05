CREATE DATABASE IF NOT EXISTS SocorroAndino;

-- Usar la base de datos recién creada
USE SocorroAndino;

-- Creando tabla Comunas666
CREATE TABLE Comunas (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombreComuna VARCHAR(50) NOT NULL,
    CONSTRAINT uq_comuna UNIQUE (nombreComuna)
) ENGINE=InnoDB;

-- Creando tabla Inventario
CREATE TABLE Inventario (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    tipo_objeto VARCHAR(100) NOT NULL,
    nombreObjeto VARCHAR(50) NOT NULL,
    cantidad INT(11) NOT NULL, 
    color VARCHAR(50), 
    observacion TEXT,
    fecha_registro DATE,
    hora_registro TIME,
    registrador VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

-- Creando tabla Vehiculos
CREATE TABLE Vehiculos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Patente VARCHAR(6) NOT NULL,
    Marca VARCHAR(20) NOT NULL, 
    Modelo VARCHAR(20) NOT NULL, 
    color_vehiculo VARCHAR(20) NOT NULL 
) ENGINE=InnoDB;

-- Creando tabla Voluntarios
CREATE TABLE Voluntarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    rut_volun VARCHAR(9) NOT NULL,
    nombres_volun VARCHAR(15) NOT NULL,
    apellido_volun VARCHAR(15) NOT NULL,
    fecha_naci_volun DATE NOT NULL, 
    edad_volun INT(11) NOT NULL,
    email_volun VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    telefono_volun INT(11),
    ocupacion VARCHAR(50),
    tipo_volun VARCHAR(20) NOT NULL,
    enfermedad_volun VARCHAR(20),
    alergia_volun VARCHAR(20),
    tipo_sangre VARCHAR(10),
    descripcion_volun TEXT NOT NULL,
    imagen_volun BLOB,
    id_comuna INT(11) NOT NULL,
    direccion VARCHAR(50),
    numero_emergencia INT(25),
    nombre_emergencia VARCHAR(50),
    estado BOOLEAN,
    CONSTRAINT fk_id_comuna_voluntario FOREIGN KEY (id_comuna) REFERENCES Comunas(id),
    CONSTRAINT uq_rut_volun UNIQUE (rut_volun),
    CONSTRAINT uq_email_volun UNIQUE (email_volun)
) ENGINE=InnoDB;

-- Creando tabla Rescate
CREATE TABLE Rescate (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    rut VARCHAR(9) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    edad INT(11), 
    celular INT(11),
    email VARCHAR(100),
    club VARCHAR(50),
    id_comuna INT(11),
    experiencia INT(11),
    sexo VARCHAR(10) NOT NULL,
    tipo_rescate VARCHAR(50) NOT NULL,
    fecha_rescate DATE NOT NULL,
    tiempo_hora TIME NOT NULL,
    descripcion TEXT NOT NULL,
    zona VARCHAR(100) NOT NULL,
    ruta VARCHAR(100) NOT NULL,
    cantidad INT(11) NOT NULL,
    tiempo_inicial DATETIME NOT NULL,
    tiempo_concurrido DATETIME NOT NULL,
    tiempo_finalizado DATETIME NOT NULL,
    desnivel_positivo INT(11),
    desnivel_negativo INT(11),
    altura_maxima INT(11),
    distancia_recorrida INT(11),
    condiciones VARCHAR(100),
    id_voluntario INT(11) NOT NULL,
    longitud VARCHAR(40),
    Latitud VARCHAR(40),
    created_at DATETIME,
    CONSTRAINT fk_id_voluntario_respo FOREIGN KEY (id_voluntario) REFERENCES Voluntarios(id) ON DELETE CASCADE,
    CONSTRAINT fk_id_comuna_rescate FOREIGN KEY (id_comuna) REFERENCES Comunas(id)
) ENGINE=InnoDB;

-- Creando tabla Registros
CREATE TABLE Registros (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    fecha DATETIME NOT NULL,
    id_voluntario INT(11),
    CONSTRAINT fk_id_voluntario_registro FOREIGN KEY (id_voluntario) REFERENCES Voluntarios(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE Gastos(
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    cantidad INT(255) not null,
    descripcion VARCHAR(100) not null,
    costo INT(255) not null,
    user_id INT(11) not null,
    created_at DATETIME,
    updated_at DATETIME,
    CONSTRAINT fk_user_gastos FOREIGN KEY(user_id) REFERENCES Voluntarios(id)
)ENGINE=InnoDb;

INSERT INTO `rescate` VALUES (NULL, '213123', 'Osvaldo', '15', '21414', 'os@ads.com', 'sad', '1', '2', 'Hombre', 'Rescate', '2021-05-11', '28:09:06', 'Lesión de perone', 'Bosque de los Brujos', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Maria', '14', '21414', 'tre@ads.com', 'sad', '1', '2', 'Mujer', 'Rescate', '2022-06-11', '28:09:06', 'Luxacion de codo', 'Cerro el Plomo', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Felipe', '30', '21414', 'fel@ads.com', 'sad', '1', '2', 'Hombre', 'Busqueda', '2023-12-11', '28:09:06', 'Lesión de tobillo', 'Cerro Leonera', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');

INSERT INTO `rescate` VALUES (NULL, '213123', 'Natalia', '54', '21414', 'trip@ads.com', 'sad', '1', '2', 'Mujer', 'Rescate', '2022-09-11', '28:09:06', 'Lesión de perone', 'Cerro Leonera', 'asd', '23', '32:17:06', '14:26:06', '06:25:06', '2312', '232', '22', '2', 'asd', '14');



