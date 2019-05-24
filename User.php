<?php

namespace Acme;


use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;


class User
{
    private $generator ;
    private $fullName ;
    private $email ;
    private $password ;


    public function __construct($fullName)
    {
        $this->generator =  new ComputerPasswordGenerator();
        $this->fullName = $fullName ;
        $this->email = $this->generateEmailAddress() ;
        $this->password = $this->generatePassword($this->generator);
    }

    private function generatePassword($generator){
        return $password = $generator->generatePassword();
    }

    private function generateEmailAddress($maxLenLocal=8, $maxLenDomain=255){
        $numeric        =  '0123456789';
        $alphabetic     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $extras         = '.-_';
        $all            = $numeric . $alphabetic . $extras;
        $randomString   = '';

        // GENERATE 1ST 4 CHARACTERS OF THE LOCAL-PART
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $alphabetic[rand(0, strlen($alphabetic) - 1)];
        }
        // GENERATE A NUMBER BETWEEN 20 & 60
        $rndNum         = rand(20, $maxLenLocal-4);

        for ($i = 0; $i < $rndNum; $i++) {
            $randomString .= $all[rand(0, strlen($all) - 1)];
        }
        $randomString .= "@";

        $randomString .= "gmail";

        $randomString .= ".";

        $randomString .= "com";


        return $randomString;

    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }




}
