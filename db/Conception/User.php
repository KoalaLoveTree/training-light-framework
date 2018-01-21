<?php

namespace db\conception;

class User
{

    const TABLE_NAME = 'user';

    /**@var int**/
    private $id;

    /**@var string**/
    private $login;

    /**@var string**/
    private $password;

    /**@var string**/
    private $email;

    /**@var string**/
    private $role;

    /**
     * User constructor.
     * @param int $id
     * @param string $login
     * @param string $password
     * @param string $email
     * @param string $role
     */
    public function __construct(string $login, string $password, string $email, string $role)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }



}