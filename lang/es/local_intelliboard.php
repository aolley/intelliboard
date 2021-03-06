<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 *
 * @package    local_intelliboard
 * @copyright  2017 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    http://intelliboard.net/
 */

$string['pluginname'] = 'Plug-in IntelliBoard.net';
$string['tracking_title'] = 'Monitoreo de tiempo';
$string['tracking'] = 'Monitoreo de sesión';
$string['dashboard'] = 'Dashboard';
$string['settings'] = 'Ajustes';
$string['adv_settings'] = 'Ajustes avanzados';
$string['intelliboardroot'] = 'IntelliBoard';
$string['report'] = 'Reporte';
$string['reports'] = 'Reportes';
$string['learners'] = 'Aprendices';
$string['courses'] = 'Cursos';
$string['load'] = 'Cargar';
$string['inactivity'] = 'Inactividad';
$string['inactivity_desc'] = 'Tiempo de inactividad del usuario (en segundos)';
$string['ajax'] = 'Frecuencia';
$string['ajax_desc'] = 'Frecuencia de almacenamiento de la sesión vía AJAX.O - AJAX desactivada (en segundos)';
$string['enabled'] = 'Monitoreo activado';
$string['enabled_desc'] = 'Activar monitoreo';
$string['trackadmin'] = 'Admins monitoreo';
$string['logs'] = 'Herramienta de migración';
$string['trackadmin_desc'] = 'Activar monitoreo para usuarios admin (no recomendado)';
$string['intelliboard:instructors'] = 'IntelliBoard [Instructor]';
$string['intelliboard:students'] = 'IntelliBoard [Estudiante]';
$string['intelliboard:view'] = 'IntelliBoard [Ver]';
$string['intelliboard:manage'] = 'IntelliBoard [Administrar]';
$string['intelliboard:competency'] = 'IntelliBoard [Competencia]';
$string['tls12'] = 'TLS v1.2';
$string['tls12_desc'] = 'Ajustes avanzados:TLS v1.2';
$string['sizemode'] = 'Modo gran tamaño';
$string['sizemode_desc'] = 'Grande (>5000 usuarios)';
$string['server'] = 'Servidor IntelliBoard';
$string['server_usa'] = 'IntelliBoard USA';
$string['server_au'] = 'IntelliBoard Australia';
$string['server_eu'] = 'IntelliBoard Europa';
$string['filters'] = 'Filtros de Dashboard';
$string['filter1'] = 'Usuarios eliminados';
$string['filter2'] = 'Usuarios suspendidos';
$string['filter3'] = 'Usuario invitado';
$string['filter4'] = 'Filtro curso';
$string['filter5'] = 'Filtro método inscripción';
$string['filter6'] = 'Filtro inscripción usuario';
$string['filter7'] = 'Filtro actividades/recursos';
$string['filter8'] = 'Filtro usuarios inscritos';
$string['filter1_desc'] = 'Mostrar usuarios eliminados';
$string['filter2_desc'] = 'Mostrar usuarios suspendidos';
$string['filter3_desc'] = 'Mostrar [invitar] usuario en reportes';
$string['filter4_desc'] = 'Mostrar cursos no visibles';
$string['filter5_desc'] = 'Mostrar métodos de inscripción no activos';
$string['filter6_desc'] = 'Mostrar usuarios con estado de inscripción no activos';
$string['filter7_desc'] = 'Mostrar actividades/recursos no visibles';
$string['filter8_desc'] = 'Mostrar sólo usuarios inscritos (no recomendado)';
$string['intelliboardaccess'] = 'Ud. no tiene permiso para visualizar esta página.Por favor contacte a su Administrador de Sistema.';
$string['tex1'] = 'Dashboard del Aprendiz IntelliBoard no habilitado.';
$string['account'] = 'Información de suscripción';
$string['te12'] = 'Nombre';
$string['te13'] = 'Apellido';
$string['te1'] = 'Correo';
$string['te1_desc'] = 'Ingrese su nombre, apellido y correo utilizado con suscripción IntelliBoard.net.Si no tiene una suscripción activa, por favor regístrese en <a target="_blank" href="https://intelliboard.net">IntelliBoard.net</a>.Learner and Instructor Dashboard están disponibles con una suscripción de Nivel 3 y superior.';
$string['n1'] = 'Información [Progreso del Aprendiz]';
$string['n2'] = 'Información [Progreso de Notas]';
$string['n3'] = 'Información [Progreso de Actividad]';
$string['n4'] = 'Información [Totales]';
$string['n5'] = 'Progreso actual';
$string['n6'] = 'Widget:Correlaciones';
$string['n7'] = 'Widget:Utilización de Evento';
$string['n8'] = 'Página de Curso';
$string['n9'] = 'Página de Reportes';
$string['n10'] = 'Dashboard Instructor';
$string['n11'] = 'Texto alternativo para menú de navegación';
$string['ts1'] = 'Dashboard del Aprendiz';
$string['ts2'] = 'Dashboard Página del Aprendiz';
$string['ts3'] = 'Dashboard Cursos del Aprendiz';
$string['ts4'] = 'Dashboard Notas del Aprendiz';
$string['ts5'] = 'Dashboard Reportes del Aprendiz';
$string['t01'] = 'Filtro tiempo:Último mes';
$string['t02'] = 'Filtro tiempo:Último trimestre';
$string['t03'] = 'Filtro tiempo:Último semestre';
$string['t04'] = 'Habilitar cursos completados [título]';
$string['t05'] = 'Habilitar cursos en progreso [título]';
$string['t06'] = 'Habilitar nota promedio de cursos [título]';
$string['t07'] = 'Habilitar Mensajes [título]';
$string['t1'] = 'Habilitar Dashboard del Aprendiz';
$string['t2'] = 'Habilitar Dashboard';
$string['t3'] = 'Habilitar cursos';
$string['t4'] = 'Habilitar notas';
$string['t48'] = 'Habilitar reportes';
$string['t5'] = 'Habilitar gráfico [Progreso de actividad]';
$string['t6'] = 'Habilitar gráfico [Progreso del curso]';
$string['t7'] = 'Habilitar [Mi promedio en el curso]';
$string['t8'] = 'Habilitar [Promedio general del curso]';
$string['t9'] = 'Habilitar widget [Tareas]';
$string['t10'] = 'Habilitar widget [Quizzes]';
$string['t11'] = 'Habilitar widget [Progreso del curso]';
$string['t12'] = 'Habilitar widget [Participación en actividad]';
$string['t13'] = 'Habilitar widget [Aprendizaje]';
$string['t14'] = 'Habilitar widget [Éxito del curso]';
$string['t15'] = 'Habilitar widget [Correlaciones]';
$string['t16'] = 'Habilitar profesor del curso';
$string['t17'] = 'Habilitar categoría del curso';
$string['t18'] = 'Habilitar conclusión del curso';
$string['t19'] = 'Habilitar nota del curso';
$string['t20'] = 'Habilitar promedio de la clase en el curso';
$string['t21'] = 'Habilitar tiempo invertido en el curso';
$string['t22'] = 'Habilitar fecha de inicio del curso';
$string['t23'] = 'Habilitar columna [Fecha de inicio del curso]';
$string['t24'] = 'Habilitar columna [Fecha inscrito]';
$string['t25'] = 'Habilitar columna [Progreso]';
$string['t26'] = 'Habilitar columna [Carta]';
$string['t27'] = 'Habilitar columna [Actividades completadas]';
$string['t28'] = 'Habilitar columna [Puntuación]';
$string['t29'] = 'Habilitar columna estatus [Conclusión del Curso]';
$string['t30'] = 'Habilitar columna [Notas de actividad]';
$string['t31'] = 'Habilitar columna widget [Tareas][Nota]';
$string['t32'] = 'Habilitar columna widget [Tareas][Fecha límite]';
$string['t33'] = 'Habilitar columna widget [Quizzes][Nota]';
$string['t34'] = 'Habilitar columna widget [Quizzes][Notas]';
$string['t35'] = 'Habilitar columna widget [Progreso del Curso][Progreso]';
$string['t36'] = 'Habilitar columna widget [Progreso del Curso][Nota]';
$string['t37'] = 'Habilitar columna widget [Progreso del Curso][Inscrito]';
$string['t38'] = 'Habilitar columna widget [Progreso del Curso][Completado]';
$string['t39'] = 'Habilitar opción [Progreso][Nota Objetivos]';
$string['t40'] = 'Habilitar opción [Progreso][Promedio Clase]';
$string['t41'] = 'Habilitar columna Completado el [Título Notas de actividad]';
$string['t42'] = 'Habilitar columna Último acceso al curso [Título Notas de actividad]';
$string['t43'] = 'Habilitar columna Tipo [Notas de actividad]';
$string['t44'] = 'Habilitar columna Puntuación [Notas de actividad]';
$string['t45'] = 'Habilitar columna Notas [Notas de actividad]';
$string['t46'] = 'Habilitar columna Completado [Notas de actividad]';
$string['t47'] = 'Color de fondo de cursos [grid]';
$string['t49'] = 'Columnas de filtrado de reportes';
$string['t50'] = 'Roles de profesor';
$string['t51'] = 'Roles de estudiante';
$string['current_grade'] = 'Nota actual';
$string['average_grade'] = 'Nota promedio';
$string['type_here'] = 'Escriba aquí...';
$string['enrolled_date'] = 'Fecha inscripción';
$string['teacher'] = 'Profesor';
$string['category'] = 'Categoría';
$string['current_grade'] = 'Nota actual';
$string['completion'] = 'Logro';
$string['class_average'] = 'Promedio de la clase';
$string['time_spent'] = 'Tiempo invertido';
$string['completed_on'] = 'Completado el {$a}';
$string['last_access_on_course'] = 'Último acceso al curso: {$a}';
$string['you_have_certificates'] = 'Ud. tiene certificados{$a}';
$string['close'] = 'Cerrar';
$string['view_course_details'] = 'Ver detalles del curso';
$string['incomplete'] = 'Incompleto';
$string['return_to_grades'] = 'Volver a Calificaciones';
$string['grade'] = 'Calificación';
$string['last_week'] = 'Última semana';
$string['last_month'] = 'Último mes';
$string['last_quarter'] = 'Último trimestre';
$string['last_semester'] = 'Último semestre';
$string['activity_progress'] = 'Progreso de la actividad';
$string['course_progress'] = 'Progreso del curso';
$string['my_course_average_all'] = 'Mi promedio del curso (todos los cursos)';
$string['overall_course_average'] = 'Promedio global del curso (todos los aprendices; todos los cursos))';
$string['assignments'] = 'Tareas';
$string['quizzes'] = 'Quizzes';
$string['assignment_name'] = 'Nombre tarea';
$string['due_date'] = 'Fecha límite';
$string['no_data'] = 'Sin datos';
$string['quiz_name'] = 'Nombre del quiz';
$string['all_courses'] = 'Todos los cursos';
$string['time_period_due'] = 'Período (Fecha límite)';
$string['all_data'] = 'Todos los datos';
$string['progress'] = 'Progreso';
$string['enrolled'] = 'Inscrito';
$string['completed'] = 'Completado el';
$string['activity_participation'] = 'Participación en actividad';
$string['learning'] = 'Aprendizaje';
$string['course_success'] = 'Éxito del curso';
$string['correlations'] = 'Correlaciones';
$string['course_start_date'] = 'Fecha de inicio del curso';
$string['letter'] = 'Carta';
$string['completed_activities'] = 'Actividades completadas';
$string['score'] = 'Puntuación';
$string['course_completion_status'] = 'Estatus de conclusión del curso';
$string['activity_grades'] = 'Notas de actividad';
$string['completion_is_not_enabled'] = 'Conclusión no habilitada para este curso';
$string['activities'] = 'Actividades';
$string['activity_name'] = 'Nombre actividad';
$string['type'] = 'Tipo';
$string['graded'] = 'Calificado';
$string['completed_courses'] = 'Cursos completados';
$string['courses_in_progress'] = 'Cursos en progreso';
$string['courses_avg_grade'] = 'Nota promedio de cursos';
$string['grades'] = 'Notas';
$string['messages'] = 'Mensajes';
$string['x_completions'] = '{$a} Logros';
$string['completion_status'] = 'Estatus de conclusión';
$string['users_activity'] = 'Actividad del usuario';
$string['daily'] = 'Diaria';
$string['weekly'] = 'Semanal';
$string['monthly'] = 'Mensual';
$string['number_of_sessions'] = 'Número de sesiones';
$string['number_today'] = '{$a} hoy';
$string['number_this_week'] = '{$a} esta semana';
$string['course_completions'] = 'Cursos concluidos';
$string['user_enrolments'] = 'Inscripciones del usuario';
$string['users'] = 'Usuarios';
$string['modules'] = 'Módulos';
$string['categories'] = 'Categorías';
$string['total'] = 'Total';
$string['users_overview'] = 'Información de usuarios';
$string['enable_time_and_visits_users_overview'] = 'Habilitar tiempo invertido y visitas en Información de usuarios';
$string['disable_time_and_visits_users_overview'] = 'Inhabilitar tiempo invertido y visitas en Información de usuarios';
$string['loading'] = 'Cargando...';
$string['enrollments'] = 'Inscripciones';
$string['registrations'] = 'Registros';
$string['participation'] = 'Participación';
$string['time'] = 'Tiempo';
$string['enrolment_method'] = 'Método de inscripción';
$string['intelliBoard_migration_tool'] = 'Herramienta de Migración IntelliBoard';
$string['importing_totals'] = 'Totales de importaciones';
$string['total_numbers'] = 'Fecha: {$a->timepoint}, Sesiones: {$a->sessions}, Visitas: {$a->visits}, Tiempo invertidos: {$a->timespend}';
$string['total_numbers2'] = 'USUARIO:: {$a->userid}, Página: {$a->page}, Param:{$a->param}, Visitas: {$a->visits}, Tiempo invertido: {$a->timespend}';
$string['total_numbers3'] = '----Fecha: {$a->timecreated}, Monitorear ID: {$a->trackid}, Visitas: {$a->visits}, iempo invertido: {$a->timespend}';
$string['logs_to_process'] = 'Registros por procesar {$a}';
$string['please_wait_or_cancel'] = 'Por favor espere para continuar o <a href="{$a}">Cancelar</a>';
$string['done'] = 'Listo!';
$string['return_to_home'] = 'Volver a Inicio';
$string['importing_logs'] = 'Importar registros';
$string['intelliBoard_migration_tool_info'] = 'La herramienta de migración IntelliBoard se utiliza para migrar los datos históricos de la tabla de registros de Moodle hacia el nuevo formato.Por favor tenga en cuenta que el procedimiento de almacenamiento de los registros de Moodle no cambiará.Una vez completada la migración de los datos históricos hacia el nuevo formato, valores históricos como \'Tiempo invertido\' y \'Visitas\' estarán disponibles para visualización en IntelliBoard.net.';
$string['moodle_logs'] = 'Registros Moodle';
$string['intelliboard_tracking'] = 'Monitoreo IntelliBoard';
$string['intelliboard_logs'] = 'Registros IntelliBoard';
$string['intelliboard_totals'] = 'Totales IntelliBoard';
$string['intelliboard_start_tracking'] = 'Monitoreo de inicio IntelliBoard';
$string['total_values_include'] = 'Los valores totales incluyen sesiones únicas, cursos, visitas, tiempo invertido.';
$string['items_per_query'] = 'Elementos por consulta';
$string['import'] = 'Importar';
$string['log_values_include'] = 'Los valores de registro incluyen registros para cada usuario por día.';
$string['powered_by'] = 'Powered by <a href="https://intelliboard.net/">IntelliBoard.net</a>';
$string['intelliboardnet'] = 'IntelliBoard.net';
$string['visits'] = 'Visitas';
$string['registered'] = 'Registrado';
$string['disabled'] = 'Inhabilitado';
$string['enrolled_completed'] = 'Inscritos: {$a->courses}, Completado: {$a->completed_courses}';
$string['enrolled_users_completed'] = 'Usarios inscritos: {$a->users}, Completado: {$a->completed}';
$string['user_grade_avg'] = '{$a->user} Nota: {$a->grade}, Nota promedio: {$a->avg_grade_site})';
$string['user_visit_avg'] = '{$a->user} Visitas: {$a->visits}, Visitas promedio: {$a->avg_visits_site}';
$string['user_time_avg'] = '{$a->user} Tiempo: {$a->timespend}, Tiempo promedio: {$a->avg_timespend_site}';
$string['more_users'] = 'Más usuarios';
$string['more_courses'] = 'Más cursos';
$string['showing_1_to_10'] = 'Mostrar 1 ta 10';
$string['course_grade'] = 'Nota del curso';
$string['completed_activities_resourses'] = 'Actividades/recursos completados';
$string['save'] = 'Guardar';
$string['help'] = '¿Necesita ayuda?';
$string['in1'] = 'Información general';
$string['in2'] = 'Progreso actual';
$string['in3'] = 'Total Cursos';
$string['in4'] = 'Total Aprendices';
$string['in5'] = 'Notas totales del curso';
$string['in6'] = 'Aprendices completos';
$string['in7'] = 'Aprendices incompletos';
$string['in8'] = 'Nota promedio del aprendiz';
$string['in9'] = 'Correlaciones';
$string['in10'] = 'Utilización de evento';
$string['in11'] = 'Progreso del aprendiz';
$string['in12'] = 'Progreso de calificación';
$string['in13'] = 'Tiempo invertido (%)';
$string['in14'] = '% Progreso';
$string['in15'] = 'Logros Aprendiz';
$string['in16'] = 'Último acceso';
$string['in17'] = 'Tiempo total invertido';
$string['in18'] = 'Visitas totales';
$string['in19'] = 'Nota promedio';
$string['in20'] = 'Volver a Aprendices';
$string['in201'] = 'Volver a Actividades';
$string['in21'] = 'Nota promedio del curso';
$string['in22'] = 'Habilitado';
$string['in23'] = 'No hay aprendices para mostrar.';
$string['in24'] = 'Módulos';
$string['in25'] = 'Nota aprobatoria';
$string['status'] = 'Estado';
$string['course_category'] = 'Categoría del curso';
$string['course_started'] = 'Curso iniciado';
$string['total_time_spent_enrolled_learners'] = 'Tiempo total invertido por aprendices inscritos en curso';
$string['total_visits_enrolled_learners'] = 'Visitas totales por aprendices inscritos en curso';
$string['learners_enrolled'] = 'Aprendiz inscrito';
$string['learning_progress'] = 'Progreso del aprendizaje';
$string['sections'] = 'Secciones';
$string['section'] = 'Sección';
$string['total_activities_resources'] = 'Recursos/actividades totales';
$string['completions'] = 'Logros';
$string['return_to_courses'] = 'Volver a Cursos';
$string['click_link_below_support_pages'] = 'Haga clic en el siguiente link para acceder a las páginas de soporte de IntelliBoard:';
$string['support'] = 'Soporte';
$string['course_name'] = 'Nombre del curso';
$string['enrolled_completed_learners'] = 'Aprendices inscritos/completados';
$string['activities_resources'] = 'Actividades/recursos';
$string['actions'] = 'Acciones';
$string['learner_name'] = 'Nombre Aprendiz';
$string['completed_activities_resources'] = 'Actividades/recursos completados';
$string['a31'] = 'Marcos';
$string['a32'] = 'Planes de aprendizaje';
$string['a33'] = 'Calificado, proficiente';
$string['a34'] = 'Calificado, no proficiente';
$string['a35'] = 'No calificado';
$string['a36'] = 'Descripción de competencia';
$string['a37'] = 'No ha creado una competencia.Por favor contacte a su Administrador de Sistema';
$string['a38'] = 'Cursos vinculados a competencias';
$string['a39'] = 'Competencias totales';
$string['a40'] = 'Cursos vinculados';
$string['no_competency'] = 'Parece que usted no tiene las competencias habilitadas para su sitio.';
$string['a0'] = 'Dashboard Competencias';
$string['a1'] = 'Competencias';
$string['a2'] = 'Proficiencia';
$string['a3'] = 'Actividades asignadas';
$string['a4'] = 'Progreso de Proficiencia';
$string['a5'] = 'Competencias evaluadas';
$string['a6'] = '# de Evidencias';
$string['a7'] = 'Estudiantes calificados';
$string['a8'] = 'Progreso';
$string['a9'] = 'Estudiantes competentes';
$string['a10'] = 'Aprendiz inscrito';
$string['a11'] = 'Lista de competencias asignadas al curso';
$string['a12'] = 'Aprendices inscritos';
$string['a13'] = 'Nombre de la Competencia';
$string['a14'] = 'Creado en';
$string['a15'] = 'Asignado en';
$string['a16'] = 'Proficiente Indiceted';
$string['a17'] = 'Clasificación';
$string['a18'] = 'Competencias Proficiente';
$string['a19'] = 'Fecha Competencias Clasificación';
$string['a20'] = 'Apreciador de Competencias';
$string['a21'] = 'Actividades asignadas';
$string['a22'] = 'Competencia adquirida';
$string['a23'] = 'Competencias calificadas';
$string['a24'] = '# de Evidencias';
$string['a25'] = 'Aprendices completos';
$string['a27'] = ' de ';
$string['a28'] = 'Detalles';
$string['a29'] = 'Habilitar Dashboard Competencias';
$string['a30'] = 'Habilitar reportes de competencias';
$string['a26'] = 'Esta tabla muestra el número de competencias asignadas a un curso, los alumnos que han sido calificados (competentes o no) y los alumnos que han sido designados competentes en la competencia.';
$string["n12"] = "Resumen [Resumen del curso]";
$string["n13"] = "Total de estudiantes";
$string["n14"] = "Widget: Participación de los estudiantes";
$string["n15"] = "Widget: Utilización de la actividad";
$string["n16"] = "Widget: Utilización del tema";
$string["passed"] = "Aprobado";
$string["failed"] = "Fallado";
$string["in26"] = "Participación de los estudiantes";
$string["in27"] = "Total de estudiantes";
$string["in28"] = "Tiempo promedio gastado";
$string["in29"] = "Estudiantes Activos";
$string["in30"] = "Estudiantes inactivos";
$string["in31"] = "Utilización de la actividad";
$string["in32"] = "Tiempo promedio en el período seleccionado";
$string["in33"] = "Utilización del tema";
$string["learners_enrolled_period"] = "Estudiantes matriculados dentro del período seleccionado";
$string["filter_dates"] = "Filtrar fechas:";
$string["select_date"] = "Seleccionar fechas";
$string["course_overview"] = "Resumen del curso";
$string["topics"] = "Temas";
$string["scalesettings"] = "Ajustes de escala";
$string["scales"] = "Habilitar escala personalizada";
$string["scale_raw"] = "Desactivar escala";
$string["scale_total"] = "Grado total";
$string["scale_value"] = "Valor";
$string["scale_percentage"] = "Porcentaje";
$string["s25"] = "Tiempo dedicado a la actividad";
$string["s45"] = "Actividad";
$string["s46"] = "Porcentaje de estudiantes que intentaron";
$string["s47"] = "Tema";
$string["s48"] = "Tiempo dedicado al tema";

$string['passed_on'] = 'Completado (aprobado) {$a}';
$string['failed_on'] = 'Completado (fallado) en {$a}';
$string['completions'] = 'Estado de finalización de la actividad';
$string['completions_completed'] = 'Estado de finalización (completado)';
$string['completions_pass'] = 'Estado de finalización (pasar)';
$string['completions_fail'] = 'Estado de finalización (falla)';
$string['completions_desc'] = '1) El usuario ha completado esta actividad. No se especifica si han pasado o fallado. <br>
2) El usuario ha completado esta actividad con un grado por encima de la calificación de aprobado. <br>
3) El usuario ha completado esta actividad, pero su calificación es menor que la calificación de aprobado.';
