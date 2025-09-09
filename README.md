# ToCupboard-Sprint2
Repositorio académico del Sprint 2 – Proyecto ToCupboard. Contiene el sitio WordPress, integración de API, simulación de pasarela de pagos y documentación DevSecOps.

#  Proyecto ToCupboard – Sprint 2  

Repositorio académico del **Sprint 2** del proyecto *ToCupboard*.  
Contiene el desarrollo de un sitio web en **WordPress**, integración de **llamadas API**, simulación de una **pasarela de pagos** y la aplicación del modelo **DevSecOps**.  

---

##  Contenido del Repositorio  

- **wordpress/** → Archivos de WordPress (tema, plugins y configuración).  
- **api/** → Ejemplos de llamadas a una API (PHP/JS).  
- **docs/** → Documentación del proyecto (Informe Técnico, capturas de evidencias, backlog).  
- **README.md** → Este documento.  

---

##  Instalación y Ejecución  

1. Instala **XAMPP** o un entorno con Apache + MySQL + PHP.  
2. Clona este repositorio:  
   ```bash
   git clone https://github.com/MiltonBasante22/ToCupboard-Sprint2.git
Copia la carpeta wordpress/ en el directorio htdocs/ de XAMPP.

Crea una base de datos en phpMyAdmin (ejemplo: tocupboard_db).

Configura las credenciales en wp-config.php.

Inicia Apache y MySQL desde el panel de XAMPP.

Abre en tu navegador:

arduino
Copiar código
http://localhost/wordpress/
🔗 Llamadas a la API
En la carpeta /api/ se incluyen dos ejemplos:

ejemplo_get_products.php

Realiza una petición a una API pública para obtener datos de productos.

Asegurada mediante HTTPS y validación de datos.

ejemplo_send_form.php

Envía información de un formulario a un endpoint de prueba.

Incluye token de autenticación en cabecera.

Simulación de Pasarela de Pagos
Implementación con WooCommerce en modo de pruebas:

PayPal Sandbox

Stripe Test Mode

Flujo:

Cliente selecciona producto.

Añade al carrito y procede al checkout.

Introduce datos de prueba.

Recibe confirmación de pago en entorno sandbox.

🔐 Seguridad y DevSecOps
✅ WordPress, temas y plugins actualizados.

✅ Configuración de HTTPS con certificado SSL.

✅ Plugin de seguridad (firewall y anti-spam).

✅ Tokens de pago en lugar de datos sensibles.

✅ Validación de entradas en formularios y API.

✅ Versionado en GitHub con CI/CD básico.

✅ Escaneo con WPScan para detectar vulnerabilidades.
