<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class academico extends CI_Model {
	public function __contruct(){
parent::__contruct();
$this->load->database();

	}

	public function getAcademico(){
		$this->load->database();
		$datos= $this->db->query("select * from estudiante");
		return($datos->result_array());
	}
	
	    public function getEstudiantes() {
			$this->load->database();
        $query = $this->db->get('estudiante');
        return $query->result_array();
    }

    public function getEstudiantePorCI($estudianteCI) {
		$this->load->database();
        $query = $this->db->get_where('estudiante', array('EstudianteCI' => $estudianteCI));
        return $query->row_array();
    }

    public function agregarEstudiante($data) {
		$this->load->database();
        $this->db->insert('estudiante', $data);
    }

    public function actualizarEstudiante($EstudianteCI, $data) {
		$this->load->database();
        $this->db->where('EstudianteCI', $EstudianteCI);
        $this->db->update('estudiante', $data);
    }

    public function eliminarEstudiante($estudianteCI) {
        $this->db->where('EstudianteCI', $estudianteCI);
        $this->db->delete('estudiante');
    }
	
}
