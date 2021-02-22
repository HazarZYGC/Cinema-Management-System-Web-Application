<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminActivities extends CI_Controller {

    public function index() {
        echo "user activities";
        //$this->load->view('frontend/movielist');
    }

    public function deleteMovie()
    {
            $moviename = $this->input->post('movie');
            $this->load->model('deleteMovie');
            $deletemovie=$this->deleteMovie->deleteMovie($moviename);
            if($deletemovie)
            {
                redirect("/adminpanel");
            }
    }

    public function addMovie()
    {
        
            $name = $this->input->post('moviename');
            $category = $this->input->post('category');
            $duration= $this->input->post('duration');
            $release = $this->input->post('release_date');
            $director = $this->input->post('director');
            $star1 = $this->input->post('star_1');
            $star2 = $this->input->post('star_2');
            $poster = $this->input->post('poster');

            $data = array('name'=>$name , 'category'=>$category , 'duration'=>$duration , 'release_date'=>$release ,'rate_number'=>0, 'rate_count'=>0 , 'director'=>$director, 'star_1'=>$star1,'star_2'=>$star2,'image'=>$poster);
            $this->load->model('addMovie');
            $adduser=$this->addMovie->addmovie($data,'movie');

            if($adduser)
            {
                redirect("/adminpanel");
            }

    }

    
    public function addSession()
    {
        
        $name = $this->input->post('sessiontime');
        $category = $this->input->post('movieid');
        $duration= $this->input->post('theaterid');
        $room= $this->input->post('roomid');
        $release = $this->input->post('sessiondate');

        $data = array('session_time'=>$name , 'movie_id'=>$category , 'theater_id'=>$duration , 'session_date'=>$release,'room_id'=>$room);
        $this->load->model('addSession');
        $adduser=$this->addSession->addsession($data,'sessions');

        if($adduser)
        {
            $query = $this->db->select_max('id')->from('sessions')->get()->row();
            if(isset($query))
            {
                for($x = 1; $x <6; $x++)
                {
                    $data = array(
                        'seat_no' => 'A'.strval($x),
                        'isFull' => 0,
                        'room_id' =>  $room,
                        'theater_id' => $duration,
                        'session_id' => $query->id
                    );
    
                    $this->db->insert('seat', $data);
                }
    
                for($x = 1; $x <6; $x++)
                {
                    $data = array(
                        'seat_no' => 'B'.strval($x),
                        'isFull' => 0,
                        'room_id' =>  $room,
                        'theater_id' => $duration,
                        'session_id' => $query->id
                    );
    
                    $this->db->insert('seat', $data);
                }
            }
            

            redirect("/adminpanel");
        }

    }

    
    public function updateMovie()
    {
        
        $moviename = $this->input->post('movie');
        redirect('/updateMoviePage/detay'.'/'.$moviename);
        

    }


    public function updateSession()
    {
        
        $sessionid = $this->input->post('session');
        redirect('/updateSessionPage/detay'.'/'.$sessionid);
        

    }

    public function deleteCustomer()
    {
            $customername = $this->input->post('customer');
            $this->load->model('deleteMovie');
            $deletecustomer=$this->deleteMovie->deleteCustomer($customername);
            if($deletecustomer)
            {
                redirect("/adminpanel");
            }
    }

    public function deleteSession()
    {
            $session = $this->input->post('session');
            $this->load->model('deleteMovie');
            $deleteSession=$this->deleteMovie->deleteSession($session);
            if($deleteSession)
            {
                redirect("/adminpanel");
            }
    }

  
}