<?php
class UserManager {
    private $db;

    //Constructor that take a db in parameter
	public function __construct($db) {
		$this->db = $db;
	}

    //Return the user by his email and his password
    public function login($email, $password) {
        $email = htmlspecialchars($email);
        $password = sha1(htmlspecialchars($password));

        $req = $this->db->prepare(
	    'SELECT *
        FROM user
        WHERE email=:email AND password=:password'
	    );

        $req->execute(
            array(
                'email' => $email,
                'password' => $password,
            )
        );
        $user = $req->fetch(); //get the first user

        return $user;
    }

    //Create an user in the db
    public function create($user) {
       $lastName = htmlspecialchars($user->getLastName());
       $firstName = htmlspecialchars($user->getFirstName());
       $email = htmlspecialchars($user->getEmail());
       $address = htmlspecialchars($user->getAddress());
       $cp = htmlspecialchars($user->getPostalCode());
       $city = htmlspecialchars($user->getCity());
       $password = htmlspecialchars($user->getPassword());


        $req = $this->db->prepare(
        'INSERT INTO user (lastName, firstName, email, address, postalCode, city, password, admin)
        VALUES ( :lastName, :firstName, :email, :address, :cp, :city, :password, 0 )'
        );

        $req->execute(
            array(
                'lastName' => $lastName,
                'firstName' => $firstName,
                'email' => $email,
                'address' => $address,
                'cp' => $cp,
                'city' => $city ,
                'password' => sha1($password)
            )
        );
    }

    //Find every users in the db
    public function findAll() {
        $users = array();

        $req = $this->db->prepare(
        'SELECT *
        FROM user');

        $req->execute();
        $users = $req->fetchAll();//get all

        return $users;
    }

    //Count the number of users
    public function countAll() {
        $req = $this->db->prepare(
        'SELECT COUNT(*)
        FROM user');

        $req->execute();
        $result = $req->fetch();

        return $result;
    }

    //Find one user by his id
    public function findOne($id) {
        $user = new User;

        $req = $this->db->prepare(
	    'SELECT *
        FROM user
        WHERE id=:id');

        $req->execute(
            array(
                'id' => $id,
            )
        );

        $user = $req->fetch(); //get the first user

        return $user;
    }

    //Find a user by his mail
    public function findByEmail($email) {
        $req = $this->db->prepare(
        'SELECT *
        FROM user
        WHERE email=:email');

        $req->execute(
            array(
                'email' => htmlspecialchars($email),
            )
        );

        $user = $req->fetch(); //get the first user

        return $user;
    }

    //Update an user of the db
    public function update($user) {
        $lastName = htmlspecialchars($user->getLastName());
        $firstName = htmlspecialchars($user->getFirstName());
        $email = htmlspecialchars($user->getEmail());
        $address = htmlspecialchars($user->getAddress());
        $cp = htmlspecialchars($user->getPostalCode());
        $city = htmlspecialchars($user->getCity());
        $password = htmlspecialchars($user->getPassword());

        $req = $this->db->prepare(
	    'UPDATE user
        SET lastName = :lastname,
            firstName = :firstName,
            email = :email,
            address = :address,
            cp = :cp,
            city = :city,
            password = :password
        WHERE id = :id');

        $req->execute(
            array(
                'lastName' => $lastName,
                'firstName' => $firstName,
                'email' => $email,
                'address' => $address,
                'cp' => $cp,
                'city' => $city ,
                'password' => sha1($password),
                'id' => $user->getId()
            )
        );
    }

    //Delete an user of the db
    public function delete($user) {
        $req = $this->db->prepare(
        'DELETE FROM user
        WHERE id = :id');

        $req->execute(
            array('id' => $user->getId())
        );
    }

}
