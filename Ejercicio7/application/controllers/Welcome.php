<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('academico'); // Carga el modelo academico
        $this->load->helper('url'); // Carga el helper de URL para usar base_url()
    }

    public function index() {
        $data['estudiantes'] = $this->academico->getAcademico(); // Obtiene los datos de la base de datos usando el modelo
        $this->load->view('welcome_message2', $data); // Pasa los datos a la vista
    }

    public function agregar_estudiante() {
        // Lógica para agregar un estudiante a la base de datos
        if ($this->input->post()) {
            // Recibe los datos del formulario
            $data = array(
                'EstudianteCI' => $this->input->post('EstudianteCI'),
                'Contraseña' => $this->input->post('Contraseña'),
                'Nombre' => $this->input->post('Nombre'),
                'Apellido' => $this->input->post('Apellido'),
                'Genero' => $this->input->post('Genero'),
                'Departamento' => $this->input->post('Departamento'),
                'Semestre' => $this->input->post('Semestre'),
                'Materia' => $this->input->post('Materia'),
                'Nota' => $this->input->post('Nota')
            );

            // Llama al modelo para insertar en la base de datos
            $this->academico->agregarEstudiante($data);

            // Redirige a la página principal después de agregar
            redirect(base_url());
        }


    }

    public function modificar_estudiante($estudianteCI) {
        // Lógica para mostrar el formulario de modificación con los datos del estudiante específico
        $data['estudiante'] = $this->academico->getEstudiantePorCI($estudianteCI);

        if ($this->input->post()) {
            // Recibe los datos del formulario de modificación
            $data = array(
                'EstudianteCI' => $this->input->post('EstudianteCI'),
                'Contraseña' => $this->input->post('Contraseña'),
                'Nombre' => $this->input->post('Nombre'),
                'Apellido' => $this->input->post('Apellido'),
                'Genero' => $this->input->post('Genero'),
                'Departamento' => $this->input->post('Departamento'),
                'Semestre' => $this->input->post('Semestre'),
                'Materia' => $this->input->post('Materia'),
                'Nota' => $this->input->post('Nota')
            );

            // Llama al modelo para actualizar en la base de datos
            $this->academico->actualizarEstudiante($estudianteCI, $data);

            // Redirige a la página principal después de actualizar
            redirect(base_url());
        }

        // Carga la vista del formulario de modificación
        $this->load->view('formulario_modificar_estudiante', $data);
    }

    public function eliminar_estudiante($estudianteCI) {
        // Lógica para eliminar un estudiante de la base de datos
		//$this->db->where('EstudianteCI', $estudianteCI);
        //$this->db->delete('estudiante');
       $this->academico->eliminarEstudiante($estudianteCI);
		
        // Redirige a la página principal después de eliminar
        redirect(base_url());
    }
}
?>