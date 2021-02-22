<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateMovie extends CI_Controller {

    public function index() {
        echo "user activities";
        //$this->load->view('frontend/movielist');
    }

    public function updateMovie()
    {
        $id = $this->input->post('movieid');
        $name = $this->input->post('moviename');
        $category = $this->input->post('category');
        $duration= $this->input->post('duration');
        $release = $this->input->post('release_date');
        $director = $this->input->post('director');
        $star1 = $this->input->post('star_1');
        $star2 = $this->input->post('star_2');
        $poster = $this->input->post('poster');

        $data = array('id'=>$id ,'name'=>$name , 'category'=>$category , 'duration'=>$duration , 'release_date'=>$release ,'rate_number'=>0,'director'=>$director, 'star_1'=>$star1,'star_2'=>$star2,'image'=>$poster);
        $this->load->model('changeMovie');
        $updatemovie=$this->changeMovie->changeMovie($data,'movie');

        if($updatemovie)
        {
            redirect("/adminpanel");
        }
    }
    

    public function updateSessions()
    {
        $id = $this->input->post('sessionid');
        $session_time = $this->input->post('sessiontime');
        $movie_id = $this->input->post('movieid');
        $theater_id= $this->input->post('theaterid');
        $session_date = $this->input->post('sessiondate');
        $room_id= $this->input->post('roomid');
        

        $data = array('id'=>$id ,'session_time'=>$session_time , 'movie_id'=>$movie_id , 'theater_id'=>$theater_id , 'session_date'=>$session_date,'room_id'=>$room_id);
        $this->load->model('changeSession');
        $updatesessions=$this->changeSession->changeSession($data,'sessions');

        if($updatesessions)
        {
            redirect("/adminpanel");
        }
    }

   





  
}