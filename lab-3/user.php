<?php
Interface Account 
{
    public function register ($pdo);
    public function login($pdo);
    public function changePassword($pdo);
    public function logout ($pdo);
}
class User implements Account 
{
    //properties
    protected $email; 
    protected $password;  
    protected $fullName;
    protected $city;
    protected $_SESSION;  
    
    //email setter
    public function setEmail ($email)
    {
        $this->email = $email;
    }
    //email getter
    public function getEmail ()
    {    
        return $this->email;   
    }
    //password setter
    public function setPassword ($password)
    {
        $this->password = $password;
    }
    //password getter
    public function getPassword ()
    {    
        return $this->password;   
    }
    //full name setter
    public function setFullName ($name)
    {
        $this->fullName = $name;
    }    
    //full name getter      
    public function getFullName ()
    {    
        return $this->fullName;   
    }
    //city name setter
    public function setCityofResidence($city)
    {
        $this->city = $city;
    } 
    //city name getter
    public function getCityofResidence ()
    {
        return $this->city;
    } 
    //image setter
    public function setImage($Image)
    {
        $this->image = $Image;
    } 
    //image getter
    public function getImage ()
    {
        return $this->image;
    }
     public function setPassword1 ($Pass1)
    {
        $this->password = $Pass1;
    }
    //password getter
    public function getPassword1 ()
    {    
        return $this->password;   
    }
    
   

      
    /**        
    * * Create a new user        
    * @param Object PDO Database connection handle        
    * @return String success or failure message        
    */ 
    public function register ($pdo)
    {
        $passwordHash = password_hash($this->getPassword(),PASSWORD_DEFAULT);
        try 
        {
            $stmt = $pdo->prepare ('INSERT INTO users (fullname,email,password,residence,profile) VALUES(?,?,?,?,?)');
            $stmt->execute([$this->getFullName(),$this->getEmail(),$passwordHash,$this->getCityofResidence(),$this->getImage()]);
             echo '<script>alert("Account created")</script>';               
                echo '<script>window.location.href="IAPreg.php"</script>';                

        } 
        catch (PDOException $e) 
        {            	
            return $e->getMessage();            
        }                    
    }        
    /**        
     * * Check if a user entered a correct username and password        
     * * @param Object PDO Database connection handle        
     * * @return String success or failure message        
     * */        
    public function login ($pdo)
    {            
        try 
        {   
                         
            $stmt = $pdo->prepare("SELECT password FROM users WHERE email=?");                
            $stmt->execute([$this->getEmail()]);                
            $row = $stmt->fetch();              
            if($row == null)
            {    
                echo '<script>alert("Account does not exist")</script>';            	
                echo '<script>window.location.href="IAPlogin.php"</script>';                
            }                
            if (password_verify($this->getPassword(),$row['password']))
            { 
                
                echo '<script>window.location.href="changePassword.php"</script>';  
                               
            } 
            else
            { 
                echo '<script>alert("Email or password is not correct")</script>';              
                echo '<script>window.location.href="IAPlogin.php"</script>';
            } 
        } 
        catch (PDOException $e) 
        {            	
            return $e->getMessage();            
        }        
    }
    
    

    public function changePassword ($pdo)
    {
       try 
        {
            include_once 'processLogin.php';               
            $stmt = $pdo->prepare("SELECT password FROM users where email = '".$_SESSION["email"]."'");
            $stmt->execute();                 
            $row = $stmt->fetch();              
            if(empty($this->getPassword()) || empty($this->getPass1()))
            {
                  echo '<script>alert("insert password")</script>';
                  echo '<script>location.href="changePassword.php"</script>';
            }
           
            if (password_verify($this->getPassword(),$row['password']))
            {   
                $passwordHash1 = password_hash($this->getPass1(),PASSWORD_DEFAULT);
                try 
                {
                    $stmt1 = $pdo->prepare ("UPDATE users set password = '".$passwordHash1."' where email = '".$_SESSION["email"]."'");
                    $stmt1->execute();
                    
                    echo '<script>alert("Password changed successsfully!!")</script>';
                    echo '<script>location.href="changePassword.php"</script>';
                } 
                catch (PDOException $e) 
                {            	
                    return $e->getMessage();            
                } 	
                               
            }
            else
            {
                return "Current Password is not Correct!!";

            }

            
        } 
        catch (PDOException $e) 
        {            	
            return $e->getMessage();            
        }                    
    }
    public function logout ($pdo)
    {

    }   
}



?>