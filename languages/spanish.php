<?php
//======================================================================\\
// Author: Siguemek                                                     \\
// Website: http://www.siguemek.com                                     \\
// Email: info@siguemek.com                                             \\
// Updated: 11/08/2013 [MM/DD/YYYY]                                     \\
// Language: Español                                                    \\
//======================================================================\\

// Character encoding
$LNG['charset'] = "iso-8859-1";

$LNG['user_success'] = '¡Usuario creado!';
$LNG['user_exists'] = 'Este nombre de usuario ya existe.';
$LNG['email_exists'] = 'Este correo electrónico ya está en uso';
$LNG['all_fields'] = '¡Es necesario que rellenes todos los campos!';
$LNG['user_alnum'] = 'El nombre de usuario tan solo puede tener letras y números';
$LNG['user_too_short'] = 'El nombre de usuario ha de tener entre 3 y 32 caracteres';
$LNG['invalid_email'] = '¡Email incorrecto!';
$LNG['invalid_user_pw'] = 'Te has equivocado de nombre de usuario o de contraseña';
$LNG['invalid_captcha'] = '¡Has rellenado el captcha mal!';
$LNG['log_out'] = 'Salir';
$LNG['hello'] = '¡Hola!';
$LNG['visitor'] = 'Visitante';
$LNG['register'] = 'Registrarse';
$LNG['login'] = 'Entrar';
$LNG['password'] = 'Contraseña';
$LNG['username'] = 'Nombre y apellidos';
$LNG['email'] = 'Email';
$LNG['username_or_email'] = 'Nombre de usuario o email';
$LNG['welcome_title'] = '¡Bienvenido';
$LNG['welcome_desc'] = 'a nuestra red social';
$LNG['welcome_about'] = 'comparte tus recuerdos, conectate con otros, haz nuevos amigos.';
$LNG['forgot_password'] = '¿Has olvidado la contraseña?';
$LNG['all_rights_reserved'] = 'Todos los derechos reservados';

// NOTIFICATION BOXES //
$LNG['settings_saved'] = '¡Guardado!';
$LNG['nothing_saved'] = 'No se ha guardado nada';
$LNG['general_settings_saved'] = 'Opciones generales guardadas.';
$LNG['overall_settings_saved'] = 'Tus opciones han sido actualizadas.';
$LNG['general_settings_unaffected'] = 'Ningún cambio detectado.';
$LNG['password_changed'] = 'Contraseña cambiada';
$LNG['nothing_changed'] = 'Nada ha cambiado';
$LNG['password_success_changed'] = 'Tu contraseña ha sido cambiada. Ahora puedes usar tu nueva contraseña.';
$LNG['incorrect_date'] = 'El dato seleccionado no es válido, escoge uno que sea correcto.';
$LNG['password_not_changed'] = 'La contraseña no ha sido cambiada';
$LNG['image_saved'] = '¡Foto guardada!';
$LNG['profile_picture_saved'] = 'Tu foto de perfil ha sido actualizada.';
$LNG['error'] = '¡Error!';
$LNG['no_file'] = 'No has seleccionado ningún archivo para subir, o bien están vacíos';
$LNG['file_exceeded'] = 'Los archivos no puede exceder los <strong>%s</strong> MB.';
$LNG['file_format'] = 'El formato del archivo no es válido para subirlo. Tiene que ser <strong>%s</strong>';
$LNG['image_removed'] = '¡Imagen borrada!';
$LNG['profile_picture_removed'] = 'Tu foto de perfil ha sido eliminada';
$LNG['bio_description'] = 'Tu biografía debería tener %s caracteres o menos.';
$LNG['valid_email'] = 'Por favor, escribe bien el email';
$LNG['valid_url'] = 'Por favor, escribe bien la URL';
$LNG['background_changed'] = 'El fondo ha sido cambiado';
$LNG['background_not_changed'] = 'El fondo no ha podido ser cambiado';
$LNG['password_too_short'] = 'La contraseña debe tener al menos <strong>3</strong> caracteres.';
$LNG['something_went_wrong'] = '¡Algo salió mal!';
$LNG['username_not_found'] = '¡No podemos encontrar el usuario elegido!';
$LNG['userkey_not_found'] = 'El usuario o la clave de reinicio están mal\'Escribe la información de forma correcta';
$LNG['password_reseted'] = 'Se ha reiniciado tu contraseña, ahora puedes entrar usando tus nuevos datos';
$LNG['email_sent'] = 'E-mail enviado';
$LNG['email_reset'] = 'Te hemos enviado un email con instrucciones para recuperar tu contraseña. Tienes 24 horas para terminar el proceso, si no lo has recibido asegúrate que no esté en la carpeta de SPAM';
$LNG['user_deleted'] = 'Usuario eliminado';
$LNG['user_has_been_deleted'] = 'Usuario con la ID: <strong>%s</strong> ha sido eliminado.';
$LNG['user_not_deleted'] = 'El usuario seleccionado (ID: %s) no ha podido ser borrado.';
$LNG['user_not_exist'] = 'El usuario no existe.';
$LNG['theme_changed'] = 'Tema cambiado';
$LNG['theme_success_changed'] = 'El tema ha sido cambiado';
$LNG['theme_not_changed'] = 'Lo siento pero el tema no ha podido ser cambiado';
$LNG['notif_saved'] = 'Notificaciones cambiadas';
$LNG['notif_success_saved'] = 'Las notificaciones se han actualizado.';

