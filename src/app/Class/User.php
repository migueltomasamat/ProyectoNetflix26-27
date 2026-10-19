<?php

namespace Matomas\Proyecto1\Class;

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
        $usuario->setId($userData['id']);
        $usuario->setAddress($userData['address']);
        $usuario->setName($userData['name']);
        $usuario->setEmail($userData['email']);
        $usuario->setBirthdate(
            \DateTime::createFromFormat('Y-m-d',
            $userData['birthdate'])
        );
        $usuario->setPhone($userData['phone']);
        $usuario->setPassword($userData['password']);

        return $usuario;

    }

    public static function createMultipleUsersFromArray(array $usersData):array{

        $usuarios=[];
        foreach ($usersData as $datosUsuario){
            $usuarios[]=User::createFromArray($datosUsuario);
        }

        return $usuarios;


    }
}