<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Solaris Residencial & Resort';
        $data['description'] = 'A vida é uma reserva de surpresas incríveis e encantadoras. A poucos minutos de São Paulo, na linda cidade de Boituva.';
        $data['keywords'] = 'condomínio, mcondomínio fechado, loteamento, loteamento fechado, são paulo, boituva, solaris, residencial, resort';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade() {
        $data['title'] = 'Solaris Residencial & Resort';
        $data['description'] = 'A vida é uma reserva de surpresas incríveis e encantadoras. A poucos minutos de São Paulo, na linda cidade de Boituva.';
        $data['keywords'] = 'condomínio, mcondomínio fechado, loteamento, loteamento fechado, são paulo, boituva, solaris, residencial, resort';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/home.php */
