<?php 

class Catalogue {

	protected $id;
    public $nom;
    public $type;
    public $category;

	protected function createVideo()
	{
		 
	}

    public function readVideo()
	{

	}

    protected function updateVideo()
	{
		
	}

    protected function deleteVideo()
	{
		
	}

    public function listVideo()
	{
		
	}

    public function listRecommandation()
	{
		
	}

    public function search()
	{
		
	}

    public function getTree()
	{
		
	}
}

class VideoPlayer {

	protected $idVideo;

	public function play()
	{
		
	}

    public function pause()
	{
		
	}

    public function volumeUp()
	{
		
	}

    public function volumeDown()
	{
		
	}

    public function timeUp()
	{
		
	}

    public function timeDown()
	{
		
	}

    public function qualityVideo()
	{
		
	}

    public function subtitle()
	{
		
	}	
    
    public function videoLanguage()
	{
		
	}
}

class Historical {

	protected $idVideo;

	public function listHistorical()
	{
		
	}

    public function continu()
	{
		
	}	
}

class Users {

	protected $id;
    protected $nom;
    protected $abonement;
    protected $myList;

	protected function createUsers()
	{
		
	}

    protected function readUsers()
	{
		
	}

    protected function updateUsers()
	{
		
	}

    protected function deleteUsers()
	{
		
	}

    protected function listUsers()
	{
		
	}

    protected function searchUsers()
	{
		
	}	
    
    public function createMyList()
	{
		
	}

    public function readMyList()
	{
		
	}

    public function updateMyList()
	{
		
	}

    public function deleteMyList()
	{
		
	}

    public function listMyList()
	{
		
	}

    public function searchMyList()
	{
		
	}

    public function updateAbonement()
	{
		
	}

    public function createCommentery()
	{
		
	}

    public function readCommentery()
	{
		
	}

    public function updateCommentery()
	{
		
	}

    public function deleteCommentery()
	{
		
	}
}

class Abonement {

	protected $idAbonement;
	protected $idUsers;

	protected function createAbonement()
	{
		
	}

    public function readAbonement()
	{
		
	}

    protected function updateAbonement()
	{
		
	}

    protected function deleteAbonement()
	{
		
	}

    protected function listAbonement()
	{
		
	}	
    
    protected function limit()
	{
		
	}
}

class Payement {

	protected $idAbonement;
	protected $idUsers;


	protected function createPayement()
	{
		
	}

    protected function readPayement()
	{
		
	}

    protected function updatePayement()
	{
		
	}

    protected function deletePayement()
	{
		
	}

    protected function listPayement()
	{
		
	}	

    public function historical()
    {

    }
}