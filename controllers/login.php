<?php 

/**
* 
*/
class Login extends Controller
{
    
    function __construct()
    {
       parent::__construct();

    }
    function index() 
    {    
        $this->view->title = 'Login';
        
        
        $this->view->render('login/index');
        
    }
    
    function run()
    {
        $this->model->run();
    }

    // 

    public function userlogin()
    {
        $email=htmlspecialchars($_POST['mail']);
        $passwd=$_POST['passwd'];

        //adatbázis esetén sha256-os hash-elést szoktam használni
      
        if($email=="admin@admin.com" && $passwd="admin1234")
        {
            $_SESSION['mail']=$email;
           header("Location: ../index");
        }
        else
            { echo "hibás felhasználó vagy jelszó";}
   }

   // elvégzi a kijelentkeztetést, megsemmisíti a session-t és visszairányít a kezdőoldalra

   function logout()
   {
    session_destroy();
    header("Location:../index");
   }



    
}