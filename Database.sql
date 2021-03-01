
CREATE DOMAIN "dom_inteligencia" AS VARCHAR(8) NOT NULL
	CONSTRAINT "dom_inteligencia_into" CHECK (VALUE IN ('Bajo', 'Medio', 'Alto'));
	
CREATE DOMAIN "dom_contextura" AS VARCHAR(8) NOT NULL
	CONSTRAINT "dom_contextura_into" CHECK (VALUE IN ('N', 'S'));
	
CREATE DOMAIN "dom_talla" AS VARCHAR(8) NOT NULL
	CONSTRAINT "dom_talla_into" CHECK (VALUE IN ('P', 'M', 'G'));
	
CREATE DOMAIN "dom_sexo" AS VARCHAR(8) NOT NULL
	CONSTRAINT "dom_sexo_into" CHECK (VALUE IN ('M', 'F'));

CREATE DOMAIN "dom_ajustes" AS VARCHAR(10)NOT NULL
	CONSTRAINT "dom_ajustes_into" CHECK (VALUE IN ('Faltante', 'Sobrante'));
	
CREATE DOMAIN "dom_servicios" AS VARCHAR(20)NOT NULL
	CONSTRAINT "dom_servicios_into" CHECK (VALUE IN ('Peluqueria', 'Spa', 'Pernocta', 'Veterinario'));

CREATE DOMAIN "dom_cedula" AS INTEGER NOT NULL
	CONSTRAINT "dom_cedula_into" CHECK(VALUE > 0);

CREATE DOMAIN "dom_gravedad" AS VARCHAR(15) NOT NULL
	CONSTRAINT "dom_gravedad_into" CHECK (VALUE IN('Leve','Grave'));


--updated
CREATE TABLE Animales(
	cod_animal INTEGER NOT NULL,	
 	nombre_animal varchar(255) NOT NULL,
 	desc_animal varchar(255) NOT NULL,	
 
	CONSTRAINT "animalespk" PRIMARY KEY (cod_animal)
);


--updated
CREATE TABLE Encargados(
	id_encargado INTEGER NOT NULL,
	nombre_encargado VARCHAR(255) NOT NULL,
	direccion_encargado VARCHAR(255) NOT NULL,
	telefono_encargado VARCHAR(255) NOT NULL,
	sueldo_encargado VARCHAR(255) NOT NULL,
	tiempo_servicio date NOT NULL,

	CONSTRAINT "encargadopk" PRIMARY KEY(ID_encargado)
);

--updated
CREATE TABLE Franquicias(
	RIF_branch varchar(255) NOT NULL,
 	ciudad_branch varchar(255) NOT NULL, 
 	cod_animal INTEGER NOT NULL,	 --especializacion
 	capacidad_branch INTEGER NOT NULL, 
 	id_encargado INTEGER NOT NULL,
 
 	CONSTRAINT "franquiciapk" PRIMARY KEY (RIF_branch),
	CONSTRAINT "franquiciafk1" FOREIGN KEY (ID_encargado) REFERENCES Encargados(ID_encargado) ON UPDATE CASCADE ON DELETE no action,
    CONSTRAINT "franquiciafk2" FOREIGN KEY (cod_animal) REFERENCES Animales(cod_animal) ON UPDATE CASCADE ON DELETE no action
);

