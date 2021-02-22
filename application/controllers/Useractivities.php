<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useractivities extends CI_Controller {

    public function index() {
        echo "user activities";
        //$this->load->view('frontend/movielist');
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password' , 'Password' , 'min_length[6]|trim');
        $this->form_validation->set_message('min_length', '<div class = "alert alert-danger> %s is too short </div>' );

        if($this->form_validation->run())
        {
            $fullname = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $data = array('name'=>$fullname , 'email'=>$email , 'password'=>md5($password));
            $this->load->model('register');
            $adduser=$this->register->adduser($data,'customer');

            if($adduser)
            {
                redirect("");
            }

        }
        else
        {
            $this->load->view('frontend\main');
        }
    }

    public function login()
    {
        $this->load->model('Loginvt');
        $this->load->model('adminlogin');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result1 = $this->adminlogin->isadminavailable($email,$password);
        $result2 = $this->Loginvt->isuseravailable($email,$password);
        
         if($result1)
        {
            print_r($result1);
            redirect("/adminpanel");
        }
        else if($result2)
        {
            print_r($result2);
            if($result2)
            {
                $this->session->set_userdata('durum',true);
                $this->session->set_userdata('user',$result2);
                
            }
            redirect("");
        } 

        else
        {
            $_SESSION["flash"] = ["type" => "success", "message" => "Login Failed!"];
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("");
    }

    
    public function ticketReserve()
    {
        $customer=$this->session->userdata('user'); 
        $seat_id = $this->input->post('seatid');
        $query = $this->db->set('isFull', 1)->where('id', $seat_id)->update('seat');
        if($query)
        {
            
            $customer_id = $customer->id;
            $seats = $this->db->select('*')->from('seat')->where('id',$seat_id)->get()->row();
            if (isset($seats))
            {
                $session = $this->db->select('*')->from('sessions')->where('id',$seats->session_id)->get()->row();
            }

            if (isset($session))
            {
                $data = array('movie_id'=>$session->movie_id , 'theater_id'=>$session->theater_id , 'customer_id'=>$customer_id , 'room_id'=>$session->room_id , 'seat_id'=>$seat_id , 'session_id'=>$session->id);
                $this->load->model('reserveticket');
                $adduser=$this->reserveticket->addticket($data,'ticket');

                $ticket = $this->db->select('*')->from('ticket')->where('movie_id',$session->movie_id)->where('session_id',$seats->session_id)->where('customer_id',$customer_id)->get()->row();
                if(isset($ticket))
                {
                    redirect('/ticketshow/detay/'.$ticket->id);
                }
            }
        }

    }

    public function rateMovie()
    {
        $rate_value = $this->input->post('rate_value');
        $customer=$this->session->userdata('user'); 
        $array = explode('-',$rate_value);  
        
        $rate = intval($array[0]);
        $movieid = intval($array[1]);

        $data = array(
            'rate_value' => $rate,
            'movie_id' =>  $movieid,
            'customer_id' => $customer->id
        );

        $query = $this->db->select('*')->from('rate')->where('customer_id',$customer->id)->where('movie_id',$movieid)->get()->row();

        if(isset($query))
        {
            $total = 0;
            $query2 = $this->db->select('*')->from('movie')->where('id',$movieid)->get()->row();
            if (isset($query2))
            {
                $count = $query2->rate_count;
                $number = $query2->rate_number;
                $total = ($count * $number) - $query->rate_value + $rate;
                $newnumber = $total/($count);
                $query3 = $this->db->set('rate_count', $count)->where('id', $movieid)->update('movie');
                $query4 = $this->db->set('rate_number', $newnumber)->where('id', $movieid)->update('movie');
                $query5 = $this->db->set('rate_value', $rate)->where('customer_id', $customer->id)->where('movie_id',$movieid)->update('rate');
                redirect('/moviesingle/detay/'.$movieid);
            }
        }
        else
        {
            $total = 0;
            $this->db->insert('rate', $data);
            $query2 = $this->db->select('*')->from('movie')->where('id',$movieid)->get()->row();
            if (isset($query2))
            {
                $count = $query2->rate_count;
                $number = $query2->rate_number;
                $total = ($count * $number) + $rate;
                $newnumber = $total/($count+1);
                $query3 = $this->db->set('rate_count', $count+1)->where('id', $movieid)->update('movie');
                $query4 = $this->db->set('rate_number', $newnumber)->where('id', $movieid)->update('movie');
                redirect('/moviesingle/detay/'.$movieid);
            }

        }






    }


  
}