// MAIL CONTENT //
$LNG['welcome_mail'] = 'Bienvenido a %s';
$LNG['user_created'] = '
Gracias por registrarte <strong>%s</strong><br /><br />Tu usuario: <strong>%s</strong><br />Tu contraseña: <strong>%s</strong><br /><br />Puedes entrar desde aquí: <a href="%s" target="_blank">%s</a>';
$LNG['recover_mail'] = '¡Recuperacion de Contraseña!';
$LNG['recover_content'] = 'Se está procesando la recuperación de la contraseña, si no lo has pedido ignora este email. <br /><br />Usuario: <strong>%s</strong><br />Nueva contraseña: <strong>%s</strong><br /><br />Puedes reiniciar tu contraseña siguiendo el siguiente enlace: <a href="%s/index.php?a=recover&r=1" target="_blank">%s/index.php?a=recover&r=1</a>';
$LNG['ttl_comment_email'] = '%s comento en tu mensaje';
$LNG['comment_email'] = 'Hola <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> hay comentarios en tu <strong><a href="%s">mensaje.</a></strong>
<br /><br /><span style="color: #aaa;">Este mensaje ha sido enviado automáticamente, si no quiere recibir más emails de este tipo <strong>%s</strong> en el futuro, please <a href="%s">borra tu suscripción</a>.</span>';
$LNG['ttl_like_email'] = '%s le gusta tu mensaje';
$LNG['like_email'] = 'Hola <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> le ha dado a Me gusta en tu <strong><a href="%s">mensaje.</a></strong>
<br /><br /><span style="color: #aaa;">Este mensaje ha sido enviado automáticamente, si no quieres recibir más emails de este tipo <strong>%s</strong> en el futuro, por favor <a href="%s">borra tu suscripción</a>.</span>';
$LNG['ttl_new_friend_email'] = '%s ahora te sigue';
$LNG['new_friend_email'] = 'Hola <strong>%s</strong>,<br /><br /><strong><a href="%s">%s</a></strong> ahora te sigue.
<<br /><br /><span style="color: #aaa;">Este mensaje ha sido enviado automáticamente, si no quieres recibir más emails de este tipo <strong>%s</strong> en el futuro, por favor <a href="%s">borra tu suscripción</a>.</span>';

// ADMIN PANEL //

$LNG['general_link'] = 'General';
$LNG['security_link'] = 'Seguridad';
$LNG['manage_users'] = 'Usuarios';

$LNG['theme_install'] = 'Para instalar un nuevo tema, cárgalo a la carpeta <strong>themes</strong>.';
$LNG['theme_author_homepage'] = 'Visita la página de inicio del autor';
$LNG['theme_version'] = 'Versión';
$LNG['theme_active'] = 'Activo';
$LNG['theme_activate'] = 'Activado';
$LNG['theme_by'] = 'Por';

// FEED //
$LNG['welcome_feed_ttl'] = 'Bienvenido a nuestro feed';
$LNG['welcome_feed'] = 'Todas las novedades de tus amigos aparecerán en esta página, puedes empezar añadiendo algún amigo.';
$LNG['welcome_timeline_ttl'] = 'Bienvenido a tu página de novedades';
$LNG['welcome_timeline'] = 'Todas tus novedades serán mostradas en esta página, puedes empezar compartiendo algo.';
$LNG['leave_comment'] = 'Deja un comentario...';
$LNG['post'] = 'Publicar';
$LNG['view_more_comments'] = 'Ver más comentarios';
$LNG['this_post_private'] = 'Este mensaje es privado';
$LNG['this_post_public'] = 'Este mensaje es público';
$LNG['delete_this_comment'] = 'Borrar este comentario';
$LNG['delete_this_message'] = 'Borrar este mensaje';
$LNG['report_this_message'] = 'Denunciar este mensaje';
$LNG['report_this_comment'] = 'Denunciar este comentario';
$LNG['view_more_messages'] = 'Cargar más';
$LNG['food'] = 'Comí en: <strong>%s</strong>';
$LNG['visited'] = 'Estuve en:  <strong>%s</strong>';
$LNG['played'] = 'Jugué a: <strong>%s</strong>';
$LNG['watched'] = 'Vi: <strong>%s</strong>';
$LNG['listened'] = 'Escuché: <strong>%s</strong>';
$LNG['shared'] = 'Compartí una <a href="%s"><strong>publicación</strong></a> de <a href="%s"><strong>%s</strong></a>';
$LNG['form_title'] = 'Actualiza tu estado';
$LNG['comment_wrong'] = '¡Algo salió mal!, por favor recarga la página de nuevo.';
$LNG['comment_too_long'] = 'Lo siento, pero el máximo de caracteres permitidos en un comentario es <strong>%s</strong>.';
$LNG['comment_error'] = 'Lo siento, no se ha podido poner tu comentario, recarga la página e inténtalo de nuevo por favor.';
$LNG['message_hidden'] = 'Lo siento, pero este mensaje es privado, solo el autor del mensaje puede verlo.';
$LNG['message_hidden_ttl'] = 'Mensaje privado';
$LNG['login_to_lcs'] = 'Ingresa con tu usuario para darle a me gusta, comentar o compartir';
$LNG['comment'] = 'Comentar';
$LNG['share'] = 'Compartir';
$LNG['shared_success'] = 'Esta noticia ha sido compartida en tu <a href="%s"><strong>página</strong></a>.';
$LNG['no_shared'] = 'Lo siento pero no podemos compartir el mensaje, recarga la página e inténtalo de nuevo por favor.';
$LNG['share_title'] = 'Compartir esta noticia';
$LNG['share_desc'] = '¿Estás seguro que quieres compartir este mensaje en tu página?';
$LNG['cancel'] = 'Cancelar';
$LNG['close'] = 'Cerrar';

