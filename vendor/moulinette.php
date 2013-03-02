<?php 

/** This class is used to access moulinette and retrieve information **/

class Moulinette {
  
  private $admin_password = "yunodev";
  private $working_directory = "/var/www/yunohost/admin/moulinette/";

  
  public function execute($comm, $arg = "", $args = array()){
   
   $command = "./parse_args ";
   $command .= $comm." ".$arg;
   $command .= " --admin-password ".$this->admin_password;
   
   $olddir = getcwd();
   chdir($this->working_directory);
   exec($command,$res,$code);

   if($code == 0){
     return array("return" => true, "message" => $this->process($res[0]));
   } else {
     return array("return" => false, "error" => $code);
   }

  }
  
  private function process($res){
    return json_decode($res);
  }


}


?>
