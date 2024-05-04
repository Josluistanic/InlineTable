<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Edición inline (edición integrada)

Un componente de edición integrada permite a los usuarios cambiar entre la vista de solo lectura (read-only) y la de edición de:

- Listas de descripción
- Elementos de texto de una página
- Tablas

La edición inline le ahorra al usuario abrir un modal o ir a una página de edición

### Cuándo usar

1. Cuando **todos** los elementos se pueden ver en la fila o en la fila expandida
2. Cuando la información necesita ser actualizada constantemente

### Cuándo **no** usar

1. Cuando la edición es la función principal de la vista

<sub>Traducido de [PatterFly](https://www.patternfly.org/components/inline-edit/) </sub>

## Tabla con edición integrada - TALL stack

Basándome en el componente que muestra el canal de Laravel Daily en el [video del 20 de febrero de 2021](https://www.youtube.com/watch?v=N9r_Rhumr80)

Hice un vídeo que explica la lógica general para poder ser aplicada en cualquier lenguaje y el código en un componente de [Livewire 3](https://livewire.laravel.com)

### Lógica

Tenemos un arreglo indexado que llena una tabla, cada `td` de la tabla contiene un `span` que, al hacer clic sobre él, dispara un `setter` que define una propiedad `currentEditedField` que contiene el índice del item que estamos editando concatenado al nombre de la propiedad.

Dentro de cada `td` tenemos una condicional que verifica si el `currentEditedField` es igual al índice concatenado al nombre de la propiedad que estamos editando y, en caso de serlo, en lugar de mostrar el `span` muestra el elemento que nos permita editar (input:checkbox, input:text, select, entre otros)

El componente/etiqueta/tag mostrado en la vista de edición escucha los eventos que consideremos necesarios (clic fuera, enter, ctrl+enter) y al recibirlo entonces dispara un método/función que valida, guarda y vuelve a colocar `currentEditedField` en `null`

### Componente

En este caso estamos trabajando con TALL stack así que creamos un componente `EnergyDrinksTable` de Livewire 3 con su respectiva [vista](resources\views\livewire\energy-drinks-table.blade.php) y [clase](app/Livewire/EnergyDrinksTable.php) que utilize AlpineJS para "escuchar" el clic fuera del elemento de edición y disparar el método de guardado, para todo lo demás utilizamos Livewire