// REPORT //
$LNG['1_not_exists'] = 'El mensaje denunciado no existe.';
$LNG['0_not_exists'] = 'El comentario denunciado no existe.';
$LNG['1_already_reported'] = 'Este mensaje ya ha sido denunciado y pronto será revisado, gracias.';
$LNG['0_already_reported'] = 'Este comentario ya ha sido denunciado y pronto será revisado, gracias.';
$LNG['1_is_safe'] = 'Este mensaje ha sido marcado como <strong>seguro</strong> por un administrador, gracias por el aviso.';
$LNG['0_is_safe'] = 'Este comentario ha sido marcado como <strong>seguro</strong> por un administrador, gracias por el aviso.';
$LNG['1_report_added'] = 'El mensaje ha sido denunciado, ¡gracias por el aviso!.';
$LNG['0_report_added'] = 'El comentario ha sido denunciado, ¡gracias por el aviso!.';
$LNG['1_report_error'] = 'Lo siento pero algo salió mal mientras denunciabas el mensaje, recarga la página e inténtalo de nuevo, por favor.';
$LNG['0_report_error'] = 'Lo siento pero algo salió mal mientras denunciabas el comentario, recarga la página e inténtalo de nuevo, por favor.';
$LNG['1_is_deleted'] = 'El mensaje ha sido borrado, ¡gracias por el aviso!.';
$LNG['0_is_deleted'] = 'El comentario ha sido borrado, ¡gracias por el aviso!.';

// SIDEBAR //
$LNG['filter_events'] = 'Filtrar eventos';
$LNG['archive'] = 'Archivos';
$LNG['all_events'] = 'Todos los eventos';
$LNG['sidebar_map'] = 'Lugares';
$LNG['sidebar_food'] = 'Comidas';
$LNG['sidebar_visited'] = 'Visitas';
$LNG['sidebar_movie'] = 'Películas';
$LNG['sidebar_game'] = 'Juegos';
$LNG['sidebar_picture'] = 'Fotos';
$LNG['sidebar_video'] = 'Vídeos';
$LNG['sidebar_music'] = 'Música';
$LNG['sidebar_shared'] = 'Compartido';
$LNG['all_time'] = 'Todo el tiempo';
$LNG['subscriptions'] = 'Amigos';
$LNG['subscribers'] = 'Sugerencias de Amistad';
$LNG['welcome'] = '¡Bienvenido!';
$LNG['filter_gender'] = 'Filtrar por género';
$LNG['sidebar_male'] = 'Hombre';
$LNG['sidebar_female'] = 'Mujer';
$LNG['all_genders'] = 'Todos los géneros';
$LNG['online_friends'] = 'Amigos conectados';
$LNG['sidebar_likes'] = 'Me gusta';
$LNG['sidebar_comments'] = 'Comentarios';
$LNG['sidebar_friendships'] = 'Relaciones';
$LNG['sidebar_chats'] = 'Chats';
$LNG['sidebar_suggestions'] = 'Petición de amigos';
$LNG['sidebar_trending'] = 'Temas del momento';
$LNG['sidebar_friends_activity'] = 'Actividad de amigos';

// MESSAGES / CHAT //
$LNG['lonely_here'] = '¡No tengo amigos!';
$LNG['write_message'] = 'Escribe un mensaje...';
$LNG['chat_too_long'] = 'Lo siento, pero el máximo de caracteres permitidos en el mensaje es <strong>%s</strong>.';
$LNG['blocked_by'] = 'El mensaje no ha podido ser enviado. <strong>%s</strong> te ha bloqueado.';
$LNG['blocked_user'] = 'El mensaje no se ha podido enviar. Has bloqueado a <strong>%s</strong>.';
$LNG['chat_self'] = 'Lo siento pero no te puedes enviar un mensaje a ti mismo.';
$LNG['chat_no_user'] = 'Debes seleccionar un usuario del chat.';
$LNG['view_more_conversations'] = 'Ver más conversaciones';
$LNG['block'] = 'Bloquear';
$LNG['unblock'] = 'Desbloquear';
$LNG['conversation'] = 'Conversación';
$LNG['start_conversation'] = 'Puedes empezar una conversación eligiendo a alguien de tu lista de amigos.';
$LNG['send_message'] = 'Enviar mensaje';

// MESSAGE FORM //
$LNG['label_food'] = 'Añade un lugar donde hayas comido';
$LNG['label_game'] = '¿A que juego has jugado últimamente?';
$LNG['label_movie'] = '¿Cual es la última película que has visto?';
$LNG['label_visited'] = 'Añade algún lugar que hayas visitado';
$LNG['label_map'] = 'Añade un lugar';
$LNG['label_video'] = 'Comparte un vídeo de Youtube o Vimeo';
$LNG['label_music'] = 'Añade una canción de SoundCloud o una lista de canciones';
$LNG['label_image'] = 'Añadir foto';
$LNG['message_form'] = '¿En que estás pensando?';
$LNG['file_too_big'] = 'El archivo seleccionado (%s) es demasiado grande, el tamaño máximo permitido para los archivos es <strong>%s</strong>.';
$LNG['format_not_exist'] = 'El archivo seleccionado (%s) tiene un formato inválido, sólo puedes cargar imágenes con los siguientes formatos <strong>%s</strong>.';
$LNG['privacy_no_exist'] = 'La privacidad elegida no existe, recarga la página e inténtalo de nuevo, por favor.';
$LNG['event_not_exist'] = 'El evento seleccionado no existe, recarga la página e inténtalo de nuevo por favor.';

