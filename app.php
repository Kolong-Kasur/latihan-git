<?php
$header = "Welcome to my Website!";

$database = array(
    "user" => array( 
        "user1" => array(
            "id" => 1,
            "name" => "Faisal",
            "email" => "faisal04@gmail.com",
            "phone_number" => "087698657545",
        ),
        "user2"  => array(
            "id" => 2,
            "name" => "John",
            "email" => "john12@gmail.com",
            "phone_number"=> "087655443143",
        ),
        "user3" => array(
            "id" => 3,
            "name" => "Smith",
            "email" => "smith20@gmail.com",
            "phone_number" => "087898764356",
        ),
    ),
);

class User {
    private int $id;
    private string $name;
    private string $email;
    private string $phone_number;

    public function __construct($id, $name, $email, $phone_number)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    public function get_id() {
        $user_id = $this->id;
        $is_user_id_an_integer = is_integer($user_id);

        if ($is_user_id_an_integer) {
            return $this->id;
        } else {
            $errMsg = "Sorry, user ID must be an integer \nchange your argument in User class";
            echo $errMsg;
        }
    }

    public function get_name() {
        $user_name = $this->name;
        $is_username_a_string = is_string($user_name);

        if ($is_username_a_string) {
            return $this->name;
        } else {
            $errMsg = "Sorry, user name must be a string \nchange your argument in User class";
            echo $errMsg;
        }
    }

    public function get_email() {
        $user_email = $this->email;
        $is_user_email_a_string = is_string($user_email);

        if ($is_user_email_a_string) {
            return $this->email;
        } else {
            $errMsg = "Sorry, user email must be a string \nchange your argument in User class";
            echo $errMsg;
        }
    }

    public function get_phone_number() {
        $user_phone_number = $this->phone_number;
        $is_user_phone_number_a_string = is_string($user_phone_number);

        if ($is_user_phone_number_a_string) {
            return $this->phone_number;
        } else {
            $errMsg = "Sorry, user phone number must be a string \nchange your argument in User class";
            echo $errMsg;
        }
    }
}

$user1 = new User(
    $database["user"]["user1"]["id"],
    $database["user"]["user1"]["name"],
    $database["user"]["user1"]["name"],
    $database["user"]["user1"]["phone_number"]
);

$user2 = new User(
    $database["user"]["user2"]["id"],
    $database["user"]["user2"]["name"],
    $database["user"]["user2"]["email"],
    $database["user"]["user2"]["phone_number"],
);

$user3 = new User(
    $database["user"]["user3"]["id"],
    $database["user"]["user3"]["name"],
    $database["user"]["user3"]["email"],
    $database["user"]["user3"]["phone_number"],
);
?>