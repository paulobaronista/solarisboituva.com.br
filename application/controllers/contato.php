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

            $this->email->from("solaris@solarisresidencial.com.br","Solaris Residencial & Resort");
            $this->email->to('solaris@solarisresidencial.com.br');
            $this->email->cc('atendimento.solaris3@gmail.com, barbara@spicycomm.com.br, solange.chalet@gmail.com, lmbatalha@hotmail.com, alebertone@spicycomm.com.br, renata@spicycomm.com.br, front.baronista@gmail.com, solaris@solarisresidencial.com.br, leadsboituvasolaris@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            $this->email->send();

            if($this->email->send()){

                $secret = "6LfuPh4hAAAAAOY18qzeyuSXERB71fxs6QCgREoI";
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST['g-recaptcha-response'], false);
                $response = json_decode($response, true);
                // prepare post variables
                $post = [
                    'secret' => $secret,
                    'response' => $_POST['g-recaptcha-response'],
                ];

                $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                $response = curl_exec($ch);
                curl_close($ch);

                //var_dump($response);
                $response = json_decode($response, true);

                // check result
                if(isset($response['success']) && $response['success'] == true){
                    redirect('https://www.solarisresidencial.com.br/contato/obrigado');
                }else{
                    redirect('https://www.solarisresidencial.com.br/contato/fail');
                }
            }else{
                redirect('https://www.solarisresidencial.com.br/contato/fail');
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