--updated
CREATE TABLE Personal(
    RIF_branch varchar(255) NOT NULL,
	ID_personal INTEGER NOT NULL,
	nombre_personal VARCHAR(255) NOT NULL,
	direccion_personal VARCHAR(255) NOT NULL,
	telefono_personal VARCHAR(255) NOT NULL,
	sueldo_personal VARCHAR(255) NOT NULL,


	CONSTRAINT "personalpk" PRIMARY KEY(ID_personal),
    CONSTRAINT "personalfk1" FOREIGN KEY (RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE RESTRICT
    
);

---------------------------------------------------------MODIFICADO---------------------------------------------------------
--updated
CREATE TABLE Servicios(
    
    RIF_branch VARCHAR(255) NOT NULL,
	cod_serv INTEGER NOT NULL,
	nombre_serv VARCHAR(250) NOT NULL,
	disp_serv VARCHAR(250) NOT NULL,
	desc_serv VARCHAR(250) NOT NULL,
    ID_personal INTEGER NOT NULL,

	CONSTRAINT "serviciospk" PRIMARY KEY(cod_serv,RIF_branch), 
	CONSTRAINT "personalxserviciosfk1" FOREIGN KEY (RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "personalxserviciosfk2" FOREIGN KEY(ID_personal) REFERENCES Personal(ID_personal) ON UPDATE CASCADE ON DELETE RESTRICT
 
    
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------


CREATE TABLE Actividades(
	RIF_branch VARCHAR(255) NOT NULL,
	cod_serv INTEGER NOT NULL,
	cod_actividad INTEGER NOT NULL,
	nombre_actividad VARCHAR(250) NOT NULL,
	desc_actividad VARCHAR(250) NOT NULL,
	capacidad INTEGER NOT NULL,
	costo_actividad INTEGER NOT NULL,

	CONSTRAINT "actividadespk" PRIMARY KEY(cod_serv,cod_actividad),
	CONSTRAINT "actividadesfk1" FOREIGN KEY(cod_serv,RIF_branch) REFERENCES servicios(cod_serv,RIF_branch) ON UPDATE CASCADE ON DELETE CASCADE
);


--------------------------------------------------------TABLA NUEVA---------------------------------------------------------
----------------------------------------------------ELIMINADA ALIMENTOS-----------------------------------------------------
--updated
CREATE TABLE Porcion_Alimentos(
		
	peso INTEGER NOT NULL,
	porcion_diaria INTEGER NOT NULL,

	CONSTRAINT "alimentospk" PRIMARY KEY(peso)
); 
-------------------------------------------------------FIN TABLA NUEVA------------------------------------------------------

CREATE TABLE Razas(
	cod_raza INTEGER NOT NULL,	
	nombre_raza varchar(255) NOT NULL,	
	desc_raza varchar(255) NOT NULL,
	pais_origen varchar(255) NOT NULL,	
	nivel_intel dom_inteligencia NOT NULL,
	contextura_fuerte dom_contextura NOT NULL,
	altura_min INTEGER NOT NULL,
	altura_max INTEGER NOT NULL,
	talla dom_talla NOT NULL,
	color_pelaje varchar(255) NOT NULL,
	cod_animal INTEGER NOT NULL,
	peso_alimento INTEGER NOT NULL,

	CONSTRAINT "razaspk" PRIMARY KEY(cod_raza),
	CONSTRAINT "razasfk1" FOREIGN KEY(cod_animal) REFERENCES Animales(cod_animal) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "razasfk2" FOREIGN KEY(peso_alimento) REFERENCES Porcion_Alimentos(peso) ON UPDATE CASCADE ON DELETE RESTRICT
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------


CREATE TABLE Proveedores(
	RIF_prov VARCHAR(250) NOT NULL,
	nombre_prov varchar(250) NOT NULL,
	direccion_prov varchar(250) NOT NULL,
	tlf_prov varchar(250) NOT NULL,
	movil_prov varchar(250) NOT NULL,
	contacto_prov varchar(250) NOT NULL,
	
	CONSTRAINT "proveedorespk" PRIMARY KEY (RIF_prov)
);


--updated
CREATE TABLE Veterinarios(
	cedula_vet dom_cedula NOT NULL,
	nombre_vet VARCHAR(250) NOT NULL,
	telefono_vet VARCHAR(250) NOT NULL,

	CONSTRAINT "veternariospk" PRIMARY KEY(cedula_vet)
);

	
--updated
CREATE TABLE Responsables(
	cedula_resp dom_cedula NOT NULL,
	nombre_resp VARCHAR(250) NOT NULL,
	correo_resp VARCHAR(250) NOT NULL,

	CONSTRAINT "responsablespk" PRIMARY KEY(cedula_resp)
);


--updated
CREATE TABLE Telefonos_responsables(
	cedula_resp dom_cedula NOT NULL,
	telefono_resp varchar(255) NOT NULL,

	CONSTRAINT "telefonosresponsablespk" PRIMARY KEY(cedula_resp,telefono_resp),
	CONSTRAINT "telefonosrespfk1" FOREIGN KEY(cedula_resp) REFERENCES Responsables(cedula_resp) ON UPDATE CASCADE ON DELETE RESTRICT
);


--updated
CREATE TABLE Enfermedades(
	cod_animal INTEGER NOT NULL,
	cod_enf INTEGER NOT NULL,
	nombre_enf VARCHAR(250) NOT NULL,
	desc_enf VARCHAR(250) NOT NULL,
	gravedad dom_gravedad NOT NULL,

	CONSTRAINT "enfermedadespk" PRIMARY KEY(cod_animal,cod_enf),
	CONSTRAINT "enfermedadesfk1" FOREIGN KEY(cod_animal) REFERENCES Animales(cod_animal) ON UPDATE CASCADE ON DELETE CASCADE
);


---------------------------------------------------------MODIFICADO---------------------------------------------------------
--updated
CREATE TABLE Productos(
	cod_prod INTEGER NOT NULL,
	nombre_prod VARCHAR(250) NOT NULL,
	desc_prod VARCHAR(250) NOT NULL,
	precio_venta integer NOT NULL,  /* precio de venta a los clientes */
	tipo_prod VARCHAR NOT NULL,
	cant_minima INTEGER NOT NULL CHECK (cant_minima  > 0), --- NUEVO
	cant_reorden INTEGER NOT NULL CHECK (cant_reorden > 0), -- NUEVO

	CONSTRAINT "productospk" PRIMARY KEY(cod_prod),
	CONSTRAINT "productosval1" CHECK (tipo_prod IN('M','A','V')) --MERCANCIA, ALIMENTO, VACUNA
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------

--updated
CREATE TABLE Ordenes(
	RIF_branch VARCHAR(250) NOT NULL,
	cod_compra INTEGER NOT NULL,
	fecha_compra date NOT NULL,
	RIF_prov VARCHAR(250) NOT NULL,
	monto_total INTEGER NOT NULL,

	CONSTRAINT "ordenespk" PRIMARY KEY(RIF_branch,cod_compra),
	CONSTRAINT "ordenesfk1" FOREIGN KEY(RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "ordenesfk2" FOREIGN KEY(RIF_prov) REFERENCES Proveedores(RIF_prov) ON UPDATE CASCADE ON DELETE CASCADE
);






---------------------------------------------------------MODIFICADO---------------------------------------------------------
--updated
CREATE TABLE Vacunas(
	cod_vac INTEGER NOT NULL,
	cod_enf INTEGER NOT NULL,
	cod_animal INTEGER NOT NULL,
	frecuencia VARCHAR(250) NOT NULL,
	unidad_medida VARCHAR(250) NOT NULL,

	CONSTRAINT "vacunaspk" PRIMARY KEY(cod_vac),
	CONSTRAINT "vacunasfk1" FOREIGN KEY(cod_enf,cod_animal) REFERENCES Enfermedades(cod_enf,cod_animal) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "vacunasfk2" FOREIGN KEY(cod_vac) REFERENCES Productos(cod_prod) ON UPDATE CASCADE ON DELETE RESTRICT
);


--updated
CREATE TABLE Inventarios(
	
	RIF_branch VARCHAR(250) NOT NULL,
	cod_ajuste INTEGER NOT NULL, ---------------------------------- ATRIBUTO NUEVO
	cod_prod INTEGER NOT NULL,
	fecha_ajuste DATE NOT NULL,
	existencia INTEGER NOT NULL CHECK (existencia > 0),

	CONSTRAINT "inventariosok" PRIMARY KEY(RIF_branch,cod_ajuste,cod_prod), -------- NEW PK
	CONSTRAINT "inventariosfk1" FOREIGN KEY(RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "inventariosfk2" FOREIGN KEY(cod_prod) REFERENCES Productos(cod_prod) ON UPDATE CASCADE ON DELETE CASCADE
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------



--updated
CREATE TABLE Productos_Ordenados(
	RIF_branch VARCHAR(250) NOT NULL,
	cod_compra INTEGER NOT NULL,
	cod_prod INTEGER NOT NULL,
	cantidad INTEGER NOT NULL,

	CONSTRAINT "popk" PRIMARY KEY (RIF_branch,cod_compra,cod_prod),
	CONSTRAINT "pofk2" FOREIGN KEY(cod_prod) REFERENCES Productos(cod_prod) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "pofk3" FOREIGN KEY(RIF_branch,cod_compra) REFERENCES Ordenes(RIF_branch,cod_compra) ON UPDATE CASCADE ON DELETE CASCADE
);

---------------------------------------------------------MODIFICADO---------------------------------------------------------
--updated
CREATE TABLE Mascotas(
	cod_masc INTEGER NOT NULL,
	nombre_masc VARCHAR(20) NOT NULL, ----- AGREGADO
	cedula_resp dom_cedula NOT NULL,
	edad INTEGER Not null,
	sexo dom_sexo NOT NULL,
	peso INTEGER NOT NULL,
	cod_raza INTEGER NOT NULL,
	cedula_vet dom_cedula  NOT NULL, ----- AGREGADO
    

	CONSTRAINT "mascotaspk" PRIMARY KEY(cod_masc),
	CONSTRAINT "mascotasfk1" FOREIGN KEY(cedula_resp) REFERENCES Responsables(cedula_resp) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "mascotasfk2" FOREIGN KEY(cod_raza) REFERENCES Razas(cod_raza) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "mascotasfk3" FOREIGN KEY(cedula_vet) REFERENCES Veterinarios(cedula_vet) ON UPDATE CASCADE ON DELETE CASCADE ----- AGREGADO
	
);

-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------

--updated
CREATE TABLE Mascotas_x_Vacunas(
	cedula_resp dom_cedula NOT NULL,
	cod_masc INTEGER NOT NULL,
	cod_vac INTEGER NOT NULL,
	fec_aplicacion DATE NOT NULL,
	dosis INTEGER NOT NULL,

	CONSTRAINT "mxvpk" PRIMARY KEY(cod_masc,cod_vac,fec_aplicacion),
	CONSTRAINT "mxvfk1" FOREIGN KEY(cedula_resp) REFERENCES Responsables(cedula_resp) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "mxvfk2" FOREIGN KEY(cod_masc) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "mxvfk3" FOREIGN KEY(cod_vac) REFERENCES Vacunas(cod_vac) ON UPDATE CASCADE ON DELETE CASCADE
);

---------------------------------------------------------MODIFICADO---------------------------------------------------------
--updated // removidas cedulas de responsables como pk
CREATE TABLE Relaciones_Mascotas(
	cod_masc1 INTEGER NOT NULL, 
	cod_masc2 INTEGER NOT NULL,
	desc_relacion VARCHAR(250) NOT NULL, --Relacion de mascota1 a mascota2 ej: Fluffy(m1) es Padre(rel) de Spike(m2)

	CONSTRAINT "rmpk" PRIMARY KEY(cod_masc1,cod_masc2),
	CONSTRAINT "rmfk2" FOREIGN KEY(cod_masc1) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "rmfk4" FOREIGN KEY(cod_masc2) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE CASCADE
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------

--updated
CREATE TABLE Fichas_Registro(
	RIF_branch VARCHAR(250) NOT NULL,
    cod_ficha INTEGER  NOT NULL, 
    cod_masc INTEGER NOT NULL , 
    cod_serv INTEGER  NOT NULL, 
    id_autorizado INTEGER NOT NULL, 
    fec_entrada date NOT NULL,  
    hora_entrada TIME NOT NULL, 
	fec_salida_estimada DATE NOT NULL,
    hora_salida_estimada time NOT NULL, 
    fec_salida_real date ,
	hora_salida_real TIME ,
    
    CONSTRAINT "fichasregistropk" PRIMARY KEY(RIF_branch,cod_ficha),
	CONSTRAINT "fichasregistrofk2" FOREIGN KEY(cod_masc) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "fichasregistrofk3" FOREIGN KEY(cod_serv,RIF_branch) REFERENCES Servicios(cod_serv,RIF_branch) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "fichasregistrofk4" FOREIGN KEY(id_autorizado) REFERENCES Personal(ID_personal) ON UPDATE CASCADE ON DELETE RESTRICT
);






-------------------------------------------------------MODIFICADO PK--------------------------------------------------------
--updated
CREATE TABLE Ordenes_Uso(
	cod_orden INTEGER CHECK (cod_orden>0) NOT NULL,
	RIF_branch VARCHAR(250) NOT NULL,
	cod_ficha INTEGER CHECK (cod_ficha>0) NOT NULL,
	fecha_uso date NOT NULL,
	producto_usado INTEGER NOT NULL,	
	cant_usada INTEGER CHECK (cant_usada>=0) NOT NULL,
    cod_ajuste INTEGER NOT NULL,
 	CONSTRAINT "ordenesusopk" PRIMARY KEY (RIF_branch,cod_orden),
	CONSTRAINT "ordenesusofk1" FOREIGN KEY (RIF_branch,cod_ajuste,producto_usado) REFERENCES Inventarios(RIF_branch,cod_ajuste,cod_prod) ON UPDATE CASCADE ON DELETE RESTRICT,	
    CONSTRAINT "ordenesusofk2" FOREIGN KEY (RIF_Branch,cod_ficha) REFERENCES Servicios(RIF_Branch,cod_serv) ON UPDATE CASCADE ON DELETE RESTRICT
	
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------

--updated
CREATE TABLE Proveedores_x_Productos (
    RIF_branch VARCHAR(250) NOT NULL,
	RIF_prov VARCHAR(250)  NOT NULL,  
    cod_prod INTEGER  NOT NULL,
    costo_unitario INTEGER NOT NULL, /* costo de compra al proveedor*/

	CONSTRAINT "ppppk" PRIMARY KEY(RIF_branch,RIF_prov,cod_prod),
	CONSTRAINT "pppfk1" FOREIGN KEY(RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "pppfk2" FOREIGN KEY(RIF_prov) REFERENCES Proveedores(RIF_prov) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "pppfk3" FOREIGN KEY(cod_prod) REFERENCES Productos(cod_prod) ON UPDATE CASCADE ON DELETE RESTRICT
);

-------------------------------------------------------MODIFICADO----------------------------------------------------------
--updated
CREATE TABLE Facturas_Servicios (
    num_factura_serv INTEGER  NOT NULL, 
    RIF_branch VARCHAR(250) NOT NULL,
	cod_serv INTEGER NOT NULL,
    cedula_resp INTEGER NOT NULL, 
    fecha_reservacion DATE NOT NULL,
	fecha_actividad DATE NOT NULL, 
	monto_abonado INTEGER  NOT NULL, 
    monto_reserva INTEGER  NOT NULL, 
    cod_masc INTEGER  NOT NULL,

	CONSTRAINT "facturasserviciospk" PRIMARY KEY(RIF_branch,num_factura_serv),
	
	CONSTRAINT "facturasserviciosfk2" FOREIGN KEY(cedula_resp) REFERENCES Responsables(cedula_resp) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "facturasserviciosfk3" FOREIGN KEY(RIF_branch,cod_serv) REFERENCES Servicios(RIF_branch,cod_serv) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "facturasserviciosfk4" FOREIGN KEY(cod_masc) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE CASCADE
);
-------------------------------------------------------FIN MODIFICADO-------------------------------------------------------

--updated
CREATE TABLE Servicios_Solicitados_x_Cliente(
	RIF_branch VARCHAR(250),
    num_factura_serv INTEGER NOT NULL,
	cod_serv INTEGER NOT NULL,
    cod_actividad INTEGER NOT NULL,

	CONSTRAINT "ssxcpk" PRIMARY KEY(RIF_branch,num_factura_serv,cod_serv,cod_actividad),
	CONSTRAINT "ssxcfk2" FOREIGN KEY(RIF_branch,num_factura_serv) REFERENCES Facturas_Servicios(RIF_branch,num_factura_serv) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "ssxcfk4" FOREIGN KEY(cod_serv,cod_actividad) REFERENCES Actividades(cod_serv,cod_actividad) ON UPDATE CASCADE ON DELETE RESTRICT

);




--updated
CREATE TABLE Facturas_Tiendas(
    RIF_branch VARCHAR(250) NOT NULL,
	num_factura_tienda INTEGER NOT NULL , 
    cedula_resp INTEGER NOT NULL,
    fecha_compra DATE NOT NULL,
	monto_final INTEGER NOT NULL,

	CONSTRAINT "facturastiendaspk" PRIMARY KEY(RIF_branch,num_factura_tienda),
	CONSTRAINT "facturastiendasfk1" FOREIGN KEY(RIF_branch) REFERENCES Franquicias(RIF_branch) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "facturastiendasfk2" FOREIGN KEY(cedula_resp) REFERENCES Responsables(cedula_resp) ON UPDATE CASCADE ON DELETE RESTRICT
);

--updated
CREATE TABLE Productos_Comprados_x_Cliente(
	RIF_branch VARCHAR(250) NOT NULL,
    num_factura_tienda INTEGER NOT NULL,
    cod_prod INTEGER NOT NULL,
    cantidad_comprada INTEGER NOT NULL,

	CONSTRAINT "pcxcpk" PRIMARY KEY(RIF_branch,num_factura_tienda,cod_prod),
	CONSTRAINT "pcxcfk1" FOREIGN KEY(RIF_branch,num_factura_tienda) REFERENCES Facturas_Tiendas(RIF_branch,num_factura_tienda) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT "pcxcfk2" FOREIGN KEY(cod_prod) REFERENCES Productos(cod_prod) ON UPDATE CASCADE ON DELETE RESTRICT
);

-------------------------------------------------------MODIFICADO-------------------------------------------------------
--updated
CREATE TABLE Modalidad_Pago(
    RIF_branch VARCHAR(250) NOT NULL, 
    num_factura_serv INTEGER NOT NULL,
	numero_pago INTEGER  CHECK (numero_pago >= 0 AND numero_pago <= 2) NOT NULL,
    metodo VARCHAR(250) CHECK (metodo  in ( 'DEBITO','CREDITO','CHEQUE','EFECTIVO')) NOT NULL, --NOMBRE DE ATRIBUTO MODIFICADO // SOLIA SER 'modalidad'
    tipo_pago VARCHAR(250) CHECK  (tipo_pago in ('COMPLETO','PARCIAL') ) NOT NULL,
    monto INTEGER NOT NULL,
	fecha_pago DATE NOT NULL,
	numtarjetacheque VARCHAR(255),
	banco VARCHAR(255) ,

	CONSTRAINT "modalidadpagopk" PRIMARY KEY(RIF_branch,num_factura_serv,numero_pago),
	CONSTRAINT "modalidadpagofk1" FOREIGN KEY(RIF_branch,num_factura_serv) REFERENCES Facturas_Servicios(RIF_branch,num_factura_serv) ON UPDATE CASCADE ON DELETE RESTRICT
);


CREATE TABLE Enfermedades_x_mascotas (
    cod_masc INTEGER NOT NULL,
	cod_enf INTEGER NOT NULL,
	cod_animal INTEGER ,
	fecha_diagnostico DATE NOT NULL, 
    
    CONSTRAINT "enfermedadesmascotaspk" PRIMARY KEY(cod_masc,cod_enf,fecha_diagnostico), 
	CONSTRAINT "enfermedadesmascotasFK1" FOREIGN KEY(cod_enf,cod_animal) REFERENCES Enfermedades(cod_enf,cod_animal) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "enfermedadesmascotasFK2" FOREIGN KEY(cod_masc) REFERENCES Mascotas(cod_masc) ON UPDATE CASCADE ON DELETE CASCADE
);
-----------------------------------------------------FIN MODIFICADO-----------------------------------------------------









