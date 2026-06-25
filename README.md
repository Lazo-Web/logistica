# 🚚 Sistema de Logística

Sistema web desarrollado en **Laravel** para la gestión de procesos logísticos, incluyendo administración de viajes, rutas, clientes y control operativo.

---

## 📌 Descripción

Este proyecto tiene como objetivo optimizar la gestión logística mediante una plataforma web que permite:

* Administración de clientes
* Gestión de cargas y descargas
* Control de rutas y entregas
* Seguimiento de operaciones
* Panel administrativo

---

## 🛠️ Tecnologías utilizadas

* Laravel (Framework PHP)
* PHP 8+
* MySQL / MariaDB
* Node.js + NPM
* Vite (frontend assets)
* Bootstrap / Tailwind (según implementación)

---

## ⚙️ Requisitos del sistema

Antes de instalar, asegúrate de tener:

* PHP >= 8.1
* Composer
* Node.js >= 16
* MySQL o MariaDB
* Git

---

## 🚀 Instalación del proyecto

Clona el repositorio:

```bash
git clone https://bitbucket.org/usuario/repositorio.git
cd repositorio
```

Instala dependencias PHP:

```bash
composer install
```

Instala dependencias frontend:

```bash
npm install
npm run dev
```

Configura el entorno:

```bash
cp .env.example .env
```

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

Configura la base de datos en el archivo `.env`:

```env
DB_DATABASE=nombre_base_datos
DB_USERNAME=root
DB_PASSWORD=
```

Ejecuta migraciones:

```bash
php artisan migrate
```

Inicia el servidor:

```bash
php artisan serve
```

---

## 📂 Estructura del proyecto

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

## 🔐 Variables de entorno importantes

* APP_NAME
* APP_ENV
* APP_KEY
* APP_URL
* DB_DATABASE
* DB_USERNAME
* DB_PASSWORD

---

## 📦 Funcionalidades principales

* Gestión de usuarios y roles
* Registro de viajes
* Seguimiento de cargas y descargas
* Administración de rutas
* Panel administrativo

---

## 👨‍💻 Autor

Desarrollado por **Horacio Lazo**

---

## 📄 Licencia

Este proyecto es de uso privado o académico. Todos los derechos reservados.