$LNG['unexpected_message'] = 'Ha ocurrido un error inesperado, recarga la página e inténtalo de nuevo por favor.';
$LNG['message_too_long'] = 'Lo siento, pero el máximo de caracteres permitido en un mensaje es <strong>%s</strong>.';
$LNG['files_selected'] = 'Imagen(es) seleccionada(s).';
$LNG['too_many_images'] = 'El número máximo de imágenes permitidas para cargar en un mensaje es <strong>%s</strong>, intenta subir la imagen de nuevo <strong>%s</strong>.';

// USER PANEL //
$LNG['user_menu_general'] = 'General';
$LNG['user_menu_security'] = 'Contraseña';
$LNG['user_menu_avatar'] = 'Perfil';
$LNG['user_menu_notifications'] = 'Notificaciones';

$LNG['user_ttl_general'] = 'Configuración general';
$LNG['user_ttl_security'] = 'Configuración de la contraseña';
$LNG['user_ttl_avatar'] = 'Configuración del perfil';
$LNG['user_ttl_notifications'] = 'Configuración de las notificaciones';

$LNG['user_desc_general'] = 'Cambiar cuenta, privacidad y opciones de localización.';
$LNG['user_desc_security'] = 'Cambiar tu contraseña.';
$LNG['user_desc_avatar'] = 'Cambiar la foro de tu perfil.';
$LNG['user_desc_cover'] = 'Cambiar tu imagen de portada.';
$LNG['user_desc_notifications'] = 'Cambiar las opciones de notificaciones.';

$LNG['ttl_background'] = 'Fondos';
$LNG['sub_background'] = 'Escoge el fondo de tu perfil';

$LNG['ttl_first_name'] = 'Nombre';
$LNG['sub_first_name'] = 'Escribe tu nombre';

$LNG['ttl_last_name'] = 'Apellidos';
$LNG['sub_last_name'] = 'Escribe tus apellidos';

$LNG['ttl_email'] = 'Email';
$LNG['sub_email'] = 'El email no será mostrado';

$LNG['ttl_location'] = 'Localización';
$LNG['sub_location'] = '¿Donde vives?';

$LNG['ttl_website'] = 'Web';
$LNG['sub_website'] = 'Si tienes un blog o página personal, ponla aquí';

$LNG['ttl_gender'] = 'Género';
$LNG['sub_gender'] = 'Selecciona tu género (Hombre o mujer)';

$LNG['ttl_profile'] = 'Perfil';
$LNG['sub_profile'] = 'Privacidad del perfil';

$LNG['ttl_messages'] = 'Privacidad de los mensajes';
$LNG['sub_messages'] = 'La forma habitual de publicar los mensajes';

$LNG['ttl_offline'] = 'Estado del chat';
$LNG['sub_offline'] = 'Visibilidad del estado del chat';

$LNG['ttl_facebook'] = 'Facebook';
$LNG['sub_facebook'] = 'Tu ID de perfil de Facebook.';

$LNG['ttl_twitter'] = 'Twitter';
$LNG['sub_twitter'] = 'Tu ID de perfil de Twitter.';

$LNG['ttl_google'] = 'Google+';
$LNG['sub_google'] = 'Tu ID de perfil de Google+.';

$LNG['ttl_bio'] = 'Biografia';
$LNG['sub_bio'] = 'Escribe sobre ti (160 caracteres o menos)';

$LNG['ttl_born'] = 'Fecha de nacimiento';
$LNG['sub_born'] = 'Selecciona cuando naciste';

$LNG['ttl_not_verified'] = 'No verificado';
$LNG['ttl_verified'] = 'verificado';
$LNG['sub_verified'] = 'Perfil verificado';

$LNG['ttl_upload_avatar'] = 'Cargar la imagen de perfil seleccionada';
$LNG['ttl_delete_avatar'] = 'Eliminar la imagen actual de perfil';

$LNG['opt_public'] = 'Publico';
$LNG['opt_private'] = 'Privado';
$LNG['opt_semi_private'] = 'Permitido solo a suscriptores';

$LNG['opt_offline_off'] = 'En linea (cuando está disponible)';
$LNG['opt_offline_on'] = 'Siempre desconectado';

$LNG['no_gender'] = 'Prefiero no decirlo';
$LNG['male'] = 'Hombre';
$LNG['female'] = 'Mujer';

$LNG['ttl_upload'] = 'Cargar';
$LNG['ttl_password'] = 'Contraseña';
$LNG['sub_password'] = 'Escribe una nueva contraseña (al menos 3 caracteres)';
$LNG['save_changes'] = 'Guardar cambios';
$LNG['ttl_upload_photo'] = 'Cargar foto';
$LNG['ttl_upload_cover'] = 'Cargar portada';
$LNG['ttl_delete_photo'] = 'Borrar foto';

$LNG['ttl_notificationl'] = 'Notificaciones de Me gusta';
$LNG['sub_notificationl'] = 'Mostrar notificaciones y alertas para cuando te dan un <strong>Me gusta</strong>';

$LNG['ttl_notificationc'] = 'Notificaciones de comentarios';
$LNG['sub_notificationc'] = 'Mostrar notificaciones y alertas para <strong>Comentarios</strong>';

$LNG['ttl_notifications'] = 'Notificaciones de mensajes';
$LNG['sub_notifications'] = 'Mostrar notificaciones y alertas para <strong>mensajes compartidos</strong>';

