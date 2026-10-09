# Práctica de POO

📅 Fecha: [08/10/2026]

## 📄 Contenido del Repositorio

Este repositorio es una práctica compuesta por cinco problemas desarrollados en PHP, correspondientes a la unidad de Programación Orientada a Objetos (POO). Incluye ejercicios de herencia, métodos estáticos con `static` y `self`, clases finales, una clase para calcular el área y el perímetro de un círculo, y una jerarquía de clases con `Persona`, `Estudiante` y `Docente`.

## 🛠️ Tecnologías Utilizadas

- **Lenguaje:** PHP 8.3.28 (Programación Orientada a Objetos)
- **Servidor local:** WampServer 3.4.0 (Apache 2.4.65)
- **Editor:** Visual Studio Code
- **Control de versiones:** Git / GitHub

## 🖥️ Capturas de Pantalla y Problemas

### Interfaz Principal

- **Problema #1 - Herencia (`problema1.php`):** la clase `Coche` define el atributo protegido `$color` con los métodos `setColor()`, `getColor()` y `printCaracteristicas()`. La clase `CocheDeLujo` hereda de `Coche`, agrega el atributo `$extras` y sobrescribe `printCaracteristicas()` para mostrar el color y los extras.
<!-- Pega aquí la captura del Problema #1 -->

- **Problema #2 - `static` y `self` (`problema2.php`):** ejemplo de *Late Static Binding* con las clases `A` y `B`. Al usar `static::` el método se resuelve en la clase desde donde se llamó (muestra `B`), mientras que con `self::` se resuelve en la clase donde fue escrito (muestra `A`).
<!-- Pega aquí la captura del Problema #2 -->

- **Problema #3 - Clase final (`problema3.php`):** con `final class Coche` se impide que la clase sea heredada. Si otra clase intenta extenderla, PHP genera un error fatal.
<!-- Pega aquí la captura del Problema #3 -->

- **Problema #4 - Círculo (`problema4.php`):** clase `Circulo` que recibe el radio en el constructor y calcula el área (`π × radio²`) y el perímetro (`2 × π × radio`) usando la constante `M_PI`. Los resultados se muestran con `number_format()`.
<!-- Pega aquí la captura del Problema #4 -->

- **Problema #5 - Persona, Estudiante y Docente (`problema5.php`):** la clase base `Persona` tiene `nombre`, `apellido` y `fechaNacimiento`. Las clases `Estudiante` y `Docente` heredan de ella y agregan sus propios datos (código, índice académico, cohorte, estado y modalidad para el estudiante; código, departamento, categoría, máximo título y tipo de contratación para el docente).
<!-- Pega aquí la captura del Problema #5 -->

## 📁 Estructura de Carpetas o Directorios

```
practica-poo/
├── problema1.php        # Problema 1: herencia con Coche y CocheDeLujo
├── problema2.php        # Problema 2: static vs self (Late Static Binding)
├── problema3.php        # Problema 3: clase final
├── problema4.php        # Problema 4: clase Circulo (área y perímetro)
├── Persona.php          # Problema 5: clase base Persona
├── Estudiante.php       # Problema 5: clase Estudiante (hereda de Persona)
├── Docente.php          # Problema 5: clase Docente (hereda de Persona)
├── problema5.php        # Problema 5: prueba de las clases
└── README.md            # Documentación del proyecto
```

## ▶️ Instrucciones de Ejecución / Uso

1. Clonar el repositorio.
2. Copiar la carpeta del proyecto dentro de `C:\wamp64\www\` (o la carpeta `htdocs` de tu servidor local).
3. Iniciar WampServer y verificar que Apache esté activo (ícono en verde).
4. Abrir el navegador y acceder a cada archivo, por ejemplo:
   - `http://localhost/practica-poo/problema1.php`
   - `http://localhost/practica-poo/problema2.php`
   - `http://localhost/practica-poo/problema3.php`
   - `http://localhost/practica-poo/problema4.php`
   - `http://localhost/practica-poo/problema5.php`

## 👤 Autor y Contexto

- **Nombre:** René
- **Institución:** Universidad Tecnológica de Panamá (UTP)
- **Fecha de Realización:** [08/10/2026]

## 🔗 Referencias

- Documento del curso: "Realizar la Práctica de POO"
- Documentación oficial de PHP: https://www.php.net/manual/es/language.oop5.php
