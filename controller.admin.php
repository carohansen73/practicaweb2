<?php
/*
es el  recibe el llamado de las funciones del router 
(acciones de admin el router la dirige al controller.admin)

agregar ciudad (recibo x post, chequeo empty,isset, llamo model pasando x param la info y lo paso a la vista)
eliminar ciudad (llamo al model, func eliminarCiudad, paso x param el id)
modificar ciudad (model->get(id) obtengo ciudad a actualizar. )
actualizar ciudad (recibo datos actualizados x post, verifico, si es correcto llamo func. actualizar en model
                    paso datos x param.)

agregar centro (recibo x post, chequeo empty,isset, llamo model pasando x param la info)
eliminar centro (llamo al model, func eliminarCentro, paso x param el id)
modificar centro