$LNG['ttl_notificationd'] = 'Notificaciones del chat';
$LNG['sub_notificationd'] = 'Mostrar notificaciones y alertas para <strong>Chat</strong>';

$LNG['ttl_notificationf'] = 'Notificaciones de amigos';
$LNG['sub_notificationf'] = 'Mostrar notificaciones y alertas para <strong>amigos agregados</strong>';

$LNG['ttl_sound_nn'] = 'Notificaciones con Sonido';
$LNG['sub_sound_nn'] = 'Reproducir un sonido cuando se recibe una nueva notificación';

$LNG['ttl_sound_nc'] = 'Chat con Sonido';
$LNG['sub_sound_nc'] = 'Reproducir un sonido cuando se reciba un nuevo mensaje de chat';

$LNG['ttl_email_comment'] = 'Email en comentarios';
$LNG['sub_email_comment'] = 'Recibir email cuando alguien a comentado tu mensaje';

$LNG['ttl_email_like'] = 'Email de Me gusta';
$LNG['sub_email_like'] = 'Recibir un email cuando alguien te de un Me gusta';

$LNG['ttl_email_new_friend'] = 'Email de nuevos amigos';
$LNG['sub_email_new_friend'] = 'Recibir un email cuando alguien me añada como amigo';

$LNG['user_ttl_sidebar'] = 'Configuración';

// ADMIN PANEL //
$LNG['admin_login'] = 'Ingreso como administrador';
$LNG['admin_user_name'] = 'Usuario';
$LNG['desc_admin_user'] = 'Escribe tu usuario de administrador';
$LNG['admin_pass'] = 'Contraseña';
$LNG['desc_admin_pass'] = 'Escribe tu contraseña de administrador';
$LNG['admin_menu_general'] = 'Opciones generales';
$LNG['admin_menu_security'] = 'Contraseña';
$LNG['admin_menu_users'] = 'Administrador de usuarios';
$LNG['admin_menu_logout'] = 'Salir';
$LNG['admin_menu_stats'] = 'Estadísticas';
$LNG['admin_menu_users_settings'] = 'Opciones de usuarios';
$LNG['admin_menu_themes'] = 'Temas';
$LNG['admin_menu_manage_reports'] = 'Administrador de denuncias';
$LNG['admin_menu_manage_ads'] = 'Administrador de anuncios';

$LNG['admin_ttl_sidebar'] = 'Menú';
$LNG['admin_ttl_general'] = 'Opciones generales';
$LNG['admin_ttl_security'] = 'Opciones de contraseña';
$LNG['admin_ttl_themes'] = 'temas';
$LNG['admin_ttl_users'] = 'Administrador de usuarios';
$LNG['admin_ttl_stats'] = 'Estadísticas';
$LNG['admin_ttl_users_settings'] = 'Opciones de usuario';
$LNG['admin_ttl_manage_reports'] = 'Administrador de denuncias';
$LNG['admin_ttl_manage_ads'] = 'Administrador de anuncios';

$LNG['admin_desc_general'] = 'Cambiar las opciones generales de la web.';
$LNG['admin_desc_users_settings'] = 'Cambiar las opciones generales de usuarios.';
$LNG['admin_desc_themes']  = 'Cambiar la vista del sitio.';
$LNG['admin_desc_security'] = 'Cambiar la contraseña de administrador.';
$LNG['admin_desc_users'] = 'Administrar usuarios registrados.';
$LNG['admin_desc_stats'] = 'Estadísticas de usuarios y sitio';
$LNG['admin_desc_edit_users'] = 'Editar configuración de usuario';
$LNG['admin_desc_manage_reports'] = 'Administrar comentarios y mensajes denunciados.';
$LNG['admin_desc_manage_ads'] = 'administrador los anuncios de la web.';

$LNG['admin_ttl_title'] = 'Título';
$LNG['admin_sub_title'] = 'Título del sitio';

$LNG['admin_ttl_captcha'] = 'Captcha';
$LNG['admin_sub_captcha'] = 'Activar el captcha para el registro';

$LNG['admin_ttl_timestamp'] = 'Marca de tiempo';
$LNG['admin_sub_timestamp'] = 'Mensajes, comentarios y chat con marca de tiempo';

$LNG['admin_ttl_msg_perpage'] = 'Mensajes';
$LNG['admin_sub_msg_perpage'] = 'Número de mensajes por página';

$LNG['admin_ttl_com_perpage'] = 'Comentarios';
$LNG['admin_sub_com_perpage'] = 'Número de comentarios por página';

$LNG['admin_ttl_chat_perpage'] = 'Chat';
$LNG['admin_sub_chat_perpage'] = 'Número de conversaciones por página';

$LNG['admin_ttl_smiles'] = 'Emoticonos';
$LNG['admin_sub_smiles'] = 'Permitir y transformar códigos cortos de mensajes, comentarios y chat en emoticonos';

$LNG['admin_ttl_nperpage'] = 'Notificaciones';
$LNG['admin_sub_nperpage'] = 'El número de notificaciones que será mostrado (Página de notificaciones)';

$LNG['admin_ttl_qperpage'] = 'Búsqueda';
$LNG['admin_sub_qperpage'] = 'Número de usuarios mostrados por página (Página de búsqueda)';

$LNG['admin_ttl_msg_limit'] = 'Límite de mensajes';
$LNG['admin_sub_msg_limit'] = 'Número máximo de caracteres permitidos por mensaje';

$LNG['admin_ttl_chat_limit'] = 'Limite de chat';
$LNG['admin_sub_chat_limit'] = 'Número máximo de caracteres permitidos por conversación';

