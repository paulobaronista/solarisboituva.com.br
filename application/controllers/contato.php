<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Solaris Residencial & Resort';
        $data['description'] = 'A vida é uma reserva de surpresas incríveis e encantadoras. A poucos minutos de São Paulo, na linda cidade de Boituva.';
        $data['keywords'] = 'condomínio, mcondomínio fechado, loteamento, loteamento fechado, são paulo, boituva, solaris, residencial, resort';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('[Novo Lead] LP - Solaris Residencial & Resort');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("lead@solarisresidencial.com.br","Solaris Residencial & Resort");
            $this->email->to('solange.chalet@gmail.com');
            $this->email->cc('lmbatalha@hotmail.com, alebertone@spicycomm.com.br, renatajsimoes@gmail.com, front.baronista@gmail.com, lead@solarisresidencial.com.br, leadsboituvasolaris@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Solaris Residencial & Resort';
        $data['description'] = 'A vida é uma reserva de surpresas incríveis e encantadoras. A poucos minutos de São Paulo, na linda cidade de Boituva.';
        $data['keywords'] = 'condomínio, mcondomínio fechado, loteamento, loteamento fechado, são paulo, boituva, solaris, residencial, resort';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Solaris Residencial & Resort';
        $data['description'] = 'A vida é uma reserva de surpresas incríveis e encantadoras. A poucos minutos de São Paulo, na linda cidade de Boituva.';
        $data['keywords'] = 'condomínio, mcondomínio fechado, loteamento, loteamento fechado, são paulo, boituva, solaris, residencial, resort';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
