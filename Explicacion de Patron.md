# Modelo Vista Controlador

Es un patrón de arquitectura de software, que separa los datos y la lógica de negocio de una aplicación de su representación y el módulo encargado de gestionar los eventos y las comunicaciones.

## Modelo

Es la representación de la información con la cual el sistema opera, por lo tanto gestiona todos los accesos a dicha información, tanto consultas como actualizaciones, implementando también los privilegios de acceso que se hayan descrito en las especificaciones de la aplicación.

## Vista

Presenta el 'modelo' en un formato adecuado para interactuar, por tanto requiere de dicho 'modelo' la información que debe representar como salida.


## Controlador

Responde a eventos (usualmente acciones del usuario) e invoca peticiones al 'modelo' cuando se hace alguna solicitud sobre la información (por ejemplo, editar un documento o un registro en una base de datos).


## Ventajas

  - La implementación se realiza de forma modular.
  - Sus vistas muestran información actualizada siempre. El programador no debe preocuparse de solicitar que las vistas se actualicen, ya     que este proceso es realizado automáticamente por el modelo de la aplicación.
  - Cualquier modificación que afecte al dominio, como aumentar métodos o datos contenidos, implica una modificación sólo en el modelo y       las interfaces del mismo con las vistas, no todo el mecanismo de comunicación y de actualización entre modelos.
  - Las modificaciones a las vistas no afectan al modelo de dominio, simplemente se modifica la representación de la información, no su       tratamiento.
  - MVC esta demostrando ser un patrón de diseño bien elaborado pues las aplicaciones que lo implementan presentan una extensibilidad y       una mantenibilidad únicas comparadas con otras aplicaciones basadas en otros patrones.

## Desventajas
  - Para desarrollar una aplicación bajo el patrón de diseño MVC es necesario una mayor dedicación en los tiempos iniciales del             desarrollo. Normalmente el patrón exige al programador desarrollar un mayor número de clases que, en otros entornos de desarrollo,       no   son necesarias. Sin embargo, esta desventaja es muy relativa ya que posteriormente, en la etapa de mantenimiento de la             aplicación, una aplicación MVC es mucho más mantenible, extensible y modificable que una aplicación que no lo implementa.
  - MVC requiere la existencia de una arquitectura inicial sobre la que se deben construir clases e interfaces para modificar y             comunicar los módulos de una aplicación. Esta arquitectura inicial debe incluir, por lo menos, un mecanismo de eventos para poder       proporcionar las notificaciones que genera el modelo de aplicación; una clase Modelo, otra clase Vista y una clase Controlador           genéricas que realicen todas las tareas de comunicación, notificación y actualización que serán luego transparentes para el             desarrollo de la aplicación.
  - MVC es un patrón de diseño orientado a objetos por lo que su implementación es sumamente costosa y difícil en lenguajes que no           siguen este paradigma.
  
  
  ## Referencias
  
    - Junta de Andalucía.Patrón Modelo Vista      Controlador.http://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/122#Ventajas_y_desventajas_del_uso_del_patron.
    - Wikipedia.Modelo-vista-controlador.https://es.wikipedia.org/wiki/Modelo%E2%80%93vista%E2%80%93controlador.
    - Towards Data Science.10 Common Software Architectural Patterns in a nutshell.https://towardsdatascience.com/10-common-software-architectural-patterns-in-a-nutshell-a0b47a1e9013.
