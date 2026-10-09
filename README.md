# Práctica de POO

📅 Fecha: [08/10/2026]

## 📄 Contenido del Repositorio

Este repositorio es una práctica compuesta por cinco problemas desarrollados en PHP, correspondientes a la unidad de Programación Orientada a Objetos (POO). Incluye ejercicios de herencia, métodos estáticos con `static` y `self`, clases finales, una clase para calcular el área y el perímetro de un círculo, y una jerarquía de clases con `Persona` y `Estudiante`.

## 🛠️ Tecnologías Utilizadas

- **Lenguaje:** PHP 8.3.28 (Programación Orientada a Objetos)
- **Servidor local:** WampServer 3.4.0 (Apache 2.4.65)
- **Editor:** Visual Studio Code
- **Control de versiones:** Git / GitHub

## 🖥️ Capturas de Pantalla y Problemas

### Interfaz Principal

- **Problema #1 - Herencia (`Problema_1/`):** la clase `Coche` (`Coche.php`) define el atributo protegido `$color` con los métodos `setColor()`, `getColor()` y `printCaracteristicas()`. La clase `CocheDeLujo` (`CocheDeLujo.php`) hereda de `Coche`, agrega el atributo `$extras` y sobrescribe `printCaracteristicas()` para mostrar el color y los extras. Se prueba con `index.php` y `prueba.php`.
<img width="2087" height="357" alt="image" src="https://github.com/user-attachments/assets/3bc36397-938a-481f-ba00-5377db638b7c" />

- **Problema #2 - `static` y `self` (`Problema_2/ejemplo_late_static_binding.php`):** ejemplo de *Late Static Binding* con las clases `A` y `B`. Al usar `static::` el método se resuelve en la clase desde donde se llamó (muestra `B`), mientras que con `self::` se resuelve en la clase donde fue escrito (muestra `A`).
<img width="682" height="122" alt="image" src="https://github.com/user-attachments/assets/60c997bb-b740-4204-aa76-c499779754ca" />
<img width="480" height="110" alt="image" src="https://github.com/user-attachments/assets/2ba5eb7c-d93a-4188-a0f2-acc83cd5d944" />


- **Problema #3 - Clase final (`Problema_3/`):** con `final class Coche` (`Coche.php`) se impide que la clase sea heredada. `ejemplo_correcto.php` muestra el uso normal de la clase y `ejemplo_error.php` intenta extenderla, lo que genera un error fatal en PHP.
<img width="440" height="135" alt="image" src="https://github.com/user-attachments/assets/d9dab0fc-b4c3-43f4-91fc-b12657c4c3d5" />
<img width="3267" height="470" alt="image" src="https://github.com/user-attachments/assets/6a163ec6-31a5-462e-a979-6fc467085966" />


- **Problema #4 - Círculo (`Problema_4/Circulo.php`):** clase `Circulo` que recibe el radio en el constructor y calcula el área (`π × radio²`) y el perímetro (`2 × π × radio`) usando la constante `M_PI`. Los resultados se muestran con `number_format()`.
<img width="712" height="205" alt="image" src="https://github.com/user-attachments/assets/e3ae46d4-352b-4db8-b00d-2a1bea512856" />

- **Problema #5 - Persona y Estudiante (`Problema_5/`):** la clase base `Persona` (`Persona.php`) tiene `nombre`, `apellido` y `fechaNacimiento`. La clase `Estudiante` (`Estudiante.php`) hereda de ella y agrega sus propios datos (código, índice académico, cohorte, estado y modalidad). Se prueba con `prueba.php`.
<img width="580" height="202" alt="image" src="https://github.com/user-attachments/assets/0a3eb581-8092-4551-9623-0aa0523d8b50" />


## 📁 Estructura de Carpetas o Directorios

```
practica-poo/
├── Problema_1/
│   ├── Coche.php                          # Clase base Coche
│   ├── CocheDeLujo.php                    # Clase hija CocheDeLujo (hereda de Coche)
│   ├── index.php                          # Página principal del problema
│   └── prueba.php                         # Prueba de las clases
├── Problema_2/
│   └── ejemplo_late_static_binding.php    # static vs self (Late Static Binding)
├── Problema_3/
│   ├── Coche.php                          # Clase Coche declarada como final
│   ├── ejemplo_correcto.php               # Uso correcto de la clase final
│   └── ejemplo_error.php                  # Intento de heredar una clase final (error)
├── Problema_4/
│   └── Circulo.php                        # Clase Circulo (área y perímetro)
├── Problema_5/
│   ├── Persona.php                        # Clase base Persona
│   ├── Estudiante.php                     # Clase Estudiante (hereda de Persona)
│   └── prueba.php                         # Prueba de las clases
└── README.md                              # Documentación del proyecto
```

## ▶️ Instrucciones de Ejecución / Uso

1. Clonar el repositorio.
2. Copiar la carpeta del proyecto dentro de `C:\wamp64\www\` (o la carpeta `htdocs` de tu servidor local).
3. Iniciar WampServer y verificar que Apache esté activo (ícono en verde).
4. Abrir el navegador y acceder a cada archivo, por ejemplo:
   - `http://localhost/practica-poo/Problema_1/index.php`
   - `http://localhost/practica-poo/Problema_2/ejemplo_late_static_binding.php`
   - `http://localhost/practica-poo/Problema_3/ejemplo_correcto.php`
   - `http://localhost/practica-poo/Problema_3/ejemplo_error.php`
   - `http://localhost/practica-poo/Problema_4/Circulo.php`
   - `http://localhost/practica-poo/Problema_5/prueba.php`

## 👤 Autor y Contexto

- **Nombre:** René
- **Institución:** Universidad Tecnológica de Panamá (UTP)
- **Fecha de Realización:** [08/10/2026]

## 🔗 Referencias

- Documento del curso: "Realizar la Práctica de POO"
- Documentación oficial de PHP: https://www.php.net/manual/es/language.oop5.php
