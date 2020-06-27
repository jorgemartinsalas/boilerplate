<?php

return [
    'global' => [
        'save' => 'Guardar',
        'close' => 'Cerrar',
        'action' => 'Acción',
        'sweet' => [
            'title' => '¿Estás seguro?',
            'text' => "¡No podrás revertir esto!",
            'confirm_delete' => '¡Sí, bórralo!',
        ],
    ],

    /**
     * Permiso
     */
    'permission' => [
        'add' => 'Agregar permiso',
        'edit' => 'Editar permiso',
        'title' => 'Gestión de permisos',
        'subtitle' => 'Lista de permisos',
        'fields' => [
            'name' => 'Permiso',
            'description' => 'Descripción',
            'plc_name' => 'Nombre del permiso',
            'plc_description' => 'Descripción para permiso',
        ],
        'msg' => [
            'msg_insert' => 'El permiso se ha agregado correctamente.',
            'msg_update' => 'La identificación del permiso {0} se ha modificado correctamente.',
            'msg_delete' => 'La identificación del permiso {0} se ha eliminado correctamente',
            'msg_get' => 'La identificación del permiso {0} se ha obtenido con éxito',
            'msg_get_fail' => 'La identificación del permiso {0} no se encontró o ya se eliminó',
        ],
    ],

    /**
     * Rol.
     */
    'role' => [
        'add' => 'Agregar rol',
        'edit' => 'Editar rol',
        'title' => 'Gestión de roles',
        'subtitle' => 'Lista de roles',
        'fields' => [
            'name' => 'Rol',
            'description' => 'Descripción',
            'plc_name' => 'Nombre del rol',
            'plc_description' => 'Descripción del rol',
        ],
        'msg' => [
            'msg_insert' => 'El rol se ha agregado correctamente.',
            'msg_update' => 'El ID de rol {0} se ha modificado correctamente.',
            'msg_delete' => 'El ID de rol {0} se ha eliminado correctamente',
            'msg_get' => 'El ID de rol {0} se ha obtenido con éxito',
            'msg_get_fail' => 'La identificación del rol {0} no se encontró o ya se eliminó',
        ],
    ],

    /**
     * Menú.
     */
    'menu' => [
        'expand' => 'Expandir',
        'collapse' => 'Collapse',
        'refresh' => 'Actualizar',
        'add' => 'Agregar menú',
        'edit' => 'Editar menú',
        'title' => 'Gestión del menú',
        'subtitle' => 'Lista de menú',
        'fields' => [
            'parent' => 'Pariente',
            'warning_parent' => '¡Tenga en cuenta! el menú solo es compatible con la profundidad máxima 2. ',
            'active' => 'Activo',
            'non_active' => 'No activo',
            'icon' => 'Icono',
            'info_icon' => 'Para más íconos, vea',
            'place_icon' => 'Icono de fontawesome.',
            'name' => 'Título',
            'place_title' => 'Nombre para menú',
            'route' => 'Ruta',
            'place_route' => 'Ruta para el menú de enlace',
        ],
        'msg' => [
            'msg_insert' => 'El menú ha sido agregado correctamente.',
            'msg_update' => 'El menú ha sido modificado correctamente.',
            'msg_delete' => 'El menú se ha eliminado correctamente',
            'msg_get' => 'El menú se ha obtenido correctamente.',
            'msg_get_fail' => 'El menú no se encuentra o ya está eliminado',
            'msg_fail_order' => 'El menú falló al reordenar',
        ],
    ],

    /**
     * usuario.
     */
    'user' => [
        'add' => 'Agregar usuario',
        'edit' => 'Editar usuario',
        'title' => 'Gestión de usuarios',
        'subtitle' => 'Lista de usuarios',
        'fields' => [
            'active' => 'Activo',
            'profile' => 'Perfil',
            'join' => 'Miembro desde',
            'setting' => 'Configuración',
            'non_active' => 'No activo',
        ],
        'msg' => [
            'msg_insert' => 'El usuario ha sido agregado correctamente.',
            'msg_update' => 'El usuario ha sido modificado correctamente.',
            'msg_delete' => 'El usuario ha sido eliminado correctamente',
            'msg_get' => 'El usuario ha sido exitosamente obtenido.',
            'msg_get_fail' => 'El usuario no encontrado o ya eliminado',
        ],
    ],
];
