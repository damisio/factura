# factura
#1. CREAMOS PROYECTO
composer create-project laravel/laravel blog "5.1.*"

#2. CREAMOS EL ACCESO A BD
Host: localhos
database : factura
username: root
Pass : *****


#3.- CREAR LA MIGRACION 
Creamos una tabla 

php artisan make:migration create_table_TBLMfactura --create=TBLMfactura
------------------------------------------------------------------------
Schema::create('TBLMAfactura', function (Blueprint $table) {
	$table->increments('idFactura');
	$table->string('descripcion',100);
	$table->integer('precio');
	$table->timestamps();
});


php artisan make:migration create_table_TBLVI_DetalleFactura --create=TBLVI_DetalleFactura
------------------------------------------------------------------------------------------
Schema::create('TBLVI_DetalleFactura', function (Blueprint $table) {
	$table->integer('idFactura');
	$table->string('descripcion',100);
	$table->double('precio_unitario');
	$table->timestamps();
});

#4. CREAMOS UN MODELO
--------------------
/app/Factura.php
php artisan make:model Factura

#5. CREAMOS UN CONTROLADOR
--------------------------
app/Http/Controller
php artisan make:controller FacturaController

#6. ENRUTAMOS 
---------------
Route::get('factura',FacturaController@index');
Route::get('factura/{id}', 'FacturaController@show');
