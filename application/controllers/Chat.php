<?php

class Chat extends CI_Controller
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');
        
        if (($this->session->userdata('level')=="1") || ($this->session->userdata('level')=="2")) {        

            $this->user = $this->db->get_where('tb_account', array('id' => $this->session->userdata['id']), 1)->row();
        }
        else if($this->session->userdata('level')!=="1"){
            redirect('front/login');
        }
        else if($this->session->userdata('level')!=="2"){
            redirect('front/login');
        }    
    }

    public function index()
    {
         if ($this->session->userdata('level')=="1") {
            
        $teman = $this->db->where('id !=', $this->user->id)->get('tb_account');
        $this->load->view('backend/chat_admin', array(
            'teman' => $teman
        ));
        }
        else if($this->session->userdata('level')=="2"){
           $teman = $this->db->where('level = "1"')->get('tb_account');
        $this->load->view('front/component/chat_member', array(
            'teman' => $teman
        )); 
        }
    }

    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('tb_account', array('id' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
            $chats = $this->db
                ->select('chat.*, tb_account.nama_account')
                ->from('chat')
                ->join('tb_account', 'chat.send_by = tb_account.id')
                ->where('(send_by = '. $this->user->id .' AND send_to = '. $friend->id .')')
                ->or_where('(send_to = '. $this->user->id .' AND send_by = '. $friend->id .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();

            $result = array(
                'nama_account' => $friend->nama_account,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage()
    {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id
        ));
    }

   
}