$LNG['admin_ttl_email_user'] = 'Emails de usuarios';
$LNG['admin_sub_email_user'] = 'Emails de usuarios y registro';

$LNG['admin_ttl_notificationsm'] = 'Notificación de mensajes';
$LNG['admin_sub_notificationsm'] = 'Intervalo de tiempo para comprobar nuevos mensajes';

$LNG['admin_ttl_notificationsn'] = 'Notificaciones de eventos';
$LNG['admin_sub_notificationsn'] = 'Intervalo de tiempo para comprobar nuevos eventos';

$LNG['admin_ttl_chatrefresh'] = 'Actualizar chat';
$LNG['admin_sub_chatrefresh'] = 'Intervalo de tiempo para comprobar nuevos mensajes del chat';

$LNG['admin_ttl_timeonline'] = 'Usuarios en línea';
$LNG['admin_sub_timeonline'] = 'Cantidad de tiempo transcurrido para considerar que un usuario está en línea';

$LNG['admin_ttl_image_profile'] = 'Tamaño de imagen (Perfil)';
$LNG['admin_sub_image_profile'] = 'Tamaño de imagen permitido para cargar (Perfil y portada)';

$LNG['admin_ttl_image_format'] = 'Formato de imagen (Perfil)';
$LNG['admin_sub_image_format'] = 'Formato de imagen permitido para cargar (Perfil y portada), usar solo gif,png,jpg. Otros formatos no son soportados';

$LNG['admin_ttl_message_image'] = 'Tamaño de imagen (mensajes)';
$LNG['admin_sub_message_image'] = 'Tamaño de imagen permitido para cargar (mensajes)';

$LNG['admin_ttl_message_format'] = 'Formato de imagen (mensajes)';
$LNG['admin_sub_message_format'] = 'Formato de imagen permitido para cargar (mensajes), usar solo gif,png,jpg. Otros formatos no son soportados';

$LNG['admin_ttl_censor'] = 'Censura';
$LNG['admin_sub_censor'] = 'Palabras a censurar (separadas por \',\' [coma])';

$LNG['admin_ttl_ad1'] = 'Unidad 1';
$LNG['admin_sub_ad1'] = 'Publicidad en unidad 1 (parte inferior del "index")';

$LNG['admin_ttl_ad2'] = 'Unidad 2';
$LNG['admin_sub_ad2'] = 'Publicidad en unidad 2 (Barra lateral [Timeline])';

$LNG['admin_ttl_ad3'] = 'Unidad 3';
$LNG['admin_sub_ad3'] = 'Publicidad en unidad 3 (Barra lateral [Noticias])';

$LNG['admin_ttl_ad4'] = 'Unidad 4';
$LNG['admin_sub_ad4'] = 'Publicidad en unidad 4 (Barra lateral [Perfil])';

$LNG['admin_ttl_ad5'] = 'Unidad 5';
$LNG['admin_sub_ad5'] = 'Publicidad en unidad 5 (Barra lateral [mensajes individuales])';

$LNG['admin_ttl_ad6'] = 'Unidad 6';
$LNG['admin_sub_ad6'] = 'Publicidad en unidad 6 (Barra lateral [Página de búsqueda de usuarios])';

$LNG['admin_ttl_password'] = 'Contraseña';
$LNG['admin_sub_password'] = 'Dejar en blanco si no quieres cambiarla';

$LNG['admin_ttl_edit'] = 'Editar';
$LNG['admin_ttl_edit_profile'] = 'Editar perfil';

$LNG['admin_ttl_delete'] = 'Eliminar';
$LNG['admin_ttl_delete_profile'] = 'Eliminar perfil';

$LNG['admin_ttl_mail'] = 'Email';
$LNG['admin_ttl_username'] = 'usuario';
$LNG['admin_ttl_id'] = 'ID'; // ID de usuario

$LNG['admin_ttl_mprivacy'] = 'Mensaje. Tipo';
$LNG['admin_sub_mprivacy'] = 'Privacidad de los mensajes por defecto (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_notificationl'] = 'Notificaciones de Me gusta';
$LNG['admin_sub_notificationl'] = 'Activar alertas y notificaciones para <strong>Me gusta</strong> (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_notificationc'] = 'Notificaciones de comentarios';
$LNG['admin_sub_notificationc'] = 'Activar alertas y notificaciones para <strong>comentarios</strong> (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_notifications'] = 'Notificaciones de mensajes';
$LNG['admin_sub_notifications'] = 'Activar alertas y notificaciones para <strong>mensajes compartidos</strong> (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_notificationd'] = 'Notificaciones de chat';
$LNG['admin_sub_notificationd'] = 'Activar alertas y notificaciones para <strong>Chats</strong> (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_notificationf'] = 'Notificaciones de amigos';
$LNG['admin_sub_notificationf'] = 'Activar alertas y notificaciones para <strong>amigos añadidos</strong> (puede ser cambiado desde las opciones de usuario)';

$LNG['admin_ttl_sound_nn'] = 'Notificaciones de sonido';
$LNG['admin_sub_sound_nn'] = 'Habilitar reproducción de un sonido para las nuevas notificaciones (puede ser cambiado de la configuración del usuario)';

$LNG['admin_ttl_sound_nc'] = 'Chat con sonido';
$LNG['admin_sub_sound_nc'] = 'Habilitar reproducción de un sonido de nuevos mensajes de chat (puede ser cambiado de la configuración del usuario';

