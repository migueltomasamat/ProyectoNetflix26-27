<?php

namespace Matomas\Proyecto1\Class;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class User implements \JsonSerializable
{
    //Propiedades
    private int $id;
    private string $name;
    private string $address;
    private string $phone;
    private \DateTime $birthdate;
    private string $password;
    private string $email;
    private array $usedContent;

    public function __construct(){
        $this->usedContent=[];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): User
    {
        $this->address = $address;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): User
    {
        $this->phone = $phone;
        return $this;
    }

    public function getBirthdate(): \DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTime $birthdate): User
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getUsedContent(): array
    {
        return $this->usedContent;
    }

    public function setUsedContent(array $usedContent): User
    {
        $this->usedContent = $usedContent;
        return $this;
    }


    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }


    public static function createFromArray(array $userData):User{

        $usuario = new User();

        if(isset($userData['id'])){
            //Si el usuario se está leyendo de la BD
            $usuario->setId($userData['id']);
            $usuario->setPassword($userData['password']);
        }else{
            //Estoy intentando crear un usuario nuevo
            //Cifrar la contraseña antes de guardarla en la BD
            $password_cifrado =password_hash($userData['password'],PASSWORD_DEFAULT);
            $usuario->setPassword($password_cifrado);
        }



        //Propiedes que se tienes que insertar
        $usuario->setName($userData['name']);
        $usuario->setEmail($userData['email']);


        //Propiedades que pueden no insertarse
        $usuario->setAddress($userData['address']??'');
        $usuario->setPhone($userData['phone']??'');

        if (isset($userData['birthdate'])){
            $usuario->setBirthdate(
                \DateTime::createFromFormat('Y-m-d',$userData['birthdate']));
        }else{
            $usuario->setBirthdate(
                \DateTime::createFromFormat('Y-m-d','1900-01-01'));
        }


        return $usuario;

    }

    public static function createMultipleUsersFromArray(array $usersData):array{

        $usuarios=[];
        foreach ($usersData as $datosUsuario){
            $usuarios[]=User::createFromArray($datosUsuario);
        }

        return $usuarios;


    }

    public static function validateUserCreation(array $userData):array|true{

        try{
            v::key('name',v::stringType())->
            key('address',v::stringType(),false)->
            key('phone',v::stringType()->length(9,9),false)->
            key('birthdate',v::date('Y-m-d'),false)->
            key('password',v::stringType()->length(2,25))->
            key('email',v::email())->assert($userData);
        }catch (NestedValidationException $e){
            $errores = $e->getMessages();
            return $errores;
        }
        return true;

    }

    public static function validateUserUpdate(array $userData):array|true{

        try{
            v::key('name',v::stringType(),false)->
            key('address',v::stringType(),false)->
            key('phone',v::stringType()->length(9,9),false)->
            key('birthdate',v::date('Y-m-d'),false)->
            key('password',v::stringType()->length(2,25),false)->
            key('email',v::email(),false)->
            key('id',v::intType())->assert($userData);
        }catch (NestedValidationException $e){
            $errores = $e->getMessages();
            return $errores;
        }
        return true;

    }

    public static function updateFromArray
    (User $usuarioAntiguo,array $datosNuevos):User{

        $usuarioAntiguo->setAddress(
            $datosNuevos['address']??$usuarioAntiguo->getAddress());
        $usuarioAntiguo->setPhone($datosNuevos['phone']??$usuarioAntiguo->getPhone());
        $usuarioAntiguo->setEmail($datosNuevos['email']??$usuarioAntiguo->getEmail());
        $usuarioAntiguo->setName($datosNuevos['name']??$usuarioAntiguo->getName());

        //Comprobar que existe la etiqueta password
        if (isset($datosNuevos['password'])){
            $passwordCifrado = password_hash($datosNuevos['password'],
                PASSWORD_DEFAULT);
            $usuarioAntiguo->setPassword($passwordCifrado);
        }

        //Comprobar que existe la etiqueta de birthdate

        if (isset($datosNuevos['birthdate'])){
            $usuarioAntiguo->setBirthdate(
                \DateTime::createFromFormat('Y-m-d',$datosNuevos['birthdate']));
        }

        return $usuarioAntiguo;

    }
}