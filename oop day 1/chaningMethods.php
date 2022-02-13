<?php 

class Message {
    public $text;

    public function openChat()
    {
        echo "open chat <br>";
        return $this; // refer to current object inside class scope
    }

    public function send()
    {
        echo $this->text .'<br>'; 
        return $this;
    }

    public function closeChat()
    {
        echo "close chat <br>";
        return $this;
    }
}

$message = new Message;
$message->text = "Hello , How Are You ?";
$message->openChat()->send()->closeChat();


$message2 = new Message;
$message2->text = "Fine , thank you";
$message2->openChat()->send()->closeChat();

?>