$LNG['admin_ttl_email_comment'] = 'Email cuando comentan';
$LNG['admin_sub_email_comment'] = 'Activar el envío de email cuando alguien comenta un mensaje';

$LNG['admin_ttl_email_like'] = 'Email cuando dan a Me gusta';
$LNG['admin_sub_email_like'] = 'Activar el envío de email cuando alguien de a Me gusta';

$LNG['admin_ttl_email_new_friend'] = 'Email de nuevos amigos';
$LNG['admin_sub_email_new_friend'] = 'Activar el envío de email cuando alguien te agregue como amigo';

$LNG['admin_ttl_ilimit'] = 'Máximo de imágenes';
$LNG['admin_sub_ilimit'] = 'Máximo número de imágenes permitidos para cargar en un mensaje';

$LNG['admin_ttl_wholiked'] = 'Quién dio a Me gusta';
$LNG['admin_sub_wholiked'] = 'El número de personas a mostrar que dieron Me gusta';

$LNG['admin_ttl_rperpage'] = 'Denunciar';
$LNG['admin_sub_rperpage'] = 'Denuncias por página (Administrador de denuncias)';

$LNG['admin_ttl_sperpage'] = 'Amigos';
$LNG['admin_sub_sperpage'] = 'Número de amigos mostrados por página (perfil)';

$LNG['admin_ttl_ronline'] = 'Amigos conectados';
$LNG['admin_sub_ronline'] = 'Número de amigos conectados que serán mostrados en la página de noticias (barra lateral).';

$LNG['admin_ttl_nperwidget'] = 'Notificaciones desplegables';
$LNG['admin_sub_nperwidget'] = 'Número de notificaciones a mostrar por categoría (Me gusta, comentarios, mensajes)';

$LNG['admin_ttl_uperpage'] = 'Usuarios';
$LNG['admin_sub_uperpage'] = 'Número de usuarios por página (Administrador de usuarios)';

$LNG['admin_sub_verified'] = '¿Verificar perfil de usuario por defecto? (No recomendado)';

$LNG['per_page'] = '/ página';
$LNG['second'] = 'segundo';
$LNG['seconds'] = 'segundos';
$LNG['minute'] = 'minuto';
$LNG['minutes'] = 'minutos';
$LNG['hour'] = 'horas';
$LNG['recommended'] = 'recomendado';
$LNG['edit_user'] = 'Editar usuario';
$LNG['username_to_edit'] = 'Escribe un usuario';
$LNG['username_to_edit_sub'] = 'Escribe el usuario que quieras editar';

// STATS //
$LNG['user_registration'] = 'Registro de usuarios';
$LNG['users_today'] = 'Hoy';
$LNG['users_this_month'] = 'Este mes';
$LNG['users_last_30'] = 'Últimos 30 días';
$LNG['total_users'] = 'Total';

$LNG['messages'] = 'Mensajes';
$LNG['comments'] = 'Comentarios';
$LNG['messages_and_comments'] = 'Mensajes y comentarios';
$LNG['reports_title'] = 'Denunciar - (Mensajes %26 Comentarios)';
$LNG['total_messages'] = 'Mensajes totales';
$LNG['public_messages'] = 'Mensajes públicos';
$LNG['private_messages'] = 'Mensajes privados';
$LNG['total_comments'] = 'Total de comentarios';
$LNG['stats_total'] = 'Total';
$LNG['stats_public'] = 'Publico';
$LNG['stats_private'] = 'Privado';
$LNG['stats_reports'] = 'Denuncias';
$LNG['total_reports'] = 'Total de denuncias';
$LNG['pending_reports'] = 'Denuncias pendientes';
$LNG['safe_reports'] = 'Denuncias guardadas';
$LNG['deleted_reports'] = 'Denuncias eliminadas';
$LNG['likes_today'] = 'Me gusta de hoy';
$LNG['likes_this_month'] = 'Estrellas este mes';
$LNG['likes_last_30'] = 'Últimos 30 días';
$LNG['likes_total'] = 'Me gusta totales';
$LNG['likes'] = 'Me gusta';

// MANAGE REPORTS //
$LNG['admin_reports_id'] = 'ID';
$LNG['admin_reports_view'] = 'Ver denuncia';
$LNG['admin_reports_type'] = 'Tipo';
$LNG['admin_reports_by'] = 'Denunciado por';
$LNG['admin_reports_safe'] = 'Marcar como seguro';
$LNG['admin_reports_delete'] = 'Eliminar';
$LNG['admin_reports_ttl_safe'] = 'Marcar como seguro';

// LIKES //
$LNG['already_liked'] = 'Ya le has dado a Me gusta a este mensaje.';
$LNG['already_disliked'] = 'Ya has dicho que no te gusta este mensaje.';
$LNG['like'] = 'Me gusta';
$LNG['dislike'] = 'Ya no me gusta';
$LNG['like_message_not_exist'] = 'Este mensaje no existe o ha sido eliminado.';
$LNG['liked_this'] = 'Me gusta';
$LNG['x_liked_y_post'] = 'le gusto %1$s el <a href="%2$s"><strong>mensaje</strong></a>';

// MISC //
$LNG['sponsored'] = 'Patrocinado por';
$LNG['censored'] = '<strong>Censurado</strong>';
$LNG['new_like_notification'] = '<strong><a href="%s">%s</a></strong> le ha dado a Me gusta a esta <strong><a href="%s">publicación</a></strong>';
$LNG['new_comment_notification'] = '<strong><a href="%s">%s</a></strong> ha comentado esta <strong><a href="%s">publicación</a></strong>';
$LNG['new_shared_notification'] = '<strong><a href="%s">%s</a></strong> ha compartido tu <strong><a href="%s">publicación</a></strong>';
$LNG['new_friend_notification'] = '<strong><a href="%s">%s</a></strong> ahora te sigue';
$LNG['new_chat_notification'] = '<strong><a href="%s">%s</a></strong> te ha enviado un <strong><a href="%s">mensaje de chat</a></strong>';
$LNG['new_like_fa'] = '<strong><a href="%s">%s</a></strong> le ha dado a Me gusta a esta <strong><a href="%s">publicación</a></strong>';
$LNG['new_comment_fa'] = '<strong><a href="%s">%s</a></strong> ha comentado en una <strong><a href="%s">publicación</a></strong>';
$LNG['new_message_fa'] = '<strong><a href="%s">%s</a></strong> ha hecho una nueva <strong><a href="%s">publicación</a></strong>';
$LNG['change_password'] = 'Cambiar contraseña';
$LNG['enter_new_password'] = 'Escribe una nueva contraseña';
$LNG['enter_reset_key'] = 'Escribe una nueva clave de recuperación';
$LNG['enter_username'] = 'Escribe un usuario';
$LNG['reset_key'] = 'Clave de reinicio';
$LNG['new_password'] = 'Nueva contraseña';
$LNG['password_recovery'] = 'Contraseña de recuperación';
$LNG['recover']	= 'Recuperar';
$LNG['recover_sub_username'] = 'Escribe el usuario del cual quieres recuperar la contraseña';

// PROFILE //
$LNG['profile_not_exist'] = 'Lo siento, pero este usuario no existe.';
$LNG['profile_semi_private'] = 'Lo siento, pero este usuario es privado, solo sus amigos pueden ver su perfil.';
$LNG['profile_private'] = 'Lo siento, pero este perfil es completamente privado.';
$LNG['profile_not_exist_ttl'] = 'El perfil no existe.';
$LNG['profile_semi_private_ttl'] = 'Perfil privado.';
$LNG['profile_private_ttl'] = 'El perfil es privado.';
$LNG['add_friend'] = 'Añadir como amigo';
$LNG['remove_friend'] = 'Eliminar amigo';
$LNG['profile_about'] = 'Sobre mi';
$LNG['profile_born'] = 'Nacimiento';
$LNG['profile_location'] = 'Localización';
$LNG['profile_website'] = 'Web';
$LNG['profile_view_site'] = 'Ver web';
$LNG['profile_view_profile'] = 'Ver perfil';
$LNG['profile_bio']	= 'Biografia';
$LNG['new_messages_posted'] = 'Nuevo(s) mensaje(s) han sido publicados. Click para recargar.';
$LNG['verified_user'] = 'Usuario verificado';
$LNG['edit_profile_cover'] = 'Cambiar imágenes de perfil';
$LNG['view_all_notifications'] = 'Ver más notificaciones';
$LNG['view_chat_notifications'] = 'Ver más mensajes';
$LNG['close_notifications'] = 'Cerrar notificaciones';
$LNG['notifications_settings'] = 'Opciones de notificaciones';
$LNG['no_notifications'] = 'Sin notificaciones';
$LNG['search_title'] = 'Resultados de búsqueda';
$LNG['view_all_results'] = 'Ver todos los resultados';
$LNG['close_results'] = 'Cerrar resultados';
$LNG['no_results'] = 'Sin resultados disponibles. Inténtalo de nuevo.';
$LNG['no_results_ttl'] = 'Resultados de búsqueda';
$LNG['search_for_users'] = 'Resultados de usuarios';
$LNG['search_in_friends'] = 'Amigos';
$LNG['follows'] = 'Sigue a';
$LNG['followed_by'] = 'Seguido por';
$LNG['people'] = 'persona(s)';

// GENERAL //
$LNG['title_profile'] = 'Perfil';
$LNG['title_feed'] = 'Novedades';
$LNG['title_post'] = 'Publicaciones';
$LNG['title_messages'] = 'Mensajes';
$LNG['title_settings'] = 'Opciones';
$LNG['title_timeline'] = 'Timeline';
$LNG['title_search'] = 'Búsqueda';
$LNG['title_notifications'] = 'Notificaciones';
$LNG['title_admin']	= 'Admin';
$LNG['on'] = 'Encendido';
$LNG['off'] = 'Apagado';
$LNG['none'] = 'Nada';
$LNG['pages'] = 'Páginas';
$LNG['search_for_people'] = 'Búsqueda de personas, hashtags';
$LNG['new_message'] = 'Nuevo mensaje';
$LNG['privacy_policy'] = 'Política de privacidad';
$LNG['terms_of_use'] = 'Terminos de uso';
$LNG['about'] = 'Sobre';
$LNG['disclaimer'] = 'Renuncia';
$LNG['contact'] = 'Contacto';
$LNG['api_documentation'] = 'Documentación API';
$LNG['developers'] = 'Desarrolladores';
$LNG['language'] = 'Idioma';

// MONTHS
$LNG['month_1'] = 'Enero';
$LNG['month_2'] = 'Febrero';
$LNG['month_3'] = 'Marzo';
$LNG['month_4'] = 'Abril';
$LNG['month_5'] = 'Mayo';
$LNG['month_6'] = 'Junio';
$LNG['month_7'] = 'Julio';
$LNG['month_8'] = 'Agosto';
$LNG['month_9'] = 'Septiembre';
$LNG['month_10'] = 'Octubre';
$LNG['month_11'] = 'Noviembre';
$LNG['month_12'] = 'Diciembre';
?>
